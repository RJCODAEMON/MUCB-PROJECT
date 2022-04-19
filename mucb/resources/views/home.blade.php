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
                                  <a href="/product/{{ $packages['package_id'] }}">  <img style=" width: 256px;height: 350px;
                                object-fit: cover;" src="/img/{{ $packages['package_id'] }}.jpg" alt="" ></a>
                                </figure>
                                <div class="card-content">
                                    <a href="/product/{{ $packages['package_id'] }}">
                                    <h3 class="service-name">
                                        {{ $packages['package_name'] }}
                                    </h3>
                                    <p class="desc">
                                        {{ Str::limit($packages['package_desc'], 100) }}
                                    </p>
                                </a>
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
     <!-- ctc2 -->
     <section class="banner2" id="banner2">
        <div class="row">
            <div class="col-lg-6 img-container">asd</div>
            <div class="col-lg-6 banner2-desc">
                <div class="container">
                    <h2 class="text-light">About Our Company</h2>
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
                        accusamus
                        laborum
                        pariatur dolores
                        itaque eaque molestiae architecto voluptates harum quam vel quas earum doloremque quia sit
                        modi
                        expedita
                        sequi aliquid officiis qui esse, exercitationem facere?</p>
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
                        accusamus
                        laborum
                        pariatur dolores
                        itaque eaque molestiae architecto voluptates harum quam vel quas earum doloremque quia sit
                        modi
                        expedita
                        sequi aliquid officiis qui esse, exercitationem facere?</p>

                    <a href="#" class="btn btn-outlin-darkbtn btn-outline-light rounded-0 px-4 py-2 mt-4">Our
                        Portfolio</a>
                </div>
            </div>
        </div>
    </section>


    <!-- work pattern -->
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
            <h1 class="section-title h1 text-center">What we do</h1>
            <div class="row gap-0">
                <div class="col-lg-4 col-sm-12">
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
                <div class="col-lg-4 col-sm-12">
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
                <div class="col-lg-4 col-sm-12">
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
            </div>
        </div>
    </section>
      <!-- about -->
      <section class="ambition" id="ambition">
        <div class="container py-5">
            <h1 class="section-title h1">our customer</h1>
            <div class="owl-carousel owl-theme">
                <div class="about-card">
                    <div class="circle pulse green"></div>
                    <figure class="img-container">
                        <img src="./img/pexels-andrea-piacquadio-3822840.jpg" alt="customer">
                    </figure>

                    <div class="customer-details">
                        <span class="customer-name">J.J.Magdoom</span>
                        <span class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </span>
                        <span class="customer-service-date">12/03/2022</span>
                    </div>
                </div>
                <div class="about-card">
                    <figure class="img-container">
                        <img src="./img/pexels-andrea-piacquadio-3822840.jpg" alt="customer">
                    </figure>

                    <div class="customer-details">
                        <span class="customer-name">A.R.Rehman</span>
                        <span class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </span>
                        <span class="customer-service-date">12/03/2022</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <section class="testimonial text-center">
            <div class="container">

                <div class="heading white-heading">
                </div>
                <div id="testimonial4">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial4_slide py-5">
                                    <p>I’m writing to ask if you wouldn’t mind giving us a short testimonial for our
                                        website. We’re updating a few pages, and I’m hoping to add something from you.
                                        It would link back to your site, so it’s actually a good thing for your SEO.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial4_slide py-5">
                                    <p>Would this be ok with you? If this makes you even a little bit uncomfortable, no
                                        worries at all. But if you are ok with it, I can send you a very short blurb for
                                        you to review, or you can write a sentence or two and send it over. Whatever is
                                        easiest for you.

                                        Thank you, Bob!
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial4_slide py-5">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @extends('layouts.footer.footer')
