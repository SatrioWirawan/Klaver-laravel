<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="Home">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("")}}assets/css/Style.css">
    <link rel="stylesheet" href="{{asset("")}}assets/css/product.css">
    <link rel = "icon" href ="assets/images/Klaver.Id/LOGO IG KLOVER 3.png" type = "image/x-icon"> 
    <title>Klaver.Id</title>
</head>
<body>
    <header>
        <div id="bg-image">
            <div class="bg">
            </div>
        </div>
        <div class="header-container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="/">
                    <h6>Welcome to,</h6>
                    <h1>Klaver.Id</h1>
                </a>
                <span class="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa fa-bars"></i></span>
                <div id="myNav" class="overlay navbarnav">
                    <img class="nav-logo-overlay" src="{{asset("")}}assets/images/Klaver.Id/LOGO IG KLOVER2.png" alt="">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="/product">Our Collections</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div id="left-container-overlay">
                        <ul class="row m-auto SNS-overlay">
                            <li class="col-4">
                                <a href="https://www.instagram.com/klaver.id" id="fa-instagram-overlay" class="fab fa-instagram" target="_blank"></a>
                            </li>
                            <li class="col-4">
                                <a href="https://api.whatsapp.com/message/USMM72M74XLLO1" id="fa-whatsapp-overlay" class="fab fa-whatsapp" target="_blank"></a>
                            </li>
                            <li class="col-4">
                                <a href="https://shopee.co.id/klaver.id" target="_blank"><img class="shopee-overlay" src="assets/images/Klaver.Id/721px-Shopee_logo gray..png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main_line"></div>
        <div>
            <div class="header-tag">
                <h1>Klaver.Id</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div id="left-container" class="SNS">
            <ul class="col-1">
                <li class="row">
                    <a href="https://www.instagram.com/klaver.id" class="fab fa-instagram" target="_blank"></a>
                </li>
                <li class="row">
                    <a href="https://api.whatsapp.com/message/USMM72M74XLLO1" class="fab fa-whatsapp" target="_blank"></a>
                </li>
                <li class="row">
                    <a href="https://shopee.co.id/klaver.id" target="_blank"><img class="shopee" src="assets/images/Klaver.Id/721px-Shopee_logo gray..png" alt=""></a>
                </li>
            </ul>
          </div>
        </div>
    </header>
    <main id="collections">
        <div class="main container-fluid">
            <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h2 class="display-6">Our Product</h2>
            </div>
            <div id="gal-row" class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-2">
                <div class="col-lg-6">
                    <div class="mcontainer">
                        <a href="/product/abstract">
                            <img src="{{asset("")}}assets/images/Gallery/Abstract/IMG_0199.JPG" alt="Abstract" class="image oversize" width="600">
                            <div class="middle">
                                <div class="text">VOL1 ABSTRACT OVERSIZED SHIRT</div>
                            </div>
                        </a>
                    </div>   
                </div>
                <div class="col-lg-6 ">
                    <div class="mcontainer">
                        <a href="/product/Baloon">
                            <img src="{{asset("")}}assets/images/Gallery/Baloon shirt/IMG_9964.JPG" alt="Baloon" class="image" width="600">
                            <div class="middle">
                                <div class="text">VOL1 BALOON SHIRT</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="gal-row" class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-2">
                <div class="col-lg-6">
                    <div class="mcontainer">
                        <a href="/product/Loose">
                            <img src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9059.JPG" alt="Loose" class="image" width="600">
                            <div class="middle">
                                <div class="text">VOL1 LOOSE STRIPE SHIRT</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div  class="mcontainer">
                        <a href="/product/pocket">
                        <img src="{{asset("")}}assets/images/Gallery/Oversize pocket tee/IMG_0178.JPG" alt="pocket" class="image" width="600">
                        <div class="middle">
                            <div class="text">VOL1 OVERSIZED POCKET TEE</div>
                        </div>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    </main>
    <hr class="featurette-divider">
    <footer>
         <div id="copyright" class="row-1">
        <p class="copyright">Klaver.Id &#169; 2020</p>
        <p class="copyright">powered by: 
            <a class="copyright" href="">Luckycubs</a>
        </p>
    </div>   
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" ></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="{{asset("")}}assets/js/nav.js"></script>
</html>