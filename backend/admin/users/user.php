<?php
include '../middleware/auth.php';
?>

<?php include 'layout/header.php'; ?>

<div class="d-flex">

    <?php include 'layout/sidebar.php'; ?>

    <div class="container-fluid p-4">

        <h2>Users</h2>

        <table class="table table-bordered bg-white mt-4">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>admin@gmail.com</td>
                </tr>
            </tbody>

        </table>

    </div>

</div>

<?php include 'layout/footer.php'; ?>