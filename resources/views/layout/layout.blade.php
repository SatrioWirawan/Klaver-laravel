<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/Style.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/gallery style.css">
    @yield('css')
    <link rel = "icon" href ="assets/images/Klaver.Id/LOGO IG KLOVER 3.png" type = "image/x-icon"> 
    <title>Klaver.Id</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <p class="navbar-brand fw-bold gal">
                    <a class="klav fw-bold" href="/">
                        Klaver.Id
                    </a>
                    @yield('title')
                </p>
                <span class="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa fa-bars"></i></span>
                <div id="myNav" class="overlay navbarnav">
                    <img class="nav-logo-overlay" src="assets/images/Klaver.Id/LOGO IG KLOVER2.png" alt="">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/product">Our Collections</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact Us</a>
                            </li>
                             <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="content-container">
        @yield('content')
    </div>
    <footer>
        <hr class="featurette-divider">
        <p class="copyright">Klaver.Id &#169; 2020</p>
        <p class="copyright">powered by: 
            <a class="copyright" href="">Luckycubs</a>
        </p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" ></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="{{asset("")}}assets/js/nav.js"></script>
@stack('script')
</html>