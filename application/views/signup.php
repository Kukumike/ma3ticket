<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign up &CenterDot; Online bus booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/datepicker.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/main.css'); ?>"/>

        <!-- Icon -->
        <link rel="icon" href="<?php echo base_url('style/imgs/favicon.ico'); ?>"/>

    </head>
    <body>

        <!-- sign up pane -->
        <div class="container">
            <div class="bus-account text-center">
                <a class="" href="<?php echo base_url(); ?>">ma3ticket</a>
                <h2>Sign up for ma3ticket</h2>
            </div>
            <div class="loginDivision">

                <div class="accountForm">
                    <div class="alert alert-warning alert-dismissible  <?php echo $error_hide; ?>" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Oops!</strong> An error occurred. Try again later.
                    </div>

                    <div class="alert alert-success alert-dismissible <?php echo $success_hide; ?>" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Sign up Successful!</strong> Login now.
                    </div>

                    <form method="post" action="<?php echo base_url('signupAction'); ?>">
                        <div class="form-group">
                            <label class="control-label" for="opp_name">Company name</label>
                            <?php echo form_error('opp_name'); ?>
                            <input type="text" name="opp_name" id="opp_name" class="input-account" value="<?php echo $oopName; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="opp_mail">Email</label>
                            <?php echo form_error('opp_mail'); ?>
                            <input type="email" name="opp_mail" id="opp_mail" class="input-account" value="<?php echo $oopMail; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="opp_pass">Password</label>
                            <?php echo form_error('opp_pass'); ?>
                            <input type="password" name="opp_pass" id="opp_pass" class="input-account"  value=""/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="opp_pass_con">Confirm Password</label>
                            <?php echo form_error('opp_pass_con'); ?>
                            <input type="password" name="opp_pass_con" id="opp_pass_con" class="input-account"  value=""/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="account-submit" value="Sign up"/>
                        </div>
                    </form>
                </div>

                <p>Already a registered operator? <a href="<?php echo base_url('login'); ?>">Sign in</a></p>
            </div>
        </div>



        <script src="<?php echo base_url('style/js/jquery/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap-datepicker.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/main.js'); ?>"></script>

    </body>
</html>
