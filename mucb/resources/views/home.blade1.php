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


    <!-- main  -->
    <main>
        <!-- hero -->
        <section class="hero" id="hero">
            <div class="container py-5">
                <!-- video -->
                <video playsinline autoplay muted loop poster="polina.jpg" id="bgvid">
                    <source src="./img/hero-bg.mp4" type="video/mp4">
                </video>

                <div class="hero-desc">
                    <span class="text-danger text-uppercase h3" style="font-weight: 600;">perfection</span>
                    <h1 class="h1 hero--title">
                        give your car a true
                        <br>customer look!
                    </h1>

                    <ul class="tips-desc p-0">
                        <li><span class="text-light text-uppercase d-flex align-content-center"><span
                                    class="icon-circle">
                                    <i class='bx bx-check'></i></span><span class="tips">Book
                                    inspection</span></li>
                        <li><span class="text-light text-uppercase d-flex align-content-center"><span
                                    class="icon-circle">
                                    <i class='bx bx-check'></i></span><span class="tips">make a payment</span>
                        </li>
                        <li><span class="text-light text-uppercase d-flex align-content-center"><span
                                    class="icon-circle">
                                    <i class='bx bx-check'></i></span><span class="tips">enjoy our
                                    services</span></li>

                    </ul>
                </div>
            </div>
        </section>

        <!-- services -->
        <section class="services py-3" id="services">
            <div class="container py-5">
                <h1 class="section-title h1">Our Inspections</h1>
                <div class="row row-cols-sm-2 p-0 my-3">
                    <!-- service card1 -->
                    @foreach ($packages as $packages)
                        <div class="col-lg-6 col-md-12">
                            <div class="services-card">
                                <figure class="img-container">
                                    <img style=" width: 256px;height: 350px;
                                object-fit: cover;" src="/img/{{ $packages['package_id'] }}.jpg" alt="">
                                </figure>
                                <div class="card-content">
                                    <h3 class="service-name">
                                        {{ $packages['package_name'] }}
                                    </h3>
                                    <p class="desc">
                                        {{ Str::limit($packages['package_desc'], 100) }}
                                    </p>

                                    <div class="label">
                                        <div class="price">
                                            ${{ $packages['package_price'] }}
                                        </div>
                                        <a href="/product/{{ $packages['package_id'] }}"
                                            class="btn order-btn mx-lg-3">Book Inspection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- ctc -->
        <section class="banner" id="banner">
            <div class="container py-5 text-center text-light">
                <h1 class="text-light text-uppercase ctc-text">We test car as per <br> your choise</h1>


            </div>
        </section>

        <!-- work pattern -->
        <section class="work-pattern">
            <div class="container py-5 text-center">
                <h1 class="section-title h1">Why we grate</h1>
                <div class="car-skeleton row">
                    <div class="col-lg-4 car-md-4 left-side">
                        <div class="row" style="margin: 4rem 0;">
                            <div class="row-6 my-4" style="height:150px;background: rgb(254,248,248);">
                                <div class="left-content-wrapper">
                                    <div class="desc-wrapper">
                                        <a href="#">Fast low cost froight</a>

                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A quo mollitia
                                            blanditiis nemo eum possimus tempora reiciendis voluptatem!</p>
                                    </div>

                                    <div class="number-wrapper">
                                        <span class="number">1.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row-6 my-4" style="height:150px;background: rgb(254,248,248);">
                                <div class="left-content-wrapper">
                                    <div class="desc-wrapper">
                                        <a href="#">Largest Range</a>

                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A quo mollitia
                                            blanditiis nemo eum possimus tempora reiciendis voluptatem!</p>
                                    </div>

                                    <div class="number-wrapper">
                                        <span class="number">3.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 car-md-8 car-body">
                        <img src="./img/topLayout.png" alt="car-body" class="img-fluid">
                    </div>
                    <div class="col-lg-4 car-md-4 right-side">
                        <div class="row" style="margin: 4rem 0;">
                            <div class="row-6 my-4" style="height:140px;background: rgb(254,248,248);">
                                <div class="right-content-wrapper">
                                    <div class="desc-wrapper">
                                        <a href="#">Customer Service</a>

                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A quo mollitia
                                            blanditiis nemo eum possimus tempora reiciendis voluptatem!</p>
                                    </div>

                                    <div class="number-wrapper">
                                        <span class="number">2.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row-6 my-4" style="height:140px;background: rgb(254,248,248);">
                                <div class="right-content-wrapper">
                                    <div class="desc-wrapper">
                                        <a href="#">25 Years in Business</a>

                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A quo mollitia
                                            blanditiis nemo eum possimus tempora reiciendis voluptatem!</p>
                                    </div>

                                    <div class="number-wrapper">
                                        <span class="number">4.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- about -->
        <section class="about" id="about">
            <div class="container py-5">
                <h1 class="section-title h1">What we do</h1>
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <div class="about-card">
                            <div class="about-card-desc">
                                <h3 class="h3">Offer best Inspections</h3>

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem cumque
                                    assumenda aut omnis.Lorem ipsum dolor sit amet..Lorem ipsum dolor sit amet.</p>

                                <div class="more-about">
                                    <a href="" class="btn order-btn">MORE <i class='bx bxs-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="about-card">
                            <div class="about-card-desc">
                                <h3 class="h3">test using smart toolinspection at your choise</h3>

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor sit.</p>

                                <div class="more-about">
                                    <a href="" class="btn order-btn">MORE <i class='bx bxs-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="about-card">
                            <div class="about-card-desc">
                                <h3 class="h3">test using smart toolinspection</h3>

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem cumque
                                    assumenda aut omnis.</p>

                                <div class="more-about">
                                    <a href="" class="btn order-btn">MORE <i class='bx bxs-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="about-card">
                            <div class="about-card-desc">
                                <h3 class="h3">creating accurate reports</h3>

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem cumque
                                    assumenda aut omnis.</p>

                                <div class="more-about">
                                    <a href="" class="btn order-btn">MORE <i class='bx bxs-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- about -->
        <section class="ambition" id="ambition">
            <div class="container py-5">
                <h1 class="section-title h1">our customer</h1>
                <!-- <div class="row owl-carousel owl-theme">
                    <div class="col-lg-4 col-sm-12">
                        <div class="about-card">

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="about-card">

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="about-card">

                        </div>
                    </div>
                </div> -->

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

        <!-- dwn file -->
        <!-- ctc -->
        <section class="dwn-sec" id="dwn-sec">
            <div class="container py-5">
                <div class="row">
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

        let price = JSON.parse(localStorage.getItem('packages')).price;
        console.log(price);
        document.getElementById('price').innerHTML =
            `$${price} <span class="icon">    <i class='bx bx-cart'></i></span><div class="count"> 1</div>`;


    </script>

</body>

</html>