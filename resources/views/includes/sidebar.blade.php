<div class="col-md-3">
    <div class="navbar navbar-expand-md navbar-light catalog-navbar p-0">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="list-group ">
                <div class="mb-2">
                    <a href="{{ route('profileMain') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between">
                        <h5>Главная</h5>
                    </a>
                    <a href="{{ route('messages') }}"
                        class="list-group-item list-group-item-action d-flex justify-content-between ">
                        <h5>Сообщения </h5>
                    </a>
                    <div class="accordion-item">
                        <a href="#" class="accordion-button list-group-item list-group-item-action collapsed"
                            data-bs-toggle="collapse" data-bs-target="#coll_Two" aria-expanded="false"
                            aria-controls="coll_Two" id="heading_Two">
                            <div class="row">
                                <h5 class="col-10">Профиль</h5>
                                <i class="col-2 text-right bi bi-caret-down-fill align-self-center">&#9660;</i>
                            </div>
                        </a>
                        <div id="coll_Two" class="accordion-collapse collapse" aria-labelledby="heading_Two"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a href="{{ route('profilePersonalData') }}"
                                    class="list-group-item list-group-item-action ">Основная информация
                                </a>
                                <a href="{{ route('additional_inform') }}"
                                    class="list-group-item list-group-item-action ">Дополнительная
                                    информация
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a href="{{ route('scans_documents') }}" class="list-group-item list-group-item-action ">
                            <h5>Ваши документы</h5>
                        </a>
                    </div>
                    <div class="accordion-item">
                        <a href="#" class="accordion-button collapsed list-group-item list-group-item-action"
                            data-bs-toggle="collapse" data-bs-target="#collapse_Four" aria-expanded="true"
                            aria-controls="collapse_Four" id="heading_Three">
                            <div class="row">
                                <h5 class="col-10">Другие заявления</h5>
                                <i class="col-2 text-right bi bi-caret-down-fill align-self-center">&#9660;</i>
                            </div>
                        </a>
                        <div id="collapse_Four" class="accordion-collapse collapse " aria-labelledby="heading_Three"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a href="{{ route('agreement') }}"
                                    class="list-group-item list-group-item-action ">Заявление о
                                    согласии
                                    на
                                    зачисление</a>


                                <a href="{{ route('cancel_application') }}"
                                    class="list-group-item list-group-item-action ">Заявление об отзыве
                                    заявления о приеме на обучение</a>
                                <a href="{{ route('cancel_doc') }}"
                                    class="list-group-item list-group-item-action ">Отозвать
                                    документы(Отказ
                                    от зачисления)</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('contacts') }}" class="list-group-item list-group-item-action ">
                        <h5>Контакты <br>Приемной Компании</h5>
                    </a>
                </div>
                <div class="card">
                    <br>
                    <a href="{{ URL::route('logout') }}" class="btn btn-dark col-11 mx-auto mb-3"> Выйти </a>
                </div>
            </div>
        </div>
    </div>
</div>