@extends('layouts.header.header')
<style>
    .invalid-feedback1 {
        color: red;
    }

</style>

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
            {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert"
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
            </div> --}}



            <div class="row my-5">
                <div class="col-lg-6 col-md-12 billig-details">
                    <h4 class="mb-3">Billing & shipping</h4>
                    <form class="needs-validation" action="/save" method="POST" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" name="fname" placeholder=""
                                    value="{{ old('fname') }}" required>
                                <div class="invalid-feedback1">
                                    @error('fname')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" name="lname" placeholder=""
                                    value="{{ old('lname') }}" required>
                                <div class="invalid-feedback1">
                                    @error('lname')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder=""
                                    value="{{ old('email') }}" required>
                                <div class="invalid-feedback1">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="phone" name="phone" placeholder=""
                                    value="{{ old('phone') }}" required>
                                <div class="invalid-feedback1">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="mobile" name="mobile" placeholder=""
                                    value="{{ old('mobile') }}" required>
                                <div class="invalid-feedback1">
                                    @error('mobile')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Comapanyname">Company name (Optional)</label>
                                <input type="text" class="form-control" id="company_name" name="company_name"
                                    placeholder="" value="{{ old('company_name') }}" required>
                                <div class="invalid-feedback1">

                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="country">Country / Regioun <span class="text-danger">*</span></label>
                                <select class="scustom-select d-block w-100" id="country" name="country" value="{{ old('country') }}">
                                    <option value="1">Choose...</option>
                                    <option value="2">One</option>
                                    <option value="3">Two</option>
                                    <option value="4">Three</option>
                                    <option value="5">Four</option>
                                </select>
                                <script>
                                selectElement('country', "{{ old('country') }}");

                                function selectElement(id, valueToSelect) {
                                    let element = document.getElementById(id);
                                    element.value = valueToSelect;
                                }
</script>

                                <div class="invalid-feedback1">
                                    @error('country')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="street">Street address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="street_add1" name="street_add1"
                                    placeholder="house number and street name" value="{{ old('street_add1') }}" required>

                                <div class="invalid-feedback1">
                                    @error('street_add1')
                                        {{ $message }}
                                    @enderror.
                                </div>

                                <input type="text" class="form-control mt-3" id="street_add2" name="street_add2"
                                    placeholder="Appartment,suit,unit.etc(optional)" value="{{ old('street_add2') }}" required>
                                <div class="invalid-feedback">
                                    Valid Street is required.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="city">Town / City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="" value="{{ old('city') }}"
                                    required>
                                <div class="invalid-feedback">
                                    Valid City is required.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="State">State <span class="text-danger">*</span></label>
                                <select class="scustom-select d-block w-100" name="state" id="state">
                                    <option value="1">Choose...</option>
                                    <option value="2">One</option>
                                    <option value="3">Two</option>
                                    <option value="4">Three</option>
                                    <option value="5">Four</option>
                                </select>
                                <script>
                                selectElement('state', "{{ old('state') }}");

                                function selectElement(id, valueToSelect) {
                                    let element = document.getElementById(id);
                                    element.value = valueToSelect;
                                }
                                </script>
                                <div class="invalid-feedback1">
                                    @error('state')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="zipcode">Zipcode <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="postcode" name="zipcode" placeholder=""
                                    value="{{ old('zipcode') }}" required>
                                <div class="invalid-feedback1">
                                    @error('zipcode')
                                        {{ $message }}
                                    @enderror.
                                </div>
                            </div>




                            <h4 class="my-5">Additional Information</h4>
                            <div class="col-md-12 mb-3">
                                <label for="delershipname">Delership Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="dealername" name="dealership_name"
                                    placeholder="" value="{{ old('dealership_name') }}" required>
                                <div class="invalid-feedback1">
                                    @error('dealership_name')
                                        {{ $message }}
                                    @enderror.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="dealership_phone">Delership Phone(Optional)</label>
                                <input type="text" class="form-control" id="dealership_phone" name="dealership_phno"
                                    placeholder="" value="{{ old('dealership_phno') }}" required>
                                <div class="invalid-feedback">
                                    Valid dealership_phone is required.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="saleperson_name	">Sales Person Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="saleperson_name" name="saleperson_name"
                                    placeholder="" value="{{ old('saleperson_name') }}" required>
                                <div class="invalid-feedback1">
                                    @error('saleperson_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="saleperson_phno">Sales Person Phone <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="saleperson_phno" name="saleperson_phno"
                                    placeholder="Sales person phone" value="{{ old('saleperson_phno') }}" required>
                                <div class="invalid-feedback1">
                                    @error('saleperson_phno')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>



                            <div class="col-md-12 mb-3">
                                <label for="vin">VIN # <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="vin" name="vin" placeholder="" value="{{ old('vin') }}"
                                    required>
                                <div class="invalid-feedback1">
                                    @error('vin')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="stock">Vehical Stock # (Optional)</label>
                                <input type="text" class="form-control" id="stock" name="stock" placeholder=""
                                    value="{{ old('stock') }}" required>
                                <div class="invalid-feedback">
                                    Valid stock is required.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="year">Vehical Year <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="year" name="year" placeholder="" value="{{ old('year') }}"
                                    required>
                                <div class="invalid-feedback1">
                                    @error('year')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="make">Vehical Make <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="make" name="make" placeholder="" value="{{ old('make') }}"
                                    required>
                                <div class="invalid-feedback1">
                                    @error('make')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="model">Vehical Model <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="model" name="model" placeholder=""
                                    value="{{ old('model') }}" required>
                                <div class="invalid-feedback1">
                                    @error('model')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="trim">Vehical Trim Level (Optional)</label>
                                <input type="text" class="form-control" id="trim" name="trim" placeholder="" value="{{ old('trim') }}"
                                    required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="ext_color">Vehical Exterior Color (Optional)</label>
                                <input type="text" class="form-control" id="ext_color" name="ext_color" placeholder=""
                                    value="{{ old('ext_color') }}" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="phy_add">Vehical Physical Address (Optional)</label>
                                <input type="text" class="form-control" id="phy_add" name="phy_add" placeholder=""
                                    value="{{ old('phy_add') }}" required>
                                <div class="invalid-feedback">

                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="loc_city">Vehical Location City <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="loc_city" name="loc_city" placeholder=""
                                    value="{{ old('loc_city') }}" required>
                                <div class="invalid-feedback1">
                                    @error('loc_city')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="loc_zip">Vehical Location ZIP (Optional)</label>
                                <input type="text" class="form-control" id="loc_zip" name="loc_zip" placeholder=""
                                    value="{{ old('loc_zip') }}" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="more_info">Addtional Information (Optional)</label>
                                <textarea class="form-control" id="more_info" name="more_info" rows="3"
                                    placeholder="Anything else you would like us to know or verify" >{{ old('more_info') }}</textarea>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="firstName">How did you here about us <span
                                        class="text-danger">*</span></label>
                                <select class="scustom-select d-block w-100" name="reference" id="reference">
                                    <option value="1">Choose...</option>
                                    <option value="2">One</option>
                                    <option value="3">Two</option>
                                    <option value="4">Three</option>
                                    <option value="5">Four</option>
                                </select>

                                <script>
                                    selectElement('reference', "{{ old('reference') }}");

                                    function selectElement(id, valueToSelect) {
                                        let element = document.getElementById(id);
                                        element.value = valueToSelect;
                                    }
                                    </script>

                                <div class="invalid-feedback1">
                                    @error('reference')
                                        {{ $message }}
                                    @enderror
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

{{-- <script>
        const passBox = document.getElementById('password');
        checkBox = document.getElementById('flexCheckDefault').addEventListener('click', event => {
            if (event.target.checked) {
                passBox.classList.add('active')
            } else {
                passBox.classList.remove('active')
            }
        });
    </script> --}}
</body>

</html>
