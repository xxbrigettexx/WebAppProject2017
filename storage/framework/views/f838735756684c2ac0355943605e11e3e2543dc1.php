<!DOCTYPE html>
<html>
<head>  <title>OnlineRecipe</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li a {
    display: inline-block;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    color: white;
}

li a:hover {
    background-color: #111;
}
li a:hover:not(.active) {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}

table {
    border-collapse: collapse;
    width: 80%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
a:link {
    color: black;
    background-color: transparent;
    text-decoration: none;
}

a:hover {
    color: blue;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="onlinerecipe">Home</a></li>
  <li><a href="#about">About Us</a></li>
</ul>

<h2><center>About Us</center></h2>

</body>

</html>
