<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <style>
       
        h2 {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 32px;
        }

        input {
            padding: 15px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin: 3%;
            border-radius: 3px;
            text-indent: 0dvh;
        }

        form {
            margin-top: 7%;
            width: 27%;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            border: 2px solid green;
            border-radius: 3px;
        }

        #upl {
            background-color: green;
            border-radius: 3px;
            border: none;
            padding: 15px;
            width: 92%;
            margin-left: auto;
            margin-right: auto;
            margin: 3%;
        }

        .adm,
        .adm-tool,
        .adm-delete,
        .adm-clients,
        .adm-publish,
        .adm-update,
        .adm-logout {
            position: absolute;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            border: none;
            font-size: 20px;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .adm {
            top: 8%;
            left: 70%;
        }

        .adm-tool {
            top: 8%;
            left: 80%;
        }

        .adm-delete {
            top: 8%;
            left: 90%;
        }

        .adm-clients {
            top: 18%;
            left: 70%;
        }

        .adm-publish {
            top: 18%;
            left: 80%;
        }

        .adm-update {
            top: 18%;
            left: 90%;
        }

        .adm-logout {
            top: 28%;
            left: 80%;
            background-color: red;
            color: white;
        }

        button:hover,
        .adm-delete:hover,
        .adm-clients:hover,
        .adm-publish:hover,
        .adm-update:hover,
        .adm-logout:hover {
            background-color: rgb(23, 240, 23);
        }
    </style>
    <script>
        function Uploaded() {
            alert("There is no uploaded things");
        }

        function Modified() {
            alert("No data yet inserted");
        }

        function Delete() {
            alert("Deleted");
            
        }

        function ViewClients() {
            alert("Viewing Clients");
            
        }

        function Publish() {
            alert("Published");
            
        }

        function Update() {
            alert("Updated");
           
        }

        function Logout() {
            alert("Logged out");
           
        }
    </script>
</head>
<body>
    <div class="photo-upload">
        <div class="header">
            <h2>Admin Portal</h2>
            <button onclick="Uploaded()" class="adm">Uploaded</button>
            <button onclick="Modified()" class="adm-tool">Modification</button>
            <button onclick="Delete()" class="adm-delete">Delete</button>
            <button onclick="ViewClients()" class="adm-clients">Clients</button>
            <button onclick="Publish()" class="adm-publish">Publish</button>
            <button onclick="Update()" class="adm-update">Update</button>
            <button onclick="Logout()" class="adm-logout">Logout</button>
        </div>
        <form action="" method="post">
            <input type="file" name="file">
            <input type="text" name="name" placeholder="Image name">
            <input type="text" name="price" placeholder="Price">
            <input type="text" name="location" placeholder="Location">
            <input type="tel" name="number" placeholder="Phone number">
            <input id="upl" type="submit" value="Upload">
        </form>
    </div>
    <?php
    include('Connection.php');if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $File=$_POST['file'];
        $Filename=$_POST['name'];
        $Price=$_POST['price'];
        $Location=$_POST['location'];
        $Phone=$_POST['number'];

    
        $sql=" INSERT INTO UPLOADS (image, image_name,	price,location,phone_number) values('$File','$Filename','$Price','$Location','$Phone')";
        $connect=mysqli_query($conn,$sql);
        if($connect)
        {
            echo "Data inserted";
        }
        else {
        echo "Error:".$sql."<br>".$conn->error;
        }
    }
    $conn->close();
    ?>
    
</body>
</html>