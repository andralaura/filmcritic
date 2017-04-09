    <div class="row">
        <div class='col-md-3'></div>
        <div class="col-md-6">
            <div class="login-box well">
                <h2><h2><?= $this->lang->line('i_log_in')?></h2></h2>
				<?php
                    if(!empty($success_msg)){
                        echo '<p class="statusMsg">'.$success_msg.'</p>';
                    }elseif(!empty($error_msg)){
                        echo '<p class="statusMsg">'.$error_msg.'</p>';
                    }
				?>
                <form action="" method="post">
                    <div class="form-group has-feedback">
                        <label for="username"><?= $this->lang->line('i_username')?></label>
                        <input value="" required="" id="username" type="text" name="username" class="form-control" />
						<?php echo form_error('username','<span class="help-block">','</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password"><?= $this->lang->line('i_password')?></label>
                        <input value="" required="" id="password" type="password" name="password" class="form-control" />
						<?php echo form_error('password','<span class="help-block">','</span>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" name="loginSubmit" value="<?= $this->lang->line('i_log_in')?>" />
                    </div>
                    <div class="form-group">
                        <p class="text-center m-t-xs text-sm"><?= $this->lang->line('i_create_account_question')?></p>
                        <a href="<?php echo base_url(); ?>users/registration" class="btn btn-default btn-block m-t-md"><?= $this->lang->line('i_create_account')?></a>
                    </div>
                </form>
            </div>
            <div class='col-md-3'></div>
        </div>
    </div>