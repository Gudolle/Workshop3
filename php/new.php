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
        }
    }
    add_contrat();
}
function add_contrat(){

}
function check($field){
    
}
?>