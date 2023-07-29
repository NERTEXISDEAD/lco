<div class="col-md-9">
    <div class="col-md-12">
        <h4>Сообщения</h4>
    </div>
    <div class="card mb-2">
        <div class="card-header">Заказать обратный звонок</div>
        <div class="card-body">
            <form method="post" action="{{ route('messages') }}" id="call"></form>
            <div class="form-group w-100 mb-2">
                <label for="filial">
                    Филиал
                    <i class="small bi bi-question-circle text-secondary" data-container="body" data-toggle="popover"
                        data-placement="top" data-content="Филиал" data-original-title="" title=""></i>
                </label>
                <select form="call" id="filial" name="filial" class="form-control" required="">
                    <option value="1">ИрГУПС</option>
                    <option value="4">МК ЖТ</option>
                    <option value="5">КрИЖТ</option>
                    <option value="6">ЗабИЖТ</option>
                    <option value="7">СКТиС</option>
                    <option value="8">КТЖТ</option>
                    <option value="10">УУКЖТ</option>
                    <option value="11">ЧТЖТ</option>
                </select>
                <small class="form-text text-muted d-md-none d-sm-block">Филиал</small>
            </div>
            <div class="form-group w-100 mb-2">
                <label for="theme">
                    Тема обращения
                    <i class="small bi bi-question-circle text-secondary" data-container="body" data-toggle="popover"
                        data-placement="top" data-content="Тема обращения" data-original-title="" title=""></i>
                </label>

                <textarea form="call" id="theme" name="theme" class="form-control" maxlength="1000"
                    required=""></textarea>
                <small class="form-text text-muted d-md-none d-sm-block">Тема обращения</small>
            </div>
            <input form="call" name="call" value="1" hidden="">
            <a href="{{ route('messages') }}"><button class="btn btn-outline-success w-100"
                    type="submet">Заказать</button></a>
        </div>
    </div>
    <class="col-13">
        <h5 class="mb-3 text-left py-2 alert alert-warning">
            <p>У вас нет сообщений!</p>
        </h5>
</div>
</div>