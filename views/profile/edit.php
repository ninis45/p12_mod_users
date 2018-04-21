<div class="container">
    <header><h1><?php echo ($this->current_user->id !== $_user->id) ?
        					sprintf(lang('user:edit_title'), $_user->display_name) :
        					lang('profile_edit') ?></h1></header>
    <div class="row">
            <div class="col-md-8">
            {{ theme:partial name="notices" }}
           	<?php echo form_open_multipart('', array('id'=>'user_edit'));?>
                <?php if (validation_errors()):?>
            	<div class="alert alert-danger">
            		<?php echo validation_errors();?>
            	</div>
            	<?php endif;?>
                <section id="my-account">
                    <ul class="nav nav-tabs" id="tabs">
                        <li class="active"><a href="#tab-access" data-toggle="tab"><?php echo lang('profile_user_basic_data_label') ?></a></li>
                        <li><a href="#tab-profile" data-toggle="tab"><?php echo lang('user:profile_fields_label') ?></a></li>
                        
                    </ul><!-- /#my-profile-tabs -->
                    <div class="tab-content my-account-tab-content">
                        <div class="tab-pane active" id="tab-access">
                            <section>
                                <div class="form-group">
                                    <label for="display_name"><?php echo lang('profile_display_name') ?></label>
                    				<div class="input">
                    				<?php echo form_input(array('name' => 'display_name', 'id' => 'display_name', 'value' => set_value('display_name', $display_name))) ?>
                				</div>
                                </div>
                                 <div class="form-group">
                                    <label for="email"><?php echo lang('global:email') ?></label>
                    				<div class="input">
                    					<?php echo form_input('email', $_user->email,'class="form-control"') ?>
                    				</div>
                                 </div>
                                 <div class="form-group">
                                 
                                    <label for="password"><?php echo lang('global:password') ?></label><br/>
    				                <?php echo form_password('password', '', 'autocomplete="off" class="form-control"') ?>
                                 </div>
                            </section>
                        </div>
                        <div class="tab-pane" id="tab-profile">
                            <section>
                                <header><h3>Mi perfil</h3></header>
                                <div class="my-profile">
                                    <figure class="profile-avatar">
                                        <div class="image-wrapper"><?php echo gravatar($this->current_user->email, 90,'g',false,false,''); ?></div>
                                    </figure>
                                    <article>
                                        <?php foreach($profile_fields as $field): ?>
				                                <?php if($field['input']): ?>
                                                <div class="form-group">
                                                    <label>	<?php echo (lang($field['field_name'])) ? lang($field['field_name']) : $field['field_name'];  ?>: </label>
                                                    
                                                        <div class="input-group">
                                                            <?php echo $field['input'] ?>
                                                        </div><!-- /input-group -->
                                                    
                                                </div>
                                                <?php endif ?>
                                   	    <?php endforeach ?>
                                    
                                    
                                        
                                        <!--button type="submit" class="btn pull-right">Save Changes</button-->
                                    </article>
                                </div><!-- /.my-profile -->
                            </section><!-- /#my-profile -->
                        </div><!-- /tab-pane -->
                        <div class="tab-pane" id="tab-my-courses">
                            <section id="course-list">
                                
                            </section><!-- /#course-list -->
                        </div><!-- /.tab-pane -->
                      
                    </div><!-- /.tab-content -->
                </section>
                <?php echo form_submit('', lang('profile_save_btn'),'class="btn pull-right confirm" title="Confirma guardar los cambios?"') ?>
            <?php echo form_close();?>
            </div>

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                
            </div><!-- /.col-md-4 -->
            <!-- end SIDEBAR Content-->




    </div><!-- /.row -->
</div>