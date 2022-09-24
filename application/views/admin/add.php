<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/add" method="post" class="myForm">
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" name="description">
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" rows="3" name="text"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Дата</label>
                                <?php $arr = [
                                    'Січень',
                                    'Лютий',
                                    'Березень',
                                    'Квітень',
                                    'Травень',
                                    'Червень',
                                    'Липень',
                                    'Серпень',
                                    'Вересень',
                                    'Жовтень',
                                    'Листопад',
                                    'Грудень',
                                ];
                                $month = date('n') - 1 ?>
                                <input type="" class="form-control" rows="3" name="date" value="<?php echo date("j") . ' ' . $arr[$month] ?>">

                            </div>

                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                        </form>
                        <form action="/admin/add_doc" method="post" class="myForm">
                        <div class="form-group">
                                <label>Для кого документ</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Документ</label>
                                <input class="form-control" type="file" name="doc">
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Добавить документ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>