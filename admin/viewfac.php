<?php
 include "adminsidebar.php";
$conn = mysqli_connect("localhost","root","","userdb");


$sql = "SELECT id, role, username, name FROM user WHERE role='faculty'"; 

$result = mysqli_query($conn , $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="page-content p-5" id="content">
            

            <div class="topbar fixed-top">
                <button id="sidebarCollapse" class="btn btn-light text-dark bg-light rounded-pill shadow-sm m-2 mb-4 fixed-top">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="toggle" ></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search Here">
                        <i class="fa fa-search pt-2" aria-hidden="true"></i>
                    </label>
                </div>
                <div class="user"  >
                    
                    
                </div>
            </div>
<center>
    <br><br>
            <table style="color:white;" class="table table-dark">
                <tr>
                    <th>User ID</th>
                    <th>Role</th>
                    <th>Username</th>
                    <th>Name</th>
                </tr>
                <?php while($row=mysqli_fetch_array($result)){   ?>

                    <tr>
                        <td>
                            <?php echo $row['id'] ?>
                </td>
                <td>
                            <?php echo $row['role'] ?>
                            </td>
                            <td>
                            <?php echo $row['username'] ?>
                            </td>
                            <td>
                            <?php echo $row['name'] ?>
                        </td>
                    </tr>
                    <?php  }  ?>
            </table>
            </center>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="mainBoo.js"></script>
</body>
</html>