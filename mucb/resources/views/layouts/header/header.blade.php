<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUCB Project | Home Page</title>
    <!-- custome css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- owl theme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script>
            $(document).ready(function(){
            let price = JSON.parse(localStorage.getItem('packages')).price;
            console.log(price);
           document.getElementById('price').innerHTML =`$${price} <span class="icon">   <i class='bx bx-cart'></i></span><div class="count"> 1</div>`;
            });
       </script>
</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-0">
            <div class="container">
                <a class="navbar-brand" href="./index.html">LOGO MUCB</a>
                <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="d-flex justify-content-start align-items-center">
                        <i class='bx bx-menu'></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link px-3" href="/">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link px-3" href="#!">New Inspection</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#!">New Inspectors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#!">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#!">Contact us</a>
                        </li>

                        <a href="/all" class="btn order-btn mx-3">Book Inspection</a>
                    </ul>

                    <div class="cart px-3 py-2">
                        <a class="cart-data text-light" id='price' href="/cart">
                            $0.00

                            <span class="icon">
                                <i class='bx bx-cart'></i>
                            </span>

                            <div class="count">
                                0
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar -->
