<fieldset id="filters">

	<legend><?php echo lang('global:filters') ?></legend>
	
	<?php echo form_open('','class="form-inline"') ?>
	<?php echo form_hidden('f_module', $module_details['slug']) ?>
		
			<div class="form-group">
				<?php echo lang('user:active', 'f_active') ?>
				<?php echo form_dropdown('f_active', array(0 => lang('global:select-all'), 1 => lang('global:yes'), 2 => lang('global:no') ), array(0),'class="form-control"') ?>
			</div>

			<div class="form-group">
				<?php echo lang('user:group_label', 'f_group') ?>
				<?php echo form_dropdown('f_group', array(0 => lang('global:select-all')) + $groups_select,false,'class="form-control" ng-model="f_group"') ?>
			</div>
			
			<div class="form-group">
                <?php echo form_input('f_keywords',false,'class="form-control"') ?>
            </div>
			<?php echo anchor(current_url(), lang('buttons:cancel'), 'class="btn btn-default cancel" cb-pagination') ?>
		
	<?php echo form_close() ?>
</fieldset>