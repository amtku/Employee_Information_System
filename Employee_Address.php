<html>
    <style>
        a:link {
        text-decoration: none;
    }
    </style>

    <body style=" background-image: url(Image/s4.png);
        height: 100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">

        <?php

            require "dbconnection.php";
            
           

            $AddressId = $_POST["Address_Id"];
            $EmpId = $_POST["Emp_Id"];
            $Addressone = $_POST["Address1"];
            $Addresstwo = $_POST["Address2"];
            $TelNo = $_POST["Tel_No"];
            $AddressType = $_POST["Address_Type"];
                        
            $sql = "INSERT INTO address (Address_Id,Emp_Id,Address1,Address2,Tel_No,Address_Type) VALUES ('" .$AddressId . "', '" . $EmpId . "','" . $Addressone . "',  '" . $Addresstwo . "', '" . $TelNo . "', '" . $AddressType . "')";
            // -- echo $sql;


        

            if ($conn->query($sql) == TRUE) {
                echo "Thank you for filling this form, </br>
                <a href=\"http://localhost/eis/index.html\"></br> <h2>Click here</h2> </a>To Go Back To The Home Page";
            } else {
                echo "Error:" . $conn->error . "<br> <a href=\"http://localhost/eis/Employee_Login_Form.html\">Go Back to Login!!!</a> ";
            }
            $conn->close();
        

        ?>

    </body>

</html>