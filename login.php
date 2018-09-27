<?php 
    require_once "header.php";
?> 
<div id="apart_banner_area" class="apart-banner">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="apart-banner-title">
                <div class="text-center">
                    <h1 style="color: #fff;">LOGIN TO ACCOUNT</h1>
                    <a href="index.html"><i class="fa fa-home" aria-hidden="true" style="float: none;"></i>HOME</a>
                    <span class="crumbs-spacer"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    <span class="current">LOGIN</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login page -->
<div class="login_page">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-4 login">
                <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                           <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">login</a></li>
                           <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home" >
                                <form>
                                    <label for="uname"><b>Username</b></label>
                                    <input type="text" placeholder="Enter Username" name="uname" class="login_input" required>

                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" class="login_input" required>
                                        
                                    <label>
                                      <input type="checkbox" checked="checked" name="remember" style="margin-top:12px;"> Remember me
                                    </label>
                                    <span class="psw">Forgot <a href="#">password?</a></span>
                                    <button type="submit" class="col-sm-6 col-sm-offset-3 login_btn">Login</button>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile" >
                                 <form>
                                     <input type="text" placeholder="Username" name="uname" class="login_input" required>
                                     <input type="text" placeholder="Email address" name="uname" class="login_input" required>
                                    <input type="password" placeholder="Password" name="psw" class="login_input" required>
                                        
                                     <input type="password" placeholder="confirm Password" name="psw" class="login_input" required>
                                    <button type="submit" class="col-sm-6 col-sm-offset-3 login_btn">Register
                                     </button> 
                                </form>   
                            </div>
                        </div>                        
                </div>              
            </div>
        </div>
    </div>
</div>

<?php 
    require_once "footer.php";
?>