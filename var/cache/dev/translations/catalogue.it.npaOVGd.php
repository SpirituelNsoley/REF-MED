<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('it', array (
  'validators' => 
  array (
    'This value should be false.' => 'Questo valore dovrebbe essere falso.',
    'This value should be true.' => 'Questo valore dovrebbe essere vero.',
    'This value should be of type {{ type }}.' => 'Questo valore dovrebbe essere di tipo {{ type }}.',
    'This value should be blank.' => 'Questo valore dovrebbe essere vuoto.',
    'The value you selected is not a valid choice.' => 'Questo valore dovrebbe essere una delle opzioni disponibili.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Si dovrebbe selezionare almeno {{ limit }} opzione.|Si dovrebbero selezionare almeno {{ limit }} opzioni.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Si dovrebbe selezionare al massimo {{ limit }} opzione.|Si dovrebbero selezionare al massimo {{ limit }} opzioni.',
    'One or more of the given values is invalid.' => 'Uno o più valori inseriti non sono validi.',
    'This field was not expected.' => 'Questo campo non è stato previsto.',
    'This field is missing.' => 'Questo campo è mancante.',
    'This value is not a valid date.' => 'Questo valore non è una data valida.',
    'This value is not a valid datetime.' => 'Questo valore non è una data e ora valida.',
    'This value is not a valid email address.' => 'Questo valore non è un indirizzo email valido.',
    'The file could not be found.' => 'Non è stato possibile trovare il file.',
    'The file is not readable.' => 'Il file non è leggibile.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Il file è troppo grande ({{ size }} {{ suffix }}). La dimensione massima consentita è {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Il mime type del file non è valido ({{ type }}). I tipi permessi sono {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Questo valore dovrebbe essere {{ limit }} o inferiore.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Questo valore è troppo lungo. Dovrebbe essere al massimo di {{ limit }} carattere.|Questo valore è troppo lungo. Dovrebbe essere al massimo di {{ limit }} caratteri.',
    'This value should be {{ limit }} or more.' => 'Questo valore dovrebbe essere {{ limit }} o superiore.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Questo valore è troppo corto. Dovrebbe essere almeno di {{ limit }} carattere.|Questo valore è troppo corto. Dovrebbe essere almeno di {{ limit }} caratteri.',
    'This value should not be blank.' => 'Questo valore non dovrebbe essere vuoto.',
    'This value should not be null.' => 'Questo valore non dovrebbe essere nullo.',
    'This value should be null.' => 'Questo valore dovrebbe essere nullo.',
    'This value is not valid.' => 'Questo valore non è valido.',
    'This value is not a valid time.' => 'Questo valore non è un\'ora valida.',
    'This value is not a valid URL.' => 'Questo valore non è un URL valido.',
    'The two values should be equal.' => 'I due valori dovrebbero essere uguali.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Il file è troppo grande. La dimensione massima è {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Il file è troppo grande.',
    'The file could not be uploaded.' => 'Il file non può essere caricato.',
    'This value should be a valid number.' => 'Questo valore dovrebbe essere un numero.',
    'This file is not a valid image.' => 'Questo file non è una immagine valida.',
    'This is not a valid IP address.' => 'Questo valore non è un indirizzo IP valido.',
    'This value is not a valid language.' => 'Questo valore non è una lingua valida.',
    'This value is not a valid locale.' => 'Questo valore non è una impostazione regionale valida.',
    'This value is not a valid country.' => 'Questo valore non è una nazione valida.',
    'This value is already used.' => 'Questo valore è già stato utilizzato.',
    'The size of the image could not be detected.' => 'La dimensione dell\'immagine non può essere determinata.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La larghezza dell\'immagine è troppo grande ({{ width }}px). La larghezza massima è di {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La larghezza dell\'immagine è troppo piccola ({{ width }}px). La larghezza minima è di {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'L\'altezza dell\'immagine è troppo grande ({{ height }}px). L\'altezza massima è di {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'L\'altezza dell\'immagine è troppo piccola ({{ height }}px). L\'altezza minima è di {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Questo valore dovrebbe essere la password attuale dell\'utente.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Questo valore dovrebbe contenere esattamente {{ limit }} carattere.|Questo valore dovrebbe contenere esattamente {{ limit }} caratteri.',
    'The file was only partially uploaded.' => 'Il file è stato caricato solo parzialmente.',
    'No file was uploaded.' => 'Nessun file è stato caricato.',
    'No temporary folder was configured in php.ini.' => 'Nessuna cartella temporanea è stata configurata nel php.ini.',
    'Cannot write temporary file to disk.' => 'Impossibile scrivere il file temporaneo sul disco.',
    'A PHP extension caused the upload to fail.' => 'Un\'estensione PHP ha causato il fallimento del caricamento.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Questa collezione dovrebbe contenere almeno {{ limit }} elemento.|Questa collezione dovrebbe contenere almeno {{ limit }} elementi.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Questa collezione dovrebbe contenere massimo {{ limit }} elemento.|Questa collezione dovrebbe contenere massimo {{ limit }} elementi.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Questa collezione dovrebbe contenere esattamente {{ limit }} elemento.|Questa collezione dovrebbe contenere esattamente {{ limit }} elementi.',
    'Invalid card number.' => 'Numero di carta non valido.',
    'Unsupported card type or invalid card number.' => 'Tipo di carta non supportato o numero non valido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Questo valore non è un IBAN (International Bank Account Number) valido.',
    'This value is not a valid ISBN-10.' => 'Questo valore non è un codice ISBN-10 valido.',
    'This value is not a valid ISBN-13.' => 'Questo valore non è un codice ISBN-13 valido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Questo valore non è un codice ISBN-10 o ISBN-13 valido.',
    'This value is not a valid ISSN.' => 'Questo valore non è un codice ISSN valido.',
    'This value is not a valid currency.' => 'Questo valore non è una valuta valida.',
    'This value should be equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere uguale a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Questo valore dovrebbe essere maggiore di {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere maggiore o uguale a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Questo valore dovrebbe essere identico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Questo valore dovrebbe essere minore di {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere minore o uguale a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere diverso da {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Questo valore dovrebbe essere diverso da {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Il rapporto di aspetto dell\'immagine è troppo grande ({{ ratio }}). Il rapporto massimo consentito è {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Il rapporto di aspetto dell\'immagine è troppo piccolo ({{ ratio }}). Il rapporto minimo consentito è {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'immagine è quadrata ({{ width }}x{{ height }}px). Le immagini quadrate non sono consentite.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'immagine è orizzontale ({{ width }}x{{ height }}px). Le immagini orizzontali non sono consentite.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'immagine è verticale ({{ width }}x{{ height }}px). Le immagini verticali non sono consentite.',
    'An empty file is not allowed.' => 'Un file vuoto non è consentito.',
    'The host could not be resolved.' => 'L\'host non può essere risolto.',
    'This value does not match the expected {{ charset }} charset.' => 'Questo valore non corrisponde al charset {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Questo valore non è un codice BIC valido.',
    'Error' => 'Errore',
    'This is not a valid UUID.' => 'Questo non è un UUID valido.',
    'This value should be a multiple of {{ compared_value }}.' => 'Questo valore dovrebbe essere un multiplo di {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Questo codice identificativo bancario (BIC) non è associato all\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Questo valore dovrebbe essere un JSON valido.',
    'This collection should contain only unique elements.' => 'Questa collezione dovrebbe contenere solo elementi unici.',
    'This value should be positive.' => 'Questo valore dovrebbe essere positivo.',
    'This value should be either positive or zero.' => 'Questo valore dovrebbe essere positivo oppure zero.',
    'This value should be negative.' => 'Questo valore dovrebbe essere negativo.',
    'This value should be either negative or zero.' => 'Questo valore dovrebbe essere negativo oppure zero.',
    'This value is not a valid timezone.' => 'Questo valore non è un fuso orario valido.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Questa password è trapelata durante una compromissione di dati, non deve essere usata. Si prega di usare una password diversa.',
    'This value should be between {{ min }} and {{ max }}.' => 'Questo valore dovrebbe essere compreso tra {{ min }} e {{ max }}.',
    'This form should not contain extra fields.' => 'Questo form non dovrebbe contenere nessun campo extra.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Il file caricato è troppo grande. Per favore caricare un file più piccolo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Il token CSRF non è valido. Provare a reinviare il form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Si è verificato un errore di autenticazione.',
    'Authentication credentials could not be found.' => 'Impossibile trovare le credenziali di autenticazione.',
    'Authentication request could not be processed due to a system problem.' => 'La richiesta di autenticazione non può essere processata a causa di un errore di sistema.',
    'Invalid credentials.' => 'Credenziali non valide.',
    'Cookie has already been used by someone else.' => 'Il cookie è già stato usato da qualcun altro.',
    'Not privileged to request the resource.' => 'Non hai i privilegi per richiedere questa risorsa.',
    'Invalid CSRF token.' => 'CSRF token non valido.',
    'No authentication provider found to support the authentication token.' => 'Non è stato trovato un valido fornitore di autenticazione per supportare il token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Nessuna sessione disponibile, può essere scaduta o i cookie non sono abilitati.',
    'No token could be found.' => 'Nessun token trovato.',
    'Username could not be found.' => 'Username non trovato.',
    'Account has expired.' => 'Account scaduto.',
    'Credentials have expired.' => 'Credenziali scadute.',
    'Account is disabled.' => 'L\'account è disabilitato.',
    'Account is locked.' => 'L\'account è bloccato.',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'Scaricare',
    'form.label.delete' => 'Rimuovere ?',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Crea %entity_label%',
    'show.page_title' => '%entity_label% (#%entity_id%)',
    'edit.page_title' => 'Modifica %entity_label% (#%entity_id%)',
    'list.page_title' => '%entity_label%',
    'search.page_title' => '{0} Nessun risultato|{1} <strong>1</strong> risultato|]1,Inf] <strong>%count%</strong> risultati',
    'search.no_results' => 'Nessun risultato trovato.',
    'list.row_actions' => 'Azioni',
    'paginator.first' => 'Prima',
    'paginator.previous' => 'Precedente',
    'paginator.next' => 'Successiva',
    'paginator.last' => 'Ultima',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> di <strong>%results%</strong>',
    'paginator.results' => '{0} Nessun risultato|{1} <strong>1</strong> risultato|]1,Inf] <strong>%count%</strong> risultati',
    'label.true' => 'Si',
    'label.false' => 'No',
    'label.empty' => 'Vuoto',
    'label.null' => 'Null',
    'label.nullable_field' => 'Lascia vuoto',
    'label.object' => 'Oggetto PHP',
    'label.inaccessible' => 'Inaccessibile',
    'label.inaccessible.explanation' => 'Il metodo getter non esiste per questo campo o la proprietà non è pubblica',
    'label.form.empty_value' => 'Nessun valore',
    'user.logged_in_as' => 'Connesso come',
    'user.unnamed' => 'Utente senza nome',
    'user.anonymous' => 'Utente anonimo',
    'user.signout' => 'Esci',
    'user.exit_impersonation' => 'Esci dall\'impersonazione',
    'delete_modal.title' => 'Vuoi eliminare questo elemento?',
    'delete_modal.content' => 'Questa azione è irreversibile.',
    'delete_modal.action' => 'Cancella',
    'action.add_new_item' => 'Aggiungi un nuovo elemento',
    'action.remove_item' => 'Rimuovi l\'elemento',
    'action.choose_file' => 'Scegli file',
    'errors' => 'Errore|Errori',
    'form.are_you_sure' => 'Non hai salvato le modifiche apportate su questo modulo.',
    'form.tab.error_badge_title' => 'Un campo non è valido|%count% campi non sono validi',
    'show.remaining_items' => '{1} è presente un altro elemento non mostrato in questo elenco|]1,Inf] sono presenti altri %count% elementi non mostrati in questo elenco',
    'exception.entity_not_found' => 'Questo elemento non è più disponibile.',
    'exception.entity_remove' => 'L\'elemento selezionato non può essere cancellato perché altri elementi dipendono da questo.',
    'exception.forbidden_action' => 'L\'azione richiesta non può essere eseguita su questo elemento.',
    'exception.no_entities_configured' => 'L\'applicazione non è configurata correttamente.',
    'exception.undefined_entity' => 'L\'applicazione non è configurata correttamente per questo tipo di elementi.',
    'login.username' => 'Nome utente',
    'login.password' => 'Password',
    'login.sign_in' => 'Accedi',
    'filter.title' => 'Filtri',
    'filter.button.clear' => 'Cancella',
    'filter.button.apply' => 'Applica',
    'filter.label.is_equal_to' => 'è uguale a',
    'filter.label.is_not_equal_to' => 'non è uguale a',
    'filter.label.is_greater_than' => 'è maggiore di',
    'filter.label.is_greater_than_or_equal_to' => 'è maggiore o uguale di',
    'filter.label.is_less_than' => 'è minore di',
    'filter.label.is_less_than_or_equal_to' => 'è minore o uguale di',
    'filter.label.contains' => 'contiene',
    'filter.label.not_contains' => 'non contiene',
    'filter.label.starts_with' => 'inizia con',
    'filter.label.ends_with' => 'finisce con',
    'filter.label.exactly' => 'esattamente',
    'filter.label.not_exactly' => 'non esattamente',
    'filter.label.is_same' => 'è uguale',
    'filter.label.is_not_same' => 'non è uguale',
    'filter.label.is_after' => 'è successivo',
    'filter.label.is_after_or_same' => 'è successivo o uguale',
    'filter.label.is_before' => 'è precedente',
    'filter.label.is_before_or_same' => 'è precedente o uguale',
  ),
  'messages' => 
  array (
    'action.new' => 'Crea %entity_label%',
    'action.show' => 'Vedi',
    'action.edit' => 'Modifica',
    'action.search' => 'Cerca',
    'action.delete' => 'Elimina',
    'action.save' => 'Salva modifiche',
    'action.cancel' => 'Annulla',
    'action.list' => 'Torna alla lista',
    'action.deselect' => 'Deseleziona',
    'label.form.empty_value' => 'Nessun valore',
    '__name__label__' => '__name__label__',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Precedente',
    'label_next' => 'Successivo',
    'filter_searchword' => 'Ricerca...',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'Télécharger',
    'form.label.delete' => 'Supprimer ?',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Créer "%entity_label%"',
    'show.page_title' => '%entity_label% (#%entity_id%)',
    'edit.page_title' => 'Modifier %entity_label% (#%entity_id%)',
    'list.page_title' => '%entity_label%',
    'search.page_title' => '{0} Aucun résultat trouvé|{1} <strong>1</strong> résultat trouvé|]1,Inf] <strong>%count%</strong> résultats trouvés',
    'search.no_results' => 'Aucun résultat trouvé',
    'list.row_actions' => 'Actions',
    'paginator.first' => 'Premier',
    'paginator.previous' => 'Précédent',
    'paginator.next' => 'Suivant',
    'paginator.last' => 'Dernier',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> sur <strong>%results%</strong>',
    'paginator.results' => '{0} Aucun résultat|{1} <strong>1</strong> résultat|]1,Inf] <strong>%count%</strong> résultats',
    'label.true' => 'Oui',
    'label.false' => 'Non',
    'label.empty' => 'Vide',
    'label.null' => 'Aucun(e)',
    'label.nullable_field' => 'Laisser vide',
    'label.object' => 'Objet PHP',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Aucun accesseur n\'existe pour cette propriété ou celle-ci n\'est pas publique.',
    'label.form.empty_value' => 'Aucun(e)',
    'user.logged_in_as' => 'Connecté en tant que',
    'user.unnamed' => 'Utilisateur sans nom',
    'user.anonymous' => 'Utilisateur anonyme',
    'user.signout' => 'Déconnexion',
    'user.exit_impersonation' => 'Arrêter l\'impersonnalisation',
    'delete_modal.title' => 'Voulez-vous supprimer cet élément ?',
    'delete_modal.content' => 'Cette action est irréversible.',
    'delete_modal.action' => 'Supprimer',
    'batch_action_modal.title' => 'Vous allez appliquer l\'action "%action_name%" à %num_items% élément(s).',
    'batch_action_modal.content' => 'Cette action est irréversible.',
    'action.add_new_item' => 'Ajouter un nouvel élément',
    'action.remove_item' => 'Supprimer l\'élément',
    'action.choose_file' => 'Choisir un fichier',
    'errors' => 'Erreur|Erreurs',
    'form.are_you_sure' => 'Vous n\'avez pas sauvegardé vos modifications.',
    'form.tab.error_badge_title' => '1 champ invalide|%count% champs invalides',
    'show.remaining_items' => '{1} il y a un autre élément qui n\'est pas affiché dans cette liste|]1,Inf] %count% autres éléments ne sont pas affichés dans cette liste',
    'exception.entity_not_found' => 'Cet élément n\'est plus disponible.',
    'exception.entity_remove' => 'Cet élément ne peut être supprimé car d\'autres éléments en dépendent.',
    'exception.forbidden_action' => 'L\'action demandée ne peut être exécutée sur cet élément.',
    'exception.no_entities_configured' => 'L\'application n\'est pas correctement configurée.',
    'exception.undefined_entity' => 'L\'application n\'est pas correctement configurée pour ce type d\'élément.',
    'login.username' => 'Identifiant',
    'login.password' => 'Mot de passe',
    'login.sign_in' => 'Connectez-vous',
    'filter.title' => 'Filtres',
    'filter.button.clear' => 'Effacer',
    'filter.button.apply' => 'Appliquer',
    'filter.label.is_equal_to' => 'est égal(e) à',
    'filter.label.is_not_equal_to' => 'est différent(e) de',
    'filter.label.is_greater_than' => 'est supérieur(e) à',
    'filter.label.is_greater_than_or_equal_to' => 'est supérieur(e) ou égal(e) à',
    'filter.label.is_less_than' => 'est inférieur(e) à',
    'filter.label.is_less_than_or_equal_to' => 'est inférieur(e) ou égal(e) à',
    'filter.label.is_between' => 'est entre',
    'filter.label.contains' => 'contient',
    'filter.label.not_contains' => 'ne contient pas',
    'filter.label.starts_with' => 'commence par',
    'filter.label.ends_with' => 'finit par',
    'filter.label.exactly' => 'est strictement égal(e) à',
    'filter.label.not_exactly' => 'est strictement différent(e) de',
    'filter.label.is_same' => 'est',
    'filter.label.is_not_same' => 'n\'est pas',
    'filter.label.is_after' => 'est postérieure à',
    'filter.label.is_after_or_same' => 'est postérieure à ou est le',
    'filter.label.is_before' => 'est antérieure à',
    'filter.label.is_before_or_same' => 'est antérieure à ou est le',
    'security.list.hidden_results' => 'Certains résultats ne peuvent pas être affichés car vous n\'avez pas la permission',
  ),
  'messages' => 
  array (
    'action.new' => 'Créer %entity_label%',
    'action.show' => 'Voir',
    'action.edit' => 'Éditer',
    'action.search' => 'Rechercher',
    'action.delete' => 'Supprimer',
    'action.save' => 'Sauvegarder les modifications',
    'action.cancel' => 'Annuler',
    'action.continue' => 'Continuer',
    'action.list' => 'Retour à la liste',
    'action.deselect' => 'Désélectionner',
    'label.form.empty_value' => 'Aucun(e)',
    '__name__label__' => '__name__label__',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Précédent',
    'label_next' => 'Suivant',
    'filter_searchword' => 'Recherche...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
