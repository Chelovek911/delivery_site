<body class="body1">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row ">
                    <div class="col d-flex justify-content-center">
                        <p class="text_header6 animate__animated animate__bounce">Новини</p>
                    </div>
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
                                                <li class="nav-item text_nav ps-3 pt-1">
                                                    <a href="#">Новини</a>
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
            <div class="container p-5  my-5">
                <div class="row gx-5" style="padding-left: 7%; padding-right:7%;">

                    <?php if (empty($list)) : ?>
                        <p>Список постов пуст</p>
                    <?php else : ?>
                        <?php foreach ($list as $val) : ?>

                            <div class="col-3 scale p-0" style="margin-bottom: 4%;">

                                <a href="/opennews/<?php echo $val['id']; ?>">
                                    <div style="position:relative;">
                                        <img class="img-fluid img_news" src="/public\images\<?php echo htmlspecialchars($val['id'], ENT_QUOTES); ?>.jpg">
                                        <div style="position:absolute ; top:-6px; left: 161px;">
                                            <div class="div">

                                                <img style=" width: 45; height: 60px; position:relative;" src="/public\images\Плашка для даты.png">
                                                <div class="centered"><?php echo htmlspecialchars($val['date'], ENT_QUOTES); ?></div>
                                            </div>


                                        </div>
                                    </div>





                                    <p class="text_header7"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></p>
                                </a>
                            </div>


                        <?php endforeach; ?>
                </div>

            </div>



        <?php endif; ?>
        <div class="clearfix">
            <?php echo $pagination; ?>
        </div>

        </div>


    </div>










    </div>
    </div>
</body>