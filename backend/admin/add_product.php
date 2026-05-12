<?php
include '../middleware/auth.php';
include '../config/database.php';

if(isset($_POST['submit'])){

    $product = $_POST['product'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Upload gambar
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp,
        "../uploads/" . $image);

    mysqli_query($conn,
        "INSERT INTO products
        (product_name,price,description,image)

        VALUES
        ('$product','$price','$description','$image')"
    );

    header("Location: products.php");
}
?>

<?php include 'layout/header.php'; ?>

<div class="d-flex">

<?php include 'layout/sidebar.php'; ?>

<div class="container-fluid p-4">

    <h2>Add Product</h2>

    <form method="POST"
          enctype="multipart/form-data">

        <div class="mb-3">

            <label>Product Name</label>

            <input type="text"
                name="product"
                class="form-control"
                required>

        </div>

        <div class="mb-3">

            <label>Price</label>

            <input type="number"
                name="price"
                class="form-control"
                required>

        </div>

        <div class="mb-3">

            <label>Image</label>

            <input type="file"
                name="image"
                class="form-control"
                required>

        </div>

        <div class="mb-3">

            <label>Description</label>

            <textarea
                name="description"
                class="form-control"></textarea>

        </div>

        <button type="submit"
            name="submit"
            class="btn btn-dark">

            Save Product

        </button>

    </form>

</div>

</div>

<?php include 'layout/footer.php'; ?>