<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enterTheatre_form</title>
</head>
<body>
    
<!-- Container Start -->
<div id="container">
    <!-- Form Wrap Start -->
    <div class="form-wrap">
      
      <form action="TAB1FT.php" method="post">
        <div class="form-group">
          <!--<label for="Theatre ID">Theatre ID</label>
          <input type="text" name="Theatreid" id="Theatre ID">
        </div>-->
        <div class="form-group">
          <label for="Theatre-name">Theatre Name</label>
          <input type="text" name="Theatrename" id="Theatre-name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="text" name="phone" size="10">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" size="100">
         </div>
         <div class="form-group">
            <label for="Price">Price</label>
            <input type="text" name="Price" >
         </div>
         <div class="form-group">
            <label for="Rate">Rate</label>
            <select name="rate" id="rate">
             
             <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
             </select>
             </div>
         <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>-->
         
         <!--<button type="submit">Submit</button>-->
          <!--<p class="bottom-text">-->
          <br>
          <button type="submit" name="save" value="Submit" style="font-size:20px">Submit</button>
        </form>
        <!-- Form Close -->
      </div>
    </div>
    <div class="right">
            <a href="theatre_menu.html"><button class="btn">Theatre operations</button></a>
        </div>
</body>
<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  font-family: 'poppins';
  background-color: #ECEDEF;
  color: #fff;
  line-height: 1.8;
}

a{
  text-decoration: none;
}

#container{
  margin: 30px auto;
  max-width: 430px;
  padding: 20px;
}

.form-wrap{
  background-color: #fff;
  padding: 15px 25px;
  color: #333;
  border-top: 4px solid #49c1a2;
  border-radius: 05px;
}

.form-wrap h1,
.form-wrap p{
  text-align: center;
}

.form-wrap .form-group{
  margin-top: 15px;
}
.form-wrap .form-group label{
  display: block;
  color: #666;
}

.form-wrap .form-group input{
  width: 100%;
  padding: 10px;
  border: #ddd 1px solid;
  border-radius: 5px;
}

.form-wrap button{
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color: #49c1a2;
  color: #fff;
  cursor: pointer;
  border: 1px solid #49c1a2;
  font-family: 'poppins';
  font-size: 15px;
  transition: 1s;
}

.form-wrap button:hover{
  background-color: #37a08e;
  transition: 1s;
}

.form-wrap .bottom-text{
  font-size: 13px;
  margin-top: 20px;
}
.checked {
color: orange;
}
<?php
//echo "Starting ";
$user = 'root';
$password = '';
// Database name is theatre
$database = 'theatre';
// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new Mysqli($servername, $user,$password, $database);
//Checking for connections
if ($mysqli->connect_error)
{
die($mysqli->connect_error);
}
/*$sql = "INSERT INTO THEATRE (TID, TNAME, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
if(isset($_POST['save']))
{
//$T_ID = $_POST['Theatreid'];
$T_NAME = $_POST['Theatrename'];
$MAIL = $_POST['email'];
$PH_NO = $_POST['phone'];
$ADDRESS = $_POST['address'];
$PRICE = $_POST['Price'];

//For inserting the values to mysql database 
/*$sql_query = "INSERT INTO THEATRE(T_ID,t_NAME,PH_NO,ADDRESS,MAIL,RATE,PRICE)
VALUES ('$first_name','$last_name','$gender','$email','$phone')";*/
if (mysqli_query($conn, $sql_query)) 
{
   echo "New Details Entry inserted successfully !";
} 
else
{
   echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
.right {
        position: absolute;
        right: 34px;
        top: 20px;
        display: inline-block;
    }
    .btn {
        margin: 0px 9px;
        background-color: black;
        color: white;
        padding: 4px 16px;
        border: 2px solid grey;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
        position: relative;
        z-index: 1;
        transition: color 0.5s;
    }
    
    .btn span {
        width: 0;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }
    
    .btn:hover {
        background-color: grey;
    }
    
    .banner-text {
        text-align: centre;
        color: white;
        padding-top: 100px;
    }
    
    .banner-text h1 {
        font-size: 100px;
    }
    
    .banner-text p {
        font-size: 20px;
        font-style: italic;
        text-align: centre;
    }
    </style>
</style>
</html>