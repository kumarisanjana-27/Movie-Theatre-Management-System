
<?php
 
 // Connect to database
$user = 'root';
$password = '';
$database = 'theatre';
$servername='localhost';
$con = new Mysqli($servername, $user,$password, $database);
//Checking for connections
if ($con->connect_error)
{
die($con->connect_error);
}
 // Get all the categories from category table
 $sql = "SELECT * FROM `screen`";
 $result = mysqli_query($con,$sql);

 // The following code checks if the submit button is clicked
 // and inserts the data in the database accordingly
 if(isset($_POST['submit']))
 {
    
     
     // Store the theator ID in a "id" variable
     $id = mysqli_real_escape_string($con,$_POST['sid']);
     
     // Creating an insert query using SQL syntax and
     // storing it in a variable.
     $sql_delete = "delete from screen where SCREEN_ID=$id";
         
       
       // The following code attempts to execute the SQL query
       // if the query executes with no errors
       // a javascript alert message is displayed
       // which says the data is inserted successfully
       if(mysqli_query($con,$sql_delete))
     {
         echo '<script>alert("Select screen is deleted")</script>';
     }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">  
</head>
<body>
<?php
 include("s_del_html.php");
 ?>
 <form method="POST">
      <label>Screen ID to delete (except 1 and 2):</label>
       <input type="text" name="sid" required>
     <!--<label>Select a Theater</label>
     //<select name="tid">
        // -->
             <!--// use a while loop to fetch data
             // from the $all_categories variable
             // and individually display as an option
             while ($tid = mysqli_fetch_array($results,MYSQLI_ASSOC)):;
        // ?>
            // <option value="(<echo $tid["T_ID"];
                 // The value we usually set is the primary key
            // ?>">
                //  echo $tid["T_Name"];
                     // To show the category name to the user
             //    ?>
            // </option>
        // 
          //   endwhile;
             // While loop must be terminated
        // ?>
     //</select>-->
     <br>
     <input type="submit" value="submit" name="submit">
 </form>
 <br>
 <div class="right">
            <a href="theatre_menu.html"><button class="btn">theatre operations</button></a>
        </div>
</body>
<style>
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
</html>