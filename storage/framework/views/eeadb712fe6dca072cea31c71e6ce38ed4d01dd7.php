<!DOCTYPE html>
<html>
<head>  <title>OnlineRecipe</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #682E1F;
    width: 50%;
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
body {
    background-image: url("webapp2017/Baked Chicken Schnitzel.jpeg");
}
</style>
</head>
<body>



<ul>
  <li><a class="active" href="onlinerecipe">Home</a></li>
  <li><a href="aboutUs">About Us</a></li>
</ul>

<h2><center>Online Recipes</center></h2>

<center>
<table>
  <tr>
    <th>Foods</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><a href ="BakedChickenSchnitzel">Baked Chicken Schnitzel</a></td>
    <td>I-google mo</td>
  </tr>
  <tr>
    <td><a href ="#">Double-Chocolate Cupcakes</a></td>
    <td>I-google mo</td>
  </tr>
  <tr>
    <td><a href ="#">Classic Macaroni Salad</a></td>
    <td>I-google mo</td>
  </tr>
  <tr>
    <td><a href ="#">Old-Fashioned Peanut Butter Cookies</a></td>   
    <td>I-google mo</td>
</tr>
  <tr>
    <td><a href ="#">Slow Cooker Chicken Taco Soup</a></td>   
    <td>I-google mo</td>
</tr>

</table>


</body>

</html>
