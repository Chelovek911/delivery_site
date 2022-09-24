<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form class="myForm" action="/admin/add_extratovar" method="post">
                            <div class="form-group myForm">
                                <label>Название доп товара</label>
                                <input class="form-control" type="text" name="name_extratovar">
                            </div>
                            <div class="form-group">
                                <label>Цена</label>
                                <input class="form-control" type="text" name="description_extratovar">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <textarea class="form-control" rows="3" name="text_extratovar"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img_extratovar">
                            </div>

                            <div class="form-group">
                            <label>Тип товара</label>
                                <select class="form-select" aria-label="Default select example" name='filter-extratovar'>
                                    <option value="pump">Экстра товар 1</option>
                                    <option value="pump_new">Экстра товар 2</option>
                                    <option value="pump1">Экстра товар 3</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>