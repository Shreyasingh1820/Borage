<!DOCTYPE html>
<html lang="en">
<head>
<title> About Us | Borage </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css"  href="../css/footer.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
body{
 box-sizing: border-box;
margin:0;
padding: 0;
}
.header{
 height:130vh;
 width: 100%;
 background-image: url("../images/about.jpg");
 background-repeat: no-repeat;
 background-size: cover;
 background-position: center;
}
.main{
width: 75%;
background-color: #474e5d;
color: white;
text-align: center;
padding: 30px;
margin: 10px 140px;
}
.main1{
width: 60%;
background-color: #a0522d;
color: white;
text-align: center;
padding: 10px;
margin: 30px 250px;
border-radius:25px;
}
.main1 p{
font-size: 20px;
font-family: Arial;
text-align: center;
color:white;
}
.main2 img{

  display: block;
  border-radius: 8px;
  padding: 10px;
  margin: 30px 450px;
  width:"400"; 
  height:"400";
 }
@media screen and (max-width: 880px) {
.main, .main1, p{
float:left;
margin:20px 40px;
flex-direction: column;
padding: 2%;
text-align:center;
align: center
padding: auto;
}
body{
	width: 100%;
	height: auto;
}
.main2 img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 80%;
	height: auto;
}
}


</style>
</head> 
<body>
<div class="header">
<div class="main">
<img src="../images/aboutus.png">
</div>
<div class="main1">
<p> Made in 2021 by two students of B.Sc IT final year as their project.</p>
 <p>An ecommerce website that provides selling and buying of products. </p>
</div>
<div class="main2">
<img src="../images/categories.png" class="Responsive" >
</div>
</div>
<div class="footer" >
	<div class="footer-left">
		<h3><span>Borage</span></h3>
	
		<p class="footer-links">
		<a href="../php/home.php">Home</a>
		|
		<a href="../php/about.php">About </a>
		|
		<a href="../php/contact-view.php" target= "_blank">Contact</a>
		|
		<a href="../php/help.php">FAQ</a>
		</p>

		<p class="footer-company-name">Borage &copy; 2021</p>
	</div>
	<div class="footer-center">
 		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>Gayatrikunj, Haripur kala</span> Haridwar, Uttarakhand, India</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+91 9579815491</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto: support@borage.com">support@borage.com</a></p>
		</div>
 	</div>
	<div class="footer-right">
 		<p class="footer-company-about">
		<span>About the website</span>
		 Borage is a platform that provides selling of second hand as well as unused products easily.
		</p>
 	</div>
</div>
</body>
</html>