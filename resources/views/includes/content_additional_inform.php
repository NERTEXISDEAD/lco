<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h4>Дополнительная информация</h4>
        </div>
        <div class="card-body">
            <div class="col-13">
                <h5 class="mb-3 text-left py-2 alert alert-warning">
                    <p>Дополнительная информация</p>
                </h5>
            </div>
            <input type="hidden" name="abit_id" id="abit_id" value="313010">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block text-left mb-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1" id="heading_1">
                            <h4>
                                Особые права и преимущества
                                <div id="priv_info" class="d-inline">
                                    <i id="c[7]" class="bi bi-exclamation-square-fill text-warning"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Данные не заполнены/не проверены"></i>

                                </div>
                            </h4>
                        </button>
                    </div>
                    <div id="collapse_1" class="accordion-collapse collapse " aria-labelledby="heading_1"
                        data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div id="lgots_table">
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
                            <div class="accordion mb-3" id="accordion_9">
                                <div class="card" style="overflow: visible;">
                                    <div class="card-header text-white bg-info bg-sm p-0" id="headingOne">
                                        <h5 class="mb-0" style="display: flex;">
                                            <button class="text-white btn btn-link col-11" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse_9" value="9"
                                                onclick="loadFile(this)" aria-expanded="true" aria-controls="collapse">
                                                Загруженные файлы
                                            </button>
                                            <button class="text-white btn btn-link pull-right col-1" type="button"
                                                value="9" onclick="loadFile(this)">
                                                <i class="bi bi-arrow-repeat"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse_9" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion_9">
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
                            <div class="card-deck align-self-center">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="lgot_form" method="post">
                                            <div class="mb-3 form-group row">
                                                <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                    <label for="lgot_F1">Тип:</label>
                                                    <i class="small bi bi-question-circle text-secondary"
                                                        data-container="body" data-toggle="popover" data-placement="top"
                                                        data-content="Тип lgot" data-original-title="" title=""></i>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select id="lgot_F1" class="form-control" name="lgot_id" required=""
                                                        placeholder="тип" onchange="select_lgot_doc()">
                                                        <option selected="true" value="0" disabled="disabled">
                                                            Выберите тип
                                                        </option>
                                                        <optgroup label="Льгота">
                                                            <option value="2">дети-сироты и дети, оставшиеся без
                                                                попечения родителей, а также лица из числа детей-сирот и
                                                                детей, оставшихся без попечения родителей</option>
                                                            <option value="3">инвалиды вследствие военной травмы или
                                                                заболевания, полученных в период прохождения военной
                                                                службы</option>
                                                            <option value="4">Ветераны боевых действий из числа лиц,
                                                                указанных в подпунктах 1 - 4 пункта 1 статьи 3
                                                                Федерального закона от 12 января 1995 года N 5-ФЗ "О
                                                                ветеранах".</option>
                                                            <option value="5">Дети-инвалиды, инвалиды I и II групп,
                                                                инвалиды с детства</option>
                                                        </optgroup>
                                                        <optgroup label="Преимущественное право">
                                                            <option value="8">Преимущественное право на зачисление
                                                            </option>
                                                        </optgroup>
                                                        <optgroup label="Особые права">
                                                            <option value="9">Максимальный балл по ЕГЭ</option>
                                                            <option value="59">Право на прием без вступительных
                                                                испытаний</option>
                                                            <option value="183">Отдельная квота</option>
                                                        </optgroup>
                                                    </select>
                                                    <small class="form-text text-muted d-md-none d-sm-block">Тип
                                                        lgot</small>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row">
                                                <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                    <label for="lgot_F2">Документ:</label>
                                                    <i class="small bi bi-question-circle text-secondary"
                                                        data-container="body" data-toggle="popover" data-placement="top"
                                                        data-content="Документ lgot" data-original-title=""
                                                        title=""></i>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select id="lgot_F2" class="chzn-select-deselect form-control"
                                                        name="lgot_doc_id" required="" placeholder="Документ">
                                                    </select>
                                                    <small class="form-text text-muted d-md-none d-sm-block">Документ
                                                        lgot</small>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row">
                                                <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                    <label for="lgot_F3">Серия:</label>
                                                    <i class="small bi bi-question-circle text-secondary"
                                                        data-container="body" data-toggle="popover" data-placement="top"
                                                        data-content="Серия lgot" data-original-title="" title=""></i>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="lgot_F3"
                                                        placeholder="Серия (при наличии)" value="" name="doc_ser">
                                                    <small class="form-text text-muted d-md-none d-sm-block">Серия
                                                        lgot</small>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row">
                                                <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                    <label for="lgot_F4">Номер:</label>
                                                    <i class="small bi bi-question-circle text-secondary"
                                                        data-container="body" data-toggle="popover" data-placement="top"
                                                        data-content="Номер lgot" data-original-title="" title=""></i>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="lgot_F4"
                                                        placeholder="Номер" value="" name="doc_num" required="">
                                                    <small class="form-text text-muted d-md-none d-sm-block">Номер
                                                        lgot</small>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row">
                                                <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                    <label for="lgot_F5">Кем выдан:</label>
                                                    <i class="small bi bi-question-circle text-secondary"
                                                        data-container="body" data-toggle="popover" data-placement="top"
                                                        data-content="Кем выдан lgot" data-original-title=""
                                                        title=""></i>
                                                </div>
                                                <div class="col-sm-8">
                                                    <textarea type="text" class="form-control" style="height: 38px"
                                                        id="lgot_F5" placeholder="Кем выдан" value="" name="doc_loc"
                                                        required=""></textarea>
                                                    <small class="form-text text-muted d-md-none d-sm-block">Кем выдан
                                                        lgot</small>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row">
                                                <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                    <label for="lgot_F6">Дата выдачи:</label>
                                                    <i class="small bi bi-question-circle text-secondary"
                                                        data-container="body" data-toggle="popover" data-placement="top"
                                                        data-content="Дата выдачи lgot" data-original-title=""
                                                        title=""></i>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" id="lgot_F6"
                                                        placeholder="Дата выдачи" value="" name="doc_date" required=""
                                                        min="1923-06-01" max="2023-05-16">
                                                    <small class="form-text text-muted d-md-none d-sm-block">Дата выдачи
                                                        lgot</small>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <input type="hidden" name="type" value="lgots">
                                                <input type="hidden" name="ajax" value="1">
                                                <input type="hidden" name="action" value="insert">
                                                <button id="lgot_form_button" type="submit"
                                                    class="col-12 btn btn-success btnNext"
                                                    form="lgot_form">Сохранить</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <button class="btn btn-block text-left mb-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2" id="heading_2">
                            <h4>
                                Индивидуальные достижения
                                <div id="achive_stat" class="d-inline">
                                    <i id="c[7]" class="bi bi-exclamation-square-fill text-warning"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Данные не заполнены/не проверены"></i>

                                </div>
                            </h4>
                        </button>
                    </div>
                    <div id="collapse_2" class="accordion-collapse collapse " aria-labelledby="heading_2"
                        data-bs-parent="#accordionExample">
                        <div class="card-body">
                            <div id="achive_table">
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
                            <div class="accordion mb-3" id="accordion_8">
                                <div class="card" style="overflow: visible;">
                                    <div class="card-header text-white bg-info bg-sm p-0" id="headingOne">
                                        <h5 class="mb-0" style="display: flex;">
                                            <button class="text-white btn btn-link col-11" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse_8" value="8"
                                                onclick="loadFile(this)" aria-expanded="true" aria-controls="collapse">
                                                Загруженные файлы
                                            </button>
                                            <button class="text-white btn btn-link pull-right col-1" type="button"
                                                value="8" onclick="loadFile(this)">
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
                                    <form method="post" id="achive_info">
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="achive_F1">Форма обучения:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Форма обучения" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <select id="achive_F0" class="form-control" name="form_id" required=""
                                                    placeholder="форма обучения" onchange="forms_achiv()">
                                                    <option selected="true" value="0" disabled="disabled">
                                                        Выберите форму
                                                        обучения
                                                    </option>
                                                    <option value="1">специалитет (очное)</option>
                                                    <option value="3">бакалавриат (очное)</option>
                                                    <option value="33">бакалавриат (очно-заочное)</option>
                                                    <option value="51">специалитет (заочное)</option>
                                                    <option value="53">бакалавриат (заочное)</option>
                                                </select>
                                                <small class="form-text text-muted d-md-none d-sm-block">Форма
                                                    обучения</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="achive_F1">Тип:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-bs-toggle="popover" data-placement="top"
                                                    data-content="Тип achive" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <select id="achive_F1" class="form-control" name="achiv_id" required=""
                                                    placeholder="тип" onchange="select_achive_doc()">
                                                </select>
                                                <small class="form-text text-muted d-md-none d-sm-block">Тип
                                                    achive</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="achive_F2">Документ:</label>

                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-bs-toggle="popover" data-placement="top"
                                                    data-content="Документ achive" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <select id="achive_F2" class="chzn-select-deselect1 form-control"
                                                    name="achiv_doc_id" required="" placeholder="Документ">
                                                </select>
                                                <small class="form-text text-muted d-md-none d-sm-block">Документ
                                                    achive</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="achive_F3">Серия:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Серия achive" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="achive_F3"
                                                    placeholder="Серия (при наличии)" value="" name="doc_ser">
                                                <small class="form-text text-muted d-md-none d-sm-block">Серия
                                                    achive</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="achive_F4">Номер:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Номер achive" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="achive_F4"
                                                    placeholder="Номер" value="" name="doc_num" required="">
                                                <small class="form-text text-muted d-md-none d-sm-block">Номер
                                                    achive</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="achive_F5">Кем выдан:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Кем выдан achive" data-original-title="" title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <textarea type="text" class="form-control" style="height: 38px"
                                                    id="achive_F5" placeholder="Кем выдан" value="" name="doc_loc"
                                                    required=""></textarea>
                                                <small class="form-text text-muted d-md-none d-sm-block">Кем выдан
                                                    achive</small>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row">
                                            <div class="col-sm-4 col-form-label d-flex justify-content-between">
                                                <label for="achive_F6">Дата выдачи:</label>
                                                <i class="small bi bi-question-circle text-secondary"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    data-content="Дата выдачи achive" data-original-title=""
                                                    title=""></i>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" id="achive_F6"
                                                    placeholder="Дата выдачи" value="" name="doc_date" required=""
                                                    min="1923-06-01" max="2023-05-16">
                                                <small class="form-text text-muted d-md-none d-sm-block">Дата выдачи
                                                    achive</small>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="hidden" name="type" value="achive">
                                            <input type="hidden" name="ajax" value="1">
                                            <input type="hidden" name="action" value="insert">
                                            <button id="achive_info_submit" type="submit"
                                                class="col-12 btn btn-success btnNext">Сохранить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
