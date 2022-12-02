<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css"  href="../css/footer.css"> 
<style>
.accordion {
  background-color: #eee;
  color:  #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 20px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>

<h1>Frequently Asked Questions</h1>
<p style="color:black;font-size: 20px;"> Got a question? We're here to answer. If you don't see your question here. drop us a line on our Contact Page.</p>
<button class="accordion"><strong>How to buy any product</strong></button>
<div class="panel">
  <p>Click on any product you like ---> click on seller info ---> then contact the seller for further details.</p>
</div>
<hr>
<button class="accordion"><strong>How to sell the product</strong></button>
<div class="panel">
  <p>Click on sell button ---> Add all the details of product in the form ---> click on Post Now.</p>
</div>
<hr>
<button class="accordion"><strong>Can I return my product</strong></button>
<div class="panel">
  <p>Return policy of each and every product will be acccording to the seller. For further details one must ask the seller before buying the product.</p>
</div>
<hr>
<button class="accordion"><strong>How long will delievery take</strong></button>
<div class="panel">
  <p>Delievery timme will be according to the type of delievery service seller is providing and the area buyers lives in. esitimated delievery time can be 8-10 days and 10-15 days in special conditions.</p>
</div>
<hr>
<button class="accordion"><strong>Can I sell old products</strong></button>
<div class="panel">
  <p>Yes, You can sell old produt. The website Borage is designed to sell old and unusable product online.</p>
</div>
<hr>
<button class="accordion"><strong>How can I pay</strong></button>
<div class="panel">
  <p>We are not providing any payment service Now. You have to contact the seller for pay the products</p>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<div class="footer">
	<div class="footer-left">
		<h3><span>Borage</span></h3>
	
		<p class="footer-links">
		<a href="../php/home.php">Home</a>
		|
		<a href="../php/about.php">About </a>
		|
		<a href="../php/contactus.php" target= "_blank">Contact</a>
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
