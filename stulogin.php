<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{
	background-image:url(security.jpg);
	background-size:100%;
	background-repeat:no-repeat;
}
  .loginbox{
background:linear-gradient(to right bottom, #0a8893, #009696, #00a491, #00b084, #10bc71);;
height:550px;
width:500px;
top:20%;
left:35%;
position:absolute;
transform:translate(50%-50%);
box-sizing:border-box;
padding:70px 30px;
border-radius:10px;
}
.das{
	width:100px;
	height:100px;
	border-radius:50%;
	position:absolute;
	top:-50px;
	left: calc(48% - 48px);
}
h1{
	margin:0;
	padding:0 0 20px;
	text-align:center;
	font-size:22px;
}
.loginbox p{
	margin:0;
	padding:0;
	text-align:left;
	font-weight:bold;
	font-size:18px;
}
.loginbox input{
	width: 100%;
	margin-bottom:20px;
} 
.loginbox input[type="text"], input[type="password"]
{
	border:none;
	border-bottom:1px solid #fff;
	background:transparent;
	outline:none;
	height:40px;
	color:black;
	font-size:16px;
}
.loginbox input[type="submit"], input[type="reset"]
{
	border:none;
	background:linear-gradient(to top left, #ffff66 0%, #ff9999 78%);
	outline:none;
	height:40px;
	color:#fff;
	font-size:18px;
	border-radius:20px;
}
.loginbox input[type="submit"]:hover, input[type="reset"]:hover
{
	background:red;
	color:#000;
}

h3{
	font-family:Comic Sans MS;
}
   </style>
   </head>
   <body>
   <div class="container">
   
   <center>
   <div class="loginbox">
   <img src="das.jpg" class="das">
   <h3><b>Login Here</b></h3><br>
   <form action="#" method="POST">
   <p>Enter Student id:</p>
   <input type="text" name="uid" placeholder="Student id">
   <p>Enter Password:</p>
   <input type="text" name="pwd" placeholder="Password">
   
<br><br>
<input type="submit" value="Login">
<input type="reset" value="Reset">
<br><br><br>


</form>
</div>
</center>
</div></div>

</body>
</html>
