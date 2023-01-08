<?php session_start()
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CRUD operation WEB App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="css/branchcss.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
        .b1
        {
            width: 100%;
        }
         td{
            padding: 10px;
        }
        h1
        {
            font-size: 60px;
        }
    </style>
</head>

<body>
    <?php
    
$err="";

        if(isset($_POST['log']))
        {
            $username=$_POST['user'];
            $password=$_POST['pass'];
            if($username=="admin" && $password==1234)
            {
                $_SESSION['user']=$username;
                ?>
                <script>
window.location.assign("./index.php");
                </script>
            <?php
            }
            else
            {
                $err="Incorrect Username or password";
            }
        }

    ?>
      username: admin<br>
      password: 1234
<br><br>
        <form method="POST">
        <center><img width="350" height="250" src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/256_Php_logo-512.png" alt="" srcset=""></center>
            <center>
                <table>
                    <tr>
                        <td><strong>Enter Username</strong></td>
                        <td><input name="user" class="form-control mb-2" size="10"  type="text"></td>
                    </tr>
                    
                    <tr>
                        <td><strong>Enter Password</strong></td>
                        <td><input name="pass" type="password" class="form-control mb-2"></td>
                    </tr>
                    <tr>
                        <td class="text-danger" colspan="2"><?php echo $err; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button  name="log" type="submit" class="btn btn-primary b1">Login</button></td>
                    </tr>
                </table>
            </center>
        </form>
        
     
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>