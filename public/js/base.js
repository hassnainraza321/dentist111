$(document).ready(function () {

    $("body").on("click", ".btn-show-processing", function (e) {
        $(this).find(".processing-show").removeClass("d-none");

        $(this).find(".default-show").addClass("d-none");

        $(this).addClass("disabled");
    });

    $("body").on("submit", ".ajax-form-submit", function (e) {

        e.preventDefault();

        var _this = $(this);

        var button = $(this).find(".btn-ajax-show-processing");

        clearValidationErrors(_this);

        button.find(".processing-show").removeClass("d-none");

        button.find(".default-show").addClass("d-none");

        button.addClass("disabled");

        button.prop("disabled", true);

        var form_data = new FormData(this);

        var url = $(this).attr("action");

        $.ajax({
            xhr: function () {
                if ($('input[type="file"]').val()) {

                    var xhr = new XMLHttpRequest();

                    xhr.upload.addEventListener("progress", updateProgress, false);

                    return xhr;
                } else {
                    return new XMLHttpRequest();
                }
            },

            url: url,

            type: "POST",

            data: form_data,

            cache: false,

            contentType: false,

            processData: false,

            success: function (data) {

                if (data.status < 1) {
                    button.find(".processing-show").addClass("d-none");

                    button.find(".default-show").removeClass("d-none");

                    button.removeClass("disabled");

                    var errors = "";

                    if (data.error_message) {
                        _this.append('<p class="error-message-text mb-0 mt-2">' + data.error_message + "</p>");
                    }

                    if (data.message) {
                        $.each(data.message, function (key, val) {
                            if (_this.find(".field_" + key).length) {
                                _this.find(".field_" + key).addClass("is-invalid");

                                $.each(val, function (field_key, field_val) {
                                    _this.find(".field_" + key).after('<div class="invalid-feedback mb-2 text-left">' + field_val + "</div>");
                                });
                            }
                        });
                    }
                } else if (data.status && data.status == 1) {

                    if (data.message) {
                        _this.prepend('<p class="alert alert-success my-2">' + data.message + "</p>");
                    }

                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else if (data.refresh) {
                        location.reload();
                    } else {
                        if (!data.no_reset) {
                            _this[0].reset();
                        }

                        if (_this.parents(".modal").length) {
                            modal_id = _this.parents(".modal").attr("id");

                            $("#" + modal_id).modal("hide");
                        }

                        clearValidationErrors(_this);

                        try {
                            refreshTable();
                        } catch (err) {}

                        button.find(".processing-show").addClass("d-none");

                        button.find(".default-show").removeClass("d-none");

                        button.removeClass("disabled");
                    }
                } else {
                    button.find(".processing-show").addClass("d-none");

                    button.find(".default-show").removeClass("d-none");

                    button.removeClass("disabled");
                }

                button.prop("disabled", false);
            },
        });
    });
});

function clearValidationErrors(_this) {
    
    _this.find(".is-invalid").removeClass("is-invalid");

    _this.find(".invalid-feedback").remove();

    $(".error-message-text").remove();
}
