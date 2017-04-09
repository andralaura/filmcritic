    <div class="row">
        <div class='col-md-3'></div>
        <div class="col-md-6">
            <div class="register-box well">
                <h2><?= $this->lang->line('i_register')?></h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username"><?= $this->lang->line('i_username')?></label>
                        <input required="" value="<?php echo !empty($user['username'])?$user['username']:''; ?>" id="username" name="username" type="text" class="form-control" />
						<?php echo form_error('username','<span class="help-block">','</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email"><?= $this->lang->line('i_email')?></label>
                        <input required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" id="email" name="email" type="text" class="form-control" />
						<?php echo form_error('email','<span class="help-block">','</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password"><?= $this->lang->line('i_password')?></label>
                        <input required="" id="password" name="password" type="password" class="form-control" />
						<?php echo form_error('password','<span class="help-block">','</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="conf_password"><?= $this->lang->line('i_confirm_password')?></label>
                        <input required="" id="conf_password" name="conf_password" type="password" class="form-control" />
						<?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="regisSubmit" class="btn btn-default btn-register-submit btn-block m-t-md" value="<?= $this->lang->line('i_register')?>" />
                    </div>
                </form>
            </div>
        </div>
        <div class='col-md-3'></div>
    </div>