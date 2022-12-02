<?php
session_start(); 
if (!isset($_SESSION['username'])) { 
    $_SESSION['msg'] = "You have to log in first"; 
    header('location: ../php/login.php'); 
} 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title> Selling on Borage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css"  href="../css/sell.css"> 
</head>
<body>
<div class="header">
	<a href="../php/logout.php" class="logo">Borage</a> 
                    <p> Tell us about your item </p>
</div>

<form action="../php/sellpage.php" method="post" enctype="multipart/form-data"> 	
	 <div class="input-group"> 
	<label> CHOOSE A CATEGORY </label> 
	<select  name="category" >
		<option ></option>
 		<option > Books </option>
  		<option > Accesorries </option>
  		<option > Bedding </option>
 		<option > Clothing </option>
  		<option> Shoes </option>
		<option > Kichen Supplies </option>
	</select>
	</div>
	<hr width= "100%">
	<p> <strong>Add as many details as you can</strong> </p>
	 <div class="input-group"> 
	<label>Title of the Product*</label> 
		<input type="text" placeholder="Enter brand, model, or other details (ISBN, age, type)" name="product_title">
	</div>
	 <div class="input-group"> 
	<label>Description*</label> 
		<textarea style="height:150px" placeholder= "Enter features, color, size and reason for selling" name="description" ></textarea>
	</div>
	 <div class="input-group"> 
	<label>Price*</label> 
	<input type="text" name="price">
	</div>
	<hr width= "100%">
	<p> <strong> UPLOAD  PHOTO </strong> </p>
	 <div class="input-group"> 
	<input type="file" name="image">
	</div>
	<hr width= "100%">
	<p><strong> Your details</p>
	 <div class="input-group">
	<label>Mobile phone number*</label>  
	<input type="text" placeholder="Enter phone number" name="phone_num" required>
	</div>
	 <div class="input-group"> 
	<input type="submit" name="Post Now" value="Post Now">
	</div>
	
</form>
</body>
</html>
