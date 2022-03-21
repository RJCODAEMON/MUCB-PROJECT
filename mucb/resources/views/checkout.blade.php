<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUCB Project | Home Page</title>
    <!-- custome css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- boxicons -->
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
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
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

                        <a href="./product_catelogue.html" class="btn order-btn mx-3">Book Inspections</a>
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
        <section class="hero1 ">
            <div class="container py-5 d-flex justify-content-center align-items-center flex-column">
                <h1 class="h1 text-light text-center">Checkout</h1>
                <nav aria-label="breadcrumb" class="breadcrumbs large-font">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" role="button" tabindex="0">Home </a></li>
                        <li class="breadcrumb-item active"><a href="#">Checkout</a></li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- cart-table -->
        <section class="cart-detail py-3 mt-2">
            <div class="container py-3">
                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                    data-tor="show:[rotateX.from(90deg) @--tor-translateZ(-5rem; 0rem) pull.down(full)] slow">
                    <strong>Returning to customer?</strong> <a href="#" class="text-danger">Click here to login</a>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                    data-tor="show:[rotateX.from(90deg) @--tor-translateZ(-5rem; 0rem) pull.down(full)] slow">
                    <strong>Have a coupone?</strong> <a href="#" class="text-danger">Click here to enter your
                        code</a>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="alert alert-primary alert-dismissible fade show" role="alert" data-tor="show:scale.from(0)">
                    User login <strong>successfully</strong>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>



                <div class="row my-5">
                    <div class="col-lg-6 col-md-12 billig-details">
                        <h4 class="mb-3">Billing & shipping</h4>
                        <form class="needs-validation" action="/save" method="POST" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName" name="fname" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback1">
                                        @error('fname'){{$message}} @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName" name="lname" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="eamil" name="email" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid Phone is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid Phone is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Comapanyname">Company name (Optional)</label>
                                    <input type="text" class="form-control" id="company_name" name="company_name"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Company Name is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="country">Country / Regioun <span class="text-danger">*</span></label>
                                    <select class="scustom-select d-block w-100" name="country">
                                        <option value="1">Choose...</option>
                                        <option value="2">One</option>
                                        <option value="3">Two</option>
                                        <option value="4">Three</option>
                                        <option value="5">Four</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Valid Country is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="street">Street address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="street_add1" name="street_add1"
                                        placeholder="house number and street name" value="" required>

                                    <div class="invalid-feedback">
                                        Valid Street is required.
                                    </div>

                                    <input type="text" class="form-control mt-3" id="street_add2" name="street_add2"
                                        placeholder="Appartment,suit,unit.etc(optional)" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Street is required.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="city">Town / City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid City is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="State">State <span class="text-danger">*</span></label>
                                    <select class="scustom-select d-block w-100" name="state">
                                        <option value="1">Choose...</option>
                                        <option value="2">One</option>
                                        <option value="3">Two</option>
                                        <option value="4">Three</option>
                                        <option value="5">Four</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Valid Country is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="zipcode">Zipcode <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="postcode" name="zipcode"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid PostCode is required.
                                    </div>
                                </div>



                                <div class="col-md-12 form-check d-flex align-items-center mx-2">
                                    <input class="form-check-input"
                                        style="height:15px;width: 15px;padding: 0!important;" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label mx-3" for="flexCheckChecked">
                                        Create an account
                                    </label>
                                </div>

                                <div class="col-md-12 mb-3 password" id="password">
                                    <label for="password">Create account password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control mt-2" id="password" name="password"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Password is required.
                                    </div>
                                </div>

                                <h4 class="my-5">Additional Information</h4>
                                <div class="col-md-12 mb-3">
                                    <label for="delershipname">Delership Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="dealername" name="dealership_name"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Dealername is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="dealership_phone">Delership Phone(Optional)</label>
                                    <input type="text" class="form-control" id="dealership_phone"
                                        name="dealership_phno" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid dealership_phone is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="saleperson_name	">Sales Person Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="saleperson_name"
                                        name="saleperson_name" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid saleperson name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="saleperson_phno">Sales Person Phone <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="saleperson_phno"
                                        name="saleperson_phno" placeholder="Sales person phone" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>



                                <div class="col-md-12 mb-3">
                                    <label for="vin">VIN # <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="vin" name="vin" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="stock">Vehical Stock # (Optional)</label>
                                    <input type="text" class="form-control" id="stock" name="stock" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid stock is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="year">Vehical Year <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="year" name="year" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid Year is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="make">Vehical Make <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="make" name="make" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid Make is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="model">Vehical Model <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="model" name="model" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid Model is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="trim">Vehical Trim Level (Optional)</label>
                                    <input type="text" class="form-control" id="trim" name="trim" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="ext_color">Vehical Exterior Color (Optional)</label>
                                    <input type="text" class="form-control" id="ext_color" name="ext_color"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="phy_add">Vehical Physical Address (Optional)</label>
                                    <input type="text" class="form-control" id="phy_add" name="phy_add"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="loc_city">Vehical Locatin City <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="loc_city" name="loc_city"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="loc_zip">Vehical Location ZIP (Optional)</label>
                                    <input type="text" class="form-control" id="loc_zip" name="loc_zip"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="more_info">Addtional Information (Optional)</label>
                                    <textarea class="form-control" id="more_info" name="more_info" rows="3"
                                        placeholder="Anything else you would like us to know or verify"></textarea>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="firstName">How did you here about us <span
                                            class="text-danger">*</span></label>
                                    <select class="scustom-select d-block w-100" name="reference">
                                        <option value="1">Choose...</option>
                                        <option value="2">One</option>
                                        <option value="3">Two</option>
                                        <option value="4">Three</option>
                                        <option value="5">Four</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="col-lg-6 col-md-12 payment-details">
                        <h4 class="mb-3">Payment Details</h4>
                        @foreach ($packages as $packages)

                        <input type="hidden" name="package_id" value="{{ $packages->package_id }}">
                        <input type="hidden" name="price" value="{{ $packages->package_price }}">

                            <div class="payment-desc py-3">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-4">
                                        <h4>{{ $packages->package_name }}</h4>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-4">
                                        Price
                                        <span
                                            class="badge bg-success rounded-pill">${{ $packages->package_price }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-4">
                                        Subtotal
                                        <span
                                            class="badge bg-success rounded-pill">${{ $packages->package_price }}</span>
                                    </li>
                                </ul>
                        @endforeach
                        <div class="row mx-0">
                            <button type="submit" class="btn btn-outline-success chechout-btn mt-4">Proceed to
                                checkout</button>
                        </div>
                    </div>

                    </form>
                </div>
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

    <script>
        const passBox = document.getElementById('password');
        checkBox = document.getElementById('flexCheckDefault').addEventListener('click', event => {
            if (event.target.checked) {
                passBox.classList.add('active')
            } else {
                passBox.classList.remove('active')
            }
        });
    </script>
</body>

</html>
