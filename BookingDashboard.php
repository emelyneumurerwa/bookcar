<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking tickets dashboard</title>
    <style>
        .header{
            width:100%;
            height:20%;
            position:fixed;
            top:0;
            left:0;
        }
        .header h2 {
            position: absolute;
            top:6%;
            left:10%;
            font-size: large;
            font-display: italic;
            
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        .header a:hover {
            color:blue;
        }
        .header li {
            float:right;
            position: absolute;
            top: 10%;
            right:12%;
            list-style-type: none;
            
        }
        .header a {
            text-decoration: none;
            color:black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .deporting{
            background-color:#fff;
            width:50%;
            margin-top:10%;
            margin-left:5%;
            margin-right:5%;
            height: 20%;
        }
        .deporting h3 {
            font-size: 18px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }
        .depo {
            background-color: rgb(70, 160, 70);
            width:30%;
               height:100%;
               float:left;
               margin-left:5%;
               margin-right:5%;
               border-radius: 4px;
               border:2px solid #818181;
        }
        .depo input {
            padding:10px;
            width:100%;
            border:none;
            border-radius:4px ;
            background-color: rgb(246, 16, 16);
            height:30%;
            margin-top: 17%;
        }
        .loc {
            background-color:#818181;
            width:45%;
            height:80%;
            border-radius: 4px;
            position: fixed;
            left:50%;
            top:20%;
            right: 5%;
            overflow: scroll;
        }
        .loc select {
            margin-left:10%;
            padding:10px;
            border-bottom: 3px solid red;
            border-top:none;
            border-left:none;
            border-right:none;
            width:60%;
            border-radius:4px;
            background-color: #818181;
        }
        .loc h3 {
            margin-left:10%;
        }
        .loc select option {
            background-color: black;
            color:white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .loc button, input {
            padding:10px;
            margin-left:10%;
            border:none;
            border-radius:3px;
            color:white;
        }
        .btn-send{
            background-color: green;
            padding:10px;
            margin-left:10%;
            border:none;
            border-radius:3px;
            color:white;
        }
    </style>
</head>
<body>
   <div class="header">
      <h2>Booking tickets Portal</h2>
      <ul>
        <li><a href="./logout.php">Logout</a></li>
      </ul>
   </div> 
   <div class="deporting">
    |<div class="depo">
    <h3>Deporting</h3>
    <input type="datetime-local">
    </div>
    <div class="depo">
    <h3>Arrival time</h3>
    <input type="date"><input type="time">
    </div>
   </div>
<div class="loc">
    <div class="a">
    <h3>From</h3>
    <select>
        <option>Kigali</option>
        <option>Kamembe</option>
    </select>
    </div>
    <h3>To</h3>
    <div class="b">
    <select>
        <option>Kigali</option>
        <option>Kamembe</option>
    </select>
    </div>
   <div class="seat">
    <h3>Select seat</h3>
    <select>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
        <option>32</option>
        <option>33</option>
        <option>34</option>
    </select><br><br>
    <button style="background-color: green" class="one">Available</button>
    <button style="background-color:red" class="two">Booked</button>
    <button style="background-color:black" class="three">Selected</button>
   </div>
   <div>
    <h3>Terms and condition</h3>
    <input type="checkbox"><p>I agree all terms and conditions</p>
   </div>
   <button class="btn-send">Book</button>
</div>
</body>
</html>