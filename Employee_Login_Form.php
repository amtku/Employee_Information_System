<html>
<style>
    .text {
        text-align: center;
        border: 3px solid red;
        background-color: rgb(215, 235, 215);
        opacity: 0.7;
        margin: 25px 350px 160px 350px;
    }
    
    a:link {
        color: green;
    }
    
    a:visited {
        color: hotpink;
    }
    
    a:hover {
        color: red;
    }
    
    a:active {
        color: blue;
    }
    
    a:link {
        text-decoration: none;
    }
</style>

<body style=" background-image: url(Image/16.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">

    <?php

        session_start();

        require "dbconnection.php";

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $userid = $_POST['userid'];
        $pwd = $_POST['password'];

        $query = mysqli_query($conn, "SELECT * FROM emplogin WHERE emplogin.userid=$userid AND emplogin.password='" . $pwd . "' ") ;

    ?>





    <style>
        a:link {
            color: green;
        }
        
        a:visited {
            color: hotpink;
        }
        
        a:hover {
            color: red;
        }
        
        a:active {
            color: blue;
        }
        
        a:link {
            text-decoration: none;
        }
        
        .text {
            text-align: center;
            border: 3px solid red;
            background-color: rgb(215, 235, 215);
            opacity: 1;
            margin: 25px 350px 75px 350px;
        }
    </style>

    <head>
        <title>EMPLOYEE INFORMATION SYSTEM</title>
    </head>

    <body style=" background-image: url(Image/6.jpg);
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;">
        <div class="text">
            <h1 style=" color: red; ">To Get Input From Employees</h1>
            <div>
                <h2>
                    <br><a href="http://localhost/EIS/Employee_Details.html">Employee Details </a><br>
                    <br><a href="http://localhost/EIS/Employee_Address.html">Employee Address</a><br>
                    <br><a href="http://localhost/EIS/Employee_Family_Details.html">Employee Family Details </a><br>
                    <br><a href="http://localhost/EIS/Employee_Account_Details.html">Employee Account Details </a><br>
                    <br><a href="http://localhost/EIS/index.html">Home Page </a><br>

                </h2>

            </div>
        </div>
    </body>
    
    <?php

        $conn->close();

    ?>

</body>

</html>