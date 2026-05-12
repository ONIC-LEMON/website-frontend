<?php
include '../middleware/auth.php';
include '../config/database.php';

$data = mysqli_query($conn,
    "SELECT * FROM products");
?>

<?php include 'layout/header.php'; ?>

<div class="d-flex">

    <?php include 'layout/sidebar.php'; ?>

    <div class="container-fluid p-4">

        <div class="d-flex justify-content-between mb-4">

            <h2>Products</h2>

            <a href="add_product.php"
               class="btn btn-dark">

               Add Product
            </a>

        </div>

        <table class="table table-bordered table-striped bg-white">

            <thead>

                <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>

            </thead>

            <tbody>

            <?php
            $no = 1;

            while($row = mysqli_fetch_assoc($data)){
            ?>

            <tr>

                <td><?= $no++; ?></td>

                <td><?= $row['product_name']; ?></td>

                <td>
                    Rp <?= number_format($row['price']); ?>
                </td>
                <td>

                     <img src="../uploads/<?= $row['image']; ?>"
                          width="80">

                </td>
                <td>

                    <button class="btn btn-warning btn-sm">
                        Edit
                    </button>

                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>

                </td>

            </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

<?php include 'layout/footer.php'; ?>