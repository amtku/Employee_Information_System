<?php 
   // Connect Database
   require "dbconnection.php";
 
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Test</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   <!-- Image and text -->
   <nav class="navbar navbar-light bg-info mb-4">
        <a class="navbar-brand" href="#">
        <img src="Book.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Employee Information System
        </a>
        <h1>Hello Admin</h1>
    </nav>

    <!-- Form Section -->
    <form class="container"  action="test.php" method="post">
      
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

    <?php if (isset( $_POST['employ'])){ $employ = $_POST["employ"];?>
        <!-- Display Section -->
        <div class="container my-5">
        <h2>Employ Details</h2>

                <table class="table table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th scope="col">SL. No.</th>
                      <th scope="col">Emp Id</th>
                      <th scope="col">Emp Name</th>
                      <th scope="col">Emp Dept Id</th>
                      <th scope="col">Emp Sex</th>
                      <th scope="col">Marital Status</th>
                      <th scope="col">Emp Join Date</th>
                      <th scope="col">Emp Birth Date</th>
                      <th scope="col">Emp Age</th>
                      <th scope="col">Emp Education</th>
                      <th scope="col">Emp Designation</th>
                      <th scope="col">Emp Salary</th>
                      <th scope="col">Emp Location Id</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $sql = "SELECT * FROM `department_master` WHERE `Dep_Name`='$employ'";
                      $result = mysqli_query($conn, $sql);
                      $row = mysqli_fetch_assoc($result);
                      $sql = "SELECT * FROM `employee` WHERE `Emp_Dept_Id`=$row[Dept_Id]";
                      $result = mysqli_query($conn, $sql);    
                      $sl=0;

                      while($row = mysqli_fetch_assoc($result)){
                        
                            $sl=$sl+1;

                        //  To find Dept Name
                            $sql1 = "SELECT * FROM `education_master` WHERE `Education_Id`=$row[Emp_Education_Id]";
                            $result1 = mysqli_query($conn, $sql1);
                            $row1 = mysqli_fetch_assoc($result1);

                        //  To find Dept Name
                            $sql2 = "SELECT * FROM `designation_master` WHERE `Designation_Id`=$row[Emp_Designation_Id]";
                            $result2 = mysqli_query($conn, $sql2);
                            $row2 = mysqli_fetch_assoc($result2);

                        // To Check Male or Female
                            if($row['Emp_Sex']==0){
                            $sex='female';
                            }else{
                            $sex='male';
                            }
                        
                            // To Check Marital Status
                            if($row['Emp_Marital_Status']==0){
                                $status='Unmarried';
                            }else{
                                $status='Married';
                            }

                            echo"<tr>
                            <th scope='row'>".$sl."</th>
                            <td>".$row['Emp_Id']."</td>

                            <td>".$row['Emp_Name']."</td>
                            <td>".$row['Emp_Dept_Id']."</td>
                            <td>".$sex."</td>
                            <td>".$status."</td>
                            <td>".$row['Emp_Join_Date']."</td>
                            <td>".$row['Emp_Birth_Date']."</td>

                            <td>".$row['Emp_Age']."</td>

                            <td>".$row1['Education_Desc']."</td>

                            <td>".$row2['Designation_Desc']."</td>
                            

                            <td>".$row['Emp_Salary']."</td>
                            <td>".$row['Emp_Location_Id']."</td>

                            </tr>";
                        }

                  ?>
                  </tbody>
                </table>
        </div> 
    <?php } ?>

    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#myTable').DataTable();

      });
    </script>
  </body>

</html>