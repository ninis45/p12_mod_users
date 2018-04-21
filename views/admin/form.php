<section class="lead">
	<?php if ($this->method === 'create'): ?>
		<h4><?php echo lang('user:add_title') ?></h4>
		<?php //echo form_open_multipart(uri_string(), 'class="crud" autocomplete="off"') ?>
	
	<?php else: ?>
		<h4><?php echo sprintf(lang('user:edit_title'), $member->username) ?></h4>
		<?php //echo form_open_multipart(uri_string(), 'class="crud"') ?>
		
	<?php endif ?>
</section>

<section class="item">
	
	
     <?php echo form_open_multipart(uri_string(), 'class="crud" autocomplete="off"') ?>
        <!-- Content tab -->
        
        <?php if($this->method == 'edit') echo form_hidden('row_edit_id', isset($member->row_edit_id) ? $member->row_edit_id : $member->profile_id); ?>
        <div class="content ui-tab-container ui-tab-horizontal">
            <uib-tabset justified="false" class="ui-tab">
                <uib-tab heading="<?php echo lang('profile_user_basic_data_label') ?>">
                    <fieldset>
    					<ul>
    						<div class="form-group">
    							<label for="email"><?php echo lang('global:email') ?> <span>*</span></label>
    							<div class="input">
    								<?php echo form_input('email', $member->email, 'id="email" class="form-control"') ?>
    							</div>
    						</div>
    						
    						<div class="form-group">
    							<label for="username"><?php echo lang('user:username') ?> <span>*</span></label>
    							<div class="input">
    								<?php echo form_input('username', $member->username, 'id="username" class="form-control"') ?>
    							</div>
    						</div>
    	
    						<div class="form-group">
    							<label for="group_id"><?php echo lang('user:group_label') ?></label>
    							<div class="input">
    								<?php echo form_dropdown('group_id', array(0 => lang('global:select-pick')) + $groups_select, $member->group_id, 'id="group_id" class="form-control"') ?>
    							</div>
    						</div>
    						
    						<div class="form-group">
    							<label for="active"><?php echo lang('user:activate_label') ?></label>
    							<div class="input">
    								<?php $options = array(0 => lang('user:do_not_activate'), 1 => lang('user:active'), 2 => lang('user:send_activation_email')) ?>
    								<?php echo form_dropdown('active', $options, $member->active, 'id="active" class="form-control"') ?>
    							</div>
    						</div>
    						<div class="form-group">
    							<label for="password">
    								<?php echo lang('global:password') ?>
    								<?php if ($this->method == 'create'): ?> <span>*</span><?php endif ?>
    							</label>
    							<div class="input">
    								<?php echo form_password('password', '', 'id="password" autocomplete="off" class="form-control"') ?>
    							</div>
    						</div>
    					</ul>
    				</fieldset>
                </uib-tab>
                <uib-tab heading="<?php echo lang('user:profile_fields_label') ?>">
                    <fieldset>
    					
    	
    						<div class="form-group">
    							<label for="display_name"><?php echo lang('profile_display_name') ?> <span>*</span></label>
    							<div class="input">
    								<?php echo form_input('display_name', $display_name, 'id="display_name" class="form-control"') ?>
    							</div>
    						</div>
    	
    						<?php foreach($profile_fields as $field): ?>
    						<div class="form-group">
    							<label for="<?php echo $field['field_slug'] ?>">
    								<?php echo (lang($field['field_name'])) ? lang($field['field_name']) : $field['field_name'];  ?>
    								<?php if ($field['required']){ ?> <span>*</span><?php } ?>
    							</label>
    							<div class="input">
    								<?php echo $field['input'] ?>
    							</div>
    						</div>
    						<?php endforeach ?>
    	
    					
    				</fieldset>
                </uib-tab>
            </uib-tabset>
        </div>
		<div class="divider"></div>

		<div class="buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'save_exit', 'cancel') )) ?>
		</div>
	
	<?php echo form_close() ?>

	
</section>