
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
      body {
      padding: 0;
      margin: 0;
      font-family: "Nunito Sans";
      background-color: #b3b3ff;
      }
      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
      }
      p{
      margin: 0;
      text-transform: capitalize;
      font-weight: bold;
      }
      th{
      padding: 10px !important;
      }
      .table{
      margin-bottom: 0px;
      }
      .dropdown-toggle{
      background-color: #fff;
      }
      .table>:not(caption)>*>*{
      border-color: #F4BE2C;
      vertical-align: middle;
      white-space: nowrap;
      }
      .table>:not(:first-child){
      border-top:#F4BE2C;
      }
      .table>thead{
      background-color:#F4BE2C;
      color: #fff;
      }
      .row{
      align-items: center;
      }
      .form-control {
      line-height: 2;
      border: 1px solid #ddd;
      border-radius: 2px;
      }
      .form-control:focus{
      box-shadow: none;
      border-color:#F4BE2C;
      }
      .form-check-input:checked{
      background-color: #00ff00;
      border-color: #F4BE2C;
      }
      .form-check-input:focus{
      box-shadow: none;
      }
      .form-control:hover{
      border-color: #F4BE2C;
      }
      .bg-custom {
      border: 1px solid #F4BE2C;
      }
      .btn-custom {
      border-color: #F4BE2C;
      color: #F4BE2C;
      }
      .btn-custom:hover {
      background-color: #F4BE2C;
      color: #fff;
      box-shadow:0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
      }
      .row.m-0{
      border-bottom: 1px solid #f4be2b;
      margin-bottom: 15px !important;
      background: #f4be2b;
      font-weight: 600;
      color: #fff;
      }
      .row.mb-2{
      margin: 0;
      }
      .col-lg-4 p{
      font-size: 12px;
      }
      }
      @media(max-width: 992px) {
      form{
      width: 80%;
      }
      }
      @media(max-width: 575px) {
      form{
      width: 100%;
      }
   }
    </style>
<body>

	<!-- main -->
	<div class="main-w3layouts wrapper">

		<div class="main-agileinfo">
			<div class="agileits-top">
			<div class="container">
      <!-- HEARD PAGE -->

    <h1 class="border border-dark text-center mt-3 p-3 mb-2 bg-primary text-white rounded-pill" >Buletin d'Inscription </h1> <br>
    <p>  Année Universitaire : 2022 - 2023</p>

<div class="container">
<form name="Form" id="/formulaire" method="post" action="{{url('/store_formulaire')}}">
@csrf
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="mySwitch" name="gender" value="male" >
  <label class="form-check-label" for="mySwitch">Monsieur</label>
    </div>
   <div class="form-check form-switch">
   <input class="form-check-input" type="checkbox" id="mySwitch" name="gender" value="female">
  <label class="form-check-label" for="mySwitch">Madame</label>
   </div>
   <div class="form-check form-switch">
   <input class="form-check-input" type="checkbox" id="mySwitch" name="gender" value="female">
  <label class="form-check-label" for="mySwitch">Melle</label>
   </div>
   <h1 class="border border-dark text-center mt-3 p-3 mb-2 bg-primary text-white rounded-pill" >Student Registration Form </h1> <br>

    <div class="container">
  <div class="row ">
    <div class="col-md-6">
    <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control @error('Username')  is-invalid  @enderror" id="Username" type="text" name="nom" placeholder="Mom"  value="{{ old('Username') }}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
           <div class="mb-3">
            <label for="lastname" class="form-label">Prénom</label>
            <input type="text" class="form-control @error('lastname')  is-invalid  @enderror" id="lastname" type="text" name="lastname" placeholder="Prénom"  value="{{ old('lastname') }}">
            @error('lastname')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Numéro cellulaire</label>
            <input type="text" class="form-control @error('lastname')  is-invalid  @enderror" id="lastname" type="numero" name="numero" placeholder="Numéro cellulaire"  value="{{ old('lastname') }}">
            @error('lastname')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">date de naissance</label>
            <input type="date" class="form-control @error('birthday')  is-invalid  @enderror" id="birthday" type="date" name="naissance" placeholder="date de naissance"  value="{{ old('birthday') }}">
            @error('birthday')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">lieu de naissance</label>
            <input type="text" class="form-control @error('city')  is-invalid  @enderror" id="city" type="city" name="lieu" placeholder="lieu de naissance"  value="{{ old('city') }}">
            @error('birthday')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
    </div>

    <div class="col-md-6">
    <div class="mb-3">
            <label for="email" class="form-label">Adresse Email</label>
            <input type="email" class="form-control @error('email')  is-invalid  @enderror" id="email" type="email" name="email" placeholder="Email"  value="{{ old('email') }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="Niveau Scolaire " class="form-label">Niveau Scolaire </label>
            <div class="dropdown">
            <input type="text" class="form-control @error('Niveau Scolaire')  is-invalid  @enderror" id="Niveau Scolaire " type="Niveau Scolaire " name="Niveau_Scolaire" placeholder="Niveau Scolaire "  value="{{ old('Niveau Scolaire ') }}">
            @error('Niveau Scolaire ')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

         <div class="mb-3">
            <label for="Profession" class="form-label">Profession/ Etudes </label>
            <input type="text" class="form-control @error('Profession')  is-invalid  @enderror" id="Profession" type="Profession" name="Profession" placeholder="Profession"  value="{{ old('Profession') }}">
            @error('Profession')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
    </div>
    <div class="mb-3">
            <label for="Urgence" class="form-label">Contact d'urgence </label>
            <input type="text" class="form-control @error('Urgence')  is-invalid  @enderror" id="Profession" type="Profession" name="urgence" placeholder="Urgence"  value="{{ old('Profession') }}">
            @error('Urgence')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
</div>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Maladies/ Allergies</label>
  <select class="form-select" id="inputGroupSelect01" name="maladies">
    <option selected>Choose...</option>
    <option value="Diabète de type 1 et diabète de type 2">Diabète de type 1 et diabète de type 2</option>
      <option value="Maladie coronaire">Maladie coronaire </option>
       <option value="Paraplégie">Paraplégie</option>
       <option value="AUTRES">AUTRES </option>
  </select>
</div>

        <div class="mb-3">
        <h1 class="border border-dark text-center mt-3 p-3 mb-2 bg-primary text-white rounded-pill" >Formation Professionnelle « Mini MBA » et « Masterclass » </h1> <br>

        <p> DES (09 Mois de Formation à base de Projets Pratiques)  </p>
        <input type="checkbox" id="payement" name="formation1" value="Management des Entreprises" >
        <label for="payement">Management des Entreprises</label><br />
        <input type="checkbox" id="payement" name="formation2" value="Management et marketing évènementiel">
        <label for="payement">Management et marketing évènementiel</label><br />
        <input type="checkbox" id="payement" name="formation3" value="Gestion des ressources Humaines">
        <label for="payement">Gestion des ressources Humaines</label><br />
        <input type="checkbox" id="payement" name="formation4" value="Commerce International">
        <label for="payement">Commerce International</label><br />
        <input type="checkbox" id="payement" name="formation5" value="Comptabilité et Finances">
        <label for="payement">Comptabilité et Finances</label><br />
      </div>
      <div class="mb-3">

              <p> Masterclass (07 Mois à base de Projets pratiques)  </p>

        <input type="checkbox" id="payement" name="formation6" value="Photographie Professionnelle">
        <label for="payement">Photographie Professionnelle</label><br />
        <input type="checkbox" id="payement" name="formation7" value="Motion graphique Design">
        <label for="payement">Motion graphique Design</label><br />
        <input type="checkbox" id="payement" name="formation8" value="Web Design UI/UX">
        <label for="payement">Web Design UI/UX </label><br />
        <input type="checkbox" id="payement" name="formation9" value="Développement Web">
        <label for="payement">Développement Web </label><br />
        <input type="checkbox" id="payement" name="formation10" value="Développement Application Mobile">
        <label for="payement">Développement Application Mobile</label><br />
        <input type="checkbox" id="payement" name="formation11" value="Design graphique (PAO)">
        <label for="payement">Design graphique (PAO)</label><br />
        <input type="checkbox" id="payement" name="formation12" value="Design d’intérieur">
        <label for="payement">Design d’intérieur</label><br />

      </div>
      <div class="mb-3">
          <p> Mini MBA (144 heures à base de Projets Pratiques) </p>

          <input type="checkbox" id="payement" name="formation13" value="Community Management">
          <label for="payement">Community Management</label><br />
          <input type="checkbox" id="payement" name="formation14" value="Marketing Digital">
          <label for="payement">Marketing Digital</label><br />
          <input type="checkbox" id="payement" name="formation15" value="Copywriting et Rédaction Web">
          <label for="payement">Copywriting et Rédaction Web</label><br />
          <input type="checkbox" id="payement" name="formation16" value="Marketing Digital">
          <label for="payement">Marketing Digital</label><br />
          <input type="checkbox" id="payement" name="formation17" value="Publicité et Branding">
          <label for="payement">Publicité et Branding</label><br />
      </div>
      <div class="mb-3">
        <h1>Formation Professionnelle qualifiante</h1>
        <p> Formation Professionnelle et Accompagnement Pratique  </p>
        <input type="checkbox" id="payement" name="formation18" value="Assistanat de direction">
        <label for="payement">Assistanat de direction</label><br />
        <input type="checkbox" id="payement" name="formation19" value="Secrétariat générale">
        <label for="payement">Secrétariat générale </label><br />
        <input type="checkbox" id="payement" name="formation20" value="Réceptionniste en hôtellerie">
        <label for="payement">Réceptionniste en hôtellerie</label><br />
        <input type="checkbox" id="payement" name="formation21" value="Bureautique/ agent de Saisie">
        <label for="payement">Bureautique/ agent de Saisie</label><br />
        <input type="checkbox" id="payement" name="formation22" value="Guide Accompagnateur touristique">
        <label for="payement">Guide Accompagnateur touristique</label><br />
        <input type="checkbox" id="payement" name="formation23" value="Agent de billetterie">
        <label for="payement">Agent de billetterie</label><br />
      </div>

      <div class="mb-3">
        <br>
      <h1>Modalités de paiement des formations</h1>
      <input type="radio" name="paiement" value="Cache" required="" checked>
        <label for="paiement">Cache</label><br />
        <input type="radio" name="paiement" value="Chèque" required="">
        <label for="paiement">Chèque</label><br />
        <input type="radio" name="paiement" value="Par tranches" required="">
        <label for="paiement">Par tranches</label><br />
      </div>


          <button type="submit" class="btn btn-primary"onclick="alert('Your choice makes us happy')" value="Click Me!">Submit</button>
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          </form>

          <div class="main-w3layouts wrapper">
          <div class="main-agileinfo">
            <div class="agileits-top">
            <div class="container">
            <h1 class="border border-dark text-center mt-3 p-3 mb-2 bg-primary text-white rounded-pill" >Conditions Générale de l’inscription</h1> <br>
          <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Préambule :
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>Wonder Works Academy propose aux candidats des formations professionnelles et d’accompagnement diplômantes en un rythme d’études alternés. Le candidat suit son parcours au sein de l’établissement suivant un calendrier de formation selon son choix lors de l’inscription. A la fin de son parcours de formation, le candidat effectue un stage pratique au sein d’une entité professionnelle en accord avec Wonder Works Academy en fonction d’un calendrier défini par l’entité elle-même, soit il travaille sur un projet réel défini par le staff de l’établissement scolaire, sois il présente ou expose son projet ou son travail artistique ou quiconque lors d’un évènement dédié pour ces fins. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 1 :
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
          <p>Wonder Works Academy s’engage à fournir aux candidats régulièrement inscrits et en règle avec l’administration de l’Académie, les prestations telles que définies dans le « règlement intérieur » pour la rentrée scolaire 2022/2023. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Art 2 :
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>  Le/ la Candidat(e) reconnait avoir pris connaissance du Règlement intérieur de l’Académie et du règlement des études</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 3 :
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p> Les frais d’études sont composés des frais d’études et des frais pédagogiques dus à l’entité anglaise (LISD, UK).
      Les frais pédagogiques (LISD UK) sont payables par versement direct en dinar :
      -	Volume horaire de moins de 120 heures : 10 000 da
      -	Volume Horaire de 120 et de 144 heures : 13000 da
      -	Volume Horaire supérieur à 144 heures :  20000 da
      </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 4 :
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p> Les frais d’admission sont payables dès inscription primaire avant le début de la formation choisie. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 5 :
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p> Le candidat(e) doit s’acquitter des frais d’études normalement au moins un mois avant l’ouverture du parcours choisi : soit en totalité pour paiement comptant, partiellement (versement par tranches)pour le paiement échelonné.. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 6 :
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>  un(e) candidat(e) ne peut accéder aux cours si ses obligations financières ne sont pas respectées, et s’il ou elle n’a pas respecté les échéances prévues ci-dessous. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 7 :
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>   Un candidat ne peut pas être diplômé si son engagement financier ou comportement durant le parcours ne sont pas respectés, sera invalide. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 8 : Remboursement :
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>  -	Si la demande d’annulation est reçue avant le début ou durant le parcours de la formation, le candidat aura 85% du remboursement, dans une période de trois mois ferme</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 9 :
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>  en cas de force majeure, les frais d’études sont régularisés au prorata temporis. La force majeure est appréciée par la direction. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 10 :
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>L’académie réserve le droit de partager des photos dans l’ensemble des réseaux sociaux pour des fins de communications. </p><br>
            <p> Tout litige qui pourra survenir dans l’exécution de la présente convention sera soumis aux procédures contentieuses. </p><br>
            </div>
          </div>
        </div>
      </div>
      <div>
      <section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Register for free</span>
          <button type="button" class="btn btn-outline-light btn-rounded">
            Sign up!
          </button>
        </p>

      </section>
      <p> The International Learning Center Algeria - Wonder Works Academy</p>
      <p>  Adresse : Rue Didouche Mourad Batiment 1Ter, 3e étage, Alger Centre</p>
      <p> The International Learning Center Algeria - Wonder Works Academy</p>
      <p> Tel : +213 554 058 228 +213 558 837 407</p>
      <p> The International Learning Center Algeria - Wonder Works Academy</p>
      <p>Email : academy.wonderworks@gmail.com web : FB/ IG/ IN (Wonder Works Academy)</p>
       </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="#">(Wonder Works Academy)</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>

      <script src="index.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
