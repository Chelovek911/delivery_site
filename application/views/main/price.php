<body class="body1">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row ">
                    <div class="col d-flex justify-content-center">
                        <p class="text_header6">Цiни на воду</p>
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
                                                    <a href="#">Цiни на воду</a>
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
    
    <div class="container">
        <div class="row mx-5 my-5">
            <div class="col">

                <div class="row">
                    <div class="col">
                        <img src="public\images\Лазурна.png">
                    </div>
                    <div class="col">
                        <img src="public\images\Джерело Святогір'я.png">

                    </div>

                </div>
                <div class="row">
                    <div class="col"><img src="public\images\Бутыль Лазурной 4.png"></div>
                    <div class="col">
                        <p class="text_header8">Кількість бутелів:</p>
                        <div>
                            <div class="row">
                                <div class="col-sm-4"> <input type="text" onchange="schet1()" id="leftinput" class="input_style" name="" value="1" size="2" class="form-control" id="score">

                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <button onclick="plus1()" type="submit" class="btn btn-white plus pt-0"><img width="20px" src="public\images\ant-design_plus-outlined.png"></button>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-white minus pt-0" type="submit" onclick="minus1()"><img width="20px" src="public\images\ant-design_minus-outlined.png"></button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text_header8">Всього до сплати:</p>
                        <div class="row">
                            <div class="col mx-3">
                                <p class="text_header9" id='price'>79 грн</p>

                            </div>


                        </div>
                        <div class="row">
                            <div class="col">
                                <a href=""><img src="public\images\Кнопка Замовити.png"></a>
                            </div>
                        </div>

                    </div>
                    <div class="col"><img src="public\images\Джерело Святогір'я 2.png"></div>
                    <div class="col">
                        <p class="text_header8">Кількість бутелів:</p>

                        <div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input id='kol' onchange="schet()" name="" value="1" size="2" class="input_style">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-white plus pt-0" id='plus' onclick="plus()" type="submit" name="plus"><img width="20px" src="public\images\ant-design_plus-outlined.png"></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-white minus pt-0" id='minus' onclick="minus()" type="submit" name="minus"><img width="20px" src="public\images\ant-design_minus-outlined.png"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="text_header8">Всього до сплати:</p>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <p class="text_header9" id='itogo'>79 грн</p>

                                </div>
                                <img src="public\images\Кнопка Замовити.png">
                            </div>




                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="text_header8">Залог за тару <strong>199 грн.</strong></br>
                                Минимальный стартовый пакет №1 – 2 воды + помпа= <strong>200 грн</strong> </br>
                                Минимальный стартовый пакет №2- 3 воды лазурная = <strong>99 грн</strong>
                            </p>
                        </div>
                    </div>



                </div>
                
                <form method="POST" name="forma2">
                    <div class="col p-0">
                        <div class="form-check">

                            <input class="form-check-input" name="empl_type[]" type="checkbox" value="Full-time" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Full-time
                            </label>

                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="form-check">
                            <input class="form-check-input" name="empl_type[]" type="checkbox" value="Part-time" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Part-time
                            </label>

                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="form-check">
                            <input class="form-check-input" name="empl_type[]" type="checkbox" value="Remote work" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remote work
                            </label>

                        </div>
                    </div>
                    <button>send</button>
                </form>



            </div>
        </div>
        <script>
            function schet() {
                var kol = parseInt(document.getElementById('kol').value);
                var itogo = kol * 79;
                var itog =

                    document.getElementById('itogo').innerText = itogo + ' грн';
                document.getElementById('kol').value = kol;
            }

            function minus() {
                var kol = parseInt(document.getElementById('kol').value);
                if (kol < 2) {
                    alert('НЕльзя меньше 1 бутылки');
                } else {
                    kol--;
                    var itogo = kol * 79;
                    document.getElementById('itogo').innerText = itogo + ' грн';
                    document.getElementById('kol').value = kol;
                }

            }

            function plus() {
                var kol = parseInt(document.getElementById('kol').value);
                kol++;
                var itogo = kol * 79;
                document.getElementById('kol').value = kol;
                document.getElementById('itogo').innerText = itogo + ' грн';
            }

            function plus1() {
                var kol = parseInt(document.getElementById('leftinput').value);
                kol++;
                var itogo = kol * 79;
                document.getElementById('leftinput').value = kol;
                document.getElementById('price').innerText = itogo + ' грн';
            }

            function minus1() {
                var kol = parseInt(document.getElementById('leftinput').value);
                if (kol < 2) {
                    alert('НЕльзя меньше 1 бутылки');
                } else {
                    kol--;
                    var itogo = kol * 79;
                    document.getElementById('price').innerText = itogo + ' грн';
                    document.getElementById('leftinput').value = kol;
                }

            }

            function schet1() {
                var kol = parseInt(document.getElementById('leftinput').value);
                var itogo = kol * 79;
                document.getElementById('price').innerText = itogo + ' грн';
                document.getElementById('leftinput').value = kol;
            }
        </script>
    </div>





</body>