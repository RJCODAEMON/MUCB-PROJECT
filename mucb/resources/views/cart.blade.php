<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUCB Project | Home Page</title>
    <!-- custome css -->
    <link rel="stylesheet" href="./css/style.css">
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
                <h1 class="h1 text-light text-center">Your Cart</h1>
                <nav aria-label="breadcrumb" class="breadcrumbs large-font">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" role="button" tabindex="0">Home </a></li>
                        <li class="breadcrumb-item active"><a href="#"> Your cart</a></li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- cart-table -->
        <section class="cart-detail py-3 mt-5">
            <div class="container py-5">
                <table class="table align-middle table-responsive-lg">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody id="tableData">
                        <tr>
                            <td scope="row">
                                <button type="button" class="btn btn-link btn-sm px-3 text-decoration-none"
                                    data-ripple-color="dark">
                                    <i class="ri-close-fill text-danger"></i>
                                </button>
                            </td>
                            <td>
                                <figure class="img-wrapper">
                                    <img src="./img/demo2.jpg" alt="product-cart-img" class="img-fluid">
                                </figure>
                            </td>
                            <td class="product-name text-uppercase">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Sed,
                                illum!</td>
                            <td class="text-danger price">$0.00</td>
                            <td class="text-danger price">$0.00</td>
                        <tr>
                            <td scope="row" colspan="5">
                                <form class="coupon-form">
                                    <div class="d-flex gap-2">
                                        <input type="text" class="form-control" placeholder="Coupone Code">
                                        <button class="btn btn-dark coupon">Apply Coupon</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        </tr>
                    </tbody>
                </table>

<H1 id='nocart'style="display:none;">NO ITEMS IN CART</H1>

                <div class="row py-5 checkout">
                    <div class="col-lg-4">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Price
                                <span class="badge bg-success rounded-pill" id="price">$0.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Subtotal
                                <span class="badge bg-success rounded-pill" id="subtotal">$0.00</span>
                            </li>
                        </ul>

                        <div class="row float-end mx-1">
                            <button class="btn btn-outline-success chechout-btn mt-4">Proceed to
                                checkout</button>
                        </div>
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

if (localStorage.getItem("packages") === null) {
            $('#tableData').hide();
            $('#checkout').hide();
            $('#clear').hide();
            $('#nocart').show();


        }
        else
        {
var data = JSON.parse(localStorage.getItem('packages'));

        var k = ` <tbody id="tableData">
                        <tr>
                            <td scope="row">
                                <button type="button" class="btn btn-link btn-sm px-3 text-decoration-none"
                                    data-ripple-color="dark">
                                    <i id='clear' class="ri-close-fill text-danger"></i>
                                </button>
                            </td>
                            <td>
                                <figure class="img-wrapper">
                                    <img src="`+ data.img +`" alt="product-cart-img" class="img-fluid">
                                </figure>
                            </td>
                            <td class="product-name text-uppercase">`+ data.name +`</td>
                            <td class="text-danger price">$`+ data.price +`</td>
                            <td class="text-danger price">$`+ data.price +`</td>
                        <tr>
                            <td scope="row" colspan="5">
                                <form class="coupon-form">
                                    <div class="d-flex gap-2">
                                        <input type="text" class="form-control" placeholder="Coupone Code">
                                        <button class="btn btn-dark coupon">Apply Coupon</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        </tr>
                    </tbody>`;


        document.getElementById('tableData').innerHTML = k;
        document.getElementById('price').innerHTML = '$ '+data.price;
        document.getElementById('subtotal').innerHTML = '$ '+data.price;

        }
        $('#clear').click(function()
        {
            localStorage.clear();
            location.reload();
        });
        </script>
</body>

</html>
