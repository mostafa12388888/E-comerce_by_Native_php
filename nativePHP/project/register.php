<?php 
include "project_des/header.php";
?>
<body>
    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="project_function/register.php" method="post">
                        <div class="group-input">
                                <label for="username">FIrst name  <span style="color:red;">*</span></label>
                                <input type="text" name="Fname" require id="username">
                            </div>
                            <div class="group-input">
                                <label for="usernameL">LastName<span style="color:red;">*</span></label>
                                <input type="text" name="LastName"  require id="usernameL">
                            </div>
                            <div class="group-input">
                                <label for="phone">phone<span style="color:red;">*</span></label>
                                <input type="text" name="phone"  require id="phone">
                            </div>
                            <div class="group-input">
                                <label for="username"> Email address  <span style="color:red;">*</span></label>
                                <input type="email" name="email" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password  <span style="color:red;">*</span></label>
                                <input type="password" name="password" id="pass">
                            </div>
                            <div class="group-input">
                                <label for="con-pass"> Confirm Password  <span style="color:red;">*</span></label>
                                <input type="password" name="coPassword" id="con-pass">
                            </div>
                            <button type="submit" name="sub" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="./login.php" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

</body>

</html>