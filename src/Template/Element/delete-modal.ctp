<?php
	$content = __('Are you sure you want to delete this register?');
	echo $this->Modal->create(['id' => 'confirmDelete']) ;
	echo $this->Modal->header(__('Confirm deletion'), ['close' => false]) ;
	echo $this->Modal->body($content, ['id' => 'bodyModal']) ;
	echo $this->Modal->footer([
		$this->Form->postLink(__('Yes'), ['action' => 'delete'], ['id' => 'confirmDeleteButton', 'class' => 'btn btn-danger']),
		$this->Form->button(__('No'), ['data-dismiss' => 'modal'])
	]);
	echo $this->Modal->end();
?>