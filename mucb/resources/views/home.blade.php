    @extends('layouts.header.header')
    <!-- main  -->
    <main>
        <!-- hero -->
        <section class="hero" id="hero">
            <div class="container py-5">
                <!-- video -->
                <video playsinline autoplay muted loop {{-- poster="./img/polina.jpg" --}} id="bgvid">
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

    @extends('layouts.footer.footer')
