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

    $(document).ready(function () {
        // Handle "Next" button click
        $('.btn_next').click(function () {
            const activeForm = $('.data_info.active');
            const nextForm = activeForm.next('.data_info');
    
            if (nextForm.length !== 0) {
                activeForm.removeClass('active');
                nextForm.addClass('active');
            }
    
            updateButtonVisibility();
        });
    
        // Handle "Previous" button click
        $('.btn_back').click(function () {
            const activeForm = $('.data_info.active');
            const prevForm = activeForm.prev('.data_info');
    
            if (prevForm.length !== 0) {
                activeForm.removeClass('active');
                prevForm.addClass('active');
            }
    
            updateButtonVisibility();
        });
    
        // Handle "Submit" button click
        $('.btn_done').click(function () {
            submitFormData();
        });
    
        // Function to update button visibility based on active form
        function updateButtonVisibility() {
            const activeForm = $('.data_info.active');
            $('.common_btns').hide();
            if (activeForm.hasClass('form_1')) {
                $('.form_1_btns').show();
            } else if (activeForm.hasClass('form_2')) {
                $('.form_2_btns').show();
            } else if (activeForm.hasClass('form_3')) {
                $('.form_3_btns').show();
            }
        }
    
        // Function to handle form submission
        function submitFormData() {
            const formData = new FormData();
            const forms = $('form');
    
            forms.each(function (index, form) {
                const formFields = new FormData(form);
                for (const pair of formFields.entries()) {
                    formData.append(pair[0], pair[1]);
                }
            });
    
            $.ajax({
                url: "loggin/save",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    console.log(data);
                    // Assuming the server returns a success message, you can show the modal
                    if (data.success) {
                        $('#modal_wrapper').addClass("active");
                    } else {
                        $('#modal_wrapper').removeClass("active");
                    }
                },
                error: function (error) {
                    console.log(error); // Log the error to the console (for debugging)
                    alert('Ajax has failed to submit the form data. Please contact the administrator.'); // Show an alert to the user
                }
            });
        }
    });
    

    // btn_done.addEventListener("click", function () {
    //     submitFormData();
    //     modal_wrapper.classList.add("active");
    // });

    shadow.addEventListener("click", function () {
        modal_wrapper.classList.remove("active");
    });

    function showPassword() {
        var x = document.getElementById("password");
        var y = document.getElementById("confirm password");
        if (x.type === "password" && y.type === "password") {
            x.type = "text";
            y.type = "text";
        } else {
            x.type = "password";
            y.type = "password";
        }
    }

    


    
  


