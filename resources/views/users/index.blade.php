<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inscription</title>
  <link rel="stylesheet" href="{{ asset('assets/css/index1000.css') }}">
  <style>
    body{
      position: relative;
    }
   .backgroud{
       position: absolute;
       top: 0%;
       width: 99%;
       height: 100%;
      
       content: url('assets/imgs/PC.jpg')
   }
   .listliks {

      position: absolute;

      display: flex;

      flex-wrap: wrap;

      justify-content: space-between;

      top: 60vh;
      left: 10vw;
      width: 300px;
      }
  

 
    @media (max-width: 1024px){
      .content{
      flex-direction: column;
          width: 100%;
      }
      body .backgroud{
      content:url("assets/imgs/tele1.jpg");
      }
      .listliks {

        position: absolute;

        display: flex;

        flex-wrap: wrap;

        justify-content: space-between;

        top: 58vh;
        left: 10vw;
        width: 400px;
      }
      .listliks li a img {
        width: 55vw;
      }

}
@media (max-width: 720px){
      .content{
      flex-direction: column;
          width: 100%;
      }
      body .backgroud{
      content:url("assets/imgs/tele1.jpg");
      }
      .listliks {
        position: absolute;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        top: 61vh;
        left: -4vw;
        width: 400px;
      }
      .listliks li a img {
        width: 55vw;
      }

    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<img  width="100%" height="100%" class="backgroud" alt="">
<ul  class="listliks">

  <li><a href="{{ route('users.inscription') }}"  ><img src="{{ asset('assets/imgs/inscrit.png') }}" alt="" srcset=""></a></li>  
</ul>
@if (session('success'))
 <script>
  Swal.fire({
      icon: 'success',
      title: 'Alert',
      text: 'Vous vous êtes bien inscrit',
  });
</script> 
@endif

</body>
</html>