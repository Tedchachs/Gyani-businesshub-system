<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- customized styles -->
        <link rel="stylesheet" href="styles/login_gyani.css" type="text/css">
   
    </head>

    <body>
        <h3 class="reg">REGISTRATION FORM</h3>

        <div class="wrapper">

            <div class="header">
                <span><h4>Complete all the steps</h4></span>
                <ul>
                    <li class="form_1_progressbar active ">
                        <div>
                            <p>1</p>
                            
                        </div>
                    </li>
                    <li class="form_2_progressbar">
                        <div>
                            <p>2</p>
                        </div>
                    </li>
                    <li class="form_3_progressbar">
                        <div>
                            <p>3</p>
                        </div>
                    </li>                   
                </ul>
            </div>

            <div class="form_wrap">
                <div class="form_1 data_info">
                    <h2>Signup info</h2>

                    <form action="POST" method="Loggin">
                        <div class="form_container">
                            <div class="input_wrap">
                                <label for="name">Email Address</label>
                                <input type="text" name="Email address" id="email_address" placeholder="Email...">
                            </div>

                            <div class="input_wrap">
                                <label for="password">Password</label>
                                <input type="text" name="Password" id="password" placeholder="Enter Password...">
                            </div>

                            <div class="input_wrap">
                                <label for="confirm password">Confirm Password</label>
                                <input type="text" name="Confirm password" id="confirm password" placeholder="Confirm Password...">
                            </div>
                        </div>
                    </form>

                </div>

                <div class="form_2 data_info">
                    <h2>Person info</h2>

                    <form>
                        <div class="form_container">
                            <div class="input_wrap">
                                <label for="user_name">User Name</label>
                                <input type="text" name="User Name" id="user_name" placeholder="user_name...">
                            </div>

                            <div class="input_wrap">
                                <label for="first_name">First Name</label>
                                <input type="text" name="First Name" id="first_name" placeholder="firstname...">
                            </div>

                            <div class="input_wrap">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="Last Name" id="last_name" placeholder="last_name...">
                            </div>
                        </div>
                    </form>

                </div>

                <div class="form_3 data_info">
                    <h2>Profesional info</h2>

                    <form>
                        <div class="form_container">
                            <div class="input_wrap">
                                <label for="current_company">Current Company</label>
                                <input type="text" name="Current Company" id="current_company">
                            </div>

                            <div class="input_wrap">
                                <label for="total_experience">Total Experience</label>
                                <input type="text" name="First Name" id="total_experience">
                            </div>

                            <div class="input_wrap">
                                <label for="designation">Designation</label>
                                <input type="text" name="Last Name" id="designation">
                            </div>
                        </div>
                    </form>

                </div>

            </div>

            <div class="btns_wrap">
                <div class="common_btns form_1_btns">
                    <button type="button" class="btn_next">    
                        Next
                        <span class="icon">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </span>
                    </button>
                </div>

                <div class="common_btns form_2_btns" style="display: none;">
                    <button type="button" class="btn_back">Previous
                        <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                    </button> 

                    <button type="button" class="btn_next">
                    <span class="icon">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </span>
                        Next
                    </button>
                </div>

                <div class="common_btns form_3_btns" style="display: none;">
                    <button type="button" class="btn_back">Previous
                        <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
                    </button>

                    <button type="button" class="btn_done">
                        Submit
                    </button>
                </div>
            </div>

        </div>

        <div class="modal_wrapper">
            <div class="shadow">
                <div class="success_wrap">
                    <span class="modal_icon"><ion-icon name="checkmark-done-outline"></ion-icon></span>
                    <p>You have successfully registered with us!</p>
                </div>
            </div>
        </div>

    </body>

    <script src="js/gyani.js"></script>
    <!-- imported icons scripts -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        

</html>