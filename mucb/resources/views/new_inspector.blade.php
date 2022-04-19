@extends('layouts.header.header')




    <!-- main  -->
    <main>
        <!-- cart-table -->
        <section class="cart-detail py-1 mt-5">
            <div class="container py-1">

                <div class="row my-5 py-3">
                    <div class="col-lg-5 col-md-12 billig-details order-2">
                        <h4 class="my-3">New Inspector Registration</h4>
                        <div class="my-3">


                            @if($errors->all())

                            @foreach ($errors->all() as $err )
                            <div class="alert alert-danger alert-dismissible fade show" role="alert"
                            data-tor="show:[rotateX.from(90deg) @--tor-translateZ(-5rem; 0rem) pull.down(full)] slow">
                            <strong>{{$err}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                            @endforeach

                    @endif

                    @if(Session('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert"
                        data-tor="show:scale.from(0)">
                        {{Session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                    @endif

                        </div>

                        <form class="needs-validation" action="/add_inspector"  method="POST" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="firstName">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Full Name" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="eamil" name="email" placeholder="Email"
                                        required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="phone">Phone<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        placeholder="Phone Number" required>
                                    <div class="invalid-feedback">
                                        Valid Phone is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="firstName">City or Area <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="city" placeholder="City"
                                        required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="firstName">ZIPCODE <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="zipcode" name="zip"
                                        placeholder="ZIPCODE" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="firstName">Mechanical Experience</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="Mechanical_Experience" rows="3"
                                        placeholder="Short Description of your mechanical experience with certificate"></textarea>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="firstName">Inspection Experience</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="Inspection_Experience" rows="3"
                                        placeholder="Any vehicle inspection experience you have had"></textarea>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="row mx-0">
                                    <button class="btn btn-success chechout-btn mt-4 py-3 text-uppercase">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-7 col-md-12 payment-details  order-1">
                        <figure
                            class="img-wrapper bg-danger h-100 w-100 mt-3 rounded-top rounded-3 position-relative rounded-start rounded-2"
                            style="object-fit: contain;overflow: hidden;">
                            <img src="./img/inspector.jpg" alt="new inspector"
                                class="img-fluid position-absolute w-100 h-100">
                        </figure>
                    </div>
                </div>
        </section>
    </main>
    <!-- footer -->
    {{-- <footer class="footer" id="footer">
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
</body>

</html> --}}
@extends('layouts.footer.footer')
