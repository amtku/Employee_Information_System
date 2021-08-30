<html>
    <style>
        a:link {
        text-decoration: none;
    }
    </style>

    <body style=" background-image: url(Image/s3.png);
        height: 100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">

        <?php

            require "dbconnection.php";
            
           

            $EmpId = $_POST["Emp_Id"];
            $EmpName = $_POST["Emp_Name"];
            $EmpDeptId = $_POST["Emp_Dept_Id"];
            $EmpSex = $_POST["Emp_Sex"];
            $EmpMaritalStatus = $_POST["Emp_Marital_Status"];
            $EmpJoinDate = $_POST["Emp_Join_Date"];
            $EmpBirthDate = $_POST["Emp_Birth_Date"];
            $EmpAge = $_POST["Emp_Age"];
            $EmpEducationId = $_POST["Emp_Education_Id"];
            $EmpDesignationId = $_POST["Emp_Designation_Id"];
            $EmpSalary = $_POST["Emp_Salary"];
            $EmpLocationId = $_POST["Emp_Location_Id"];
            $EmpActiveStatus = $_POST["Emp_Active_Status"];

            
            $sql = "INSERT INTO employee (Emp_Id,Emp_Name,Emp_Dept_Id,Emp_Sex,Emp_Marital_Status,Emp_Join_Date,Emp_Birth_Date,Emp_Age,Emp_Education_Id,Emp_Designation_Id,Emp_Salary,Emp_Location_Id,Emp_Active_Status) VALUES ('" .$EmpId . "', '" . $EmpName . "','" . $EmpDeptId . "',  '" . $EmpSex . "', '" . $EmpMaritalStatus . "', '" . $EmpJoinDate . "', '" . $EmpBirthDate . "', '" . $EmpAge . "', '" .$EmpEducationId . "','" .$EmpDesignationId . "',  '" . $EmpSalary . "','" . $EmpLocationId . "','" . $EmpActiveStatus . "' )";
           

        

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