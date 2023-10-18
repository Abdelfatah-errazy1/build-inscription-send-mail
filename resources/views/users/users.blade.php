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
<link
  href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"
  rel="stylesheet"
/>
<style>
  body{
    background-image: url('assets/imgs/bg.jpg')
  }
  

</style>
</head>
<body>
  <div class="contai">
    <section class= "gradient-custom">
      <div class="container py-5 ">
        <div class="row justify-content-center align-items-center ">
          <div class="col-12 ">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5 table-responsive">
                <table class="table  table-striped table-hover" id="myTable">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Prénom</th>
                      <th scope="col">date Naissance</th>
                      <th scope="col">Genre</th>
                      <th scope="col">Email</th>
                      <th scope="col">Téléphone</th>
                      <th scope="col">Spécialité</th>
                      <th scope="col">Pays</th>
                      <th scope="col">Ville</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($users as $user )
                    <tr>
                      <td scope="col">{{ $user->id }}</td>
                      <td scope="col">{{ $user->nom }}</td>
                      <td scope="col">{{ $user->prenom }}</td>
                      <td scope="col">{{ $user->dateNaissance }}</td>
                      <td scope="col">{{ $user->genre }}</td>
                      <td scope="col">{{ $user->email }}</td>
                      <td scope="col">{{ $user->phone }}</td>
                      <td scope="col">{{ $user->Specialite }}</td>
                      <td scope="col">{{ $user->pays }}</td>
                      <td scope="col">{{ $user->ville }}</td>
                    </tr>
                    @endforeach  
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
  let table = new DataTable('#myTable');
</script>
</body>
</html>