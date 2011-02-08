<?php
if (isset($paginator) && !empty($paginator) &&
	$paginator->counter(array('format' => '%pages%')) != 1) {
?>
	<div class="paging">
	<?php 
	echo "\t" . $paginator->prev('<< ' . __('previous', true), array(), null, array('class' => 'disabled')) . "\n";?>
	 | <?php echo $paginator->numbers() . "\n"?>
	<?php echo "\t ". $paginator->next(__('next', true) .' >>', array(), null, array('class' => 'disabled')) . "\n";?>
	</div>
	<?php }?>