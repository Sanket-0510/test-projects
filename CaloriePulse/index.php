
  <html>
    <body>
    <!-- <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style> -->
<style>

.form1{
  text-align:center;
  border-radius:30px;
 
}
.sub{
  width:70px;
  height:40px;
  color:white;
  background-color:green;
  border-radius:5px;
}
.formcon{

  width:40%;
  margin: 10% 30%;
  border-radius:40px;
  height: 60%;
  color:yellow;


background: brown;

}

</style>
<div class="formcon">
<form  action="index.php"  method="post" class="form1">  
      
     <h1>
      
     <label > Email </label>  
      <input type="text" name="firstnam" require > <br> <br>  
      <label> Password </label>     
      <input type="text" name="middlenam" require> <br> <br>  
      <label> Retype-Password </label>         
      <input type="text" name="lastnam" require> <br> <br>  
</h1>
      
      
      <!-- <input type="button" value="delete"/> 
      <input type="button" value="update"/>   -->
    <input type="submit" value="SignUp" class="sub">
      
      </form>
     </div>
      -->
            <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = $_POST["firstnam"];
        $middlename = $_POST["middlenam"];
        $lastname = $_POST["lastnam"];

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "project";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{
        //Submit these to a database
        // Sql query to be executed 
$sql = "INSERT INTO `person` (`Fn`, `Mn`, `Ln`) VALUES ('$firstname', '$middlename', '$lastname')";
 
$result = mysqli_query($conn, $sql);
      
      if($result){
        //   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //   <strong>Success!</strong> Your entry has been submitted successfully!
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">×</span>
        //   </button>
        // </div>'
        echo '<script>alert("Signed Up successfully")</script>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
      }
    }
  } 
  ?>
</body>
 </html>
  
	