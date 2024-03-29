<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Doctor;
use App\Entity\Pharmacy;
use App\Entity\Laboratory;
use App\Repository\DoctorRepository;
use App\Repository\PharmacyRepository;
use App\Repository\LaboratoryRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountProController extends AbstractController
{


    public function __construct(){

    }
    /**
     * @Route("/praticien/{slug}", name="show_doctor")
     */
    public function showAccountDoctor(Doctor $doctor)
    {
            return $this->render('show_account/show_account_doctor.html.twig', [
            'doctor'=>$doctor, 
        ]);
    }
     /**
     * @Route("/pharmacie/{slug}", name="show_pharmacy")
     */

    public function showAccountPharmarcy(Pharmacy $pharmacy)
    {
        
        return $this->render('show_account/show_account_pharmacy.html.twig', [
            'pharmacy'=>$pharmacy, 
        ]);
    }
    /**
     * @Route("/laboratoire/{slug}", name="show_laboratoire")
     */
    public function showAccountLaboratory(Laboratory $laboratory)
    {
        return $this->render('show_account/show_account_laboratory.html.twig', [
            'laboratory'=>$laboratory, 
        ]);
    }
}
