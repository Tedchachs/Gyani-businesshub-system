// Navigation buttons scripts
var form_1 = document.querySelector(".form_1");
var form_2 = document.querySelector(".form_2");
var form_3 = document.querySelector(".form_3");

var form_1_btns = document.querySelector(".form_1_btns");
var form_2_btns = document.querySelector(".form_2_btns");
var form_3_btns = document.querySelector(".form_3_btns");

var form_1_next_btn = document.querySelector(".form_1_btns .btn_next");
var form_2_back_btn = document.querySelector(".form_2_btns .btn_back");
var form_2_next_btn = document.querySelector(".form_2_btns .btn_next");
var form_3_back_btn = document.querySelector(".form_3_btns .btn_back");

var btn_done = document.querySelector(".btn_done");
var modal_wrapper = document.querySelector(".modal_wrapper");
var shadow = document.querySelector(".shadow");

var form_2_progressbar = document.querySelector(".form_2_progressbar");
var form_3_progressbar = document.querySelector(".form_3_progressbar");

    form_1_next_btn.addEventListener("click", function () {
        form_1.style.display="none";
        form_2.style.display="block";

        form_1_btns.style.display="none";
        form_2_btns.style.display="flex";

        form_2_progressbar.classList.add("active");
    });

    form_2_back_btn.addEventListener("click", function () {
        form_1.style.display="block";
        form_2.style.display="none";

        form_1_btns.style.display="flex";
        form_2_btns.style.display="none";

        form_2_progressbar.classList.remove("active");
    });

    form_2_next_btn.addEventListener("click", function () {
        form_3.style.display="block";
        form_2.style.display="none";

        form_3_btns.style.display="flex";
        form_2_btns.style.display="none";

        form_2_progressbar.classList.add("active");
    });

    form_3_back_btn.addEventListener("click", function () {
        form_3.style.display="none";
        form_2.style.display="block";

        form_3_btns.style.display="none";
        form_2_btns.style.display="flex";

        form_2_progressbar.classList.add("active");
    });

    // Submission of the form data script
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector('.wrapper');
        const modal_wrapper = document.getElementById('modal_wrapper');
        const shadow = document.querySelector('.shadow');
    
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            submitFormData(this);
        });
    
        function submitFormData(form) {
            const formData = new FormData(form);
            $.ajax({
                url: 'register/save',
                type: "POST",
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status) {
                        modal_wrapper.classList.add("active");
                        shadow.classList.add("active");
    
                        setTimeout(function () {
                            window.location.href = baseUrl + 'login'; 
                        }, 5000);
                    } else {
                        window.location.href = baseUrl + 'register';
                    }
                },
                error: function (error) {
                    console.error("Failed to submit the form data.");
                    alert("AJAX has failed to submit the form data. Please contact the administrator.");
                }
            });
        }
    });

    // eye-off-outline and eye-outline icons script

    document.addEventListener("DOMContentLoaded", function () {
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("confirm_password");
        var togglePassword = document.getElementById("togglePassword");
        var toggleConfirmPassword = document.getElementById("toggleConfirmPassword");

        togglePassword.addEventListener("click", function () {
            showPassword(password);
        });

        toggleConfirmPassword.addEventListener("click", function () {
            showPassword(confirm_password);
        });

        function showPassword(input) {
            if (input.type === "password") {
                input.type = "text";
                togglePassword.setAttribute("name", "eye-off-outline");
                toggleConfirmPassword.setAttribute("name", "eye-off-outline");
            } else {
                input.type = "password";
                togglePassword.setAttribute("name", "eye-outline");
                toggleConfirmPassword.setAttribute("name", "eye-outline");
            }
        }

    });
