<!DOCTYPE html>
<html>
<head>
	<title>Comment</title>
	<link rel="stylesheet" type="text/css" href="/css/style2.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<ul class="nav nav-bar nav">
			 <li><a href="/">HOME</a></li>
			 <li><a href="/comment">COMMENTS</a></li>
			 <li><a href="/menu">MENU</a></li>
			 <li><a href="/comment-show">SHOW COMMENTS</a></li>
		</ul>
	</div>
	<center>
	<table bgcolor="white" border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Name of Food</th>
			<th>Comment</th>
			<th></th>
		</tr>
    <?php $__currentLoopData = $cooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($cook->id); ?></td>
			<td><?php echo e($cook->user); ?></td>
			<td><?php echo e($cook->food); ?></td>
			<td><?php echo e($cook->comment); ?></td>
		</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	</center>
</body>
</html>