<html>
    <style>
        a:link {
        text-decoration: none;
    }
    </style>

    <body style=" background-image: url(Image/s3.jpg);
        height: 100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">
    </body>

        <?php

            require "dbconnection.php";
            
           

            $FamilyId = $_POST["Family_Id"];
            $EmpId = $_POST["Emp_Id"];
            $EmpRelationId = $_POST["Emp_Relation_Id"];
            $RelationName = $_POST["Relation_Name"];
            $RelationAge = $_POST["Relation_Age"];
            $Nomineename = $_POST["Nominee"];
                        
            $sql = "INSERT INTO family_details (Family_Id,Emp_Id,Emp_Relation_Id,Relation_Name,Relation_Age,Nominee) VALUES ('" .$FamilyId . "', '" . $EmpId . "','" . $EmpRelationId . "',  '" . $RelationName . "', '" . $RelationAge . "', '" . $Nomineename . "')";     

            if ($conn->query($sql) == TRUE) {
                echo "Thank you for filling this form, </br>
                <a href=\"http://localhost/eis/index.html\"></br> <h2>Click here</h2> </a>To Go Back To The Home Page";
            } else {
                echo "Error:" . $conn->error . "<br> <a href=\"http://localhost/eis/Employee_Login_Form.html\">Go Back to Login!!!</a> ";
            }
            $conn->close();
        

        ?>

   

</html>