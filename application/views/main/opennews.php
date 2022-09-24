<?php include('C:\xampp\htdocs\application\views\main\headmenu.php') ?>


<body class="body1">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row ">
                    <div class="col d-flex justify-content-center">
                        <p class="text_header6 animate__animated animate__bounce"><?php echo htmlspecialchars($data1[0]['name'], ENT_QUOTES); ?></p>
                    </div>
                    <div class="row" style="background-color:#2BBAB9;">
                        <div class="col">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <nav class="navbar navbar-expand-sm p-0">
                                            <div class="container-fluid">
                                                <ul class="navbar-nav my-1">
                                                    <li class="nav-item text_nav pe-3 pt-1">
                                                        <a href="#">Головна</a>
                                                    </li>
                                                    <p class="my-0" style=" color: #FFFFFF;">/</p>
                                                    <li class="nav-item text_nav ps-3 pt-1 pe-3">
                                                        <a href="#">Новини</a>
                                                    </li>
                                                    <p class="my-0" style=" color: #FFFFFF;">/</p>
                                                    <li class="nav-item text_nav ps-3 pt-1">
                                                        <a href="#">
                                                            <p style=" color: #FFFFFF;"><?php echo htmlspecialchars($data1[0]['name'], ENT_QUOTES); ?></p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container-fluid my-5">
                    <div class="row ">
                        <div class="col ms-5">
                            <div class="row ms-5">
                                <div class="col text-wrap">
                                    <div style="position:relative;">
                                        <img class="img-fluid img_opennews" src="/public/images/<?php echo $data1[0]['id'] ?>.jpg">
                                        <div style="position:absolute ; top:-6px; left: 161px;">
                                            <div class="div">

                                                <img style="width: 45; height: 60px; position:relative;" src="/public\images\Плашка для даты.png">
                                                <div class="centered"><?php echo htmlspecialchars($data1[0]['date'], ENT_QUOTES); ?></div>
                                            </div>


                                        </div>
                                    </div>

                                    <p class="lh-base text_header5"><?php echo htmlspecialchars($data1[0]['description'], ENT_QUOTES); ?></p>
                                    <p class="lh-base text_header4"><?php echo htmlspecialchars($data1[0]['text'], ENT_QUOTES); ?></p>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center mb-5">
                        <div class="col-lg-6 form_2">
                            <div class="row">
                                <div class="col-sm-8 col-md-8 ps-5 ms-3">
                                    <h3 style="color:#FFFF;">Ваш вiдгук</h5>

                                        <form class="row" action="/sendcomments" method="POST">
                                            <div class="col">
                                                <label class="form-label"><span style="color:#FFFF ;">Iм`я</span></label>
                                                <input type="text" name="name" class="form-control form-control-lg" id="#">
                                            </div>

                                            <div>
                                                <label for="exampleFormControlTextarea1" class="form-label"><span style="color:#FFFF ;">Повідомлення</span></label>
                                                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </form>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-light"><span class="text_header5">Вiдправити</span></button>
                                        </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="container p-5">
                    <?php

                    foreach ($takepost as $val) {

                    ?>







                        <div class="row">
                            <div class="col-sm-6">
                                <div class="testimonial testimonial-primary">
                                    <div class="testimonial-section">
                                        <?php
                                        echo (urldecode($val['text']));


                                        ?>
                                    </div>
                                    <div class="testimonial-desc">

                                        <div class="testimonial-you">
                                            <div class="testimonial-you-name">You Name</div>

                                            <a href="#" class="testimonial-you-company">You Link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>





                        <div class="clearfix"></div>

                        <?php
                        echo $pagination3;
                        ?>
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>