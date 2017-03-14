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
    @foreach($cooks as $cook)
		<tr>
			<td>{{ $cook->id }}</td>
			<td>{{ $cook->user }}</td>
			<td>{{ $cook->food }}</td>
			<td>{{ $cook->comment }}</td>
		</tr>
    @endforeach
	</table>
	</center>
</body>
</html>