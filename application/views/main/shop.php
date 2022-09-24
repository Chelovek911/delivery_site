<body class="body1">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row ">
                    <div class="col d-flex justify-content-center">
                        <p class="text_header6 animate__animated animate__bounce">Корзина</p>
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
                                                    <a href="#">Корзина</a>
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
        </div>
    </div>
</body>

<div class="container ">
    <div class="row animate__animated animate__backInDown animate__slower">
        <div class="col my-5 mx-5">
            <div class="row ">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <nav class="navbar navbar-expand-sm p-0">
                                    <div class="container-fluid" style="background: linear-gradient(93.56deg, #92E0DA 3.03%, #0EABAA 100%); border-radius: 10px;">
                                        <div class="col d-flex" style="justify-content: center;">
                                            <h3 style="color: #fff;">Наименование</h3>
                                        </div>
                                        <div class="col d-flex" style="color: #fff; justify-content: center;">
                                            <h3>Количество</h3>
                                        </div>


                                        <div class="col d-flex" style="color: #fff; justify-content: center;">
                                            <h3>Стоимость</h3>
                                        </div>

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $totalprice = 0;
            $i = 0;
            foreach ($row as $val) : ?>

                <div class="row animate__animated animate__bounceInLeft animate__slower">
                    <div class="col-1 ms-4 pe-0">
                        <img class="img-fluid rounded" src="/public\images_tovar\<?php echo htmlspecialchars($val['id'], ENT_QUOTES); ?>.jpg" style="width: 80px; height: 70px;  " />
                    </div>
                    <div class="col-4 ps-4">
                        <p class="text_header10">
                            <?php echo $val['name'] ?>
                        </p>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-2">
                                <input type="text" style=" width: 40px; outline: none; border: none;" class="text_header10 " id="kol_vo<?php echo $i ?>" value="<?php $s = array_count_values($_SESSION['urn']['id_tovar']);

                                                                                                                                                                foreach ($s as $key => $f) {
                                                                                                                                                                    if ($key == $val['id']) {
                                                                                                                                                                        echo $f;
                                                                                                                                                                    }
                                                                                                                                                                }


                                                                                                                                                                ?>">



                            </div>
                            <div class="col my-2">
                                <button type="button" onclick="minus2(<?php echo $i ?>)" class="btn btn-danger">-</button>
                                <button type="button" onclick="plus2(<?php echo $i ?>)" class="btn btn-primary ">+</button>
                            </div>

                        </div>


                    </div>
                    <div class="col-2 ms-5 ps-4">

                        <?php

                        foreach ($s as $key => $f) {
                            if ($key == $val['id']) {
                                $sto = $val['price'] * $f;
                            }
                        }

                        $totalprice = $totalprice + $sto;
                        ?>
                        <p class="text_header10" id="new<?php echo $i ?>">

                            <?php echo $sto; ?>


                        </p>

                        <script>
                            let f = [];
                            let stoim = [];

                            function plus2(id) {
                                let e = parseInt(document.getElementById('kol_vo' + id).value);

                                if (e < 2) {

                                    f[id] = parseInt(document.getElementById('new' + id).innerHTML);
                                    stoim[id] = f[id];
                                } else stoim[id] = f[id];
                                e++;
                                document.getElementById('kol_vo' + id).value = e;

                                state = e * f[id];

                                document.getElementById('new' + id).innerHTML = e * f[id];
                                g();
                            }

                            function minus2(id) {
                                let e = document.getElementById('kol_vo' + id).value;
                                if (e < 2) {
                                    f[id] = parseInt(document.getElementById('new' + id).innerHTML);
                                    stoim[id] = f[id];
                                } else stoim[id] = f[id];
                                e--;
                                if (e < 1) {
                                    document.getElementById('kol_vo' + id).value = 1;
                                } else document.getElementById('kol_vo' + id).value = e;
                                if (e < 1) {
                                    e = 1;
                                }


                                document.getElementById('new' + id).innerHTML = e * f[id];
                                g();
                            }
                        </script>




                    </div>
                    <script>

                    </script>
                </div>

            <?php $i++;
            endforeach ?>
            <script>
                function g() {
                    summ = 0;
                    i = <?= $i ?>;
                    i--;
                    for (j = 0; j <= i; j++) {
                        let s = parseInt(document.getElementById('new' + j).innerHTML);
                        summ = summ + s;
                    }
                    document.getElementById('totalprice').innerHTML = summ;
                }
            </script>



            <div class="row animate__animated animate__backInUp animate__slower">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <nav class="navbar navbar-expand-sm p-0">
                                    <div class="container-fluid" style="background: linear-gradient(93.56deg, #92E0DA 3.03%, #0EABAA 100%); border-radius: 10px;">
                                        <div class="col-4 me-5" style="color: #fff; justify-content: center;">

                                        </div>
                                        <div class="col-3 ms-4" style="color: #fff;">
                                            <h3>Всего: <?php echo count($_SESSION['urn']['id_tovar']) ?> шт</h3>
                                        </div>


                                        <div class="col-3 ms-5 ps-4" style="color: #fff;">
                                            <h3 id='totalprice'><?php
                                                                echo $totalprice;
                                                                ?></h3>
                                        </div>

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-5" style="width: 100%; text-align: right;">


                <button class="neon-button">Оформить заказ</button>

            </div>
        </div>
    </div>