<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/add_tovar" method="post" class="myForm">
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" name="name_tovar">
                            </div>
                            <div class="form-group">
                                <label>Цена</label>
                                <input class="form-control" type="text" name="description_tovar">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <textarea class="form-control" rows="3" name="text_tovar"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img_tovar">
                            </div>

                            <div class="form-group">
                                <label>Тип товара</label>
                                <select class="form-select" aria-label="Default select example" name='filter-tovar'>
                                    <option value="pump">Помпа</option>
                                    <option value="pump_new">Помпа новая</option>
                                    <option value="pump1">Помпа 1</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="extra_tov" value="1">
                                <label class="form-check-label">
                                    Default checkbox
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>