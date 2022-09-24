<body class="body1">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row ">
                    <div class="col d-flex justify-content-center">
                        <p class="text_header6 animate__animated animate__bounce">Устаткування для розливу</p>
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
                                                    <a href="#">Устаткування для розливу</a>
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
<div class="container my-5">
    <div class="row">
        <div class="col-3 ps-5">
            <form action="/main/filter" method="GET">
                <p class="text_header12"><input type="checkbox" class="form-check-input p-0 my-2" name="filter-tovar[]" value="vodarazd">Водораздавачi</p>
                <p class="text_header12"><input type="checkbox" class="form-check-input p-0 my-2" name="filter-tovar[]" value="culler">Кулер настiльний</p>
                <p class="text_header12"><input type="checkbox" class="form-check-input p-0 my-2" name="filter-tovar[]" value="cullerflor">Кулер пiдлоговий</p>
                <p class="text_header12"><input type="checkbox" class="form-check-input p-0 my-2" name="filter-tovar[]" value="pump">Помпи</p>
                <p class="text_header12"><input type="checkbox" class="form-check-input p-0 my-2" name="filter-tovar[]" value="pump1">Пiдставки пiд бутиля</p>
                <p class="text_header12"><input type="checkbox" class="form-check-input p-0 my-2" name="filter-tovar[]" value="pump_new">Пiдсклянники для кулера</p>

                <button type="submit" class="btn btn-outline-primary">Filter</button>

            </form>


        </div>
        <div class="col">
            <div class="row">
                <?php foreach ($list as $val) : ?>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-sm-2 d-flex" style="justify-content:center ;">
                                <img class="img_tovar" src="/public\images_tovar\<?php echo htmlspecialchars($val['id'], ENT_QUOTES); ?>.jpg">
                            </div>
                            <div class="col my-3">
                                <div class="px-5">
                                    <h1><?php echo $val['name'] ?></h1><br>
                                    <h2><?php echo $val['price'] ?></h2>
                                </div>
                                <form class="myForm" action="/main/add" method="POST">
                                    <input type='text' name='id_of_tovar' value='<?php echo $val['id'] ?>' class="invisible">
                                    <div>

                                        <button type="submit" class="button_1 px-4"><img src="/public\images\Vkorzinu.png"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   






                <?php endforeach ?>
                <div class="demo" id="demo"></div>
                <div id="data-container"></div>
<div id="pagination-container"></div>
            </div>
        </div>
        <script>
            $('#pagination-container').pagination({
                dataSource: [1, 2, 3, 4, 5, 6, 7, 195],
                callback: function(data, pagination) {
                    // template method of yourself
                    var html = template(data);
                    $('#data-container').html(html);
                }
            })
        </script>
    </div>
</div>