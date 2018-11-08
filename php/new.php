<?php
$url = "http://localhost:3001";
$db = mysqli_connect('localhost','root', '');
mysqli_select_db($db, 'workshopi4axa');
$nameErr = [];
$type_contrat ='null';
$nom='null';
$prenom='null';
$tel_f='null';
$tel_p='null';
$birthdate='null';
$adresse='null';
$cp='null';
$ville='null';
$numero_contrat='null';
$email='null';
$select_pro='null';

$salary='null';

$choix_cd='null';
$temps_salary='null';
$autre_profession='null';
$anciennete_salary='null';

$temps_non_salary='null';
$exerce_activite='null';
$seul='null';
$combien_salary='null';
$poste='null';
$administratif='null';
$manuel='null';
$deplacement='null';

$prestation='null';
$date_accident='null';
$rechute='null';
$date_rechute='null';
$hospitalise='null';
$debut_hospitalise='null';
$fin_hospitalise='null';
$reprise='null';
$date_reprise='null';
$souscrit='null';

$secu_sociale='null';
$date_secu='null';
$rsi='null';
$date_rsi='null';
$msa='null';
$date_msa='null';
$autre_affiliation='null';
$quel_autre_affiliation='null';
$date_autre_affiliation='null';

$date_accident_second='null';
$lieu_accident='null';
$type_accident='null';
$cause_tiers='null';
$detail_accident='null';

$test_alcool='null';
$taux_alcool='null';
$test_stupefiant='null';
$resultat_stupefiant='null';
$rapport_police='null';
$rapport_reference='null';

$fait_a='null';
$date_fait_a = date("Y-m-d H:i:s");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["type_contrat"])) {
        array_push($nameErr,"Le type de contrat est obligatoire.");
    }else{
        $type_contrat = check($_POST["type_contrat"],$db);
    }
    if (empty($_POST["nom"])) {
        array_push($nameErr,"Le nom est obligatoire.");
    }else{
        $nom = check($_POST["nom"],$db);
    }
    if (empty($_POST["prenom"])) {
        array_push($nameErr,"Le prenom est obligatoire.");
    }else{
        $prenom = check($_POST["prenom"],$db);
    }
    if (empty($_POST["tel_f"])) {
        array_push($nameErr,"Le teléphone fixe est obligatoire.");
    }else{
        $tel_f = check($_POST["tel_f"],$db);
    }
    if (empty($_POST["tel_p"])) {
        array_push($nameErr,"Le teléphone portable est obligatoire.");
    }else{
        $tel_p = check($_POST["tel_p"],$db);
    }
    if (empty($_POST["birthdate"])) {
        array_push($nameErr,"La date de naissance est obligatoire.");
    }else{
        $birthdate = check($_POST["birthdate"],$db);
    }
    if (empty($_POST["adresse"])) {
        array_push($nameErr,"L'adresse est obligatoire.");
    }else{
        $adresse = check($_POST["adresse"],$db);
    }
    if (empty($_POST["cp"])) {
        array_push($nameErr,"Le code postal est obligatoire.");
    }else{
        $cp = check($_POST["cp"],$db);
    }
    if (empty($_POST["ville"])) {
        array_push($nameErr,"La ville est obligatoire.");
    }else{
        $ville = check($_POST["ville"],$db);
    }
    if (empty($_POST["numero_contrat"])) {
        array_push($nameErr,"Le numero de contrat est obligatoire.");
    }else{
        $numero_contrat = check($_POST["numero_contrat"],$db);
    }
    if (empty($_POST["email"])) {
        array_push($nameErr,"L'e-mail est obligatoire.");
    }else{
        $email = check($_POST["email"],$db);
    }
    if (empty($_POST["select_pro"])) {
        array_push($nameErr,"La profession est obligatoire.");
    }else{
        $select_pro = check($_POST["select_pro"],$db);
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
                $choix_cd = check($_POST["choix_cd"],$db);
            }
            if (empty($_POST["temps_salary"])) {
                array_push($nameErr,"Le type horaire de contrat est obligatoire.");
            }else{
                $temps_salary = check($_POST["temps_salary"],$db);
                if($_POST["temps_salary"]=="partiel"){
                    if (empty($_POST["autre_profession_choix"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez une autre profession.");
                    }else{
                        if($_POST["autre_profession_choix"]=="true"){
                            if (empty($_POST["autre_profession"])) {
                                array_push($nameErr,"Il est obligatoire de nous préciser votre autre profession.");
                            }else{
                                $autre_profession = check($_POST["autre_profession"],$db);
                            }
                        }
                    }
                }
            }
            if (empty($_POST["anciennete_salary"])) {
                array_push($nameErr,"Votre ancienneté à votre poste est obligatoire.");
            }else{
                $anciennete_salary = check($_POST["anciennete_salary"],$db);
            }
        }else{
            $salary = false;
            if (empty($_POST["temps_non_salary"])) {
                array_push($nameErr,"Le type horaire de contrat est obligatoire.");
            }else{
                $temps_non_salary = check($_POST["temps_non_salary"],$db);
                if($_POST["temps_salary"]=="partiel"){
                    if (empty($_POST["autre_profession_choix_no"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez une autre profession.");
                    }else{
                        if($_POST["autre_profession_choix_no"]=="true"){
                            if (empty($_POST["autre_profession_no"])) {
                                array_push($nameErr,"Il est obligatoire de nous préciser votre autre profession.");
                            }else{
                                $autre_profession = check($_POST["autre_profession_no"],$db);
                            }
                        }
                    }
                }
            }
            if (empty($_POST["exerce_activite"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser depuis combien de temps vous exercer votre/vos activités.");
            }else{
                $exerce_activite = check($_POST["exerce_activite"],$db);
            }
            if (empty($_POST["seul"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser si vous travaillez seul.");
            }else{
                $seul = check($_POST["seul"],$db);
                if($_POST["temps_salary"]=="partiel"){
                    if (empty($_POST["combien_salary"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser combien vous avez de salarié.");
                    }else{
                        $combien_salary = check($_POST["combien_salary"],$db);
                    }
                    if (empty($_POST["poste"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser à quel(s) poste(s) sont affecté(s) vos salarié.");
                    }else{
                        $poste = check($_POST["poste"],$db);
                    }
                }
            }
            if (empty($_POST["administratif"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la part en % de travail administratif dans votre activité.");
            }else{
                $administratif = check($_POST["administratif"],$db);
            }
            if (empty($_POST["manuel"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la part en % de travail manuel dans votre activité.");
            }else{
                $manuel = check($_POST["manuel"],$db);
            }
            if (empty($_POST["deplacement"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la part en % de déplacement dans votre activité.");
            }else{
                $deplacement = check($_POST["deplacement"],$db);
            }
        }
    }
    if (empty($_POST["prestation"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser la cause de cette prestation.");
    }else{
        $prestation = check($_POST["prestation"],$db);
        if($_POST["prestation"]=="accident"){
            if (empty($_POST["date_accident_second"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la date de l'accident.");
            }else{
                $date_accident_second = check($_POST["date_accident_second"],$db);
            }
            if (empty($_POST["lieu_accident"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser le lieu de l'accident.");
            }else{
                $lieu_accident = check($_POST["lieu_accident"],$db);
            }
            if (empty($_POST["type_accident"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser le type de l'accident.");
            }else{
                $type_accident = check($_POST["type_accident"],$db);
                if($_POST["type_accident"]=="circulation"){
                    if (empty($_POST["test_alcool"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez été soumis à un test d'alcoolimie.");
                    }else{
                        $test_alcool = check($_POST["test_alcool"],$db);
                        if($_POST["test_alcool"]=="true"){
                            if (empty($_POST["taux_alcool"])) {
                                array_push($nameErr,"Il est obligatoire de nous préciser le résultat du test d'alcoolimie.");
                            }else{
                                $taux_alcool = check($_POST["taux_alcool"],$db);
                            }
                        }
                    }
                    if (empty($_POST["test_stupefiant"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez été soumis à un dépistage de stupéfiants.");
                    }else{
                        $test_stupefiant = check($_POST["test_stupefiant"],$db);
                        if($_POST["test_stupefiant"]=="true"){
                            if (empty($_POST["resultat_stupefiant"])) {
                                array_push($nameErr,"Il est obligatoire de nous préciser le résultat du test de dépistage.");
                            }else{
                                $resultat_stupefiant = check($_POST["resultat_stupefiant"],$db);
                            }
                        }
                    }
                    if (empty($_POST["rapport_police"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser si un rapport de police ou de gendarmerie à été établi");
                    }else{
                        $rapport_police = check($_POST["rapport_police"],$db);
                        if($_POST["rapport_police"]=="true"){
                            if (empty($_POST["rapport_reference"])) {
                                array_push($nameErr,"Il est obligatoire de nous préciser les références du rapport.");
                            }else{
                                $rapport_reference = check($_POST["rapport_reference"],$db);
                            }
                        }
                    }
                    if (empty($_POST["fait_a"])) {
                        array_push($nameErr,"Il est obligatoire de nous préciser votre location.");
                    }else{
                        $fait_a = check($_POST["fait_a"],$db);
                    }
                }
            }
            if (empty($_POST["cause_tiers"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser si l'accident à été causé par un tiers.");
            }else{
                $cause_tiers = check($_POST["cause_tiers"],$db);
            }
            if (empty($_POST["detail_accident"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser les détails de l'accident.");
            }else{
                $detail_accident = check($_POST["detail_accident"],$db);
            }
        }
    }
    if (empty($_POST["date_accident"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser la date de l'accident ou de déclaration de la maladie.");
    }else{
        $date_accident = check($_POST["date_accident"],$db);
    }
    if (empty($_POST["rechute"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser s'il s'agit d'une rechute.");
    }else{
        $rechute = check($_POST["rechute"],$db);
        if($_POST["rechute"]=="true"){
            if (empty($_POST["date_rechute"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la date de la première chute.");
            }else{
                $date_rechute = check($_POST["date_rechute"],$db);
            }
        }
    }
    if (empty($_POST["hospitalise"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez été hospitalisé.");
    }else{
        $hospitalise = check($_POST["hospitalise"],$db);
        if($_POST["hospitalise"]=="true"){
            if (empty($_POST["debut_hospitalise"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la date de début de l'hospitalisation.");
            }else{
                $debut_hospitalise = check($_POST["debut_hospitalise"],$db);
            }
            if (empty($_POST["fin_hospitalise"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la date de fin de l'hospitalisation.");
            }else{
                $fin_hospitalise = check($_POST["fin_hospitalise"],$db);
            }
        }
    }
    if (empty($_POST["reprise"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez repris le travail.");
    }else{
        $reprise = check($_POST["reprise"],$db);
        if($_POST["reprise"]=="true"){
            if (empty($_POST["date_reprise"])) {
                array_push($nameErr,"Il est obligatoire de nous préciser la date de votre retour à fonction.");
            }else{
                $date_reprise = check($_POST["date_reprise"],$db);
            }
        }
    }
    if (empty($_POST["souscrit"])) {
        array_push($nameErr,"Il est obligatoire de nous préciser si vous avez souscris à d'autres contrat auprès d'AXA et/ou d'une autre compagnie.");
    }else{
        $souscrit = check($_POST["souscrit"],$db);
    }
    if (!empty($_POST["secu_sociale"])) {
        $secu_sociale = check($_POST["secu_sociale"],$db);
        if (empty($_POST["date_secu"])) {
            array_push($nameErr,"Il est obligatoire de nous préciser votre date de souscription à la sécurité sociale.");
        }else{
            $date_secu = check($_POST["date_secu"],$db);
        }
    }
    if (!empty($_POST["rsi"])) {
        $rsi = check($_POST["rsi"],$db);
        if (empty($_POST["date_rsi"])) {
            array_push($nameErr,"Il est obligatoire de nous préciser votre date de souscription au rsi.");
        }else{
            $date_rsi = check($_POST["date_rsi"],$db);
        }
    }
    if (!empty($_POST["msa"])) {
        $msa = check($_POST["msa"],$db);
        if (empty($_POST["date_msa"])) {
            array_push($nameErr,"Il est obligatoire de nous préciser votre date de souscription a la msa.");
        }else{
            $date_msa = check($_POST["date_msa"],$db);
        }
    }
    if (!empty($_POST["autre"])) {
        $autre_affiliation = check($_POST["autre"],$db);
        if (empty($_POST["quel_autre"])) {
            array_push($nameErr,"Il est obligatoire de nous préciser votre autre affiliation.");
        }else{
            $quel_autre_affiliation = check($_POST["quel_autre"],$db);
        }
        if (empty($_POST["date_autre"])) {
            array_push($nameErr,"Il est obligatoire de nous préciser votre date de souscription a votre autre affiliation.");
        }else{
            $date_autre_affiliation = check($_POST["date_autre"],$db);
        }
    }
    //check if error
    if(count($nameErr)==0){
        add_contrat($url,$db,$type_contrat,$nom,$prenom,$tel_f,$tel_p,$birthdate,$adresse,$cp,$ville,$numero_contrat,$email,$select_pro,$salary,$choix_cd,$temps_salary,$autre_profession,$anciennete_salary,$temps_non_salary,$exerce_activite,$seul,$combien_salary,$poste,$administratif,$manuel,$deplacement,$prestation,$date_accident,$rechute,$date_rechute,$hospitalise,$debut_hospitalise,$fin_hospitalise,$reprise,$date_reprise,$souscrit,$secu_sociale,$date_secu,$rsi,$date_rsi,$msa,$date_msa,$autre_affiliation,$quel_autre_affiliation,$date_autre_affiliation,$date_accident_second,$lieu_accident,$type_accident,$cause_tiers,$detail_accident,$test_alcool,$taux_alcool,$test_stupefiant,$resultat_stupefiant,$rapport_police,$rapport_reference,$fait_a,$date_fait_a);
    }else{
        some_error($nameErr);
    }
}
function check($str, $db){
    if(gettype($str)!="string"){
        return $str;
    }
    if (get_magic_quotes_gpc()) {
		$sanitize = mysqli_real_escape_string($db,stripslashes($str));	 
	} else {
		$sanitize = mysqli_real_escape_string($db,$str);	
	} 
	return $sanitize;
}
function some_error($nameErr){
    print('<div class="alert alert-danger">');
    for($x=0;$x<count($nameErr);$x++){
        print("$nameErr[$x] <br>");
    }
    print('</div>');
}
function add_contrat($url,$db,$type_contrat,$nom,$prenom,$tel_f,$tel_p,$birthdate,$adresse,$cp,$ville,$numero_contrat,$email,$select_pro,$salary,$choix_cd,$temps_salary,$autre_profession,$anciennete_salary,$temps_non_salary,$exerce_activite,$seul,$combien_salary,$poste,$administratif,$manuel,$deplacement,$prestation,$date_accident,$rechute,$date_rechute,$hospitalise,$debut_hospitalise,$fin_hospitalise,$reprise,$date_reprise,$souscrit,$secu_sociale,$date_secu,$rsi,$date_rsi,$msa,$date_msa,$autre_affiliation,$quel_autre_affiliation,$date_autre_affiliation,$date_accident_second,$lieu_accident,$type_accident,$cause_tiers,$detail_accident,$test_alcool,$taux_alcool,$test_stupefiant,$resultat_stupefiant,$rapport_police,$rapport_reference,$fait_a,$date_fait_a){
    $sql="insert into adresse(adresse_1, CodePostal, Ville) values ('$adresse', '$cp', '$ville');";
    mysqli_query($db,$sql);    

    $sql="select ID from adresse where Adresse_1 = '$adresse' and CodePostal = '$cp' and Ville = '$ville'";
    $AdresseID = mysqli_fetch_array(mysqli_query($db,$sql))[0];

    $sql="insert into Personne(Nom, Prenom, Tel_Por, Tel_Fix, DateDeNaissance, Email, contrat, Adresse_ID) values ('$nom', '$prenom', '$tel_p', '$tel_f', '$birthdate', '$email', '$numero_contrat', $AdresseID);";
    mysqli_query($db,$sql);

    $sql="select ID from Personne where Nom = '$nom' and Prenom = '$prenom' and contrat = '$numero_contrat'";
    $PersonneID = mysqli_fetch_array(mysqli_query($db,$sql))[0];

    $sql="insert into Proffession(TypeID, isSalarie, isCDI, isTempPlein, TempsPartielDesc, Anciennete, isSeul, Nombre, PartAdministratif, PartDeplacement, Partmanuel, PersonneID) values ($select_pro,'$salary','$choix_cd', $temps_salary, '$autre_profession', $anciennete_salary, '$seul', $combien_salary, $administratif, $deplacement, $manuel, $PersonneID);";
    mysqli_query($db,$sql);

    $sql="insert into Prestation(isMalade, DateDebut, isRechute, DateChut, isHospital, DateStartHopital, DateFinHopital, isReprisBoulot, DateRepise, AutreContrat, PersonneID) values ('$prestation', '$date_accident', '$rechute', '$date_rechute', '$hospitalise', '$debut_hospitalise', '$fin_hospitalise', '$reprise', '$date_reprise', '$souscrit', $PersonneID);";
    mysqli_query($db,$sql);
    
    $sql="insert into affilation(DateSecu, DateRsi, DateMsa, Autre, DateAutre, Personneid) VALUES ('$date_secu', '$date_rsi', '$date_msa', '$quel_autre_affiliation', '$date_autre_affiliation', $PersonneID);";
    mysqli_query($db,$sql);

    if($prestation=="accident"){
        $sql="insert into Accident(DateAcc, LieuAcc, isCauseTiers, circonstances, TypeID, PersonneID) VALUES ('$date_accident_second', '$lieu_accident', '$cause_tiers', '$detail_accident', $cause_tiers, $PersonneID);";
        mysqli_query($db,$sql);
        if($type_accident=="circulation"){
            $sql="select ID from Accident where DateAcc = '$date_accident_second' and LieuAcc = '$lieu_accident' and isCauseTiers = '$detail_accident';";
            $AccidentID = mysqli_fetch_array(mysqli_query($db,$sql))[0];
            
            $sql="insert into AccidentCircu(isTestAlcool, isTauxAlcool, isDepiStup, isPositifStup, isRapportPolice, RefRapport, AccidentID) VALUES ('$test_alcool',$taux_alcool,'$test_stupefiant','$resultat_stupefiant', '$rapport_police', '$rapport_reference', $AccidentID);";
            mysqli_query($db,$sql);
        }
    }

    $sql="select MAX(ID) from Prestation where PersonneID = $PersonneID;";
    $PrestationID = mysqli_fetch_array(mysqli_query($db,$sql))[0];

    add_block($url,$PrestationID,"new","prestation incapacité");
    print('<div class="alert alert-success"><strong>Succès</strong> Votre formulaire est valider et sauvegarder.</div>');
}
?>