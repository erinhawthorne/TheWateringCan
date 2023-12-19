
     <?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>
<html>
<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<style>

         .account{
        margin: 0px 0px;
        float: center;
        }
        .basket {
            margin: 0px 100px;
            text-decoration: none;
            font-family: Arima Madurai;
            color: black;
        }
        .account:hover,
        .basket:hover {
            text-decoration: underline;
        }
        .topheader {
            text-align: right;
            margin: 0px 50px;
            width: 100%;
        }


        h1 {
            text-align: center;
            font-family: Arima Madurai;
            color: rgb(1, 63, 9);
            padding: 0px 0px;
            font-weight: 100;
            

        }

         .can {
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

        .login {
            padding: 5px 375px;

        }

        .email{
            width: 250px;
            height: 30px;
            font-size: 18px;
        }

        .password {
            width: 250px;
            height: 30px;
            font-size: 18px;
        }

    

        

        .table1 {
            margin: -5px 350px;
        }

        .footer {
            width: 100%;
            height: 220px;
            text-align: center;
            background-color: rgb(236, 249, 236);
            clear: both;
            padding: 0px 0px;
        }

        h7 {
            font-size: 20px;
            font-family: cursive;
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
         .info{
        text-align: center;
        width:100%;
        }

        .imglogin1 {
            width: 110px;
            height: 190px;
            padding: 0px 20px;
        }

        .imglogin2 {
            padding: 0px 20px;
            width: 110px;
            height: 190px;
        }

        .login {
            padding: 0px 20px;
        }

        .tbllogin {
            padding: 0px 200px;
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

        .accinfo{
            
            font-family: Arima Madurai;
            float: left;
            height:30vh;
        }

        .bouquet7{
            width:180px;
            height:230px;
            
        }
        
        .springimg{
            width: 700px;
            height:425px;
            
            
        }
       
        .updatebtn {
            text-decoration: none;
            background-color: rgb(236, 249, 236);
            border: 1px solid black;
            font-family: Arima Madurai;
            font-size: 15px;
            padding: 5px 18px;
            font-color:black;
            
        }

        .updatebtn:hover {
            text-decoration: underline;
        }

        .deletebtn{
            text-decoration: none;
            background-color: rgb(236, 249, 236);
            border: 1px solid black;
            font-family: Arima Madurai;
            font-size: 15px;
            padding: 5px 18px;
            font-color:black;
            
        }

        .deletebtn:hover {
            text-decoration: underline;
        }

        .logoutbtn{
            text-decoration: none;
            background-color: rgb(236, 249, 236);
            border: 1px solid black;
            font-family: Arima Madurai;
            font-size: 15px;
            padding: 5px 18px;
            font-color:black;
            
        }

        .logoutbtn:hover {
            text-decoration: underline;
        }
        .main{
             
        text-align: center;
        width:75%;
        
        }


        </style>
        


<body>

<div class="topheader">
            <a div class="account" >👤<?php echo $_SESSION['username']; ?></a>
            <a div class="basket">🛒Basket </a>
        </div>

        <div class="header">
            <h1> <img class="can" src="https://i.pinimg.com/564x/19/91/0b/19910bbd2e9409e6c847af452e9af8a5.jpg"> The
                Watering
                Can <img class="can" src="https://i.pinimg.com/564x/19/91/0b/19910bbd2e9409e6c847af452e9af8a5.jpg">
            </h1>
        </div><div class="menu">
            

        <div class="menu">

            <a div class="list1" href="http://localhost/demo/assignment1.php">Home</a>
            <a div class="list1" href="http://localhost/demo/trending2.php">Trending</a>
            <div class="dropdown">
                <span><a div class="list3"
                        href="http://localhost/demo/bouquets.php">Bouquets</a></span>
                <div class="dropdown-content">
                   
                </div>
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

<Table div class = "accinfo">
     <tr>
        <td>
     
     <span><a div class="list5"
                        href="file:///Users/erinhawthorne/coding%20101/Vases.html">Order History</a></span>
        </td>
        <td> 
            
        </td>
     </tr>
     <tr>
        <td>
      <div class="dropdown">
                <span><a div class="list5"
                        href="file:///Users/erinhawthorne/coding%20101/Vases.html">My Details</a></span>
                <div class="dropdown-content">
                    <ul>
                        <a div class="dropd7" href="http://www.wreaths.io/">Change Password </a><br>
                        <a div class="dropd8" href="http://www.wreaths.io/">Payment Methods</a><br>
                       
                    </ul>
        </td>
        <td>
        </td>
     </tr>
     <tr>
        <td>
      <div class="dropdown">
                <span><a div class="list5"
                        href="file:///Users/erinhawthorne/coding%20101/Vases.html">Address book</a></span>
                <div class="dropdown-content">
                    <ul>
                        <a div class="dropd7" href="http://www.wreaths.io/">My Address</a><br>
                        <a div class="dropd8" href="http://www.wreaths.io/">Recipient Addresses</a><br>
                    </ul>
        </td>
        <td>
        </td>
     </tr>
     <tr>
        <td>
         <div class="dropdown">
                <span><a div class="list5"
                        href="file:///Users/erinhawthorne/coding%20101/Vases.html">Need help?</a></span>
                <div class="dropdown-content">
                    <ul>
                        <a div class="dropd7" href="http://www.wreaths.io/">Where's my order? </a><br>
                        <a div class="dropd8" href="http://www.wreaths.io/">Contact us </a><br>
                        <a div class="dropd9" href="http://www.wreaths.io/">Delivery options</a><br>
                    </ul>
                </div>
            </div>
        </td>
        <td>
        </td>
     </tr>
</Table> 




<Table div class = "main">
     <tr>
        <td>
      <h2>Hello <?php echo $_SESSION['username'];?>, Welcome to your account</h2>
        </td>
    </tr>
    <tr>
         <td>
          <img div class = "springimg" src = "https://i.pinimg.com/564x/f0/a7/ac/f0a7ac59ce10e9e852f75f5b83c9f127.jpg">
        </td>
    </tr>
    
    <tr div class = "maintr">
        <td>
           <br>
    <br><br><br> <a div class ="updatebtn" href ="view.php">Update / Delete Account</a>
          
           <br><br> <a div class ="logoutbtn" href="logout.php">Log Out</a>
        </td>
    </tr> 
</table>
<br>
<br>




 <div class="footer">
            <table div class="info">
                <tr>
                    <br>
                    <td div class=openingtimes>
                        Opening Times
                    </td>
                    <td>
                        <a div class="foot1" href="http://localhost/demo/rose.php">Sign
                            In</a>
                    </td>
                    <td div class=location>
                        Where to find us
                    </td>
                </tr>
                <tr>
                    <td div class=openingtimes>
                        Monday - Friday: 
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
                        9.30am - 5:30pm
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
                        Saturday - Sunday: 
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
                        10.30am - 5pm
                    </td>
                    <td>
                        <a div class="foot5" href="http://www.bouquets.io/">About Us</a>
                    </td>
                    <td div class=location>

                    </td>
                </tr>
            </table>
            <br>
            <a div class="list1" href="http://www.home.io/">☎️0131 447 5360</a>
            <a div class="list2" href="http://www.arrangements.io/">✉️info@thewateringcan.co.uk</a>
            <a div class="list3" href="http://www.arrangements.io/">Instagram</a>
            <a div class="list3" href="http://www.arrangements.io/">Facebook</a>

        </div>


</body>
</html>

<?php 

}else{

     header("Location: rose.php");

     exit();

}

 ?>


