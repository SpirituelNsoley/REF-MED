<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Form\SearchDoctorType;
use App\Form\SearchDrugsType;
use App\Form\SearchLabotaryType;
use App\Repository\DoctorRepository;
use App\Repository\LaboratoryRepository;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\PharmacyRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class MainREFMEDController extends AbstractController
{
     /**
     * 
     *
     * @var PaginatorInterface
     */
    private $paginator;

    /**
     * @var DoctorRepository
     */

    private $doctorRepository;

    /**
     * @var LaboratoryRepository
     */

    private $laboratoryRepository;
    /**
     * @var PharmacyRepository
     */
    private $pharmacyRepository;

    public function __construct(DoctorRepository $doctorRepository, PharmacyRepository $pharmacyRepository, LaboratoryRepository $laboratoryRepository){
        $this->doctorRepository=$doctorRepository;
        $this->pharmacyRepository=$pharmacyRepository;
        $this->laboratoryRepository=$laboratoryRepository;
    }
    /**
     * @Route("/", name="Home")
     */
    public function index(Request $request)
    {
        $formSearchDoctor = $this->createForm(SearchDoctorType::class);
        $formSearchLaboratory = $this->createForm(SearchLabotaryType::class);
        $formSearchDrugs = $this->createForm(SearchDrugsType::class);
        $formSearchDoctor->handleRequest($request);
        if($formSearchDoctor->isSubmitted() && $formSearchDoctor->isValid()){
           $data=$formSearchDoctor->getData();     
           $doctors=null;
           $distance=null;    
           if($data['lat'] == null or $data['lon'] == null)
           {
               $entityManager = $this->getDoctrine()->getManager();
               $sql="SELECT doctor.id, users.email,doctor.last_name, doctor.slug, doctor.picture_profil, doctor.tarif_min, doctor.tarif_max,
                location.name_location, location.latitude, location.longitude, 
               ( 6371 * acos( cos( radians( 14.6937) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(-17.44406) ) + sin( radians(14.6937) ) * sin( radians( latitude ) ) ) ) AS distance ,profession.profession_name AS profession
                FROM doctor  INNER JOIN users INNER JOIN profession INNER JOIN location
                 ON doctor.profession_id = profession.id AND doctor.location_id = location.id AND users.id = doctor.id 
                 WHERE profession.profession_name = '{$data['profession']}' HAVING distance < {$data['distance']} ORDER BY distance";
               $result=$entityManager->getConnection()->prepare($sql);
               $result->execute();
               while ($row=$result->fetch()) {
                   $doctors[]= $this->doctorRepository->find($row['id']);
                   $distance[]=$row['distance'];
                   

               }
               
           }
           else {
            $entityManager = $this->getDoctrine()->getManager();
            $sql="SELECT doctor.id, users.email,doctor.last_name, doctor.slug, doctor.picture_profil, doctor.tarif_min, doctor.tarif_max,
             location.name_location, location.latitude, location.longitude, 
            ( 6371 * acos( cos( radians( {$data['lat']}) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians({$data['lon']}) ) + sin( radians({$data['lat']}) ) * sin( radians( latitude ) ) ) ) AS distance ,profession.profession_name AS profession
             FROM doctor  INNER JOIN users INNER JOIN profession INNER JOIN location
              ON doctor.profession_id = profession.id AND doctor.location_id = location.id AND users.id = doctor.id 
              WHERE profession.profession_name = '{$data['profession']}' HAVING distance < {$data['distance']} ORDER BY distance";
            $result=$entityManager->getConnection()->prepare($sql);
            $result->execute();
            while ($row=$result->fetch()) {
                $doctors[]= $this->doctorRepository->find($row['id']);
                $distance[]=$row['distance'];
            }
               
           }
           $doctors=$this->paginator->paginate($doctors, 
           $request->query->getInt('page', 1), 10);

           return $this->render('main_refmed/result_doctor_search.html.twig', [
            'doctors' => $doctors,
            'distance' => $distance,
            'formDoctor' => $formSearchDoctor->createView(),
            ]);
            
        }
        return $this->render('main_refmed/index.html.twig', [
            'formDoctor' => $formSearchDoctor->createView(),
            'formLaboratory' => $formSearchLaboratory->createView(),
            'formDrugs' => $formSearchDrugs->createView(),

        ]);
    }
     /**
     * @Route("/services", name="services")
     */
    public function service()
    {
        return $this->render('main_refmed/services.html.twig', [
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('main_refmed/contact.html.twig', [
        ]);
    }

        /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('main_refmed/about.html.twig', [
        ]);
    }

}
