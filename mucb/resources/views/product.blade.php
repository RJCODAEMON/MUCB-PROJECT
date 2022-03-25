@extends('layouts.header.header')


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
    <script src="/js/app.js"></script>
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
