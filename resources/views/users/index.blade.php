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

      top: 75vh;
      left: 6vw;
      width: 300px;
      }
  

      .listliks li a img {
        width: 20vw;
      }
    @media (max-width: 1024px){
      .content{
      flex-direction: column;
          width: 100%;
      }
      body .backgroud{
      content:url("assets/imgs/tele0 .jpg");
      }
      .listliks {

        position: absolute;

        display: flex;

        flex-wrap: wrap;

        justify-content: space-between;

        top: 28vh;
    left: 20vw;
        width: 300px;
      }
      .listliks li a img {
        width: 25vw;
      }
      .listliks li a{
        width: 10vw;
      }

}
@media (max-width: 720px){
      .content{
      flex-direction: column;
          width: 100%;
      }
      body .backgroud{
      content:url("assets/imgs/tele0 .jpg");
      }
      .listliks {
        position: absolute;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        top: 30vh;
    left: 20vw;
        width: 300px;
      }
      .listliks li a img {
        width: 30vw;
      }

    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<img  width="100%" height="100%" class="backgroud" alt="">
<ul  class="listliks">

  {{-- <li><a href="ammn/application/e-poster/index.html"  ><img src="{{ asset('ammn/application/assets/img/app/eposter.png') }}" alt="" srcset=""></a></li>  
  <li><a href="ammn/application/p.pdf"  ><img src="{{ asset('ammn/application/assets/img/app/prog.png') }}" alt="" srcset=""></a></li>   --}}
  <li><a href="{{ route('users.inscription') }}"  ><img  src="{{ asset('assets/imgs/inscritption.png') }}" alt="" srcset=""></a></li>  
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