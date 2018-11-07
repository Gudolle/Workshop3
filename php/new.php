<?php
$nameErr = [];
$type_contrat;
$nom;
$prenom;
$tel_f;
$tel_p;
$birthdate;
$adresse;
$cp;
$ville;
$numero_contrat;
$email;
$select_pro;

$salary;

$choix_cd;
$temps_salary;
$autre_profession;
$anciennete_salary;

$temps_non_salary;
$exerce_activite;
$seul;
$combien_salary;
$poste;
$administratif;
$manuel;
$deplacement;

$prestation;
$date_accident;
$rechute;
$date_rechute;
$hospitalise;
$debut_hospitalise;
$fin_hospitalise;
$reprise;
$date_reprise;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["type_contrat"])) {
        array_push($nameErr,"Le type de contrat est obligatoire.");
    }else{
        $type_contrat = check($_POST["type_contrat"]);
    }
    if (empty($_POST["nom"])) {
        array_push($nameErr,"Le nom est obligatoire.");
    }else{
        $nom = check($_POST["nom"]);
    }
    if (empty($_POST["prenom"])) {
        array_push($nameErr,"Le prenom est obligatoire.");
    }else{
        $prenom = check($_POST["prenom"]);
    }
    if (empty($_POST["tel_f"])) {
        array_push($nameErr,"Le teléphone fixe est obligatoire.");
    }else{
        $tel_f = check($_POST["tel_f"]);
    }
    if (empty($_POST["tel_p"])) {
        array_push($nameErr,"Le teléphone portable est obligatoire.");
    }else{
        $tel_p = check($_POST["tel_p"]);
    }
    if (empty($_POST["birthdate"])) {
        array_push($nameErr,"La date de naissance est obligatoire.");
    }else{
        $type_contrat = check($_POST["birthdate"]);
    }
    if (empty($_POST["adresse"])) {
        array_push($nameErr,"L'adresse est obligatoire.");
    }else{
        $type_contrat = check($_POST["adresse"]);
    }
    if (empty($_POST["cp"])) {
        array_push($nameErr,"Le code postal est obligatoire.");
    }else{
        $type_contrat = check($_POST["cp"]);
    }
    if (empty($_POST["ville"])) {
        array_push($nameErr,"La ville est obligatoire.");
    }else{
        $type_contrat = check($_POST["ville"]);
    }
    if (empty($_POST["numero_contrat"])) {
        array_push($nameErr,"Le numero de contrat est obligatoire.");
    }else{
        $type_contrat = check($_POST["numero_contrat"]);
    }
    if (empty($_POST["email"])) {
        array_push($nameErr,"L'e-mail est obligatoire.");
    }else{
        $type_contrat = check($_POST["email"]);
    }
    if (empty($_POST["select_pro"])) {
        array_push($nameErr,"La profession est obligatoire.");
    }else{
        $type_contrat = check($_POST["select_pro"]);
    }
    //salary
    if (empty($_POST["salary"])) {
        array_push($nameErr,"Votre état salarial est obligatoire.");
    }else{
        if($_POST["salary"]=="true"){
            $salary = true;
            if (empty($_POST["choix_cd"])) {
                array_push($nameErr,"Le type de contrat est obligatoire.");
            }else{
                $choix_cd = check($_POST["choix_cd"]);
            }
            if (empty($_POST["temps_salary"])) {
                array_push($nameErr,"Le type horaire de contrat est obligatoire.");
            }else{
                $temps_salary = check($_POST["temps_salary"]);
                if($_POST["temps_salary"]=="partiel"){
                    if (empty($_POST["autre_profession_choix"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez une autre profession.");
                    }else{
                        if($_POST["autre_profession_choix"]=="true"){
                            if (empty($_POST["autre_profession"])) {
                                array_push($nameErr,"Il est obligatoire de nous préciser votre autre profession.");
                            }else{
                                $autre_profession = check($_POST["autre_profession"]);
                            }
                        }
                    }
                }
            }
            if (empty($_POST["anciennete_salary"])) {
                array_push($nameErr,"Votre ancienneté à votre poste est obligatoire.");
            }else{
                $anciennete_salary = check($_POST["anciennete_salary"]);
            }
        }else{
            $salary = false;
            if (empty($_POST["temps_non_salary"])) {
                array_push($nameErr,"Le type horaire de contrat est obligatoire.");
            }else{
                $temps_non_salary = check($_POST["temps_non_salary"]);
                if($_POST["temps_salary"]=="partiel"){
                    if (empty($_POST["autre_profession_choix_no"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez une autre profession.");
                    }else{
                        if($_POST["autre_profession_choix_no"]=="true"){
                            if (empty($_POST["autre_profession_no"])) {
                                array_push($nameErr,"Il est obligatoire de nous préciser votre autre profession.");
                            }else{
                                $autre_profession = check($_POST["autre_profession_no"]);
                            }
                        }
                    }
                }
            }
            if (empty($_POST["exerce_activite"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser depuis combien de temps vous exercer votre/vos activités.");
            }else{
                $exerce_activite = check($_POST["exerce_activite"]);
            }
            if (empty($_POST["seul"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser si vous travaillez seul.");
            }else{
                $seul = check($_POST["seul"]);
                if($_POST["temps_salary"]=="partiel"){
                    if (empty($_POST["combien_salary"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser combien vous avez de salarié.");
                    }else{
                        $combien_salary = check($_POST["combien_salary"]);
                    }
                    if (empty($_POST["poste"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser à quel(s) poste(s) sont affecté(s) vos salarié.");
                    }else{
                        $poste = check($_POST["poste"]);
                    }
                }
            }
            if (empty($_POST["administratif"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la part en % de travail administratif dans votre activité.");
            }else{
                $administratif = check($_POST["administratif"]);
            }
            if (empty($_POST["manuel"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la part en % de travail manuel dans votre activité.");
            }else{
                $manuel = check($_POST["manuel"]);
            }
            if (empty($_POST["deplacement"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la part en % de déplacement dans votre activité.");
            }else{
                $deplacement = check($_POST["deplacement"]);
            }
        }
    }
    if (empty($_POST["prestation"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser la cause de cette prestation.");
    }else{
        $prestation = check($_POST["prestation"]);
    }
    if (empty($_POST["date_accident"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser la date de l'accident ou de déclaration de la maladie.");
    }else{
        $date_accident = check($_POST["date_accident"]);
    }
    if (empty($_POST["rechute"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser s'il s'agit d'une rechute.");
    }else{
        $rechute = check($_POST["rechute"]);
        if($_POST["rechute"]=="true"){
            if (empty($_POST["date_rechute"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la date de la première chute.");
            }else{
                $date_rechute = check($_POST["date_rechute"]);
            }
        }
    }
    if (empty($_POST["hospitalise"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez était hospitalisé.");
    }else{
        $hospitalise = check($_POST["hospitalise"]);
        if($_POST["hospitalise"]=="true"){
            if (empty($_POST["debut_hospitalise"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la date de début de l'hospitalisation.");
            }else{
                $debut_hospitalise = check($_POST["debut_hospitalise"]);
            }
            if (empty($_POST["fin_hospitalise"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la date de fin de l'hospitalisation.");
            }else{
                $fin_hospitalise = check($_POST["fin_hospitalise"]);
            }
        }
    }
    if (empty($_POST["reprise"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez repris le travail.");
    }else{
        $reprise = check($_POST["reprise"]);
        if($_POST["reprise"]=="true"){
            if (empty($_POST["date_reprise"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la date de votre retour à fonction.");
            }else{
                $date_reprise = check($_POST["date_reprise"]);
            }
        }
    }
    if (empty($_POST["souscrit"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez souscris à d'autres contrat auprès d'AXA et/ou d'une autre compagnie.");
    }else{
        $souscrit = check($_POST["souscrit"]);
    }
    add_contrat();
}
function add_contrat(){

}
function check($field){
    
}
?>