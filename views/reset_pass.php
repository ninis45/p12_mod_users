<div class="container">
    <h2 class="page-title"><?php echo lang('user:reset_password_title');?></h2>
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
             <?php if(!empty($error_string)):?>
            	<div class="alert alert-danger">
                    <button data-dismiss="alert" class="close">×</button>
            		<?php echo $error_string;?>
            	</div>
            <?php endif;?>
            
            <?php if(!empty($success_string)): ?>
            	<div class="alert alert-success">
                    <button data-dismiss="alert" class="close">×</button>
            		<?php echo $success_string ?>
            	</div>
            <?php else: ?>
            {{ theme:partial name="notices" }}	
            	<?php echo form_open('users/reset_pass', array('id'=>'reset-pass')) ?>
                <div class="form-group">
            	   <label for="email"><?php echo lang('user:reset_instructions') ?></label>
            	   <input type="text" name="email" maxlength="100" value="<?php echo set_value('email') ?>" />
                </div>
            	<?php echo form_submit('', lang('user:reset_pass_btn'),'class="btn"') ?>
            
            	<?php echo form_close() ?>
            	
            <?php endif ?>
        </div>
    </div>
   
</div>