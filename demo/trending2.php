<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        div.topheader {
            text-align: right;
            margin: 0px 50px;
            width: 90%;
        }

        .account,
        .basket {
            margin: 0px 20px;
            text-decoration: none;
            font-family: Arima Madurai;
        }

        .account:hover,
        .basket:hover {
            text-decoration: underline;
        }

        img {
            width: 85px;
            height: 75px;

        }

        h1 {
            text-align: center;
            font-family: Arima Madurai;
            font-weight: 100;
        }

        h2 {
            text-align: center;
            font-family: Arima Madurai;
        }

        div.topheader {
            text-align: right;
            margin: 0px 10px;
            width: 99%;
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
            text-align: center;
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

        .table1 {
            margin: -5px 350px;
        }

        .img2 {
            transform: rotate(90deg);
            padding: 100px -450px;
        }

        .img3 {
            transform: rotate(270deg);
            padding: 100px -450px;
        }

        .footer {
            width: 100%;
            height: 220px;
            text-align: center;
            background-color: rgb(236, 249, 236);
            clear: both;
            padding: 0px 0px;
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

        .info {
            text-align: center;
            padding: 0px 10px;
            width:99%;
        }

        .foot1:hover,
        .foot2:hover,
        .foot3:hover,
        .foot4:hover,
        .foot5:hover {
            text-decoration: underline;
        }

        .openingtimes {
            text-align: left;
            font-family: Arima Madurai;
            padding: 0px 20px;
        }

        .location {
            text-align: right;
            font-family: Arima Madurai;
            padding: 0px 20px;

        }


        .bouquet1,
        .bouquet2,
        .bouquet3,
        .bouquet4,
        .bouquet5,
        .bouquet6 {
            height: 400px;
            width: 333px;
        }
        .bouquet7,
        .bouquet8,
        .bouquet9{
            height: 450px;
            width: 333px;
        }

        .table1,
        .table2,
        .table3 {
            margin: 15px 0px;
            text-align: center;
            font-family: Arima Madurai;
            font-size: 15px;
            width:99%;
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
            font-size: black;

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
        .btnAdd {
            text-decoration: none;
            margin: 0px 0px ;
            width: 120px;
            height: 30px;
            background-color: rgb(255, 255, 255);
            border-width: thin;
            font-family: Arima Madurai;
            font-size: 15px;
        }

        .btnAdd:hover {
            text-decoration: underline;
        }
        

        
    </style>

    <body>
        <div class="topheader">
            <a div class="account" href = "http://localhost/demo/rose.php">👤Your account</a>
            <a div class="basket">🛒Basket </a>
        </div>

        <div class="header">
            <h1> <img class="can" src="https://i.pinimg.com/564x/19/91/0b/19910bbd2e9409e6c847af452e9af8a5.jpg"> The
                Watering
                Can <img class="can" src="https://i.pinimg.com/564x/19/91/0b/19910bbd2e9409e6c847af452e9af8a5.jpg">
            </h1>
        </div>

        <div class="menu">
            <a div class="list1" href="http://localhost/demo/assignment1.php">Home</a>

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

        <h2>Trending</h2>

        <table div class="table1">
            <tr>
                <td>
                    <img div class=bouquet1
                        src="https://i.pinimg.com/564x/55/39/e5/5539e509547ae515db5e44da187ee770.jpg">
                </td>
                <td>
                    <img div class=bouquet2
                        src="https://i.pinimg.com/564x/d9/ac/41/d9ac4119c368b41571f36a867d5e7bd1.jpg">
                </td>
                <td>
                    <img div class=bouquet3
                        src="https://i.pinimg.com/564x/a5/3f/89/a53f89bdbd4938cc33d67c670bce7a5f.jpg">
                </td>
            </tr>
            <tr>
                <td>
                    Sun Daize
                </td>
                <td>
                    Eden Basket
                </td>
                <td>
                   Aurora
                </td>
            </tr>
            <tr>
                <td>
                    £35
                </td>
                <td>
                    £30
                </td>
                <td>
                    £25
                </td>
                </tr>
                <tr>
                    <td>
                        <button div class="btnAdd">Add to Cart</button>
                    </td>
                    <td>
                        <button div class="btnAdd">Add to Cart</button>
                    </td>
                    <td>
                        <button div class="btnAdd">Add to Cart</button>
                    </td>
                </tr>
            </tr>
        </table>

        <table div class="table2">
            <tr>
                <td>
                    <img div class=bouquet4
                        src="https://i.pinimg.com/474x/b8/87/c2/b887c208ab56fee961619541b0b622b9.jpg">
                </td>
                <td>
                    <img div class=bouquet5
                        src="https://i.pinimg.com/474x/f8/d1/19/f8d119d5b7e28e14280d79db908ec76c.jpg">
                </td>
                <td>
                    <img div class=bouquet6
                        src="https://i.pinimg.com/564x/fd/85/49/fd854942368ce09090b8062d8b65f248.jpg">
                </td>
            </tr>
            <tr>
                <td>
                    Dahlia Dream
                </td>
                <td>
                    Pretty in Pink
                </td>
                <td>
                    Iris 
                </td>
            </tr>
            <tr>
                <td>
                    £25
                </td>
                <td>
                    £20
                </td>
                <td>
                    £35
                </td>
                <tr>
                    <td>
                        <button div class="btnAdd">Add to Cart</button>
                    </td>
                    <td>
                        <button div class="btnAdd">Add to Cart</button>
                    </td>
                    <td>
                        <button div class="btnAdd">Add to Cart</button>
                    </td>
                </tr>
            </tr>
        </table>

        <table div class="table3">
            <tr>
                <td>
                    <img div class=bouquet7
                        src="https://i.pinimg.com/564x/6e/10/0e/6e100e797eb2515faeba8adbbe41c313.jpg">
                </td>
                <td>
                    <img div class=bouquet8
                        src="https://i.pinimg.com/736x/3d/f6/30/3df6300edbcb7adf30669e9c1cfe31d3.jpg">
                </td>
                <td>
                    <img div class=bouquet9
                        src="https://i.pinimg.com/474x/2e/84/97/2e84976140fab5dd73271ebcf6e05d4c.jpg">
                </td>
            </tr>
            <tr>
                <td>
                    Summer Love 
                </td>
                <td>
                    These Boots Were Made for Flowering
                </td>
                <td>
                    Violet Bloom 
                </td>
            </tr>
            <tr>
                <td>
                    £35
                </td>
                <td>
                    £30
                </td>
                <td>
                    £20
                </td>
            </tr>
            <tr>
                    <td>
                        <button div class="btnAdd">Add to Cart</button>
                    </td>
                    <td>
                        <button div class="btnAdd">Add to Cart</button>
                    </td>
                    <td>
                        <button div class="btnAdd">Add to Cart</button>
                    </td>
                </tr>
            </tr>
        </table>
        <br>
        <br>



        <div class="footer">
            <table div class="info">
                <br>
                <tr>
                    <td div class=openingtimes>
                        Opening Times
                    </td>
                    <td>
                        <a div class="foot1" href="http://localhost/demo/rose.php">
                            Sign In</a>
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