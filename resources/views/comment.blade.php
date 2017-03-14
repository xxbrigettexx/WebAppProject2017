<!DOCTYPE html>
<html>
<head>
	<title>COMMENTS</title>
	<link rel="stylesheet" type="text/css" href="/css/style2.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<div class="box">
		<div class="container">
			<ul class="nav nav-bar nav">
			    <li><a href="/">HOME</a></li>
			    <li><a href="/comment">COMMENTS</a></li>
			    <li><a href="/menu">MENU</a></li>
			    <li><a href="/comment-show">SHOW COMMENTS</a></li>
			</ul>
		</div>

<div class="center">

<form method="post" action="/save">

{{ csrf_field() }}

  &nbsp<h4>Full Name:</h4> <input type="text" name="user" placeholder="Full Name">
  <br>
  &nbsp<h4>Food Name:</h4> <input type="text" name="food" placeholder="Food Name">
  <br>
  &nbsp<h4>Comment:</h4> <input type="text" class="comment" name="comment" placeholder="Comment">
  <br>
  <input type="submit" class="button" value="Submit">
</form>

</div>

</body>
</html>