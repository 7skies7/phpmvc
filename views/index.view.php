
<?php require 'views/partials/header.php'; ?>
   		<ul>
   			<?php foreach($tasks as $task) : ?>
   				<?php if($task->completed) : ?>
   					<li><strike><?= $task->description; ?></strike></li>
   				<?php else : ?>
   					<li><?= $task->description; ?></li>
   				<?php endif; ?>	

 	  		<?php endforeach; ?>
   		</ul>
<?php require 'views/partials/footer.php'; ?>
