<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h4>Основная информация</h4>
        </div>
        <div class="card-body">
            <div class="col-13">
                <h5 class="mb-3 text-left py-2 alert alert-warning">
                    <p>Уважаемые абитуриенты, заполняйте данные паспорта в строгом соответствии с самим документом!
                        После проверки Вашего профиля, изменить Личные данные будет невозможно. Если Вы обнаружили
                        ошибку свяжитесь с приемной комиссией</p>
                </h5>
            </div>
            <input type="hidden" name="abit_id" id="abit_id" value="313010">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block text-left mb-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1" id="heading_1">
                            <h4>
                                Личные данные
                                <div id="pers_info" class="d-inline">
                                    <i id="c[4]" class="bi bi-exclamation-square-fill text-warning"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Данные не заполнены/не проверены"></i>
                                </div>
                            </h4>
                        </button>
                    </div>
                    <div id="collapse_1" class="accordion-collapse collapse " aria-labelledby="heading_1"
                        data-bs-parent="#accordionExample">
                        <div class="card-body ">
                            <form method="POST" action="profilePersonalData.php" id="PersInfo">
                                <div class="accordion-body">
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                            <label for="DropdownFormLastName"><i
                                                    class="text-danger">*</i>Фамилия</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Фамилия"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input name="name1" class="form-control" id="DropdownFormLastName" value=""
                                                placeholder="Фамилия" required="required" readonly="" type="text">
                                            <small class="form-text text-muted d-md-none d-sm-block">Фамилия</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label  d-flex justify-content-between">
                                            <label for="DropdownFormFirstName"><i class="text-danger">*</i>Имя</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Имя"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input name="name2" class="form-control" id="DropdownFormFirstName" value=""
                                                placeholder="Имя" required="required" readonly="" type="text">
                                            <small class="form-text text-muted d-md-none d-sm-block">Имя</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label  d-flex justify-content-between">
                                            <label for="DropdownFormPatronymic">Отчество</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Отчество"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input name="name3" class="form-control" id="DropdownFormPatronymic"
                                                value="" placeholder="Отчество" type="text">
                                            <small class="form-text text-muted d-md-none d-sm-block">Отчество</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label  d-flex justify-content-between">
                                            <label for="DropdownFormBirthDate">
                                                Дата рождения</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Дата рождения"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input name="dob" class="form-control" id="DropdownFormBirthDate"
                                                max="2009-01-01" min="1903-01-01" value="" required="required"
                                                type="date">
                                            <small class="form-text text-muted d-md-none d-sm-block">Дата
                                                рождения</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-4 col-form-label">
                                            <label for="sex">Пол</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Пол"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm col-4 ">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input val -validation" id="inlineCheckbox1"
                                                    type="radio" value="1" name="sex" required="" tabindex="4">
                                                <label class="form-check-label" for="inlineCheckbox1">Мужской</label>
                                            </div>
                                        </div>
                                        <div class="col-sm col-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineCheckbox2" type="radio"
                                                    value="2" name="sex" tabindex="5">
                                                <label class="form-check-label" for="inlineCheckbox2">Женский</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row" style="margin-top: -30px;">
                                        <div class="col">
                                            <small class="form-text text-muted d-md-none d-sm-block">Пол</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                            <label for="strana_id">Гражданство</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Гражданство"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <select name="strana_id" class="form-control custom-select" required=""
                                                    tabindex="8">
                                                    <option value="1">
                                                        Россия</option>
                                                    <option value="2">
                                                        Монголия</option>
                                                    <option value="3">
                                                        Узбекистан</option>
                                                    <option value="4">
                                                        Грузия</option>
                                                    <option value="5">
                                                        Молдавия</option>
                                                    <option value="6">
                                                        Армения</option>
                                                    <option value="7">
                                                        Литва</option>
                                                    <option value="8">
                                                        КНДР</option>
                                                    <option value="9">
                                                        КНР</option>
                                                    <option value="10">
                                                        Казахстан</option>
                                                    <option value="11">
                                                        Таджикистан</option>
                                                    <option value="12">
                                                        Австралия</option>
                                                    <option value="13">
                                                        Украина</option>
                                                    <option value="14">
                                                        Беларусь</option>
                                                    <option value="15">
                                                        Азербайджан</option>
                                                    <option value="16">
                                                        Киргизия</option>
                                                    <option value="17">
                                                        Латвия</option>
                                                    <option value="18">
                                                        Туркменистан</option>
                                                    <option value="19">
                                                        Эстония</option>
                                                    <option value="20">
                                                        Вьетнам</option>
                                                    <option value="21">
                                                        Республика Корея</option>
                                                    <option value="23">
                                                        Абхазия</option>
                                                    <option value="24">
                                                        Южная Осетия</option>
                                                    <option value="25">
                                                        Венесуэла</option>
                                                    <option value="26">
                                                        Луганская народная республика</option>
                                                    <option value="27">
                                                        Донецкая народная республика</option>
                                                </select>
                                            </div>
                                            <small class="form-text text-muted d-md-none d-sm-block">Гражданство</small>
                                        </div>
                                        <input type="hidden" name="citizenship" id="citizenship" value="">
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                            <label for="inn">ИНН</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="ИНН"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="inn" id="inn" placeholder="" class="form-control"
                                                maxlength="12" minlength="10" value="">
                                            <small class="form-text text-muted d-md-none d-sm-block">ИНН</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row justify-content-between">
                                        <div class="col-auto col-form-label d-flex justify-content-between">
                                            <label for="small_nations">Принадлежность к малым
                                                народам</label>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="checkbox" name="small_nations" id="small_nations" value="1"
                                                style="margin-bottom: 10px; margin-top: 10px; display: flex; align-items: center; margin: 0 auto;">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row justify-content-between">
                                        <div class="col-auto col-form-label d-flex justify-content-between">
                                            <label for="special_category">Принадлежность к отдельной
                                                категории</label>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="checkbox" name="special_category" id="special_category"
                                                value="1"
                                                style="margin-bottom: 10px; margin-top: 10px; display: flex; align-items: center; margin: 0 auto;">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row" style="margin-top: -30px;">
                                        <div class="col">
                                            <small class="form-text text-muted d-md-none d-sm-block">Принадлежность к
                                                отдельной категории</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                            <label for="snils">СНИЛС</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="snils" id="snils" placeholder=""
                                                class="form-control" minlength="14" value="">
                                            <small class="form-text text-muted d-md-none d-sm-block">СНИЛС</small>
                                        </div>
                                    </div>
                                    <div>
                                        <h5>
                                            Загрузите копию СНИЛС
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top"
                                                data-content="Загрузите копию СНИЛС" data-original-title=""
                                                title=""></i>

                                        </h5>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="input-group mb-3">
                                            <label for="inputGroupFile_20" type="button"
                                                class="btn btn-secondary input-group-prepend"
                                                style="border-top-right-radius: 0;border-bottom-right-radius: 0;">
                                                <span class="bi bi-file-earmark-arrow-down">&#128196;</span>
                                            </label>
                                            <input type="text" class="form-control" id="pers_inf_F10"
                                                form="second-tab-form" placeholder="Выбрать файлы" value="" disabled="">
                                        </div>
                                        <input onchange="uploadFile(20)" type="file" class="custom-file-input" lang="ru"
                                            id="inputGroupFile_20" accept="image/jpeg,image/png" multiple="" hidden="">
                                        <small class="form-text text-muted d-md-none d-sm-block"
                                            style="margin-top: -20px;">Загрузите копию СНИЛС</small>
                                        <div class="invalid-feedback d-block" id="res_upload_doc_20"></div>
                                    </div>
                                    <div class="accordion mb-3" id="accordion_20">
                                        <div class="card" style="overflow: visible;">
                                            <div class="card-header text-white bg-info bg-sm p-0" id="headingOne">
                                                <h5 class="mb-0" style="display: flex;">
                                                    <button class="text-white btn btn-link col-11" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse_20"
                                                        value="20" aria-expanded="true" aria-controls="collapse"
                                                        onclick="loadFile(this)">
                                                        Загруженный файл
                                                    </button>
                                                    <button class="text-white btn btn-link col-1" type="button"
                                                        value="20" onclick="loadFile(this)">
                                                        <i class="bi bi-arrow-repeat"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapse_20" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordion_20">
                                                <div class="card-body">
                                                    <div class="pt-3 loader_file" style="display: none">
                                                        <div class="sk-circle mx-auto">
                                                            <div class="sk-circle1 sk-child"></div>
                                                            <div class="sk-circle2 sk-child"></div>
                                                            <div class="sk-circle3 sk-child"></div>
                                                            <div class="sk-circle4 sk-child"></div>
                                                            <div class="sk-circle5 sk-child"></div>
                                                            <div class="sk-circle6 sk-child"></div>
                                                            <div class="sk-circle7 sk-child"></div>
                                                            <div class="sk-circle8 sk-child"></div>
                                                            <div class="sk-circle9 sk-child"></div>
                                                            <div class="sk-circle10 sk-child"></div>
                                                            <div class="sk-circle11 sk-child"></div>
                                                            <div class="sk-circle12 sk-child"></div>
                                                        </div>
                                                    </div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="ajax" value="1">
                                    <input type="hidden" name="personal_info" value="1">
                                    <input type="hidden" name="action" value="update">
                                    <button type="submit" name="personal_info" value="1"
                                        class="btn btn-success form-control" id="PersInfo_button">
                                        Сохранить
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block text-left mb-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2" id="heading_2">
                            <h4>
                                Данные паспорта
                                <div class="d-inline" id="pass_info">
                                    <i id="c[4]" class="bi bi-exclamation-square-fill text-warning"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Данные не заполнены/не проверены"></i>
                                </div>
                            </h4>
                        </button>
                    </div>
                    <div id="collapse_2" class="accordion-collapse collapse " aria-labelledby="heading_2"
                        data-bs-parent="#accordionExample">
                        <div class="card-body ">
                            <div class="accordion-body">
                                <form method="POST" action="profilePersonalData.php" id="PassInfo">
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                            <label for="pass_F1">Серия</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Серия"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="pass_ser" placeholder="Серия паспорта"
                                                class="form-control" value="" id="pass_F1" required="">
                                            <small class="form-text text-muted d-md-none d-sm-block">Серия</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                            <label for="pass_F2">Номер</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Номер"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="pass_num" placeholder="Номер паспорта"
                                                class="form-control" value="" id="pass_F2" required="">
                                            <small class="form-text text-muted d-md-none d-sm-block">Номер</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                            <label for="DropdownFormGetDate">Дата выдачи</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Дата выдачи"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="date" name="pass_date" class="form-control" value=""
                                                id="DropdownFormGetDate" min="1923-06-01" max="2023-05-15" required="">
                                            <small class="form-text text-muted d-md-none d-sm-block">Дата выдачи</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                            <label for="DropdownFormByWhom">Кем
                                                выдан</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Кем выдан"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="pass_loc" placeholder="Кем выдан"
                                                class="form-control" value="" id="DropdownFormByWhom" required="">
                                            <small class="form-text text-muted d-md-none d-sm-block">Кем выдан</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                            <label for="pass_F3">Код
                                                подразделения</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top"
                                                data-content="Код подразделения" data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="pass_code_subdivision"
                                                placeholder="Код подразделения" class="form-control" value=""
                                                id="pass_F3" required="">
                                            <small class="form-text text-muted d-md-none d-sm-block">Код
                                                подразделения</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group row">
                                        <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                            <label for="DropdownFormByWhom">Место
                                                рождения</label>
                                            <i class="small bi bi-question-circle text-secondary" data-container="body"
                                                data-toggle="popover" data-placement="top" data-content="Место рождения"
                                                data-original-title="" title=""></i>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="bir_loc" placeholder="Место рождения"
                                                class="form-control" value="" id="DropdownFormByWhom" required="">
                                            <small class="form-text text-muted d-md-none d-sm-block">Место
                                                рождения</small>
                                        </div>
                                    </div>
                                    <div>
                                        <h5>
                                            <p>
                                                Загрузите копию паспорта
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Загрузите копию паспорта" data-original-title=""
                                                    title=""></i>
                                            </p>
                                        </h5>
                                        <div class="alert alert-warning">Главная страница, Страница с
                                            пропиской, Сведения о ранее
                                            выданных паспортах:
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="input-group mb-3">
                                            <label for="inputGroupFile_1" type="button"
                                                class="btn btn-secondary input-group-prepend"
                                                style="border-top-right-radius: 0;border-bottom-right-radius: 0;">
                                                <span class="bi bi-file-earmark-arrow-down">&#128196;</span>
                                            </label>
                                            <input type="text" class="form-control" placeholder="Выбрать файлы" value=""
                                                disabled="">
                                        </div>
                                        <input onchange="uploadFile(1)" type="file" class="custom-file-input" lang="ru"
                                            id="inputGroupFile_1" accept="image/jpeg,image/png" multiple="" hidden="">
                                        <small class="form-text text-muted d-md-none d-sm-block"
                                            style="margin-top: -20px;">Загрузите копию паспорта</small>
                                        <div class="invalid-feedback d-block" id="res_upload_doc_1"></div>
                                    </div>
                                    <div class="accordion mb-3" id="accordion">
                                        <div class="card" style="overflow: visible;">
                                            <div class="card-header text-white bg-info bg-sm p-0" id="headingOne">
                                                <h5 class="mb-0" style="display: flex;">
                                                    <button class="text-white btn btn-link col-11" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse" value="1"
                                                        aria-expanded="true" aria-controls="collapse"
                                                        onclick="loadFile(this)">
                                                        Загруженные файлы
                                                    </button>
                                                    <button class="text-white btn btn-link col-1" type="button"
                                                        value="1" onclick="loadFile(this)">
                                                        <i class="bi bi-arrow-repeat"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapse" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="pt-3 loader_file" style="display: none">
                                                        <div class="sk-circle mx-auto">
                                                            <div class="sk-circle1 sk-child"></div>
                                                            <div class="sk-circle2 sk-child"></div>
                                                            <div class="sk-circle3 sk-child"></div>
                                                            <div class="sk-circle4 sk-child"></div>
                                                            <div class="sk-circle5 sk-child"></div>
                                                            <div class="sk-circle6 sk-child"></div>
                                                            <div class="sk-circle7 sk-child"></div>
                                                            <div class="sk-circle8 sk-child"></div>
                                                            <div class="sk-circle9 sk-child"></div>
                                                            <div class="sk-circle10 sk-child"></div>
                                                            <div class="sk-circle11 sk-child"></div>
                                                            <div class="sk-circle12 sk-child"></div>
                                                        </div>
                                                    </div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="ajax" value="1">
                                    <input type="hidden" name="passport" value="1">
                                    <input type="hidden" name="action" value="update">
                                    <button type="submit" name="passport" value="1" class="btn btn-success form-control"
                                        id="PassInfo_button">
                                        Сохранить
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block text-left mb-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3" id="heading_3">
                            <h4>
                                Адрес
                                <div class="d-inline" id="address_info">
                                    <i id="c[4]" class="bi bi-exclamation-square-fill text-warning"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Данные не заполнены/не проверены"></i>
                                </div>
                            </h4>
                        </button>
                    </div>
                    <div id="collapse_3" class="accordion-collapse collapse " aria-labelledby="heading_3"
                        data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <form method="POST" action="profilePersonalData.php" id="Address"
                                style="padding-left: 10px;">
                                <div class="mb-3 form-group row">
                                    <div class="col-sm-7 col-form-label d-flex justify-content-between">
                                        <label for="room">Адрес по прописке</label>
                                    </div>
                                    <div class="col-sm-5 text-left " style="padding-bottom: 10px;">
                                        <input id="address" name="address" type="text" class="form-control" value=""
                                            placeholder="Введите адрес" autocomplete="off">
                                    </div>
                                    <div class="col-sm-7 col-form-label d-flex justify-content-between">
                                        <label for="room">Введите номер
                                            квартиры, если его нет в списке</label>
                                    </div>
                                    <div class="col-sm-5 text-left ">
                                        <input id="room" name="room" type="text" class="form-control" value=""
                                            placeholder="Номер квартиры" autocomplete="off">
                                    </div>
                                </div>
                                <div class="mb-3 form-group row justify-content-between">
                                    <div class="col-auto col-form-label d-flex justify-content-between">
                                        <label for="inogor">Иногородний</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="checkbox" name="inogor" id="inogor" value="1"
                                            style="margin-bottom: 10px; margin-top: 10px; display: flex; align-items: center; margin: 0 auto;">
                                    </div>
                                </div>
                                <div class="mb-3 form-group row justify-content-between">
                                    <div class="col-auto col-form-label d-flex justify-content-between">
                                        <label for="needroom">Потребность в
                                            общежитии</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="checkbox" name="needroom" id="needroom" value="1"
                                            style="margin-bottom: 10px; margin-top: 10px; display: flex; align-items: center; margin: 0 auto;">
                                    </div>
                                </div>
                                <input type="hidden" name="address_info" value="1">
                                <button type="submit" name="address_info" value="1" class="btn btn-success form-control"
                                    id="Address_button">
                                    Сохранить
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block text-left mb-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4" id="heading_4">
                            <h4>
                                Образование
                                <div class="d-inline" id="edu_info">
                                    <i id="c[4]" class="bi bi-exclamation-square-fill text-warning"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Данные не заполнены/не проверены"></i>
                                </div>
                            </h4>
                        </button>
                    </div>
                    <div id="collapse_4" class="accordion-collapse collapse " aria-labelledby="heading_4"
                        data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div class="col-13">
                                <h5 class="mb-3 text-left py-2 alert alert-warning">
                                    <p>Уважаемые абитуриенты:
                                        1. заполняйте поле "Наименование учебного заведения" в строгом соответствии с
                                        документом об образовании!
                                        2. если фамилии в документе об образовании и в паспорте разные, обязательно
                                        загрузите документ, подтверждающий смену фамилии!</p>
                                </h5>
                            </div>

                            <div id="loader_obraz" style="display: none;">
                                <div class="m-2 d-flex justify-content-center">
                                    <strong>Загрузка...</strong>
                                    <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
                                </div>
                                <br>
                            </div>

                            <div id="anketa_table">
                                <script>
                                $(function() {
                                    $('[data-toggle="tooltip"]').tooltip()
                                })

                                function raiting_check() {
                                    $('.spec_soot_raiting').each(function() {
                                        value = $(this).val();
                                        if (value > 0) {
                                            $(".spec_soot_raiting option[value=" + value + "]").hide();
                                            $("option[value=" + value + "]", this).show();
                                        }
                                    });
                                }

                                $(document).ready(function() {
                                    raiting_check();
                                    $('.spec_soot_raiting').change(function() {
                                        $(".spec_soot_raiting option").show();
                                        raiting_check();
                                        let form_data = $("#form_raiting").serialize();
                                        form_data += "&action=update&ajax=1&tab_type=spec_soot"
                                        $.ajax({
                                            beforeSend: function() {},
                                            complete: function() {},
                                            type: "POST", // Метод отправки
                                            url: "select_spec.php",
                                            data: form_data,
                                            success: function(html) {
                                                console.log(html);
                                            }
                                        });
                                    });
                                });
                                </script>
                            </div>
                            <input type="hidden" name="abit_id" id="abit_id" value="313010">
                            <div class="accordion mb-3" id="accordion_8">
                                <div class="card" style="overflow: visible;">
                                    <div class="card-header text-white bg-info bg-sm p-0" id="headingOne">
                                        <h5 class="mb-0" style="display: flex;">
                                            <button class="text-white btn btn-link col-11" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse_8" value="3"
                                                aria-expanded="true" aria-controls="collapse" onclick="loadFile(this)">
                                                Загруженные файлы
                                            </button>
                                            <button class="text-white btn btn-link col-1" type="button" value="3"
                                                onclick="loadFile(this)">
                                                <i class="bi bi-arrow-repeat"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse_8" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion_8">
                                        <div class="card-body">
                                            <div class="pt-3 loader_file" style="display: none">
                                                <div class="sk-circle mx-auto">
                                                    <div class="sk-circle1 sk-child"></div>
                                                    <div class="sk-circle2 sk-child"></div>
                                                    <div class="sk-circle3 sk-child"></div>
                                                    <div class="sk-circle4 sk-child"></div>
                                                    <div class="sk-circle5 sk-child"></div>
                                                    <div class="sk-circle6 sk-child"></div>
                                                    <div class="sk-circle7 sk-child"></div>
                                                    <div class="sk-circle8 sk-child"></div>
                                                    <div class="sk-circle9 sk-child"></div>
                                                    <div class="sk-circle10 sk-child"></div>
                                                    <div class="sk-circle11 sk-child"></div>
                                                    <div class="sk-circle12 sk-child"></div>
                                                </div>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form id="fourth-tab-form" action="profilePersonalData.php" method="post">
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="odrazov_F1">Уровень образования:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Уровень образования edu" data-original-title=""
                                                    title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <select form="fourth-tab-form" id="odrazov_F1" class="form-control"
                                                    name="doc_level_edu" required="" placeholder="Уровень образования">
                                                    <option selected="true" value="0" disabled="disabled">
                                                        Выберите документ об
                                                        образовании
                                                    </option>
                                                    <option value="1">Аттестат об основном общем образовании (9 класс)
                                                    </option>
                                                    <option value="2">Аттестат о среднем общем образовании (11 класс)
                                                    </option>
                                                    <option value="3">Диплом о начальном профессиональном образовании
                                                    </option>
                                                    <option value="4">Диплом о среднем профессиональном образовании
                                                    </option>
                                                    <option value="5">Диплом о высшем образовании (бакалавриат)</option>
                                                    <option value="6">Диплом о высшем образовании (специалитет)</option>
                                                    <option value="7">Диплом о высшем образовании (магистратура)
                                                    </option>
                                                </select>
                                                <small class="form-text text-muted d-md-none d-sm-block">Уровень
                                                    образования edu</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="odrazov_F2">Серия:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Серия edu" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <input form="fourth-tab-form" type="text" class="form-control"
                                                    id="odrazov_F2" placeholder="Серия (при наличии)" value=""
                                                    name="doc_ser">
                                                <small class="form-text text-muted d-md-none d-sm-block">Серия
                                                    edu</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="odrazov_F3">Номер:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Номер edu" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <input form="fourth-tab-form" type="text" class="form-control"
                                                    id="odrazov_F3" placeholder="Номер" value="" name="doc_num"
                                                    required="">
                                                <small class="form-text text-muted d-md-none d-sm-block">Номер
                                                    edu</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="odrazov_F4">Тип учебного
                                                    заведения:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Тип учебного заведения edu" data-original-title=""
                                                    title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <select form="fourth-tab-form" id="odrazov_F4" class="form-control"
                                                    name="uz_type" required="" placeholder="Тип учебного заведения">
                                                    <option selected="true" disabled="disabled">Выберите тип
                                                        учебного заведения
                                                    </option>
                                                    <option value="1">лицей</option>
                                                    <option value="2">техникум</option>
                                                    <option value="3">школа</option>
                                                    <option value="4">Ж.Д. Школа</option>
                                                    <option value="5">училище</option>
                                                    <option value="6">ПТУ</option>
                                                    <option value="7">институт</option>
                                                    <option value="8">академия</option>
                                                    <option value="9">университет</option>
                                                    <option value="10">колледж</option>
                                                    <option value="11">гимназия</option>
                                                    <option value="12">вечерняя школа</option>
                                                    <option value="13">центр образования</option>
                                                    <option value="14">проф.училище</option>
                                                    <option value="15">проф.лицей</option>
                                                </select>
                                                <small class="form-text text-muted d-md-none d-sm-block">Тип учебного
                                                    заведения edu</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="odrazov_F5">Наименование уч. заведения:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Наименование уч. заведения edu" data-original-title=""
                                                    title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <textarea form="fourth-tab-form" type="text" class="form-control"
                                                    style="height: 38px" id="odrazov_F5"
                                                    placeholder="Наименование учебного заведения:" value=""
                                                    name="doc_loc" required=""></textarea>
                                                <small class="form-text text-muted d-md-none d-sm-block">Наименование
                                                    уч. заведения edu</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="odrazov_F6">Дата выдачи:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    min="1923-06-01" max="2023-05-15" data-content="Дата выдачи edu"
                                                    data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <input form="fourth-tab-form" type="date" class="form-control"
                                                    id="odrazov_F6" placeholder="Дата выдачи" value="" name="doc_date"
                                                    required="">
                                                <small class="form-text text-muted d-md-none d-sm-block">Дата выдачи
                                                    edu</small>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="hidden" form="fourth-tab-form" name="education" value="1">
                                            <input type="hidden" form="fourth-tab-form" name="ajax" value="1">
                                            <input type="hidden" form="fourth-tab-form" name="action" value="insert">
                                            <button type="submit" id="fourth-tab-form-submit"
                                                class="col-12 btn btn-success btnNext"
                                                form="fourth-tab-form">Сохранить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block text-left mb-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5" id="heading_5">
                            <h4>
                                Вступительные испытания
                                <div class="d-inline" id="schedule_info">
                                    <i id="c[5]" class="bi bi-exclamation-square-fill text-warning"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Данные не заполнены/не проверены"></i>
                                </div>
                            </h4>
                        </button>
                    </div>
                    <div id="collapse_5" class="accordion-collapse collapse " aria-labelledby="heading_5"
                        data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div class="card mb-2">
                                <form id="fifth-tab-form" action="profilePersonalData.php" method="post">
                                    <div class="card-header" style="border-top:1px solid rgba(0,0,0,.125);">
                                        ЕГЭ
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-info">
                                            Укажите перечень предметов, по которым сдавали ЕГЭ
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group d-flex justify-content-between mb-1 bg-light">
                                                <label class="col-5 col-form-label" for="ege_1" disabled=""
                                                    value="Математика" style="padding-left: 10px;">Математика</label>
                                                <div>
                                                    <input form="fifth-tab-form" value="1" type="checkbox" name="ege[1]"
                                                        class="" id="ege_1" style="margin-top: .4rem;">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-between mb-1 bg-light">
                                                <label class="col-5 col-form-label" for="ege_2" disabled=""
                                                    value="Русский язык" style="padding-left: 10px;">Русский
                                                    язык</label>
                                                <div>
                                                    <input form="fifth-tab-form" value="1" type="checkbox" name="ege[2]"
                                                        class="" id="ege_2" style="margin-top: .4rem;">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-between mb-1 bg-light">
                                                <label class="col-5 col-form-label" for="ege_3" disabled=""
                                                    value="Физика" style="padding-left: 10px;">Физика</label>
                                                <div>
                                                    <input form="fifth-tab-form" value="1" type="checkbox" name="ege[3]"
                                                        class="" id="ege_3" style="margin-top: .4rem;">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-between mb-1 bg-light">
                                                <label class="col-5 col-form-label" for="ege_4" disabled=""
                                                    value="Обществознание"
                                                    style="padding-left: 10px;">Обществознание</label>
                                                <div>
                                                    <input form="fifth-tab-form" value="1" type="checkbox" name="ege[4]"
                                                        class="" id="ege_4" style="margin-top: .4rem;">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-between mb-1 bg-light">
                                                <label class="col-5 col-form-label" for="ege_5" disabled=""
                                                    value="Иностранный язык" style="padding-left: 10px;">Иностранный
                                                    язык</label>
                                                <div>
                                                    <input form="fifth-tab-form" value="1" type="checkbox" name="ege[5]"
                                                        class="" id="ege_5" style="margin-top: .4rem;">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-between mb-1 bg-light">
                                                <label class="col-5 col-form-label" for="ege_6" disabled=""
                                                    value="Информатика и ИКТ" style="padding-left: 10px;">Информатика и
                                                    ИКТ</label>
                                                <div>
                                                    <input form="fifth-tab-form" value="1" type="checkbox" name="ege[6]"
                                                        class="" id="ege_6" style="margin-top: .4rem;">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-between mb-1 bg-light">
                                                <label class="col-5 col-form-label" for="ege_8" disabled=""
                                                    value="География" style="padding-left: 10px;">География</label>
                                                <div>
                                                    <input form="fifth-tab-form" value="1" type="checkbox" name="ege[8]"
                                                        class="" id="ege_8" style="margin-top: .4rem;">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-between mb-1 bg-light">
                                                <label class="col-5 col-form-label" for="ege_9" disabled=""
                                                    value="История" style="padding-left: 10px;">История</label>
                                                <div>
                                                    <input form="fifth-tab-form" value="1" type="checkbox" name="ege[9]"
                                                        class="" id="ege_9" style="margin-top: .4rem;">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-between mb-1 bg-light">
                                                <label class="col-5 col-form-label" for="ege_10" disabled=""
                                                    value="Химия" style="padding-left: 10px;">Химия</label>
                                                <div>
                                                    <input form="fifth-tab-form" value="1" type="checkbox"
                                                        name="ege[10]" class="" id="ege_10" style="margin-top: .4rem;">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alert alert-warning">
                                            Заполнить в случае сдачи ЕГЭ по старому паспорту
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="exam_F2">Серия:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Серия ege" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <input form="fifth-tab-form" type="text" class="form-control"
                                                    id="exam_F2" placeholder="Серия" value="" name="doc_ser">
                                                <small class="form-text text-muted d-md-none d-sm-block">Серия
                                                    ege</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="exam_F3">Номер:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Номер ege" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <input form="fifth-tab-form" type="text" class="form-control"
                                                    id="exam_F3" placeholder="Номер" value="" name="doc_num">
                                                <small class="form-text text-muted d-md-none d-sm-block">Номер
                                                    ege</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="exam_F6">Дата выдачи:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Дата выдачи ege" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <input form="fifth-tab-form" type="date" class="form-control"
                                                    id="exam_F6" placeholder="Дата выдачи" value="" name="doc_date">
                                                <small class="form-text text-muted d-md-none d-sm-block">Дата выдачи
                                                    ege</small>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" form="fifth-tab-form" name="action" value="insert">
                                    <input type="hidden" name="schedule" value="1">
                                    <input type="hidden" name="ajax" value="1">
                                    <input type="hidden" name="type" value="ege">
                                    <button type="submit" id="fifth-tab-form-submit" class="btn btn-success w-100"
                                        form="fifth-tab-form">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block text-left mb-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_7" aria-expanded="true" aria-controls="collapse_7" id="heading_7">
                            <h4>Контактная информация</h4>
                        </button>
                    </div>

                    <div id="collapse_7" class="accordion-collapse collapse " aria-labelledby="heading_7"
                        data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <form method="POST" action="profilePersonalData.php" id="contact_info">
                                <div class="mb-3 form-group row">
                                    <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                        <label for="DropdownFormPhone">Телефон</label>
                                        <i class="small bi bi-question-circle text-secondary" data-container="body"
                                            data-toggle="popover" data-placement="top" data-content="Телефон"
                                            data-original-title="" title=""></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" id="phone" class="form-control here phone_mask"
                                            value="123123123">
                                        <small class="form-text text-muted d-md-none d-sm-block">Телефон</small>
                                    </div>
                                </div>
                                <div class="mb-3 form-group row">
                                    <div class="col-sm-3 col-form-label d-flex justify-content-between">
                                        <label for="DropdownFormEmail">Email</label>
                                        <i class="small bi bi-question-circle text-secondary" data-container="body"
                                            data-toggle="popover" data-placement="top" data-content="Email"
                                            data-original-title="" title=""></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control"
                                            value="valera_1137@mail.ru" id="DropdownFormEmail">
                                        <small class="form-text text-muted d-md-none d-sm-block">Email</small>
                                    </div>
                                </div>
                                <input type="hidden" name="ajax" value="1">
                                <input type="hidden" name="contact_info" value="1">
                                <input type="hidden" name="action" value="update">
                                <button type="submit" class="btn btn-success form-control" id="contact_info_button">
                                    Сохранить
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
