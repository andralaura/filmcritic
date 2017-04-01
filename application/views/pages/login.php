    <div class="row">
        <div class='col-md-3'></div>
        <div class="col-md-6">
            <div class="login-box well">
                    <form action="">
                        <legend>Sign in</legend>
                        <div class="form-group">
                            <label for="username-email">Username or email</label>
                            <input value='' id="username-email" placeholder="Username or email" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" value='' placeholder="Password" type="text" class="form-control" />
                        </div>
                        <div class="input-group">
                          <div class="checkbox">
                            <label>
                              <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" value="Login" />
                        </div>
                        <div class="form-group">
                            <p class="text-center m-t-xs text-sm">Do not have an account?</p> 
                            <a href="<?php echo base_url(); ?>pages/view/register" class="btn btn-default btn-block m-t-md">Create an account</a>
                        </div>
                    </form>
                
            </div>
        </div>
        <div class='col-md-3'></div>
    </div>