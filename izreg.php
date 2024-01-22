
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <title>Register</title>
    <style>
      body {
        font-family: "Arial", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
        color: #333;
      }

      header {
        background-color: #1a1a1a;
        color: #fff;
        padding: 20px;
        text-align: center;
      }

      form {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      h2 {
        font-size: 2em;
        margin-bottom: 20px;
        color: #1a1a1a;
      }

      label {
        display: block;
        margin-bottom: 8px;
        color: #1a1a1a;
      }

      input,
      select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button {
        display: inline-block;
        font-size: 1em;
        background-color: #ffcc00;
        color: #1a1a1a;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      button:hover {
        background-color: #ffdb4d;
      }
      footer {
        text-align: center;
        padding: 8px 3px;
        background-color: #1a1a1a;
        color: #fff;
      }

      .footer-container {
        display: flex;
        justify-content: space-around;
      }

      .footer-section {
        width: 30%;
      }

      .footer-section h3 {
        color: #ffcc00;
      }

      .footer-section ul {
        list-style: none;
        padding: 0;
      }

      .footer-section ul li {
        margin-bottom: 10px;
      }

      .footer-section a {
        color: #fff;
        text-decoration: none;
      }

      .footer-section a:hover {
        text-decoration: underline;
      }
      .copyright {
        margin-top: 20px;
        font-size: 0.9em;
      }
      .password-toggle {
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
      }
      .register-link {
        text-align: center;
        margin-top: 20px;
      }

      .register-link a {
        color: #1a1a1a;
        text-decoration: underline;
      }

      .register-link a:hover {
        color: #ffcc00;
      }
    </style>
  </head>
  <body>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Form validation
        const form = document.querySelector("form");

        form.addEventListener("submit", function (event) {
          // Example: Validate the email format
          const emailInput = document.getElementById("email");
          if (!isValidEmail(emailInput.value)) {
            alert("Please enter a valid email address.");
            event.preventDefault();
          }
        });

        function isValidEmail(email) {
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return emailRegex.test(email);
        }

        // Toggle password visibility
        const passwordInput = document.getElementById("password");
        const togglePasswordBtn = document.createElement("span");
        

        togglePasswordBtn.addEventListener("click", function () {
          const type =
            passwordInput.getAttribute("type") === "password"
              ? "text"
              : "password";
          passwordInput.setAttribute("type", type);
        });
      });
    </script>
    <header>
      <h1 style="color: #ffcc00">CAR BOOKING TICKET</h1>
    </header>

    <form action="" method="POST" >
      <h2>Register</h2>
      
      <label for="firstname">Firstname:</label>
      <input type="text" id="firstname" name="firstname" required />

      <label for="lastname">Lastname:</label>
      <input type="text" id="lastname" name="lastname" required />


      <label for="sex">Sex:</label>
      <select id="sex" name="sex" required>
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
        <option value="other">OTHER</option>
      </select>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required />
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required />
      <label for="password">ConfirmPassword:</label>
      <input type="password" id="password" name="passwords" required />
      <label for="role">Role:</label>
      <select id="role" name="role" required>
        <option value="agency">Agency</option>
        <option value="passenger">Passenger</option>
      </select>
      <button type="submit">Register</button>
    </form>
    <div class="register-link">
      <p>If you have an account <a href="izlogin.php">Login</a></p>
    </div>
    <footer>
      <div class="footer-container">
        <div class="footer-section">
          <h3>Quick Links</h3>
         
        </div>
        <div class="footer-section">
          <h3>Contact Us</h3>
          <p>
            Email:
            <a href="mailto:info@careercrafthub.com">info@careercrafthub.com</a>
          </p>
          <p>Phone: +250 888888880</p>
          <p>Phone: +250 7898988888</p>
        </div>
        <div class="footer-section">
          <h3>Follow Us</h3>
          <div class="social-icons">
            <a href="#"> <i class="fab fa-facebook-f"></i></a>
            <br />
            <br />
            <a href="#"> <i class="fab fa-twitter"></i></a>
            <br />
            <br />
            <a href="#"> <i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <p class="copyright">&copy; 2023 Booktickcar. All rights reserved.</p>
    </footer>
    <?php
       include('Connection.php');

   

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $FirstName=$_POST['firstname'];
        $SecondName=$_POST['lastname'];
        $Email=$_POST['email'];
        $number=$_POST['phone'];
        $select=$_POST['sex'];
        $Password=$_POST['password'];
        $Cpassword=$_POST['passwords'];
        $Cadress=$_POST['address'];
        $role=$_POST['role'];

    
    
    if ($Password != $Cpassword) {
        echo "Error: Password and confirm password do not match.";
       
    } 
        

    $sql = "INSERT INTO user (Firstname, Lastname, Email, Password, ConfirmPassword, Phone, Gender, Address,Role) 
            VALUES ('$FirstName', '$SecondName', '$Email', '$Password', '$Cpassword', '$number', '$select','$Cadress','$role')
            ON DUPLICATE KEY UPDATE
            Firstname=VALUES(Firstname),Lastname=VALUES(Lastname),Password=VALUES(Password),ConfirmPassword=VALUES(ConfirmPassword),
            Phone=VALUES(Phone),Gender=VALUES(Gender),Address=VALUES(Address)";
                   $connect=mysqli_query($conn,$sql);
                   if ($connect) {
                    
                    header("Location: izlogin.php");
                    exit();
                }                
        else {
        echo "Error:".$sql."<br>".$conn->error;
        }} 
    
    $conn->close();
    ?>
  </body>
</html>
