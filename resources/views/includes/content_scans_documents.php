<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h4>Ваши документы</h4>
        </div>
        <div class="card-body">
            <input type="hidden" name="abit_id" id="abit_id" value="313010">
            <div>
                <h5>
                    Загрузите копию СНИЛС:
                    <i class="small bi bi-question-circle text-secondary" data-container="body" data-toggle="popover"
                        data-placement="top" data-content="Загрузите копию СНИЛС" data-original-title="" title=""></i>
                </h5>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group mb-3">
                    <label for="inputGroupFile_20" type="button" class="btn btn-secondary input-group-prepend"
                        style="border-top-right-radius: 0;border-bottom-right-radius: 0;">
                        <span class="bi bi-file-earmark-arrow-down">&#128196;</span>
                    </label>
                    <input type="text" class="form-control" id="pers_inf_F10" form="second-tab-form"
                        placeholder="Выбрать файлы" value="" disabled="">
                </div>
                <input onchange="uploadFile(20)" type="file" class="custom-file-input" lang="ru" id="inputGroupFile_20"
                    accept="image/jpeg,image/png" multiple="" hidden="">
                <small class="form-text text-muted d-md-none d-sm-block" style="margin-top: -20px;">Загрузите копию
                    СНИЛС</small>
                <div class="invalid-feedback d-block" id="res_upload_doc_20"></div>
            </div>
            <div class="accordion mb-3" id="accordion_20">
                <div class="card" style="overflow: visible;">
                    <div class="card-header text-white bg-info bg-sm p-0" id="headingOne">
                        <h5 class="mb-0" style="display: flex;">
                            <button class="text-white btn btn-link col-11" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_20" value="20" aria-expanded="true" aria-controls="collapse"
                                onclick="loadFile(this)">
                                Загруженный файл
                            </button>
                            <button class="text-white btn btn-link col-1" type="button" value="20"
                                onclick="loadFile(this)">
                                <i class="bi bi-arrow-repeat"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse_20" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_20">
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
            <div>
                <h5>
                    Загрузите копию паспорта:
                    <i class="small bi bi-question-circle text-secondary" data-container="body" data-toggle="popover"
                        data-placement="top" data-content="Загрузите копию паспорта" data-original-title=""
                        title=""></i>
                </h5>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group mb-3">
                    <label for="inputGroupFile_1" type="button" class="btn btn-secondary input-group-prepend"
                        style="border-top-right-radius: 0;border-bottom-right-radius: 0;">
                        <span class="bi bi-file-earmark-arrow-down">&#128196;</span>
                    </label>
                    <input type="text" class="form-control" placeholder="Выбрать файлы" value="" disabled="">
                </div>
                <input onchange="uploadFile(1)" type="file" class="custom-file-input" lang="ru" id="inputGroupFile_1"
                    accept="image/jpeg,image/png" multiple="" hidden="">
                <small class="form-text text-muted d-md-none d-sm-block" style="margin-top: -20px;">Загрузите копию
                    паспорта</small>
                <div class="invalid-feedback d-block" id="res_upload_doc_1"></div>
            </div>
            <div class="accordion mb-3" id="accordion">
                <div class="card" style="overflow: visible;">
                    <div class="card-header text-white bg-info bg-sm p-0" id="headingOne">
                        <h5 class="mb-0" style="display: flex;">
                            <button class="text-white btn btn-link col-11" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse" value="1" aria-expanded="true" aria-controls="collapse"
                                onclick="loadFile(this)">
                                Загруженные файлы
                            </button>
                            <button class="text-white btn btn-link col-1" type="button" value="1"
                                onclick="loadFile(this)">
                                <i class="bi bi-arrow-repeat"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
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
            <div>
                <h5>
                    Льготы:
                    <i class="small bi bi-question-circle text-secondary" data-container="body" data-toggle="popover"
                        data-placement="top" data-content="Льготы" data-original-title="" title=""></i>
                </h5>
                <small class="form-text text-muted d-md-none d-sm-block">Льготы</small>
            </div>
            <div class="accordion mb-3" id="accordion_9">
                <div class="card" style="overflow: visible;">
                    <div class="card-header text-white bg-info bg-sm p-0" id="headingOne">
                        <h5 class="mb-0" style="display: flex;">
                            <button class="text-white btn btn-link col-11" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_9" value="9" onclick="loadFile(this)" aria-expanded="true"
                                aria-controls="collapse">
                                Загруженные файлы
                            </button>
                            <button class="text-white btn btn-link pull-right col-1" type="button" value="9"
                                onclick="loadFile(this)">
                                <i class="bi bi-arrow-repeat"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse_9" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_9">
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
            <div>
                <h5>
                    Индивидуальные достижения:
                    <i class="small bi bi-question-circle text-secondary" data-container="body" data-toggle="popover"
                        data-placement="top" data-content="Индивидуальные достижения" data-original-title=""
                        title=""></i>
                </h5>
                <small class="form-text text-muted d-md-none d-sm-block">Индивидуальные достижения</small>
            </div>
            <div class="accordion mb-3" id="accordion_8">
                <div class="card" style="overflow: visible;">
                    <div class="card-header text-white bg-info bg-sm p-0" id="headingOne">
                        <h5 class="mb-0" style="display: flex;">
                            <button class="text-white btn btn-link col-11" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_8" value="8" onclick="loadFile(this)" aria-expanded="true"
                                aria-controls="collapse">
                                Загруженные файлы
                            </button>
                            <button class="text-white btn btn-link pull-right col-1" type="button" value="8"
                                onclick="loadFile(this)">
                                <i class="bi bi-arrow-repeat"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse_8" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_8">
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
            <div>
                <h5>
                    Документы об образовании:
                    <i class="small bi bi-question-circle text-secondary" data-container="body" data-toggle="popover"
                        data-placement="top" data-content="Документы об образовании" data-original-title=""
                        title=""></i>
                </h5>
                <small class="form-text text-muted d-md-none d-sm-block">Документы об образовании</small>
            </div>
            <div class="accordion mb-3" id="accordion_3">
                <div class="card" style="overflow: visible;">
                    <div class="card-header text-white bg-info bg-sm p-0" id="headingOne">
                        <h5 class="mb-0" style="display: flex;">
                            <button class="text-white btn btn-link col-11" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_3" value="3" aria-expanded="true" aria-controls="collapse"
                                onclick="loadFile(this)">
                                Загруженные файлы
                            </button>
                            <button class="text-white btn btn-link col-1" type="button" value="3"
                                onclick="loadFile(this)">
                                <i class="bi bi-arrow-repeat"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse_3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_3">
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
            <div>
                <h5>
                    Другие файлы:
                    <i class="small bi bi-question-circle text-secondary" data-container="body" data-toggle="popover"
                        data-placement="top" data-content="Другие файлы" data-original-title="" title=""></i>
                </h5>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group mb-3">
                    <label for="inputGroupFile_21" type="button" class="btn btn-secondary input-group-prepend"
                        style="border-top-right-radius: 0;border-bottom-right-radius: 0;">
                        <span class="bi bi-file-earmark-arrow-down">&#128196;</span>
                    </label>
                    <input type="text" class="form-control" id="pers_inf_F10" form="second-tab-form"
                        placeholder="Выбрать файлы" value="" disabled="">
                </div>
                <input onchange="uploadFile(21)" type="file" class="custom-file-input" lang="ru" id="inputGroupFile_21"
                    accept="image/jpeg,image/png" multiple="" hidden="">
                <small class="form-text text-muted d-md-none d-sm-block" style="margin-top: -20px;">Другие файлы</small>
                <div class="invalid-feedback d-block" id="res_upload_doc_21"></div>
            </div>
            <div class="accordion mb-3" id="accordion_8">
                <div class="card" style="overflow: visible;">
                    <div class="card-header text-white bg-info bg-sm p-0" id="headingOne_8">
                        <h5 class="mb-0" style="display: flex;">
                            <button class="text-white btn btn-link col-11" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse_21" value="21" aria-expanded="true" aria-controls="collapse"
                                onclick="loadFile(this)">
                                Загруженные файлы
                            </button>
                            <button class="text-white btn btn-link col-1" type="button" value="21"
                                onclick="loadFile(this)">
                                <i class="bi bi-arrow-repeat"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse_21" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_8">
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
        </div>
        </ div>
    </div>