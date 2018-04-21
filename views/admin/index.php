<section class="title lead text-success">
	<?php echo lang('user:list_title') ?>
</section>

<section class="item" ng-controller="IndexCtrl">
	<div class="content">
	
		<?php template_partial('filters') ?>
	
		<?php echo form_open('admin/users/action') ?>
		
			<div id="filter-stage"  ng-bind-html="table">
				<?php  template_partial('tables/users') ?>
			</div>
		    
            <?php  //$this->load->view('admin/partials/pagination') ?>
            <div class="divider clearfix"  >
                <uib-pagination total-items="<?=$total_items?>" 
                            ng-model="currentPage" 
                            max-size="maxSize" 
                            class="pagination-sm" boundary-links="true" 
                            previous-text="&lsaquo;" 
                            ng-change="select_page(currentPage)"
                            next-text="&rsaquo;">
                
                </uib-pagination>
                           
            </div>
			<div class="form-actions">
				<?php $this->load->view('admin/partials/buttons', array('buttons' => array('activate', 'delete') )) ?>
			</div>
	
		<?php echo form_close() ?>
	</div>
</section>
