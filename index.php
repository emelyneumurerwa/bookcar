<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>ACCOMOGATE</title>
        <style>
             body {
            margin: 0;
            padding: 0;
            
        }
            #navlink{
                width: 100%;
                height: 120px;
                background-color:green;
                margin-top: 30px;
                margin-top: -2%;
               /* position: fixed;
                z-index: 1000;
                top: 0;*/
                background-position: center;
                
                background-position: center;
                 display: flex;
                 justify-content: space-between;
                  align-items: center;
                 padding: 0 20px;
                 z-index: 1000;
                 position: fixed;
                 font-size: large;
            }
            ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            margin-right: 5px;
        }
    ul li{ 
       /* float: right;
        display: flex;
        padding: 10px;
        text-decoration: none;
        margin-right: 40px;
       margin-top: -40px;*/
       margin-right: 50px;
       
    } 
    ul li a{
        text-decoration: none;
        color: white;
    
    }
    h2{background:linear-gradient(45deg,yellow, skyblue,rgb(255, 213, 0)) ;
        color: transparent;
        -webkit-background-clip: text;
        margin-top: 20px;
    }
    img{
        margin-top: -20px;
        border-radius: 100%;
    }
    h3{
        margin-left: 55px;
        margin-top: -40px;
    }
    .body{
        margin: 0;
        padding: 0;
        width: 100%;
        height: 600px;
        color: white;
        background-image: url(AAA.jpg);
        background-repeat: no-repeat;
        background-size: cover;
       padding-top:100px;
    background-position: center;
    display: flex;
    z-index: 1000;
    
    flex-direction: column;
    
        
    }
    center{
        margin-top: 300px;
        background-color: transparent;
    }
    button{
        background-color: transparent;
        width: 150px;
        min-height: 40px;
        border-radius: 10px;
        color: white;
    }
    #footer{
        background-color:#818181;
        height: 200px;
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
        margin-top: -23px;
        flex-wrap: wrap;
    }
    .footer{
        display:inline-block;
        justify-content: center;
        align-items: center;
        
    }
    .left{
         float: left;
         width: 30%;
         height: auto;
         align-items: center;
         margin-top:37px ;
         margin-left: 20px;
    }
    .right{
        float: right;
        width: 30%;
        height: auto;
        margin-top: -40px;
    }

#footer center{
    color: white;
     margin-top: 150px;
}
#navlink h2, #navlink img {
    margin-left: 15px;
}

#navlink h2 {
    margin-left: -400px; 
    margin-top: 70px;

}

.mysidebar{
            float: right;
            height: 100%;
            width: 0;
            background-color: #181414;
            color: #818181;
            overflow-x:hidden ;
            position: fixed;
            top: 0;
            left: 0;
            transition: 0.5s;
            z-index: 1;
            padding-top: 65px; 
            
         
        }
         .mysidebar a{
            display:block;
            text-decoration: none;
            font-size: 25px;
            padding-top: 65px;
            margin-left: 25px;
            color: #818181;


        }
     .mysidebar a:hover{
        color: #fff;
     }
     #closebtn{
        position: absolute;
        top: -5%;
        right: 5%;
        font-size: 35px;
        color: red;
     }
     span{
        color: #fff;
     }
     .fara{
        display: none;
        background-color: #818181;
        font-size: x-large;
        color:chocolate;
     }
     .fab:hover .fara li a{
        display: block;
     }
    .sem{
        background-color: cadetblue;
        height: 30px;
        margin-top: -70px;
    }
    .body center{
         margin: 20px;
    }
   #navlink h2,img{
     margin-left:px ;
   }
   #navlink h2{
    margin: left ;
    color: aliceblue;
   }
   .right img{
    width: 100px;
        max-height: 80px}
        div ul li a:hover {
            color: #f39c12;
        }
       </style>

  <script>
    function openNav()
    {
        document.getElementById('sidebar').style.width="250px";
    }
    function closeNav()
    {
    document.getElementById('sidebar').style.width="0px";
    }
    
</script>
    </head>
    <body>
        <div id="navlink">
          
            <h2>CAR BOOKING TICKET</h2>
            <ul>
              
                <li><a href="#">BOOKING</a></li>
                <div class="fab"><li><a href="" >CONTACT US</a></li></div>
                <li><a href="izlogin.php">LOGIN</a></li>
               
            </ul>

        </div>
        <div class="mysidebar" id="sidebar">
            <a href="javascipt:void(0)" id="closebtn"  onclick="closeNav()">&times;</a>
            <a href="">INFORMATION</a>
            <a href="">ACCOUNTS</a>
            <a href="">BLOG</a>
            <a href="">HELP</a>
        </div>
       
        <div>
        
        </div>
        <div class="body"><center>
        <div class="typing-text" id="typing-text">
            Absolutely, here's a concise and inspiring message for the home page of your car booking website in Kigali, Rwanda:

🌟 "Explore Kigali with Ease! Book Your Bus Tickets Hassle-Free. Unleash Seamless Journeys with CAR BOOKING WEBSITE. Your Adventure Begins Here!"** 🚍🗺️

---<
          <!-- <center><h3><a href="vist us.html"><button>Visit us For More</button></a></h3></center> --> </center>
        </div>
        <div class="fara">
            <li><a href="">Learn More</a></li>
            <li><a href="">Trending</a></li>
            <li><a href="">Admin </a></li>
            
        </div>
        <div id="footer">

<div class="left">
    <h3><b>GET IN TOUCH</b></h3>
    <b>phone +250788884407</b><br>
    <b>Location:KIGALI-GIKONDO</b><br>
    <em> Email: carbook@gmail.com</em><br>
    <i  class="fa fa-whatsapp">Whatsapp:+250788484407</i><br>
    
</div>
<div class="center">
    <h3><strong>VISIT OUR WEBSITE</strong></h3>
    <i class="fa fa-facebook">Facebook:iz book now</i><br>
    <i class="fa fa-instagram">Instragram:tickbook</i><br>
    <i class="fa fa-linkedin">Linkedin:tickbook</i><br>
   

    
</div>
<div class="right">
    <h3><b><strong>CAR BOOKING TICKET
    </strong></b></h3>
    
    
</div>

        </div>
    </body>
</html