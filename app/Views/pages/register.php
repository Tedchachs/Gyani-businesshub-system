<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- customized styles -->
        <link rel="stylesheet" href="public/styles/register_gyani.css" type="text/css">
   
    </head>

    <body>
        <h3 class="reg">REGISTRATION FORM</h3>

        <form action="<?= base_url('register/save')?>" method="post" class="wrapper">

            <div class="header">
                <span><h4>Complete all the steps</h4></span>
                <ul>
                    <li class="form_1_progressbar active ">
                        <div><p>1</p></div>
                    </li>
                    <li class="form_2_progressbar">
                        <div><p>2</p></div>
                    </li>
                    <li class="form_3_progressbar">
                        <div><p>3</p></div>
                    </li>                   
                </ul>
            </div>

            <div class="form_1 data_info active">
                <h2>Signup info</h2>

                <div class="form_container">
                    <div class="input_wrap">
                        <label for="email_address">Email Address</label>
                        <input type="email" name="email_address" id="email_address" placeholder="Email...">
                    </div>

                    <div class="input_wrap">
                        <label for="password">Password</label>
                        <div class="password_input_wrap">
                            <input type="password" name="password" id="password" placeholder="Enter Password...">
                            <ion-icon name="eye-outline" class="eye_icon" id="togglePassword"></ion-icon>
                        </div>
                    </div>

                    <div class="input_wrap">
                        <label for="confirm_password">Confirm Password</label>
                        <div class="password_input_wrap">
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password...">
                            <ion-icon name="eye-outline" class="eye_icon" id="toggleConfirmPassword"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="common_btns form_1_btns">
                    <button type="button" class="btn_next">    
                        Next
                        <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                    </button>
                </div>
                
            </div>

            <div class="form_2 data_info">
                <h2>Person info</h2>

                <div class="form_container">
                    <div class="input_wrap">
                        <label for="user_name">User Name</label>
                        <input type="text" name="user_name" id="user_name" placeholder="user_name...">
                    </div>

                    <div class="input_wrap">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" placeholder="firstname...">
                    </div>

                    <div class="input_wrap">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" placeholder="last_name...">
                    </div>
                </div>
                
                <div class="common_btns form_2_btns" style="display: none;">
                    <button type="button" class="btn_back">Previous
                        <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                    </button> 

                    <button type="button" class="btn_next">
                    <span class="icon"><ion-icon name="arrow-forward-outline"></ion-icon></span>
                        Next
                    </button>
                </div>

            </div>

            <div class="form_3 data_info">
                <h2>Profesional info</h2>

                <div class="form_container">
                    <div class="input_wrap">
                        <label for="current_company">Current Company</label>
                        <input type="text" name="current_company" id="current_company">
                    </div>

                    <div class="input_wrap">
                        <label for="total_experience">Total Experience</label>
                        <input type="text" name="total_experience" id="total_experience">
                    </div>

                    <div class="input_wrap">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" id="designation">
                    </div>
                </div>

                <div class="common_btns form_3_btns" style="display: none;">
                    <button type="button" class="btn_back">Previous
                        <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                    </button>

                    <button type="submit" class="btn_done">
                        Submit
                    </button>
                </div>



            </div>


        </form>

        <div class="modal_wrapper" id="modal_wrapper">
            <div class="shadow">
                <div class="success_wrap">
                    <span class="modal_icon"><ion-icon name="checkmark-done-outline"></ion-icon></span>
                    <p>You have successfully registered with us!</p>
                </div>
            </div>
        </div>

    </body>

</html>

    <!-- custom script -->
    <script src="public/js/gyani.js"></script>
    <!-- imported icons scripts -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="public/Jquery/jquery-3.7.0.js"></script>

    <script> var baseUrl = "<?= base_url() ?>";</script>