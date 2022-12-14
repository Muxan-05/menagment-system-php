<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <?php
        include("../include/header.php");

        include("../include/connection.php");
    ?>

<div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -20px;">
                   <?php
                    include("sidenav.php");
                   ?>
                </div>

                <div class="col-md-10">
                    <h4 class="my-2">Admin Dashboard</h4>
                    <div class="col-md-12 my-1">
                        <div class="row">
                            <div class="col-md-3 bg-success mx-2" style="height: 130px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <?php
                                                $ad = mysqli_query($connect, "SELECT * FROM admin");

                                                $num = mysqli_num_rows($ad);
                                            ?>
                                            <h5 class="my-2 text-white " style="font-size: 30px;"><?php echo $num; ?></h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Admin</h5>
                                        </div>
                                        <div class="col-md-4">
                                        <a href="admin.php"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-info mx-2" style="height: 130px;">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white " style="font-size: 30px;">0</h5>
                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Doctor</h5>
                                            </div>
                                            <div class="col-md-4">
                                            <a href="#"><i class="fa fa-user-md fa-3x my-4" style="color: white;"></i></a>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-warning mx-2" style="height: 130px;">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white " style="font-size: 30px;">0</h5>
                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Patient</h5>
                                            </div>
                                            <div class="col-md-4">
                                            <a href="#"><i class="fa fa-procedures fa-3x my-4" style="color: white;"></i></a>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px;">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white " style="font-size: 30px;">0</h5>
                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Report</h5>
                                            </div>
                                            <div class="col-md-4">
                                            <a href="#"><i class="fa fa-flag fa-3x my-4" style="color: white;"></i></a>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px;">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <?php
                                                    $job = mysqli_query($connect, "SELECT * FROM doctors WHERE status='Pendding'");

                                                    $num1 = mysqli_num_rows($job);
                                                ?>
                                                <h5 class="my-2 text-white " style="font-size: 30px;"><?php echo $num1; ?></h5>
                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Job Request</h5>
                                            </div>
                                            <div class="col-md-4">
                                            <a href="job_request.php"><i class="fa fa-book-open fa-3x my-4" style="color: white;"></i></a>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-success mx-2 my-2" style="height: 130px;">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="my-2 text-white " style="font-size: 30px;">0</h5>
                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Income</h5>
                                            </div>
                                            <div class="col-md-4">
                                            <a href="#"><i class="fa fa-money-check-alt fa-3x my-4" style="color: white;"></i></a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    
</body>
</html>