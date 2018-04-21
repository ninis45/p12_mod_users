<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-2">
        
          <section class="account-block">
                <h2 class="page-title" id="page_title"><?php echo lang('user:login_header') ?></h2>

                <div class="success-box alert alert-success">
                	<?php echo $this->lang->line('user:activated_message') ?>
                </div>
                
                <?php echo form_open('users/login/acceso', array('id'=>'login')) ?>
                
                	<div class="form-group">
                		<label for="email"><?php echo lang('global:email') ?></label>
                		<?php echo form_input('email') ?>
                	</div>
                	
                    <div class="form-group">
                		<label for="password"><?php echo lang('global:password') ?></label>
                		<?php echo form_password('password') ?>
                	</div>
                	
                	<div class="form_buttons">
                		<input type="submit" class="btn" value="<?php echo lang('user:login_btn') ?>" name="btnLogin" />
                	</div>
                
                <?php echo form_close() ?>
          </section>
        </div>
    </div>
</div>
