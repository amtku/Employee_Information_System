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
    font-size: 25px;
    text-align: left;
    }
    th {
    background-color: #588c7e;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
<body>
    <table>
        <tr>
          
            <th>Userid</th>
            <th>Password</th>
        </tr>
        <?php
            require "dbconnection.php";
            $sql = "SELECT userid, password FROM emplogin";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["userid"]. "</td><td>" . $row["password"] . "</td><td>"
            ;
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
        ?>
    </table>
</body>
</html>