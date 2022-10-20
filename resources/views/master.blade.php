<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>@yield('title')</title>

    {{-- bootstrap css 5.0 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
</head>
<body class="body">
    <nav class="navbar navbar-expand-lg navbar-light bg-blackdark">
        <div class="container-fluid d-flex mx-5">
        <div>
            <a class="navbar-brand" href="#"><img src="{{asset('assets/images/favicon.png')}}" alt="" class="logo-2"></a>
        </div>
          <div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Movies</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Actors</a>
                  </li>
                </ul>
                <button type="button" class="btn btn-primary mx-3">Register</button>
                <button type="button" class="btn btn-outline-primary">Login</button>
            </div>
            <div>
                
            </div>
          </div>
          
        </div>
      </nav>

    <div class="content">
        @yield('content')
    </div>
    <footer class="bg-blackdark text-center text-white mt-5">
        <div class="text-center pt-4">
          <img src="{{asset('assets/images/favicon.png')}}" alt="" class="logo-1 me-1">
        </div>
        <div class="text-center py-2">
          <img src="{{asset('assets/images/favicon.png')}}" alt="" class="logo-3 me-1"> is a Website that contains list of movie
        </div>
        <div class="container">
          <section class="">
            <a class="btn btn-floating m-1 rounded-circle bg-secondary" href="" role="button"
              ><i class="fab fa-twitter text-white""></i
            ></a>
            <a class="btn btn-floating m-1 rounded-circle bg-secondary" href="" role="button"
              ><i class="fab fa-instagram text-white"></i
            ></a>
            <a class="btn btn-floating m-1 rounded-circle bg-secondary" href="" role="button"
              ><i class="fab fa-facebook-f text-white"></i
            ></a>
            <a class="btn btn-floating m-1 rounded-circle bg-secondary" href="" role="button"
              ><i class="fab fa-reddit-alien text-white"></i
            ></a>
            <a class="btn btn-floating m-1 rounded-circle bg-secondary" href="" role="button"
              ><i class="fab fa-youtube text-white"></i
            ></a>
          </section>
        </div>
        <div class="text-center py-2">
          Privacy Policy | Terms of Service | Contact Us | About Us
        </div>
        <div class="text-center pb-4">
          Copyright © 2021 <img src="{{asset('assets/images/favicon.png')}}" alt="" class="logo-3 mx-1"> All Rights Reserved
        </div>

      </footer>
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>