<style type="text/css">
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
</style>

<div class="container" style="display:none">    
        <div id="loginbox" style="margin-top:110px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'login-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                'validateOnSubmit'=>true,
                            ),
                            'htmlOptions'=>array(
                                    'class'=>'form-horizontal',
                             ),
                        )); ?> 
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <!-- <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email"> -->
                                        <?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder' => 'username or email')); ?>
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <!-- <input id="login-password" type="password" class="form-control" name="password" placeholder="password"> -->
                                        <?php echo $form->passwordField($model,'password', array('class' => 'form-control', 'placeholder' => 'password')); ?>
                            </div>
                                    
                                
                            <div class="input-group">
                                <label>
                                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                </label>
                            </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <!-- <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a> -->
                                      <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-success')); ?>
    
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="margin-top:20px; border-top: 1px solid#888; padding-top:15px; font-size:80%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            <?php $this->endWidget(); ?>  
                        </div>                     
                    </div>  
        </div>



        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'signupform',
                                'enableClientValidation'=>true,
                                'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                                ),
                                'htmlOptions'=>array(
                                    'class'=>'form-horizontal',
                                ),
                            )); ?> 
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <!-- <input type="text" class="form-control" name="email" placeholder="Email Address"> -->
                                        <?php echo $form->textField($daftar,'username', array('class' => 'form-control', 'placeholder' => 'username or email')); ?>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <!-- <input type="text" class="form-control" name="firstname" placeholder="First Name"> -->
                                        <?php echo $form->textField($daftar,'first_name', array('class' => 'form-control', 'placeholder' => 'First Name')); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <!-- <input type="text" class="form-control" name="lastname" placeholder="Last Name"> -->
                                        <?php echo $form->textField($daftar,'last_name', array('class' => 'form-control', 'placeholder' => 'Last Name')); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <!-- <input type="password" class="form-control" name="passwd" placeholder="Password"> -->
                                        <?php echo $form->passwordField($daftar,'password', array('class' => 'form-control', 'placeholder' => 'password')); ?>
                                    </div>
                                </div>
                                    
                                

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <!-- <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button> -->
                                        <?php echo CHtml::submitButton('Sign Up', array('class' => 'btn btn-success')); ?>
                                    </div>
                                </div>
                            <?php $this->endWidget(); ?>
                         </div>
                    </div>
         </div> 
    </div>


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <!-- <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1> -->
            <div class="account-wall">
                <img class="profile-img" src="https://lh3.googleusercontent.com/-Vby2-BQWtZ8/AAAAAAAAAAI/AAAAAAAAAAA/CjQq1Pjk6bQ/photo.jpg?sz=120"
                    alt="">
                <!-- <form class="form-signin"> -->
                <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'login-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                'validateOnSubmit'=>true,
                            ),
                            'htmlOptions'=>array(
                                    'class'=>'form-signin',
                             ),
                        )); ?>
                <!-- <input type="text" class="form-control" placeholder="Email" required autofocus> -->
                <?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder' => 'Username or Email', 'autofocus')); ?>
                <?php echo $form->passwordField($model,'password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>
                <!-- <input type="password" class="form-control" placeholder="Password" required> -->
                <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button> -->
                 <?php echo CHtml::submitButton('Sign In', array('class' => 'btn btn-lg btn-primary btn-block')); ?>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                <?php $this->endWidget(); ?>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>