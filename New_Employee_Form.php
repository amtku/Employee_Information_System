<html>
    <style>
        a:link {
        text-decoration: none;
    }
    </style>

<body style=" background-image: url(Image/s2.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">

    <?php

        require "dbconnection.php";
        
        $uid = $_POST["userid"];
        $pwd = $_POST["password"];

        
        $sql = "INSERT INTO emplogin (userid,password) VALUES ('" .$uid . "', '" . $pwd . "')";
        // -- echo $sql;


       

        if ($conn->query($sql) == TRUE) {
            echo "Welcome to Employee Information System, <a href=\"http://localhost/eis/index.html\"></br> <h2>Click here</h2> </a>To Go Back To The Home Page";
        } else {
            echo "Error:" . $conn->error . "<br> <a href=\"http://localhost/eis/New_Employee_Form.html\">Go Back to Login!!!</a> ";
        }


        $conn->close();
    ?>

</body>

</html>