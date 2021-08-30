<html>
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
    
    
</style>

<body style=" background-image: url(Image/s8.jpg);
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

        $query = mysqli_query($conn, "SELECT * FROM adminlogin WHERE adminlogin.userid=$userid AND adminlogin.password='" . $pwd . "' ") ;

    ?>


<html>

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
        opacity: 0.8;
        margin: 10px 100px 10px 100px;
    }
    .ftext {
        text-align: center;
        border: 3px solid blue  ;
        background-color: rgb(255, 99, 71);
        opacity: 0.8;
        margin: 10px 100px 10px 100px;
    }
</style>

<head>
    <title>EMPLOYEE INFORMATION SYSTEM</title>
</head>

<body style=" background-image: url(Image/s2.jpg);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
    <div class="text">
        <div>
            <h1>Click any one of the below for Generating Report</h1>
            <div>
            
                <form action="3.1_Solution.php" method="post">
                    <div align="center" class="ftext">
                        <h2>Employee details across the world belonging to a particular department
                        <input type="submit" value="Clike Here">
                        </h2>
                        
                    </div>
                </form>

                <form action="3.2_Solution.php" method="post">
                    <div align="center" class="ftext">
                        <h2>New employees joined in and after a particular year like 2005
                        <input type="submit" value="Clike Here">
                        </h2>
                        
                    </div>
                </form>

                <form action="3.3_Solution.php" method="post">
                    <div align="center" class="ftext">
                        <h2>Employees with monthly salary more than Rs.10000 per month
                        <input type="submit" value="Clike Here">
                        </h2>
                        
                    </div>
                </form>

                <form action="3.4_Solution.php" method="post">
                    <div align="center" class="ftext">
                        <h2>All employees belonging to a particular designation
                        <input type="submit" value="Clike Here">
                        </h2>
                        
                    </div>
                </form>

                <form action="3.5_Solution.php" method="post">
                    <div align="center" class="ftext">
                        <h2>Details of all employees belonging to a particular country
                        <input type="submit" value="Clike Here">
                        </h2>
                        
                    </div>
                </form>

                <form action="3.6_Solution.php" method="post">
                    <div align="center" class="ftext">
                        <h2>Employees with more than or equal to 2 children.
                        <input type="submit" value="Clike Here">
                        </h2>
                        
                    </div>
                </form>

                <form action="3.7_Solution.php" method="post">
                    <div align="center" class="ftext">
                        <h2>Employees with education as post graduation degree
                        <input type="submit" value="Clike Here">
                        </h2>
                        
                    </div>
                </form>

                <form action="3.8_Solution.php" method="post">
                    <div align="center" class="ftext">
                        <h2>Total number of employees having salary account group by bank
                        <input type="submit" value="Clike Here">
                        </h2>
                        
                    </div>
                </form>

                <form action="3.9_Solution.php" method="post">
                    <div align="center" class="ftext">
                        <h2>Total number of technical managers available in a department
                        <input type="submit" value="Clike Here">
                        </h2>
                        
                    </div>
                </form>

                <form action="3.10_Solution.php" method="post">
                    <div align="center" class="ftext">
                        <h2>A report on department-wise total monthly expenditure against salary only
                        <input type="submit" value="Clike Here">
                        </h2>
                        
                    </div>
                </form>              
            </div>  

        </div>
    </div>
</body>
   
    <?php
        $conn->close();
    ?>

</body>

</html>