<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUCB Project | Home Page</title>
    <!-- custome css -->
    <link rel="stylesheet" href="./css/style.css">
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

                        <a href="" class="btn order-btn mx-3">Book Inspections</a>
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

        <section class="product-list py-3">
            <div class="container py-5">
                <h1 class="section-title h1">Our Inspections</h1>

                <div class="row mt-3">
                    @foreach ($packages as $packages)

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <div class="row">
                                <figure class="row-6 product-card-img">
                                    <a href="#">
                                        <img src="/img/{{ $packages['package_id'] }}.jpg" alt="product-img" class="img-fluid">
                                    </a>
                                </figure>
                                <div class="row-6 product-card-desc">
                                    <a href="#" class="product-name">
                                        {{ $packages['package_name'] }}
                                    </a>

                                    <p class="desc">
                                        {{ Str::limit($packages['package_desc'], 100) }}
                                    </p>

                                    <div class="label">
                                        <div class="price">
                                            ${{ $packages['package_price'] }}
                                        </div>
                                        <a href="/product/{{ $packages['package_id'] }}" class="btn order-btn">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach







                </div>
            </div>
        </section>

        <!-- about -->
        <section class="ambition" id="ambition">
            <div class="container py-5">
                <h1 class="section-title h1">our customer</h1>

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
</body>

</html>
