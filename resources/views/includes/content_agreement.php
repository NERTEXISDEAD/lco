<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h4>Заявление о согласии на зачисление</h4>
        </div>
        <div class="card-body">
            <div id="spec_soot_table" class="row">
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
            <input form="abit_spec_soot" id="spec_soot_abit_id" name="id" value="313010" hidden="">
        </div>
    </div>
</div>