<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieMingle</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <nav>
        <div class="container d-flex justify-content-between gap-md-3 gap-lg-5 align-items-center position-relative">
            <div class="d-flex w-sm-100 align-items-center justify-content-between gap-3">
                <div class="logo"><img class="img-fluid" src="./images/logo.png" alt="logo"></div>
                <div class="menu"><i class="fa-solid fa-bars burger-menu fs-3 text-white"></i></div>
            </div>


            <div class="sub-menu d-flex w-25   justify-content-center">
                <ul class="">
                    <li><a class="text-capitalize" href="./contact.html">contact</a></li>
                    <li><a class="text-capitalize" href="./dashboard.html">dashbord</a></li>
                    <li><a class="text-capitalize" href="./about.html">about</a></li>
                    <li><a class="text-capitalize" href="./sign-in.html">sign in</a></li>
                    <li><a class="text-capitalize" href="./sign-up.html">sign up</a></li>
                </ul>
            </div>


            <div class="search-wrapper flex-grow-1">
                <input class="py-2 px-3 rounded-2 w-100 border-0 d-none d-md-block" type="text" placeholder="Search">
            </div>
            <div class="sign-in-wrapper d-flex align-items-center gap-3">
                <a href="./MoviesSeries.html" class="fw-semibold text-white d-none d-md-block"> Watchlist</a>
                <a href="./controller/login.php" class="fw-bold text-white d-none d-md-block">signIn</a>
                <select class="form-select d-none d-md-block" aria-label="Default select example">
                    <option selected>En</option>
                    <option value="2">Fr</option>
                    <option value="3">Sp</option>
                </select>
            </div>
        </div>
    </nav>

    <section class="hero py-4">
        <div class="container row mx-auto">
            <div class="slider col-xl-7 p-0">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <!-- 1 -->
                        <div class="carousel-item active">
                            <img src="./images/hero-bg-1.png" class="d-block w-100" alt="img">
                            <div
                                class="text text-white d-flex justify-content-center align-items-end gap-3 pb-2 px-lg-5 px-2">
                                <div class="img-wrapper">
                                    <img src="./images/casaDePapel.png" alt="img">
                                </div>
                                <i class="fa-regular fa-circle-play fs-1 align-self-center"></i>
                                <div class="">
                                    <h3>La Casa de papel</h3>
                                    <span class="opacity-75 fw-bold">2:19</span>
                                    <p class="opacity-75 w-lg-75">
                                        Celebrate the spooky season with theseHalloween and the spooky
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="carousel-item">
                            <img src="./images/hero-bg-5.png" class="d-block w-100" alt="img">
                            <div
                                class="text text-white d-flex justify-content-center align-items-end gap-3 pb-2 px-lg-5 px-2">
                                <div class="img-wrapper">
                                    <img src="./images/hero-5.png" alt="img">
                                </div>
                                <i class="fa-regular fa-circle-play fs-1 align-self-center"></i>
                                <div class="">
                                    <h3>King Kong</h3>
                                    <span class="opacity-75 fw-bold">1:50</span>
                                    <p class="opacity-75 w-lg-75">
                                        Celebrate the spooky season with theseHalloween and the spooky
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/hero-bg-6.png" class="d-block w-100" alt="img">
                            <div
                                class="text text-white d-flex justify-content-center align-items-end gap-3 pb-2 px-lg-5 px-2">
                                <div class="img-wrapper">
                                    <img src="./images/hero-6.png" alt="img">
                                </div>
                                <i class="fa-regular fa-circle-play fs-1 align-self-center"></i>
                                <div class="">
                                    <h3>Avatar 2020</h3>
                                    <span class="opacity-75 fw-bold">2:12</span>
                                    <p class="opacity-75 w-lg-75">
                                        Celebrate the spooky season with theseHalloween and the spooky
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/hero-bg-4.png" class="d-block w-100" alt="img">
                            <div
                                class="text text-white d-flex justify-content-center align-items-end gap-3 pb-2 px-lg-5 px-2">
                                <div class="img-wrapper">
                                    <img src="./images/hero-4.png" alt="img">
                                </div>
                                <i class="fa-regular fa-circle-play fs-1 align-self-center"></i>
                                <div class="">
                                    <h3>spider man no way home</h3>
                                    <span class="opacity-75 fw-bold">2:33</span>
                                    <p class="opacity-75 w-lg-75">
                                        Celebrate the spooky season with theseHalloween and the spooky
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon swip-btn" aria-hidden="true"></span>
                        <!-- <span class="visually-hidden">Previous</span> -->
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon swip-btn" aria-hidden="true"></span>
                        <!-- <span class="visually-hidden">Next</span> -->
                    </button>
                </div>
            </div>
            <div class="col-5 up-coming-movies d-none d-xl-block p-2">
                <h3 class="main-clr fw-bold">Up next</h3>

                <div class="bg-card d-flex text-white cursor-pointer">
                    <img src="./images/hero-1.png" class="h-100" alt="img">
                    <div class=" p-2 ps-3  pt-3">
                        <i class="fa-regular fa-circle-play fs-2"></i><span class="fs-5 ms-2 opacity-75">1:35</span>
                        <h5 class="card-title fs-4 my-2 fw-bold">Kraven</h5>
                        <p class="card-text opacity-75">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                    </div>
                </div>

                <div class="bg-card d-flex my-2 text-white cursor-pointer">
                    <img src="./images/hero-2.png" class="h-100" alt="img">
                    <div class=" p-2 ps-3 pt-3">
                        <i class="fa-regular fa-circle-play fs-2"></i><span class="fs-5 ms-2 opacity-75">1:44</span>
                        <h5 class="card-title fs-4 my-2 fw-bold">Spider-Man</h5>
                        <p class="card-text opacity-75">build on the card and make up the bulk of content.</p>
                    </div>
                </div>

                <div class="bg-card d-flex text-white cursor-pointer">
                    <img src="./images/hero-3.png" class="h-100" alt="img">
                    <div class=" p-2 ps-3 pt-3">
                        <i class="fa-regular fa-circle-play fs-2"></i><span class="fs-5 ms-2 opacity-75">1:10</span>
                        <h5 class="card-title fs-4 my-2 fw-bold">Short Comings</h5>
                        <p class="card-text opacity-75">Some quick example make up the bulk of the card's content.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="fearures py-5">
        <div class="container">
            <div class="main-heading">
                <h1>Featured today</h1>
            </div>
        </div>
        <div id="carouselExamples" class="carousel slide mt-4 container">
            <div class="carousel-inner container">
                <!-- 1 -->
                <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-12 col-lg-4">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="./images/movie-1.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/movie-2.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/movie-3.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Weekend Picks: 'Cukur', 'Past Lives', and More</p>
                        </div>
                        <div class="col-4 d-none d-lg-block">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="./images/top-new-3.jpg" alt="img">
                                <img class="w-33 flex-grow-1 mx-" src="./images/top-new-2.jpg" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/top-new-4.jpg" alt="img">
                            </div>
                            <p class="m-1 mt-2">'Ligo', 'Ice Age', 'Shrek', and More</p>
                        </div>
                        <div class="col-4 d-none d-lg-block">
                            <div class="d-flex bg-light">
                                <img class="w-33 flex-grow-1" src="./images/featur-1.png" alt="img">
                                <img class="w-33 flex-grow-1 mx-1" src="./images/featur-2.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/featur-3.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Best 3 of picks in October</p>
                        </div>
                    </div>

                </div>
                <!-- 2 -->
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-12 col-lg-4">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="./images/featur-4.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/featur-5.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/featur-6.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Weekend Picks: 'Cukur', 'Past Lives', and More</p>
                        </div>
                        <div class="col-4 d-none d-lg-block">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="./images/featur-7.png" alt="img">
                                <img class="w-33 flex-grow-1 mx-" src="./images/featur-8.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/featur-9.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">'Ligo', 'Ice Age', 'Shrek', and More</p>
                        </div>
                        <div class="col-4 d-none d-lg-block">
                            <div class="d-flex bg-light">
                                <img class="w-33 flex-grow-1" src="./images/featur-10.png" alt="img">
                                <img class="w-33 flex-grow-1 mx-1" src="./images/featur-11.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/featur-12.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Best 3 of picks in October</p>
                        </div>
                    </div>

                </div>
                <!-- 3 -->
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-12 col-lg-4">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="./images/featur-12.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/featur-13.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/featur-3.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Weekend Picks: 'Cukur', 'Past Lives', and More</p>
                        </div>
                        <div class="col-4 d-none d-lg-block">
                            <div class="d-flex gap-1 bg-light">
                                <img class="w-33 flex-grow-1" src="./images/featur-12.png" alt="img">
                                <img class="w-33 flex-grow-1 mx-" src="./images/featur-6.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/featur-13.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">'Ligo', 'Ice Age', 'Shrek', and More</p>
                        </div>
                        <div class="col-4 d-none d-lg-block">
                            <div class="d-flex bg-light">
                                <img class="w-33 flex-grow-1" src="./images/featur-8.png" alt="img">
                                <img class="w-33 flex-grow-1 mx-1" src="./images/featur-1.png" alt="img">
                                <img class="w-33 flex-grow-1" src="./images/featur-7.png" alt="img">
                            </div>
                            <p class="m-1 mt-2">Best 3 of picks in October</p>
                        </div>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExamples" data-bs-slide="prev">
                <span class="carousel-control-prev-icon swip-btn" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExamples" data-bs-slide="next">
                <span class="carousel-control-next-icon swip-btn" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="halloween py-5">
        <div class="container">
            <div class="main-heading">
                <h2>
                    halloween picks
                    <i class="fa-solid fa-angle-right"></i>
                </h2>
                <p class="opacity-50">
                    Our Halloween guide has treats for all.
                </p>
            </div>
            <div id="carouselExampl" class="carousel slide mt-4">
                <div class="carousel-inner container">
                    <!-- 1 -->
                    <div class="carousel-item active">
                        <div class="d-flex">
                            <div class="w-33">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-6.jpg" alt="img">
                                </div>
                                <div class="text mt-3">
                                    <i class="fa-solid fa-list-ul"></i>
                                    <span class="d-inline-block">
                                        Custume Inspiration for 2023
                                    </span>
                                </div>
                            </div>
                            <div class="w-33 mx-3">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-5.jpeg" alt="img">
                                </div>
                                <div class="text mt-3">
                                    <i class="fa-solid fa-list-ul"></i>
                                    <span class="d-inline-block">
                                        Avatar 2022
                                    </span>
                                </div>
                            </div>
                            <div class="w-33">
                                <div class="d-flex bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-3-bg.png" alt="img">
                                </div>
                                <div class="text mt-3">
                                    <i class="fa-solid fa-list-ul"></i>
                                    <span class="d-inline-block">
                                        Rath of man 2021
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- 2 -->
                    <div class="carousel-item">
                        <div class="d-flex">
                            <div class="w-33">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-1.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="./images/movie-2.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="./images/movie-3.png" alt="img">
                                </div>
                                <p class="m-1 mt-2">Weekend Picks: 'Cukur', 'Past Lives', and More</p>
                            </div>
                            <div class="w-33 mx-3">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/top-new-3.jpg" alt="img">
                                    <img class="w-33 flex-grow-1 mx-" src="./images/top-new-2.jpg" alt="img">
                                    <img class="w-33 flex-grow-1" src="./images/top-new-4.jpg" alt="img">
                                </div>
                                <p class="m-1 mt-2">'Ligo', 'Ice Age', 'Shrek', and More</p>
                            </div>
                            <div class="w-33">
                                <div class="d-flex bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-1.png" alt="img">
                                    <img class="w-33 flex-grow-1 mx-1" src="./images/movie-2.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="./images/movie-3.png" alt="img">
                                </div>
                                <p class="m-1 mt-2">Best 3 of picks in October</p>
                            </div>
                        </div>

                    </div>
                    <!-- 3 -->
                    <div class="carousel-item">
                        <div class="d-flex">
                            <div class="w-33">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-1.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="./images/movie-2.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="./images/movie-3.png" alt="img">
                                </div>
                                <p class="m-1 mt-2">Weekend Picks: 'Cukur', 'Past Lives', and More</p>
                            </div>
                            <div class="w-33 mx-3">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/top-new-3.jpg" alt="img">
                                    <img class="w-33 flex-grow-1 mx-" src="./images/top-new-2.jpg" alt="img">
                                    <img class="w-33 flex-grow-1" src="./images/top-new-4.jpg" alt="img">
                                </div>
                                <p class="m-1 mt-2">'Ligo', 'Ice Age', 'Shrek', and More</p>
                            </div>
                            <div class="w-33">
                                <div class="d-flex bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-1.png" alt="img">
                                    <img class="w-33 flex-grow-1 mx-1" src="./images/movie-2.png" alt="img">
                                    <img class="w-33 flex-grow-1" src="./images/movie-3.png" alt="img">
                                </div>
                                <p class="m-1 mt-2">Best 3 of picks in October</p>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampl"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon swip-btn" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampl"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon swip-btn" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="sign-in py-5">
        <div class="main-heading container">
            <h2>
                From your Watchlist
                <i class="fa-solid fa-angle-right"></i>
            </h2>
        </div>
        <div class="container text-center text-white mt-5">
            <i class="fa-regular fa-circle-xmark rotate fs-1 mb-4"></i>
            <h2 class="fs-6 fw-bolder">
                Sign in to access your Watchlist
            </h2>
            <h5 class="mb-4 fs-6 opacity-75">
                Save shows and movies to keep track of what you want to watch.
            </h5>
            <a href="#" class="d-inline-block rounded fw-bold py-2 px-5 fs-7">Sign in for to MovieMingle</a>
        </div>
    </section>

    <section class="more-to-watch py-5">
        <div class="container">
            <div class="main-heading">
                <h2>
                    more to watch
                    <i class="fa-solid fa-angle-right"></i>
                </h2>
                <p class="opacity-50">
                    MovieMingle helps you select the perfect next show or movie to watch.
                </p>
            </div>
            <a href="#"
                class="d-inline-block rounded fw-bold py-2 px-5 text-white border border-2 border-light fs-7">Sign in
                for to MovieMingle</a>
            <a href="#"
                class="d-inline-block rounded fw-bold py-2 px-5 text-white border border-2 border-light ms-4 fs-7">Sign
                in for to MovieMingle</a>
        </div>
    </section>

    <section class="explore py-5">
        <div class="container">
            <div class="main-heading">
                <h1 class="mb-5">Explore Movies & TV shows</h1>
                <h2>
                    top box office (US)
                    <i class="fa-solid fa-angle-right"></i>
                </h2>
                <p class="opacity-50">
                    Weedend of October 2022
                </p>
            </div>
            <div class="row fw-semibold text-white">

                <div class="col-md-6 p-2 d-flex align-items-center gap-3 bg-black-linear">
                    <span class="d-inline-block px-3 sec-num">1</span>
                    <i class="fa-regular fa-circle-xmark rotate fs-3"></i>
                    <div class="flex-grow-1 letter-spacing-1">
                        <p class="mb-1">Five Nights at Freddy's</p>
                        <span class="opacity-75 ">$80M</span>
                    </div>
                </div>

                <div class="col-md-6 p-2 d-flex align-items-center gap-3">
                    <span class="d-inline-block px-3 sec-num">2</span>
                    <i class="fa-regular fa-circle-xmark rotate fs-3"></i>
                    <div class="flex-grow-1 letter-spacing-1">
                        <p class="mb-1">Five Nights at Freddy's</p>
                        <span class="opacity-75 ">$80M</span>
                    </div>
                </div>

                <div class="col-md-6 p-2 d-flex align-items-center gap-3">
                    <span class="d-inline-block px-3 sec-num">3</span>
                    <i class="fa-regular fa-circle-xmark rotate fs-3"></i>
                    <div class="flex-grow-1 letter-spacing-1">
                        <p class="mb-1">Five Nights at Freddy's</p>
                        <span class="opacity-75 ">$80M</span>
                    </div>
                </div>

                <div class="col-md-6 p-2 d-flex align-items-center gap-3 bg-black-linear">
                    <span class="d-inline-block px-3 sec-num">4</span>
                    <i class="fa-regular fa-circle-xmark rotate fs-3"></i>
                    <div class="flex-grow-1 letter-spacing-1">
                        <p class="mb-1">Five Nights at Freddy's</p>
                        <span class="opacity-75 ">$80M</span>
                    </div>
                </div>

                <div class="col-md-6 p-2 d-flex align-items-center gap-3 bg-black-linear">
                    <span class="d-inline-block px-3 sec-num">5</span>
                    <i class="fa-regular fa-circle-xmark rotate fs-3"></i>
                    <div class="flex-grow-1 letter-spacing-1">
                        <p class="mb-1">Five Nights at Freddy's</p>
                        <span class="opacity-75 ">$80M</span>
                    </div>
                </div>

                <div class="col-md-6 p-2 d-flex align-items-center gap-3">
                    <span class="d-inline-block px-3 sec-num">6</span>
                    <i class="fa-regular fa-circle-xmark rotate fs-3"></i>
                    <div class="flex-grow-1 letter-spacing-1">
                        <p class="mb-1">Five Nights at Freddy's</p>
                        <span class="opacity-75 ">$80M</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="news py-5">
        <div class="container">
            <div class="main-heading">
                <h2>
                    top news
                    <i class="fa-solid fa-angle-right"></i>
                </h2>
            </div>
        </div>
        <div id="carousel" class="carousel slide container">
            <div class="carousel-inner container mt-4 ">
                <div class="carousel-item active">
                    <div class="d-flex gap-3">
                        <!-- card 1-1-->
                        <div class="card">
                            <div class="row g-0 ">
                                <div class="col-md-5">
                                    <img src="./images/featur-9.png" class="img-fluid rounded-start h-100" alt="img">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span
                                                    class="ms-4">Rabbit 2</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-2-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="./images/featur-11.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span
                                                    class="ms-4">Father Hood</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-3-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="./images/featur-10.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span
                                                    class="ms-4">The Climb</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="carousel-item">
                    <div class="d-flex gap-3">
                        <!-- card 2-1-->
                        <div class="card">
                            <div class="row g-0 ">
                                <div class="col-md-5">
                                    <img src="./images/featur-6.png" class="img-fluid rounded-start h-100" alt="img">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span
                                                    class="ms-4">From Toronto</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-2-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="./images/featur-7.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span
                                                    class="ms-4">Ali</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-3-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="./images/featur-8.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span
                                                    class="ms-4">Down with the KING</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="carousel-item">
                    <div class="d-flex gap-3">
                        <!-- card 3-1-->
                        <div class="card">
                            <div class="row g-0 ">
                                <div class="col-md-5">
                                    <img src="./images/featur-2.png" class="img-fluid rounded-start h-100" alt="img">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span
                                                    class="ms-4">The plus one</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-2-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="./images/featur-4.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span
                                                    class="ms-4">Dumb Money</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 1-3-->
                        <div class="card d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="./images/featur-3.png" class="img-fluid rounded-start" alt="img">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <p class="card-text text-dark">
                                            ‘The Black Phone 2’ Sets Summer 2025 Release at Universal Oct 27The Wrap
                                        </p>
                                        <p class="card-text"><small class="text-body-secondary">Oct 27 <span
                                                    class="ms-4">Veneciafrenia</span></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="text-white container mt-4">
            <span class="rounded-4 py-1 px-3 border d-inline-block">top news</span>
            <span class="rounded-4 py-1 px-3 border d-inline-block">movie news</span>
            <span class="rounded-4 py-1 px-3 border d-inline-block">TV news</span>
            <span class="rounded-4 py-1 px-3 border d-inline-block">celebrity news</span>
        </div>
    </section>

    <section class="coming-soon py-5">
        <div class="container">
            <div class="main-heading">
                <h2>
                    Coming soon to theaters
                    <i class="fa-solid fa-angle-right"></i>
                </h2>
                <p class="opacity-50">
                    Our Halloween guide has treats for all.
                </p>
            </div>
            <div id="coming-soon" class="carousel slide mt-4">
                <div class="carousel-inner container">
                    <!-- 1 -->
                    <div class="carousel-item active">
                        <div class="d-flex g-2">
                            <!-- 1-1 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-6.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">8 Dec</p>
                                        <p class="m-0">Breaking Bad</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-2 -->
                            <div class="w-33 mx-3 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-10.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">12 Dec</p>
                                        <p class="m-0">King Kong</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-3 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-3-bg.png" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">25 Dec</p>
                                        <p class="m-0">Past Lives</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- 2 -->
                    <div class="carousel-item">
                        <div class="d-flex g-2">
                            <!-- 1-1 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-6.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">8 Dec</p>
                                        <p class="m-0">Breaking Bad</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-2 -->
                            <div class="w-33 mx-3 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-10.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">12 Dec</p>
                                        <p class="m-0">King Kong</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-3 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-3-bg.png" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">25 Dec</p>
                                        <p class="m-0">Past Lives</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- 3 -->
                    <div class="carousel-item">
                        <div class="d-flex g-2">
                            <!-- 1-1 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-6.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">8 Dec</p>
                                        <p class="m-0">Breaking Bad</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-2 -->
                            <div class="w-33 mx-3 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-10.jpg" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">12 Dec</p>
                                        <p class="m-0">King Kong</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1-3 -->
                            <div class="w-33 text-white">
                                <div class="d-flex gap-1 bg-light">
                                    <img class="w-33 flex-grow-1" src="./images/movie-3-bg.png" alt="img">
                                </div>
                                <div class="text bg-card d-flex align-items-center gap-3 p-3 m-0">
                                    <i class="fa-regular fa-bookmark fs-3"></i>
                                    <div class="d-inline-block">
                                        <p class="m-0 opacity-75">25 Dec</p>
                                        <p class="m-0">Past Lives</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#coming-soon" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon swip-btn" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#coming-soon" data-bs-slide="next">
                    <span class="carousel-control-next-icon swip-btn" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <a href="./controller/login.php" class="d-inline-block rounded fw-bold py-2 px-5 fs-7 bg-main text-black">Sign in for more
                access</a>
        </div>
    </section>

    <footer class="py-5">
        <div class="container">
            <div class="social-media text-white fs-1 d-flex justify-content-center gap-4 mb-5">
                <i class="fa-brands fa-tiktok"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
            <div class="mt-5 row">
                <div class="col-sm-12 col-lg-3 d-flex d-lg-block flex-column align-items-center">
                    <div>
                        <img src="./images/logo.png" alt="logo" style="min-width: 100px;">
                    </div>
                    <p class="opacity-75 fs-7">Terms of use | Privacy</p>
                    <p class="opacity-75 fs-7">Copyright by 2019 MovieMingle, Inc</p>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 text-center text-lg-start">
                    <ul class="text-white p-0">
                        <li class="fw-bold mb-3">About Us</li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">Customer Support</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Copyright</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 text-center text-lg-start">
                    <ul class="text-white p-0">
                        <li class="fw-bold mb-3">Our Information</li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mt-3 d-none d-lg-block">
                    <ul class="text-white">
                        <li class="fw-bold mb-3">The Privacy</li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- bootstrap -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>