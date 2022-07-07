<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../img/logo1.png" />
    <title>Elphone Store</title>
    <link rel="stylesheet" href="../css/flickity.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Secular+One&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- main css file -->
    <link rel="stylesheet" href="../css/main.css" />
</head>

<body class="custom-scrollbar" id="index">

    <!-- nav section -->
    <header class="s" id="nav">
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a href="../index.php"><img src="../img\logo.png" alt="Elphone Store" id="logo"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                        <div class="search">
                            <input type="search">
                            <button class="icon-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>

                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="../index.php" class="nav-link" aria-current="page">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="Dropdown" role="button"
                                    data-toggle="dropdown" aria-expanded="false">
                                    Mobiles
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="Dropdown">
                                    <li><a class="dropdown-item" href="Apple.php">Apple</a></li>
                                    <li><a class="dropdown-item" href="Samsung.php">Samsung</a></li>
                                    <li><a class="dropdown-item" href="Oppo.php">oppo</a></li>
                                    <li><a class="dropdown-item" href="huawei.php">Huawei</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="cart.php" class="nav-link"><i class="fa-solid fa-cart-shopping"></i></a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="Dropdown" role="button"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-regular fa-user"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="Dropdown">
                                    <li><a class="dropdown-item" style="user-select: none;" disabled>User Name</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="signup.php">sign in / sign out</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>




    <!-- main section -->
    <section id="signup">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-black-50" style="border-radius: 1rem;">
                        <div class="card-body pt-2 pb-2 ps-4 pe-4 text-center">
                            <div class="mb-md-5 mt-md-4 ">
                                <h3 class="fw-bold mb-4 ">Create new account</h3>
                                <form action="" class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="form-outline form-white mb-3 col-6">
                                            <input type="text" id="typeTextX" class="form-control form-control-lg "
                                                placeholder="First name" name="lname" minlength="2" maxlength="10"
                                                required>
                                            <div class="invalid-tooltip">Make sure to write the frist name</div>
                                        </div>
                                        <div class="form-outline form-white mb-3 col-6">
                                            <input type="text" id="typeTextX" class="form-control form-control-lg"
                                                placeholder="Last name" name="fname" minlength="2" maxlength="10"
                                                required>
                                            <div class="invalid-tooltip">Make sure to write the last name</div>
                                        </div>
                                        <div class="form-outline form-white mb-3 ">
                                            <input type="text" id="typeNumberX" class="form-control form-control-lg"
                                                placeholder="Phone number" name="phone"
                                                onkeypress="isInputNumber(event)" minlength="10" maxlength="10"
                                                required>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                </div>
                                            </div>
                                            <div class="invalid-tooltip inphone">Make sure to write your phone number
                                            </div>
                                        </div>
                                        <div class="form-outline form-white mb-3 col-12">
                                            <input type="email" id="typeEmailX" class="form-control form-control-lg "
                                                placeholder="email" name="email" required>
                                            <div class="invalid-tooltip">Make sure to write the email</div>
                                        </div>
                                        <div class="form-outline form-white mb-3 col-12">
                                            <input type="password" id="typePasswordX"
                                                class="form-control form-control-lg " placeholder="Password"
                                                name="password" required>
                                            <i class="fa-solid fa-eye" id="color" onclick="myFunction()"></i>
                                            <div class="invalid-tooltip">Make sure to type the password</div>

                                        </div>
                                        <div class="form-outline form-white mb-3 col-12">
                                            <input type="password" id="typePasswordX1"
                                                class="form-control form-control-lg " placeholder="Re-enter Password"
                                                name="password" required>
                                            <i class="fa-solid fa-eye" id="color1" onclick="myFunction1()"></i>
                                            <div class="invalid-tooltip">Make sure to type the password</div>

                                        </div>

                                        <div class="col-4">
                                            <select name="Day" id="Day" class="form-control form-control-lg" required>
                                                <option value="" disabled selected>Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                            <div class="invalid-tooltip">Choose your birthday</div>
                                        </div>

                                        <div class="col-4">
                                            <select name="Month" id="Month" class="form-control form-control-lg"
                                                required>
                                                <option value="" disabled selected>Month</option>
                                                <option value="jan">January</option>
                                                <option value="feb">February</option>
                                                <option value="mar">March</option>
                                                <option value="apr">April</option>
                                                <option value="may">May</option>
                                                <option value="jun">June</option>
                                                <option value="jul">July</option>
                                                <option value="agu">August</option>
                                                <option value="sep">September</option>
                                                <option value="oct">October</option>
                                                <option value="nov">November</option>
                                                <option value="dec">December</option>
                                            </select>
                                            <div class="invalid-tooltip">Choose your birth month</div>
                                        </div>

                                        <div class="col-4">
                                            <select name="Year" id="Year" class="form-control form-control-lg" required>
                                                <option value="" disabled selected>Year</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                            </select>
                                            <div class="invalid-tooltip">Choose your year of birth</div>
                                        </div>
                                        <div>
                                            <button value="signup"
                                                class="mouse-cursor-gradient-tracking  px-5 mt-3 text-center"
                                                name="signup" data-testid="royal_signup_button"
                                                type="submit">Register</button>
                                        </div>
                                        <div class="mt-3">
                                            <a class="c1" href="login.php">Log in</a>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer id="footer">
        <div class="container text-center mt-5">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                    <h5 class="footer-text">About us</h5>
                    <p class="footer-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam, quidem.</p>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="d1">
                        <h5 class="footer-text">Follow us</h5>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>








    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
    <!-- main js file -->
    <script src="../js/main.js"></script>
</body>

</html>