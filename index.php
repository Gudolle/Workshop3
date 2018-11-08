<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Formulaire de demande de prestation en incapacité temporaire totale et en invalidité</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="icon" href="img/Axa.png">
</head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-2"><img src="img/Axa.png" width="50%"></div>
        <div class="col-sm-10 title">DEMANDE DE PRESTATION EN INCAPACITÉ TEMPORAIRE TOTALE ET EN INVALIDITÉ</div>
      </div>
    </div>
    <br>
    <form method="POST">
    <div id="page-content-wrapper">
      <div class="container">
        <?php 
        include('php/blockchain.php');
        include('php/new.php');
        ?>
        <br>
        <div class="container-fluid">
          <h2>Numero de dossier :</h2>
          <div class="form-check">
              <input class="form-check-input" type="radio" value="false" id="arret_travail" name="type_contrat">
              <label class="form-check-label" for="arretCheck">
                  Arrêt de travail initial
              </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" value="false" id="invalidité" name="type_contrat">
              <label class="form-check-label" for="invaliditéCheck">
                  Invalidité
              </label>
          </div>
        </div>
        <br>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">1 - Déclaration de l'assuré(e)</li>
          </ol>
        </nav>
        <p>Je soussigné(e)</p>
        <div class="form-group">
          Nom :
          <input type="text" id="nom" name="nom" class="form-control">
          Prenom :
          <input type="text" id="prenom" name="prenom" class="form-control">
        </div>
        <br>
        <div class="form-group">
          N° de téléphone fixe :
          <input type="text" class="form-control" data-country="FR" id="tel_f" name="tel_f">
          N° de téléphone portable :
          <input type="text" class="form-control" data-country="FR" id="tel_p" name="tel_p">
        </div>
        <br>
        <div class="form-group">
          Date de naissance :
          <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Date of Birth">
        </div>
        <div class="form-group">
          Adresse :
          <input type="text" id="adresse" name="adresse" class="form-control">
        </div>
        <br>
        <div class="form-group">
          Code Postal :
          <input type="text" id="cp" name="cp" class="form-control">
          Ville (Bureau distributeur) :
          <input type="text" id="ville" name="ville" class="form-control">
        </div>
        <br>
        <div class="form-group">
          Numero de contrat :
          <input type="text" name="numero_contrat" id="numero_contrat" class="form-control">
          e-mail :
          <input type="text" name="email" id="email" placeholder="nom@example.com" class="form-control">
        </div>
        <hr class="style1">
        <div class="form-group">
          <label for="select_pro">Quelle est votre profession : </label>
          <select class="form-control" id="select_pro" name="select_pro">
            <option>Profession1</option>
            <option>Profession2</option>
            <option>Profession3</option>
          </select>
        </div>
      <br>
      <table class="table table-bordered">
        <thead>
            <tr>
              <th scope="col">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="true" id="salary" name="salary">
                  <label class="form-check-label" for="arretCheck">
                      Si vous êtes salarié
                  </label>
                </div>
              </th>
              <th scope="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="false" id="no_salary" name="salary">
                    <label class="form-check-label" for="arretCheck">
                        Si vous êtes travailleur non salarié
                    </label>
                </div>
              </th>
            </tr>
          </thead>
          <tbody>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="CDI" id="cdi" name="choix_cd">
                <label class="form-check-label" for="arretCheck">
                    CDI
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="CDD" id="cdd" name="choix_cd">
                <label class="form-check-label" for="arretCheck">
                    CDD
                </label>
              </div>
              <br>
              Exercez-vous votre profession à :
              <div class="form-check">
                <input class="form-check-input" type="radio" value="complet" id="temps_complet" name="temps_salary">
                <label class="form-check-label" for="arretCheck">
                    Temps_complet
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="partiel" id="temps_partiel" name="temps_salary">
                <label class="form-check-label" for="arretCheck">
                    Temps_partiel
                </label>
              </div>
              <br>
              <div>
                Si temps partiel, avez-vous une autre profession ? 
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="true" id="autre_profession_oui" name="autre_profession_choix">
                    <label class="form-check-label" for="arretCheck">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="false" id=autre_profession_non name="autre_profession_choix">
                    <label class="form-check-label" for="arretCheck">
                        Non
                    </label>
                  </div>
              </div>
              <br>
              <div> 
                  <label for="autre_profession">Si oui, laquelle ?</label>
                  <input type="text" class="form-control" id="autre_profession" name="autre_profession">
              </div>
              <div>
                  Quelle est votre ancienneté à ce(s) poste(s) de travail ?
                  <br>
                  <input class="form-control" type="number" min="0" max="60" id="anciennete_salary" name="anciennete_salary">
              </div>
            </td>
            <td>
              <div></div>
              <div>
                  Exercez-vous votre profession à :
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="false" id="temps_complet_no_salary" name="temps_non_salary">
                    <label class="form-check-label" for="arretCheck">
                        Temps_complet
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="false" id="temps_partiel_no_salary" name="temps_non_salary">
                    <label class="form-check-label" for="arretCheck">
                        Temps_partiel
                    </label>
                  </div>
                  <br>
              </div>
              <div>
                  Si temps partiel, avez-vous une autre profession ? 
                  <div class="form-check">
                      <input class="form-check-input" type="radio" value="true" id="autre_profession_oui_no" name="autre_profession_choix_no">
                      <label class="form-check-label" for="arretCheck">
                          Oui
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" value="false" id="autre_profession_non_no" name="autre_profession_choix_no">
                      <label class="form-check-label" for="arretCheck">
                          Non
                      </label>
                    </div>
                </div>
                <br>
                <div> 
                  <label for="autre_profession_no">Si oui, laquelle ?</label>
                  <input type="text" class="form-control" id="autre_profession_no" name="autre_profession_no">
                </div>
                <br>
                <div>
                    Depuis quand exercez-vous cette(ces) activité(s) ?  
                    <br>
                    <input class="form-control" type="number" min="0" max="60" id="exerce_activite" name="exerce_activite">
                </div>
                <div>
                    Travaillez-vous seul ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="true" id="seul_oui" name="seul">
                        <label class="form-check-label" for="arretCheck">
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="false" id="seul_non" name="seul">
                        <label class="form-check-label" for="arretCheck">
                            Non
                        </label>
                      </div>
                </div>
                <br>
                <div>
                    <label for="combien_salary">Si non, combien avez-vous de salariés ?</label>
                    <input type="number" class="form-control"min="0" id="combien_salary" name="combien_salary"></textarea>
                </div>
                <div>
                    <label for="poste">A quels postes ?</label>
                    <input type="text" class="form-control" id="poste" name="poste"></textarea>
                </div>
                <div>
                    Dans votre activité professionnelle, quelle est la part (en %) de :
                    <ul class="list-style-type">
                      <li>Travail administratif : <input class="form-control" type="number" min="0" max="100" id="administratif" name="administratif"></li>
                      <li>Travail manuel : <input class="form-control" type="number" min="0" max="100" id="manuel" name="manuel"></li>
                      <li>Déplacement : <input class="form-control" type="number" min="0" max="100" id="deplacement" name="deplacement"></li>
                    </ul>
                </div>
            </td>
          </tbody>
        </table>
        <br>
        <hr class="style1">
        <br>
        Votre demande de prestation fait suite à :
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="maladie" id="maladie" name="prestation">
            <label class="form-check-label" for="arretCheck">
                Une maladie
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="accident" id="accident" name="prestation">
            <label class="form-check-label" for="arretCheck">
                Un accident
            </label>
        </div>
        <br>
        <div class="form-group">
            Depuis le  :
            <input type="date" class="form-control" id="date_accident" name="date_accident">
        </div>
        <br>
        S'agit-il d'une rechute ?  :
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="false" id="rechute_non" name="rechute">
            <label class="form-check-label" for="arretCheck">
                Non
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="true" id="rechute_oui" name="rechute">
            <label class="form-check-label" for="arretCheck">
                Oui
            </label>
        </div>
        <br>
        <div class="form-group">
            Si oui, depuis le  :
            <input type="date" class="form-control" id="date_rechute" name="date_rechute">
        </div>
        <br>
        Avez-vous été hospitalisé(e) ?
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="false" id="hospitalise_non" name="hospitalise">
            <label class="form-check-label" for="arretCheck">
                Non
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="true" id="hospitalise_oui" name="hospitalise">
            <label class="form-check-label" for="arretCheck">
                Oui
            </label>
        </div>
        <br>
        <div class="form-group">
            Si oui, du  :
            <input type="date" class="form-control" id="debut_hospitalise" name="debut_hospitalise">
        </div>
        <br>
        <div class="form-group">
            Au  :
            <input type="date" class="form-control" id="fin_hospitalise" name="fin_hospitalise">
        </div>
        <br>
        Avez-vous repris le travail ?
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="false" id="reprise_non" name="reprise">
            <label class="form-check-label" for="arretCheck">
                Non
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="true" id="reprise_oui" name="reprise">
            <label class="form-check-label" for="arretCheck">
                Oui
            </label>
        </div>
        <br>
        <div class="form-group">
            Si oui, depuis le  :
            <input type="date" class="form-control" id="date_reprise" name="date_reprise">
        </div>
        <br>
        Avez-vous souscrit d'autres contrats de prévoyance auprès d'AXA et/ou d'une autre compagnie ?
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="false" id="souscrit_non" name="souscrit">
            <label class="form-check-label" for="arretCheck">
                Non
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="true" id="souscrit_oui" name="souscrit">
            <label class="form-check-label" for="arretCheck">
                Oui
            </label>
        </div>
        <br>
        <hr class="style1">
        <br>
        Etes-vous affilié(e) : 
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="false" id="secu_social" name="secu_social">
            <label class="form-check-label" for="arretCheck">
                A la Sécurité sociale ? 
            </label>
        </div>
        <div class="form-group">
            Depuis le  :
            <input type="date" class="form-control" id="date_reprise" name="date_secu">
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="false" id="rsi" name="rsi">
            <label class="form-check-label" for="arretCheck">
                Au RSI ? 
            </label>
        </div>
        <div class="form-group">
            Depuis le  :
            <input type="date" class="form-control" id="date_rsi" name="date_rsi">
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="false" id="msa" name="msa">
            <label class="form-check-label" for="arretCheck">
                A la MSA ? 
            </label>
        </div>
        <div class="form-group">
            Depuis le  :
            <input type="date" class="form-control" id="date_msa" name="date_msa">
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="false" id="autre" name="autre">
            <label class="form-check-label" for="arretCheck">
                Autres ? 
            </label>
        </div>
        <div>
            <label for="quel_autre">Lequel ?</label>
            <input type="text" class="form-control" id="quel_autre" name="quel_autre">
        </div>
        <div class="form-group">
            Depuis le  :
            <input type="date" class="form-control" id="date_autre" name="date_autre">
        </div>     

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">A remplir en cas d'accident uniquement</li>
          </ol>
        </nav>
        <br>
        <div class="form-group">
            Date de l'accident :
            <input type="date" class="form-control" id="date_accident_second" name="date_accident_second">
        </div>
        <div>
            <label for="lieu_accident">Lieu de l'accident :</label>
            <input type="text" class="form-control" id="lieu_accident" name="lieu_accident">
        </div>
        <br>
        <div>
            Type d'accident :
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="circulation" id="accident_circulation" name="type_accident">
                <label class="form-check-label" for="arretCheck">
                    Accident de la circulation 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="vie_privee" id="accident_vie_privee" name="type_accident">
                <label class="form-check-label" for="arretCheck">
                    Accident de vie privée 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="travail" id="accident_travail" name="type_accident">
                <label class="form-check-label" for="arretCheck">
                    Accident du travail  
                </label>
            </div>
        </div>
        <br>
        <div>
            L'accident a-t-il été causé par un tiers ? 
            <div class="form-check">
                <input class="form-check-input" type="radio" value="false" id="cause_tiers_non" name="cause_tiers">
                <label class="form-check-label" for="arretCheck">
                    Non  
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="true" id="cause_tiers_oui" name="cause_tiers">
                <label class="form-check-label" for="arretCheck">
                    Oui  
                </label>
            </div>
        </div>
        <br>
        <div>
            <div>
                <label for="detail_accident">Circonstances détaillées de l'accident :</label>
                <input type="text" class="form-control" id="detail_accident" name="detail_accident">
            </div>
        </div>
        <br>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">A remplir en cas d'accident de la circulation uniquement</li>
          </ol>
        </nav>
        <br>
        <div>
            Avez-vous été soumis à un test d'alcoolémie ?
            <div class="form-check">
                <input class="form-check-input" type="radio" value="false" id="test_alcool_non" name="test_alcool">
                <label class="form-check-label" for="arretCheck">
                    Non  
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="true" id="test_alcool_oui" name="test_alcool">
                <label class="form-check-label" for="arretCheck">
                    Oui  
                </label>
            </div>
            <br>
            <div>
                <label for="taux_alcool">Si oui, , quel était votre taux d'alcoolémie (mg/litre d'air expiré ou g/litre de sang) ?</label>
                <input type="text" class="form-control"id="taux_alcool" name="taux_alcool">
            </div>
            <br>
            <div>
                Avez-vous été soumis à un dépistage de stupéfiants ?
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="false" id="test_stupefiant_non" name="test_stupefiant">
                    <label class="form-check-label" for="arretCheck">
                        Non  
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="true" id="test_stupefiant_oui" name="test_stupefiant">
                    <label class="form-check-label" for="arretCheck">
                        Oui  
                    </label>
                </div>
                <br>
                Si oui, le résultat était-il :
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="true" id="resultat_stupefiant_positif" name="resultat_stupefiant">
                    <label class="form-check-label" for="arretCheck">
                        Positif 
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="false" id="resultat_stupefiant_negatif" name="resultat_stupefiant">
                    <label class="form-check-label" for="arretCheck">
                        Négatif  
                    </label>
                </div>
            </div>
            <br>
            <div>
                Un rapport de police ou de gendarmerie a-t-il été établi ?
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="false" id="rapport_police_non" name="rapport_police">
                    <label class="form-check-label" for="arretCheck">
                        Non
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="true" id="rapport_police_oui" name="rapport_police">
                    <label class="form-check-label" for="arretCheck">
                        Oui
                    </label>
                </div>
                <br> 
                <div>
                    <label for="rapport_reference">Références du rapport :</label>
                    <input type="text" class="form-control"id="rapport_reference" name="rapport_reference">
                </div>
            </div>
            <br>
            <div>
                Je reconnais être informé(e) que les réponses aux questions posées sont obligatoires pour le traitement de mon dossier.
                J'autorise mon assureur à collecter et à traiter les informations de santé figurant dans ce questionnaire dans le but de régler les prestations qui me
                sont dues.
                Je déclare être informé(e) que les réponses et informations contenues dans le présent document sont destinées au médecin conseil du service médical
                de l'assureur ainsi qu’éventuellement, au médecin du réassureur de ce dernier.
                Je dispose d'un droit d'accès et de rectification auprès d'AXA - Service Information Clients - 313 Terrasses de l'Arche 92727 - NANTERRE Cedex - pour
                toute information me concernant.
            </div>
            <br>
            <div> 
                <br>
                <div>
                    <label for="uname">Fait à</label>
                    <input type="text" class="form-control" id="fait_a" name="fait_a">
                </div>
                <br>
            </div>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Lexique</li>
          </ol>
        </nav>
        <div>
            <h5>Ces définitions générales sont à titre informatif pour vous aider à remplir ce questionnaire. Seules les
                définitions figurant dans les conditions générales de votre contrat font foi.</h5>
                <br>
            <h6>Incapacité temporaire totale :</h6><br>
            Etat, physique ou mental, résultant d'un accident ou d'une maladie mettant la personne atteinte dans l'obligation reconnue
            par les médecins d'interrompre totalement et de façon continue toute activité professionnelle ou, à défaut de l'exercice d'une
            profession, d'observer un repos complet. 
            <br>
            <h6>Invalidité :</h6><br>
            Il existe différents niveaux d'invalidité : <br>
            <h6> Perte Totale et Irréversible d’Autonomie (PTIA) : </h6>  L’Assuré est considéré comme atteint de Perte Totale et Irréversible
                d’Autonomie s’il est dans l’impossibilité absolue d’exercer une activité quelconque, et dans l’obligation d’avoir recours à
                l’assistance constante d’une tierce personne pour effectuer les actes ordinaires de la vie.<br><br>
            <h6> l'Invalidité Permanente totale (IPT) : </h6> L'assuré est déclaré en invalidité permanente totale quand il est reconnu
                définitivement incapable de se livrer à la moindre activité professionnelle lui procurant gain ou profit, et dont le taux
                d'incapacité fonctionnelle est égal à 100 % par référence au barème prévu par la législation sur les accidents du travail. <br><br>
            <h6> l'Invalidité Permanente Partielle (IPP) : </h6> C'est l'atteinte présumée définitive des capacités physiques ou mentales. Son
                importance est chiffrée par un taux déterminé par référence au barème prévu par la législation sur les accidents du travail,
                sans tenir compte de l'incidence professionnelle. <br><br>
            <h6>l'Invalidité Permanente Partielle >= 66 % (IPP) : </h6> Le taux d'incapacité fonctionnelle par référence au barème prévu par la
                législation sur les accidents du travail est >= 66 %.<br><br>
            <h6> l'Invalidité Professionnelle : </h6> Tout état physique ou mental de l'assuré résultant d'un accident ou d'une maladie mettant
                celui-ci dans l'impossibilité totale permanente et présumée définitive d'exercer la profession indiquée aux conditions
                particulières et effectivement exercée au titre de profession principale à l'époque de l'événement.<br>
        </div>
        <br>
        <br>
        <br>
        <br>

      </div>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="js/script.js"></script>
      </div>
      <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-bottom">
        <div class="container-fluid">
            <ul class="nav navbar-nav"></ul>
            <ul class="nav navbar-nav navbar-right">
                <li><button type="submit" class="btn btn-primary">Envoyer</button></li>
            </ul>
        </div>
      </nav>
    </form>
  </body>
</html>
