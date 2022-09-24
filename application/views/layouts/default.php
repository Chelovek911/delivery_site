<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/public\styles\main.css" rel="stylesheet">
    <link href="/public/styles/font-awesome.css" rel="stylesheet">
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <script src="/public/scripts/popper.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://pagination.js.org/dist/2.1.5/pagination.js"></script>
    <script src="https://pagination.js.org/dist/2.1.5/pagination.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
</head>

<header>
    <?php include("public/scripts/SxGeo.php");
    $SxGeo = new SxGeo('public/scripts/SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);
    $res = $SxGeo->getCityFull($_SERVER['REMOTE_ADDR']);

    ?>

    <div class="container-fluid  p-0">
        <div class="row p-0 m-0">
            <div class="containter-fluid bg-white">

                <div class="row my-2 bg-white">
                    <div class="col d-flex justify-content-center ms-2 ps-5 ">
                        <p class="text_header1"> Доставка в Харкiв</p>
                    </div>
                    <div class="col-sm-1 p-0 mx-2">
                        <p class="text_header1 my-0">Прийом замовлень:</p>
                        <p class="text_header2 my-0">Пн-Сб: <span class="text_header1">7:30 - 19:00</span></p>
                        <p class="text_header2">Нд:<span class="text_header1"> 07:30 - 17:00</span></p>
                    </div>
                    <div class="col-3 p-0">
                        <p class="text_header1 my-0">Доставка замовлень:</p>
                        <p class="text_header2 my-0">Пн-Сб: <span class="text_header1">8:00 - 19:00</span>(вечірню доставку уточнюйте) </p>
                        <p class="text_header2">Нд: <span class="text_header1"> 8:30 - 16:00 </span></p>
                    </div>

                    <div class="col mx-0 p-0" style="max-width: 180px;">
                        <div class="col p-0 ">
                            <img src="/public/images/Lifelogo.png" style="width: 14.33px; height: 32px;"><span class="text_header3 px-2">+38(063)924-12-16</span>
                        </div>
                    </div>
                    <div class="col p-0 m-0  " style="max-width: 180px;">

                        <div class="col p-0 ">
                            <img src="\public\images\Vodafonelogo.png" style="width: 32px; height: 32px;">
                            <span class="text_header3 ps-2">+38(099)946-52-55</span>

                        </div>



                        <br>

                        <div class="col p-0 m-0">
                            <img src="\public\images\Group.png" style="width: 32px; height: 32px;">
                            <span class="text_header3 ps-2">+38(096)965-93-16</span>
                        </div>



                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center ">
                                <script src="https://yastatic.net/share2/share.js"></script>
                                <div class="ya-share2" data-curtain data-shape="round" data-services="telegram,viber"></div>
                            </div>
                            <div class="col ps-0">
                                <img src="\public\images\lang.png" style="width: 53px; height: 24px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row p-0 m-0">

                <nav class="navbar navbar-expand-lg pb-0 pt-0" style="position:relative; background-color: #2BBAB9; display:inline;">

                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-lg-2 mx-4 p-0 justify-content-end">
                            <a href="/"><img class="float-end" src="/public/images/logo1.png" style="width: 150px; height: 40px;"></a>

                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-8 align-self-center p-0">

                            <div class="collapse navbar-collapse container-fluid " id="navbarNav">
                                <ul class="navbar-nav">
                                    <span class="border-end text_nav p-1">
                                        <li class="nav-item ">
                                            <a class="" href="">Про воду</a>
                                        </li>
                                    </span>
                                    <span class="border-end text_nav p-1">
                                        <li class="nav-item ">
                                            <a class="" href="/price">Цiни на воду</a>
                                        </li>
                                    </span>
                                    <span class="border-end text_nav p-1">
                                        <li class="nav-item ">
                                            <a class="" href="#">Доставка та оплата</a>
                                        </li>
                                    </span>
                                    <span class="border-end text_nav p-1">
                                        <li class="nav-item ">
                                            <a class="" href="/main/urn/1">Обладнання для розливу</a>
                                        </li>
                                    </span>
                                    <span class="border-end text_nav p-1">
                                        <li class="nav-item ">
                                            <a class="" href="/main/extratovar">Супутнi товари</a>
                                        </li>
                                    </span>
                                    <span class="border-end text_nav p-1">
                                        <li class="nav-item ">
                                            <a class="" href="#">Акції</a>
                                        </li>
                                    </span>
                                    <span class="border-end text_nav p-1">
                                        <li class="nav-item ">
                                            <a class="" href="/review">Вiдгуки</a>
                                        </li>
                                    </span>
                                    <span class="border-end text_nav p-1">
                                        <li class="nav-item ">
                                            <a class="" href="/main/news/1">Новини</a>
                                        </li>
                                    </span>
                                    <span class="border-end text_nav p-1">
                                        <li class="nav-item ">
                                            <a class="" href="/production">Наше виробництво</a>
                                        </li>
                                    </span>
                                    <span class="text_nav p-1">
                                        <li class="nav-item ">
                                            <a class="" href="/contact">Контакти</a>
                                        </li>
                                    </span>



                                </ul>

                            </div>
                        </div>


                        <div class="col mx-2 p-1">
                            <?php if (isset($_SESSION['urn']['tovar'])) {
                            ?>
                                <a href=/main/shop>
                                    <div style="position:relative;">
                                        <img class="img-fluid scale" src="/public\images\Shopping cart.png">
                                        <div style="position:absolute ; top:-8px; left: 32px;">
                                            <div class="div">

                                                <img style="position:relative;" src="/public\images\Ellipse 3.png">
                                                <div class="centered2"><?php echo count($_SESSION['urn']['id_tovar']) ?> </div>
                                            </div>


                                        </div>
                                    </div>


                                </a>
                            <?php } ?>
                        </div>

                    </div>

                </nav>

            </div>
            <div class="row mx-5 " style="max-width: 90%;">
                <div class="col ">

                    <div id="carouselExampleCaptions" class="carousel  carousel-dark slide p-0" data-bs-ride="myCarousel" name="">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <img src="/public\images\banner1.png" style="height: 360px" class="d-block w-100" alt="...">

                                </br>

                            </div>
                            <div class="carousel-item">
                                <img src="/public\images\Бутилі лазурної.png" style="height: 360px" class="d-block w-100" alt="...">
                                </br>

                            </div>
                            <div class="carousel-item">
                                <img src="/public\images\Бутилі лазурної.png" style="height: 360px" class="d-block w-100" alt="...">
                                </br>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>
                </div>
                <div class="col-2">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-sm-7 col-md-7 mt-2">
                                    <a href="#"><img src="/public\images\video.png" style="width: 69.37px; height: 67px; float:left" class="scale"></a>
                                    <p class="text_header1 my-0 py-2"> Подивитись відео про компанию</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row ms-5 mt-5">
                        <div class="col mt-5 pt-5">
                            <a href="#"><img src="/public\images\zamoviti.png" style=" width: 139px; height: 139px; " class="scale"></a>
                        </div>
                    </div>


                </div>



            </div>
        </div>

    </div>

    <script>
        var myCarousel = document.getElementById('myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000,
            wrap: false
        })
    </script>
    <?php echo $content; ?>

</header>



<footer class="text-center text-lg-start" style="background-color:#2BBAB9;">

    <div class="container p-4">


        <div class="row">
            <div class="col-lg-2 col-md-5 mb-4 mb-md-0">
                <p class="foot_text1">Долучайтесь до нас</p>
                <script src="https://yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-curtain data-shape="round" data-services="telegram,viber"></div>
                <div class="row mt-5 pt-4">
                    <a href=" "><img class="float-end" src="/public\images\complain.png"></a>
                </div>



            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                <h5 class="foot_text1">Аквамол</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="foot_text2">Про воду</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Ціни на воду</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Обладнання для розливу</a>
                    </li>
                    <li>
                        <a href="/main/news/1" class="foot_text2">Новини</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Наше виробницво</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Контакти</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Договір-оферта</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-5 mb-4 mb-md-0 ps-5">
                <h5 class="foot_text1 mb-0">Інформація для покупців</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="foot_text2">Доставка та оплата</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Супутні товари</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Акції</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Відгуки</a>
                    </li>
                </ul>
            </div>


            <div class="col-lg-3 col-md-5 mb-4 mb-md-0">
                <h5 class="foot_text1">Прийом замовлень:</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="foot_text2">Пн-Сб: 7:30 - 19:00 </a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Нд: 07:30 - 17:00</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Доставка замовлень:</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Пн-Сб: 08:00 - 19:00 <br>(вечірню доставку уточнюйте)
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">Нд: 08:30 - 16:00</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-2 mb-4 mb-md-0 ps-0">
                <h5 class="foot_text1 mb-0">Зв’затися з нами</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="foot_text2">+38 (063) 924-12-16</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">+38 (096) 965-93-16</a>
                    </li>
                    <li>
                        <a href="#!" class="foot_text2">+38 (099) 946-52-55 </a>
                    </li>

                </ul>
            </div>

        </div>

    </div>

</footer>


</html>