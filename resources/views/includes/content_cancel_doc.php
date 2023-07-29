<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h4>Отозвать документы(Отказ от зачисления)</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="cancel_doc.php" id="FormID">
                <div class="mb-3 form-group row">
                    <label for="cancel" class="col">Прошу отозвать моё заявление на поступление и исключить из
                        всех
                        конкурсных групп/списка поступающих (подавших документы).</label>
                    <div class="col-4" style="display: flex; align-items: center;">
                        <div class="form-check form-check-inline" style="margin-left: 85px;">
                            <input style="transform: scale(2)" class="form-control form-check-input" type="checkbox"
                                id="cancel" name="cancel" tabindex="21">
                        </div>
                    </div>
                </div>
                <div class="mb-3 form-group row">
                    <label for="reason" class="col-2" style="padding-bottom: 10px;">Причина:</label>
                    <div class="col-12 form-check form-check-inline">
                        <textarea class="form-control " type="text" id="reason" required="" name="reason"
                            tabindex="22"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <input name="save" value="1" type="text" hidden="">
                    <button name="submit" type="submit" class="col-11 col-md-8 btn btn-success">Сохранить
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>