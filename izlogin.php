<html>
    <head>
        <title>Login and Registration Website</title>
        <link rel="stylesheet" href="style(login).css">
    </head>
    <body>
        <div class="banner">
          <form action="#" method="post">
                <div class="form">
                    <h1>Login</h1>
                    
                        
                            
                            <input type="text" name="remail" placeholder="Email or Username" required><br/>
                            <label>Email</label><br/><br/>
                        
                        
                            
                            <input type="password" name="psws" placeholder="Password" required><br/>
                            <label>Password</label><br/><br/>
                        
                        
                            <label><input type="checkbox">Remember me</label>
                            <a href="#">Forgot Password?</a><br/><br/>
                            <button type="submit" name="submit" class="btn">Login<br/></button>
                            <div class="Login-register">
                                <p>Don't have an account? <a href="izreg.php" class="register-link">Register</a></p>
                            </div>
                       
                    
                </div>
          </form>
        </div>
    
        <?php
       include('Connection.php');
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $Reemail=$_POST['remail'];
        $Repassword=$_POST['psws'];
        $sql=" select * from user where Email='$Reemail' and Password='$Repassword' ";
        $connect=mysqli_query($conn,$sql);

        if(mysqli_num_rows($connect)>0)
        {
            $row=mysqli_fetch_assoc($connect);
            $id=$row['id'];
            $role=$row['role'];
            $email=$row['Email'];
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['role'] = $role;
            $_SESSION['email'] = $email;
            if($role=='passenger'){
                header("Location: BookingDashboard.php");
            }
            else
            header("Location: booklog.php");
            exit();
        }
    }
    $conn->close();
    ?>
    </body>
</html>