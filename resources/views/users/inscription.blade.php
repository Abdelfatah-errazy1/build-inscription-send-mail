<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
  <div class="contai">
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                <form action="{{ route('users.store') }}" method="POST">
                  @csrf
    
                  <div class="row">
                    <div class="col-md-6 mb-4">
    
                      <div class="form-outline">
                        <input type="text" id="firstName" name="prenom" class="form-control form-control-lg" />
                        <label class="form-label" for="firstName">prenom</label>
                      </div>
                       <x-error field="prenom" />
                    </div>
                    <div class="col-md-6 mb-4">
    
                      <div class="form-outline">
                        <input type="text" id="lastName" name="nom" class="form-control form-control-lg" />
                        <label class="form-label" for="lastName">Nom</label>
                      </div>
                      <x-error field="nom" />
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">
    
                      <div class="form-outline datepicker w-100">
                        <input type="date" required name="dateNaissance" class="form-control form-control-lg" id="birthdayDate" />
                        <label for="birthdayDate" class="form-label">Date Naissance</label>
                      </div>
                      <x-error field="dateNaissance" />
                       
                    </div>
                    <div class="col-md-6 mb-4">
    
                      <h6 class="mb-2 pb-1">Genre: </h6>
    
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genre" value="M" id="femaleGender"
                          value="option1" checked />
                        <label class="form-check-label" for="femaleGender">Femme</label>
                      </div>
    
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="H" name="genre" id="maleGender"
                          value="option2" />
                        <label class="form-check-label" for="maleGender">Homme</label>
                      </div>
                      <x-error field="genre" />
    
    
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
    
                      <div class="form-outline">
                        <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" />
                        <label class="form-label" for="emailAddress">Email</label>
                      </div>
                      <x-error field="email" />
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
    
                      <div class="form-outline">
                        <input type="tel" name="phone" id="phoneNumber" class="form-control form-control-lg" />
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                      </div>
                      <x-error field="phone" />
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-12 mb-4">
                        <select  placeholder="Spécialité" class=" select form-select" name="specialite" >
                          <option value="" disabled="disabled" selected="true">Spécialité</option>
                           <option value="CHU">Allergologie</option>
                           <option value="Pédiatrie">Pédiatrie</option>
                           <option value="Pneumologie">Pneumologie</option>
                           <option value="Dermatologie">Dermatologie</option>
                           <option value="ORL">ORL</option>
                           <option value="Ophtalmologie">Ophtalmologie</option>
                           <option value="Médecine interne">Médecine interne</option>
                           <option value="Médecine Générale">Médecine Générale</option>
                           <option value="Immunologie">Immunologie</option>
                           <option value="Biologie">Biologie</option>
                           <option value="Recherche fondamentale">Recherche fondamentale</option>
                           <option value="Autres">Autres</option>
                      </select>
                      <x-error field="specialite" />
                  </div>
                    <div class="col-md-6 mb-4">

                      <select name="pays"  id="pays" class="select form-select">
                        <option value="1" >Morocco</option>
                        <option value="2">France</option>
                        <option value="3">Usa </option>
                        <option value="4">Itali</option>
                      </select>
                      <x-error field="pays" />
  
                    </div>  
                    <div class="col-md-6 mb-4">

                      <select name="ville" id="ville" class="select form-select">
                        <option value="1" >Morocco</option>
                        <option value="2">France</option>
                        <option value="3">Usa </option>
                        <option value="4">Itali</option>
                      </select>
                      <x-error field="ville" />
                    </div>  
                  </div>
    
                  <div class="mt-4 pt-2">
                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                  </div>
    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
<script src="{{ asset('assets/js/countries.js') }}"></script>
<script src="{{ asset('assets/js/createCountries.js') }}"></script>
</body>
</html>