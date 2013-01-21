<?php
if(isset($static)): 
?>
	<?php if($static != ""): ?>
		<div class="block">
		   <div class="block-title"><?php if($static->showtitle==1):?> <span><?php echo $static->title?></span><?php endif?></div>
		    <div class="block-content">
		        <?php echo $static->content?>
		    </div>
		</div>
	<?php endif?>
<?php endif?>