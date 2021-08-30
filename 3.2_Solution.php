<!DOCTYPE html>
<html>
    <head>
    <title>Table with database</title>
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 12px;
        text-align: center;
        }
        th {
        background-color: #588c7e;
        color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
    <body style="background-color:powderblue;">
        <form class="container"  action="3.1_Solution.php" method="post">
        
            <div class="form-group">
                <label for="employ">Employ Details</label>
                <select class="form-control" name="employ" id="employ">
                <option>Manufacturing</option>
                <option>Accounts</option>
                <option>Marketing</option>
                <option>Finance</option>
                <option>HR</option>
                </select>
            </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    

    <table>
        <tr>
            <th>Emp Id</th>
            <th>Emp Name</th>
            <th>Emp Dept Id</th>
            <th>Emp Sex</th>
            <th>Marital Status</th>
            <th>Emp Join Date</th>
            <th>Emp Birth Date</th>
            <th>Emp Age</th>
            <th>Emp Education</th>
            <th>Emp Designation</th>
            <th>Emp Salary</th>
            <th>Emp Location Id</th>
            <th>Emp Active Status</th>
        </tr>
        <?php
            require "dbconnection.php";
            $sql = "SELECT Emp_Id, Emp_Name, Emp_Dept_Id,
            Emp_Sex,Emp_Marital_Status, Emp_Join_Date, Emp_Birth_Date, Emp_Age, Emp_Education_Id, Emp_Designation_Id, Emp_Salary, Emp_Location_Id, Emp_Active_Status FROM employee";


            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               
                echo "<tr><td>" . $row["Emp_Id"]. "</td><td>" . $row["Emp_Name"] . "</td><td>" . $row["Emp_Dept_Id"]. "</td><td>" . $row["Emp_Sex"] . "</td><td>" . $row["Emp_Marital_Status"]. "</td><td>" . $row["Emp_Join_Date"] . "</td><td>" . $row["Emp_Birth_Date"]. "</td><td>" . $row["Emp_Age"] . "</td><td>" . $row["Emp_Education_Id"]. "</td><td>" . $row["Emp_Designation_Id"] . "</td><td>" . $row["Emp_Salary"]. "</td><td>" . $row["Emp_Location_Id"] . "</td><td>" . $row["Emp_Active_Status"]. "</td><td>" ;
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
        ?>
    </table>
</body>
</html>