<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUCB Project | Home Page</title>
    <!-- custome css -->
    <link rel="stylesheet" href="/css/style.css">
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
                            <a class="nav-link px-3" href="./index.html">Home</a>
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

                        <a href="/all" class="btn order-btn mx-3">Book Inspections</a>
                    </ul>

                    <div class="cart px-3 py-2">
                        <a class="cart-data text-light">
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


    <!-- main  -->
    <main>
        <!-- hero -->
        @foreach ( $packages as $packages )
        <section class="hero1 ">
            <div class="container py-5 d-flex justify-content-center align-items-center flex-column">
                <h1 class="h1 text-light text-center">{{ $packages->package_name }}</h1>
                <nav aria-label="breadcrumb" class="breadcrumbs large-font">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" role="button" tabindex="0">Home /</a></li>
                        <li class="breadcrumb-item active"><a href="#">Prosuct details page</a></li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="product-detail py-3">
            <div class="container py-5">
                <div class="row mt-3">
                    <div class="col-lg-6 col-ms-12 left-side">
                        <figure class="img-wrapper">
                            <img src="/img/{{ $packages->package_id }}.jpg" alt="main-img" class="img-fluid">
                        </figure>
                    </div>



                    <div class="col-lg-6 col-ms-12 right-side">
                        <h2 class="h2 product-title mb-4">{{ $packages->package_name }}</h2>
                        <h3 class="price">${{ $packages->package_price }}</h3>
                        <p class="desc">
                            {{ $packages->package_desc }}
                        </p>
                        <div class="cart-btn">
                            <a href="/cart" class="btn order-btn" id="cart">Add to cart</a>
                        </div>
                    </div>


                </div>
            </div>

        </section>
        @endforeach

        <section class="ambition" id="ambition">
            <div class="container py-5">
                <h1 class="section-title h1">Related Products</h1>

                <div class="owl-carousel owl-theme">
                    <div class="about-card"></div>
                    <div class="about-card"></div>
                    <div class="about-card"></div>
                    <div class="about-card"></div>
                    <div class="about-card"></div>
                    <div class="about-card"></div>
                </div>

            </div>
        </section>

    </main>


    <!-- footer -->
    <footer class="footer" id="footer">
    </footer>


    <!-- custome js -->
    <script src="./js/app.js"></script>
    <!-- Boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- owl js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: 0,
            dots: 0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3

                }
            }
        })
    </script>
     <script>
        $('#cart').click(function() {
            let packages = {
                id: '{{ $packages->package_id }}',
                name: '{{ $packages->package_name }}',
                img: '/img/{{ $packages->package_id }}.jpg',
                price: '{{ $packages->package_price }}'
            };
            if (localStorage.getItem("packages") === null) {

                localStorage.setItem('packages', JSON.stringify(packages));
                alert("Item Added in the Cart");
                window.location = "/cart";
            } else
            {
                if (confirm("You already have few item in your cart, It will be remove if you add new item, do you still want to proceed?"))
                {
                    localStorage.setItem('packages', JSON.stringify(packages));

                    window.location = "/cart";
                }



            }


            // console.log(JSON.parse(localStorage.getItem('packages')));
            // console.log(JSON.parse(localStorage.getItem('packages')).name);


        });
    </script>


</body>

</html>
