<?php

// config database
require_once('./config.php');

// sql from all data
$sql = 'SELECT * FROM information';

$run_sql = mysqli_query($con, $sql);


?>

<!-- html start -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View all data</title>

    <!-- link favicon image -->
    <link rel="shortcut icon" href="./../favicon.svg" type="image/x-icon">

    <!-- datatables css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.bootstrap5.css">

</head>

<body>


    <!-- main table -->
    <div class="container p-3 my-5 bg-light border border-primary">
        <table id="example" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Religion</th>
                    <th>Country</th>
                    <th>Sports</th>
                    <th>Phone Number</th>
                    <th>User Image</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Local Time</th>
                </tr>
            </thead>
            <tbody>

                <?php

                while ($all_users = mysqli_fetch_array($run_sql)) {

                ?>
                    <tr>
                        <td><?php echo $all_users['user_id']; ?></td>
                        <td><?php echo $all_users['first_name']; ?></td>
                        <td><?php echo $all_users['last_name']; ?></td>
                        <td><?php echo $all_users['email']; ?></td>
                        <td><?php echo $all_users['password']; ?></td>
                        <td><?php echo $all_users['gender']; ?></td>
                        <td><?php echo $all_users['blooad_group']; ?></td>
                        <td><?php echo $all_users['religion']; ?></td>
                        <td><?php echo $all_users['country']; ?></td>
                        <td><?php echo $all_users['sports']; ?></td>
                        <td><?php echo $all_users['phone_number']; ?></td>
                        <td><?php echo $all_users['user_image']; ?></td>
                        <td><?php echo $all_users['date_of_birth']; ?></td>
                        <td><?php echo $all_users['address']; ?></td>
                        <td><?php echo $all_users['local_time']; ?></td>
                    </tr>
                <?php

                }

                ?>
            </tbody>
        </table>
    </div>



    <!-- datatables js -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/responsive.bootstrap5.js"></script>



    <script src="./../js/app.js"></script>


</body>

</html>