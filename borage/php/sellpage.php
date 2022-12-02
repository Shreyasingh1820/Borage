<?php
$con=mysqli_connect("localhost","root","","borage");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySql:".mysqli_connect_error();
}
?>
<?php
if(isset($_POST['Post Now']))
{
    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
     $price=$_POST['price'];
     $image=$_POST['image'];
    $category=$_POST['category'];
     $phone_num=$_POST['phone_num'];
     
     $seller_id = $_SESSION['username'];

        $insert="INSERT INTO `sell_product`(`product_title`,`description`,'price'`image`,`category,'seller_id') VALUES('$product_title','$description','$price','$image','$category','$seller_id ')";
        $query=mysqli_query($con,$insert);
        $sql= "UPDATE users SET phone_num='$phone_num' WHERE user_id=$seller_id";
        $query=mysqli_query($con,$sql);
}
?>
  