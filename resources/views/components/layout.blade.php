<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        .bg-custom {
            background-color: #D4CFAE;
        }
        .bg-custom-base {
            z-index: 99;
            background: #D4CFAE;
            width: 100px;
            height: 100px;
        }
        .bg-custom-red {
            background-color: #8D261F;
        }
        .bg-custom-light {
            background-color: #F0E5C1;
        }
        .bg-custom-dark {
            background-color: #75000C;
        }
        .custom-text {
            color: #F0E5C1;
        }
        /*main nav*/
        .styled-button {
            position: relative;
            padding: 10px 20px;
            font-size: 18px;
            background: none;
            color: #F0E5C1;
            border-radius: 5px;
            cursor: pointer;
            overflow: hidden;
            transition: color 0.3s ease;
        }

        .styled-button::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: #D4CFAE;
            transition: width 0.3s ease, left 0.3s ease;
        }

        .styled-button:hover {
            color: #D4CFAE;
        }

        .styled-button:hover::after {
            width: 100%;
            left: 0;
        }

        /*sub nav on the biography part*/
        .sub-styled-button {
            position: relative;
            padding: 10px 20px;
            font-size: 18px;
            background: none;
            color: #75000C;
            border-radius: 5px;
            cursor: pointer;
            overflow: hidden;
            transition: color 0.3s ease;
        }

        .sub-styled-button::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: #75000C;
            transition: width 0.3s ease, left 0.3s ease;
        }

        .sub-styled-button:hover {
            color: #8D261F;
        }

        .sub-styled-button:hover::after {
            width: 100%;
            left: 0;
        }

        /*CSS on the index*/
        .poppins-medium {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
        }
        .poppins-semibold {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: normal;
        }
        .inter {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
        .header-style {
            line-height: 0.0;

        }

        /*CSS on the biography*/
        a {
            text-decoration: none;
        }
        .specialCard {
            width: 280px;
            height: 200px;
            transition: width 2s, height 2s, transform 3s;
            transition-timing-function: linear
        }

        .specialCard:hover {
            width: 150px;
            height: 150px;
            transform: scale(2,3);
        }



    </style>
</head>
<body class="bg-custom">
<!--Navigation Bar-->
<nav class="navbar navbar-expand-lg bg-custom-red">
  <div class="container-fluid">
    <button class="navbar-toggler bg-custom-light custom-text" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand custom-text p-md-3 mx-md-5" href="#">Group</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link custom-text styled-button px-md-3 ms-md-3" aria-current="page" href="{{ url('index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link custom-text styled-button px-md-3 ms-md-3" href="{{ url('biography') }}">Autobiography</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    {{ $slot }}

<!--Footer-->
<div class="bg-custom-red fixed-bottom">
  <footer class="py-2 ">
    <p class="text-center custom-text">&copy; 2024 Company, Inc</p>
  </footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
