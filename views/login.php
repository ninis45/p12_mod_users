<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-2">
        
          <section class="account-block">
                <h2 class="page-title" id="page_title"><?php echo lang('user:login_header') ?></h2>
                
                <?php if (validation_errors()): ?>
                <div class="alert alert-danger text-danger">
                    <button data-dismiss="alert" class="close">×</button>
                	<?php echo validation_errors();?>
                </div>
                <?php endif ?>
                
                <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger error animated fadeIn">
                    <button data-dismiss="alert" class="close">×</button>
                	<p><?php echo $this->session->flashdata('error'); ?></p>
                </div>
                <?php endif; ?>
                
                <?php echo form_open('users/login', array('id'=>'login'), array('redirect_to' => $redirect_to)) ?>
               
                	<div class="form-group">
                		<label for="email"><?php echo lang('global:email') ?></label>
                		<?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '','class="form-control" placeholder="Aqui va tu correo electrónico"')?>
                	</div>
                	<div class="form-group">
                		<label for="password"><?php echo lang('global:password') ?></label>
                		<input type="password" id="password" name="password" maxlength="20" class="form-control" placeholder="Introduce tu contraseña" />
                	</div>
                	<!--div class="form-group">
                		<label><?php echo lang('user:remember') ?></label>
                		<?php echo form_checkbox('remember', '1', false,'class=""') ?>
                	</div-->
                	<p>
                         <input type="submit" value="<?php echo lang('user:login_btn') ?>" name="btnLogin" class="btn" /> 
                    </p>
                	
                	
                 
                   <!--div class="form-group">
                        <span class="register"> <?php echo anchor('register', lang('user:register_btn'));?></span> | <?php echo anchor('users/reset_pass', lang('user:reset_password_link'));?>
                    </div-->
                    <?php echo form_hidden('redirect_to',$redirect_to);?>
                	
               
                <?php echo form_close() ?>
                <hr />
                <p class="text-center"><?php if($redirect_to){ $uri_string=explode('/',$redirect_to); ?>	<a href="<?=base_url(str_replace($uri_string[count($uri_string)-1],'',$redirect_to))?>">Regresar</a> | <?php }?><a href="{{ url:base }}users/reset_pass"><?=lang('user:reset_password_link')?></a></p>
                <p>
                Si ya posees una cuenta de usuario, inicia sesión  con tus datos de acceso, en  caso contrario comunicate con tu administrador para asignarte una.
                </p>
                
            </section>
            
        </div>
        
    </div>
</div>