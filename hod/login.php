<?php 
    ob_start(); 
    session_start();   
    unset($_SESSION['admin_login']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My School</title>

    <!-- Bootstrap -->
    <link href="../include/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="..include/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../include/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../include/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../include/build/css/custom.min.css" rel="stylesheet">
    
    <!--jquery-->
    <script src="../include/vendors/jquery/dist/jquery.min.js"></script>
    <!--jquery form-->
    <script src="../include/vendors/jquery-form/js/jquery.form.min.js"></script>
    
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="section_login"></a>
      <a class="hiddenanchor" id="admin_login"></a>

      <div class="login_wrapper">
        <!--admin login-->  
        <div class="animate form login_form">
          <section class="login_content">
              
              <div id="error" class="change_link" style="color: tomato"></div>
              
              <form id="admin_login" action="login.php" method="POST">
                    <h1>Admin Login</h1>
                    <div>
                      <input type="text" class="form-control" placeholder="Username" required="" name="email"/>
                    </div>
                    <div>
                      <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
                    </div>
                    <div>
                      <!-- <a class="btn btn-default submit" href="authenticate.php">Log in</a> -->
                      <input class="btn btn-default submit" type="submit" name="submit" value="Login">

                      <a class="reset_pass" href="#">Forgot password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                      <p class="change_link">Not Admin?
                        <a href="../section" class="to_register"> Section Login </a>
                      </p>

                      <div class="clearfix"></div>
                      <br />

                      <div>
                        <h1>School Management</h1>
                        <p>©2017 All Rights Reserved. SchoolManagement!</p>
                      </div>
                    </div>
            </form>
          </section>
        </div>
        <!--admin login-->

        <!--section login-->
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Section Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Section Name" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link"> Admin ?
                  <a href="#admin_login" class="to_register"> Admin Login </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>School Management</h1>
                  <p>©2017 All Rights Reserved. SchoolManagement!</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        <!--section login-->
          
      </div>
    </div>
      
      <!--use jquery-form to validate and authenticate-->
      
<!--      <script type="text/javascript">
          $(document).ready( function(){
              $("form#admin_login").submit(function(){
                  
                  alert("true");
                
              });
          });
      </script>    -->
     
  </body>
</html>

<?php
    if(isset($_POST['email']) && isset($_POST['password']))
    {
       $email = $_POST['email'];
       $password = $_POST['password'];
       
       // include db connect class
       require_once __DIR__ . '/db_connect.php';
 
       // connecting to db
       $db = new DB_CONNECT();
       $con = $db->connect();
       
       $sql = "SELECT *FROM admin WHERE email = '$email' AND password = '$password'";
       
       $result = $con->query($sql);
       $name = "";
       
       if(!empty($result)){
           
           if ($result->num_rows > 0) {
               
               while ($row = $result -> fetch_assoc()) {
                    $name = $row['name'];
               }
               
               display($name);
               $db->close($con);
           } else {
               
               echo '<script> $("#error").html("Incorrect username or password"); </script>';
           }
           
           
       } else {
           
           echo '<script> $("#error").html("Something went worng"); </script>';
       }
    }
    
    function display($user_name)
    {
        $_SESSION['admin_login'] = true;
        $_SESSION['user_name'] = $user_name;
        header("Location: index.php");
    }

?>