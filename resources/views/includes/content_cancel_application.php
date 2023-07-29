<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h4>Заявление об отзыве заявления о приеме на обучение</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="cancel_application.php" id="FormID">
                <div class="mb-3 form-group row">
                    <label for="cancel" class="col">Прошу исключить меня из списков зачисленных на 1 курс и отозвать
                        ранее поданное заявление о согласии на зачисление.</label>
                    <div class="col-4"
                        style="margin-bottom: 10px; margin-top: 10px; margin-left: 200px; display: flex; align-items: center; margin: 0 auto;">
                        <div class="form-check form-check-inline" style="margin-left: 65px;">
                            <input
                                style="transform: scale(2); margin-bottom: 10px; margin-left: 200px; margin-top: 10px; display: flex; align-items: center; margin: 0 auto;"
                                class="form-control form-check-input" type="checkbox" id="cancel" name="cancel">
                        </div>
                    </div>
                </div>
                <div class="mb-3 form-group row">
                    <label class="col-sm-4 col-form-label" for="reason">Укажите причину отзыва
                        заявления:</label>
                    <div class="col-sm-8">
                        <textarea type="text" class="form-control" id="reason" placeholder="Причина" value=""
                            name="reason" required=""></textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <input name="save" value="1" type="text" hidden="">
                    <button name="submit" type="submit" class="col-11 col-md-8 btn btn-success">Сохранить
                    </button>
                </div>
                </ form>
        </div>
        </ div>
    </div>