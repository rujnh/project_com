<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดสินค้า</title>
    <!-- Add your CSS links or styles here -->
</head>
<body>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder">รายละเอียดสินค้า</h2>
        <br>
        <?php
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve and display the product details
            $pro_name = $_POST['pro_name'];
            $type_id = $_POST['type_id'];
            $pro_detail = $_POST['pro_detail'];
            $pro_detailother = $_POST['pro_detailother'];
            $pro_price_cost = $_POST['pro_price_cost'];
            $pro_condition = $_POST['pro_condition'];
            $pro_img = $_FILES['pro_img']['name'];

            echo "<p>ชื่อสินค้า: $pro_name</p>";
            echo "<p>ประเภทสินค้า: $type_id</p>";
            echo "<p>รายละเอียดสินค้า: $pro_detail</p>";
            echo "<p>รายละเอียดอื่นๆ: $pro_detailother</p>";
            echo "<p>ราคา: $pro_price_cost</p>";
            echo "<p>สภาพสินค้า: $pro_condition</p>";
            echo "<p>รูปภาพสินค้า: $pro_img</p>";

            // Upload the image file (you may need to handle this differently based on your server setup)
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["pro_img"]["name"]);
            move_uploaded_file($_FILES["pro_img"]["tmp_name"], $target_file);
            echo "<img src='$target_file' alt='Product Image' width='200'>";
        }
        ?>
    </div>
</section>

</body>
</html>
