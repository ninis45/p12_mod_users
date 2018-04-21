<!--h2 class="page-title" id="page_title"><?php echo lang('user:register_header') ?></h2>

<div class="workflow_steps">
	<span id="active_step"><?php echo lang('user:register_step1') ?></span> &gt;
	<span><?php echo lang('user:register_step2') ?></span>
</div>

<?php if(!empty($error_string)): ?>
<div class="error-box">
	<?php echo $error_string ?>
</div>
<?php endif;?>
<?php echo form_open('users/activate', 'id="activate-user"') ?>
<ul>
	<li>
		<label for="email"><?php echo lang('global:email') ?></label>
		<?php echo form_input('email', isset($_user['email']) ? $_user['email'] : '', 'maxlength="40"');?>
	</li>

	<li>
		<label for="activation_code"><?php echo lang('user:activation_code') ?></label>
		<?php echo form_input('activation_code', '', 'maxlength="40"');?>
	</li>

	<li>
		<?php echo form_submit('btnSubmit', lang('user:activate_btn')) ?>
	</li>
</ul>
<?php echo form_close() ?>-->

<div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div id="page-main">
                
                <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1">
                    <div class="row">
                       
                        <div class="col-md-6" style="min-height: 630px;">
                            <section class="account-block" id="account-sign-in">
                                <header><h2><?php echo lang('user:register_header') ?></h2></header>
                                
                                <?php echo form_open('users/activate', 'id="activate-user" class="clearfix" role="form"') ?>
                                    <div class="form-group">
                                        <label for="email"><?php echo lang('global:email') ?></label>
                                        
                                        
                                        <?php echo form_input('email', isset($_user['email']) ? $_user['email'] : '', 'maxlength="40" class="form-control" placeholder="Enter email"');?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><?php echo lang('user:activation_code') ?></label>
                                       
                                        <?php echo form_input('activation_code', '', 'maxlength="40" class="form-control" placeholder="Password"');?>
                                    </div>
                                    
                                    
                                    <?php echo form_submit('btnSubmit', lang('user:activate_btn'),'class="btn pull-right"') ?>
                                <?php echo form_close() ?>
                                <hr/>

                                <p>Por favor completa el formulario y haga clic en Activar.</p>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-10 -->
            </div><!-- /#page-main -->

            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div>