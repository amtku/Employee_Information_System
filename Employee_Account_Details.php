<html>
    <style>
        a:link {
        text-decoration: none;
    }
    </style>

    <body style=" background-image: url(Image/s5.png);
        height: 100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">

        <?php

            require "dbconnection.php";
            
           

            $EmpId = $_POST["Emp_Id"];
            $AccountNo = $_POST["Account_No"];
            $BankId = $_POST["Bank_Id"];
            $AccountType = $_POST["Account_Type"];
           
                        
            $sql = "INSERT INTO account_details (Emp_Id,Account_No,Bank_Id,Account_Type) VALUES ('" . $EmpId . "','" . $AccountNo . "',  '" . $BankId . "', '" . $AccountType . "')";     

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