<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>



<style>
      div.topheader {
            text-align: right;
            width: 100%;

        }

        .account,
        .basket {
            margin: 0px 20px;
            text-decoration: none;
            font-family: Arima Madurai;
            color: black;
        }

        .account:hover,
        .basket:hover {
            text-decoration: underline;
        }

        h1 {
            text-align: center;
            font-family: Arima Madurai;
            color: rgb(1, 63, 9);
            font-weight: 100;
        }

        .header .can {
            position: relative;
            width: 85px;
            height: 75px;
        }

        h2 {
            text-align: center;
            font-family: Arima Madurai;
            font-weight:100;
            font-size:19px;

        }

        .menu {
            text-align: center;
        }

        div.topheader {
            text-align: right;
            width: 100%;
        }

        .footer{
        width: 100%; 
        height: 220px;
        background-color: rgb(236, 249, 236);
        clear:both;
        padding: 0px 10px;
        }
        
        .info{
        text-align: center;
        width:100%;
        }

        .foot1,
        .foot2,
        .foot3,
        .foot4,
        .foot5 {
            text-decoration: none;
            color: black;
            font-family: Arima Madurai;
            text-align: center;
            padding: 0px 40px;
        }

        .foot1:hover,
        .foot2:hover,
        .foot3:hover,
        .foot4:hover,
        .foot5:hover {
            text-decoration: underline;
        }

        .list1,
        .list2,
        .list3,
        .list4,
        .list5,
        .list6 {
            text-decoration: none;
            color: black;
            font-family: Arima Madurai;
            padding: 20px 50px;
        }

        .list1:hover,
        .list2:hover,
        .list3:hover,
        .list4:hover,
        .list5:hover,
        .list6:hover,
        .list7:hover,
        .list8:hover {
            text-decoration: underline;
        }

        .menu {
            text-align: center;
        }

        .openingtimes {
            text-align: left;
            font-family: Arima Madurai;
            padding: 0px 40px;
        }

        .location {
            text-align: right;
            font-family: Arima Madurai;
            padding: 0px 40px;
        }

        .imglogin1 {
            
            width: 170px;
            height: 250px;
            padding: 0px 20px;
        }

        .imglogin2 {
            width: 170px;
            height: 250px;
            padding: 0px 90px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 190px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            background-color: white;
            text-align: left;
            right: 0;
        }

        .dropdown:hover .dropdown-content {
            display: block;

        }

        .dropd1,
        .dropd2,
        .dropd3,
        .dropd4,
        .dropd5,
        .dropd6,
        .dropd7,
        .dropd8,
        .dropd9 {
            font-family: Arima Madurai;
            text-decoration: none;
            text-align: left;
            padding: 10px 0px;
            color: black;

        }

        .dropd1:hover,
        .dropd2:hover,
        .dropd3:hover,
        .dropd4:hover,
        .dropd5:hover,
        .dropd6:hover,
        .dropd7:hover,
        .dropd8:hover,
        .dropd9:hover {
            text-decoration: underline;
        }

        .fname, .sname, .uname, .email, .password{
            width: 250px;
            height: 30px;
            font-size: 18px;
        }

        .infotbl{
            width: 100%;
            text-align:center;
            padding:0px 0px;
        }

        .submitbtn{
            text-decoration: none;
            background-color: rgb(236, 249, 236);
            border: 1px solid black;
            font-family: Arima Madurai;
            font-size: 15px;
            padding: 5px 18px;
            font-colour:black;
            
        }

        .logoutbtn:hover {
            text-decoration: underline;
        }
        .ffooter{
        width:100%;
        text-align:center;
    }
.table4{
    width:100%;
    padding:0px 20px;
}
        
        
        </style>
        <body><div class="topheader">
            <a div class="account" href = "http://localhost/demo/rose.php">👤My Account</a>
            <a div class="basket">🛒Basket </a>
        </div>

        <div class="header">
            <h1> <img class="can" src="https://i.pinimg.com/564x/19/91/0b/19910bbd2e9409e6c847af452e9af8a5.jpg"> The
                Watering
                Can <img class="can" src="https://i.pinimg.com/564x/19/91/0b/19910bbd2e9409e6c847af452e9af8a5.jpg">
            </h1>
        </div>
        
        <div class="menu">

            <a div class="list1" href="file:///Users/erinhawthorne/coding%20101/assignmnt/assignment1.html">Home</a>
            <a div class="list1" href="http://localhost/demo/trending2.php">Trending</a>
            <div class="dropdown">
                <span><a div class="list3"
                        href="http://localhost/demo/bouquets.php">Bouquets</a></span>
               
            </div>
            <div class="dropdown">
                <span><a div class="list5"
                        href="file:///Users/erinhawthorne/coding%20101/Vases.html">Occasions</a></span>
                <div class="dropdown-content">
                    <ul>
                        <a div class="dropd7" href="http://www.wreaths.io/">Wedding </a><br>
                        <a div class="dropd8" href="http://www.wreaths.io/">Birthday</a><br>
                        <a div class="dropd9" href="http://www.wreaths.io/">Funerals</a><br>
                        <a div class="dropd9" href="http://www.wreaths.io/">Spring Flowers</a><br>
                        <a div class="dropd9" href="http://www.wreaths.io/">Mothers Day</a><br>
                    </ul>
                </div>
            </div>
            <a div class="list1" href="http://localhost/demo/vases.php">Vases</a>
        </div>
        <br>

</body>


<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `shop_clients` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

    
}




?>
<html>
<body>
    
        <a div class ="logoutbtn" href="rose.php">Return to Home</a>
    
    
    <div class="footer">
            <table div class="info">
                <tr>
                    <br>
                    <td div class=openingtimes>
                        Opening Times
                    </td>
                    <td>
                        <a div class="foot1" href="file:///Users/erinhawthorne/coding%20101/assignmnt/account2.html">Sign
                            In</a>
                    </td>
                    <td div class=location>
                        Where to find us
                    </td>
                </tr>
                <tr>
                    <td div class=openingtimes>
                        Monday-Friday:
                    </td>
                    <td>
                        <a div class="foot2" href="http://localhost/demo/create.php">Create An Account</a>
                    </td>
                    <td div class=location>
                        4 Merryland Road
                    </td>
                </tr>
                <tr>
                    <td div class=openingtimes>
                        9.30am-5:30pm
                    </td>
                    <td>
                        <a div class="foot3" href="http://www.arrangements.io/">Delivery Info</a>
                    </td>
                    <td div class=location>
                        Brunstfield
                    </td>
                </tr>
                <tr>
                    <td div class=openingtimes>
                        Saturday-Sunday:
                    </td>
                    <td>
                        <a div class="foot4" href="http://www.bouquets.io/">Track Your Order</a>
                    </td>
                    <td div class=location>
                        EH5 GKL
                    </td>
                </tr>
                <tr>
                    <td div class=openingtimes>
                                10.30am-5pm
                    </td>
                    <td>
                        <a div class="foot5" href="http://www.bouquets.io/">About Us</a>
                    </td>
                    <td div class=location>

                    </td>
                </tr>
            </table>
            <br>
            <div class = ffooter>
            <a div class="list1" href="http://www.home.io/">☎️0131 447 5360</a>
            <a div class="list2" href="http://www.arrangements.io/">✉️info@thewateringcan.co.uk</a>
            <a div class="list3" href="http://www.arrangements.io/">Instagram</a>
            <a div class="list3" href="http://www.arrangements.io/">Facebook</a>
            </div>
        </div>





    </body>      
</html>