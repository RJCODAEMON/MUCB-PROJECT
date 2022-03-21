@extends('layouts.header.header')

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

    @extends('layouts.footer.footer')

