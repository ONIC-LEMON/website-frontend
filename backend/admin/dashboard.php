<?php
include '../middleware/auth.php';
?>

<?php include 'layout/header.php'; ?>

<div class="d-flex">

    <?php include 'layout/sidebar.php'; ?>

    <div class="container-fluid p-4">

        <h2 class="mb-4">
            Welcome, 
            
            <?php
            if(isset($_SESSION["user"])) {
            echo $_SESSION['user'];
            } else {
                echo "Admin";
            }
         ?>
        </h2>

        <div class="row">

            <div class="col-md-4 mb-3">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h5>Total Products</h5>
                        <h2>10</h2>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h5>Total Users</h5>
                        <h2>5</h2>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h5>Total Messages</h5>
                        <h2>15</h2>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include 'layout/footer.php'; ?>