<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link href="https://fonts.googleapis.com//css2?family-Amiri&family-cairo:wght@200&family-poppins:wght@100;200;300&display-swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع الكتروني لتسويق الملابس</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                    <h2>موقع تسويق للملابس اونلاين</h2>
                    <img src="logo.png" alt="logo" width="450.px">
                    <br>
                    <input type="text" name='name'>
                    <br>
                    <input type="text" name='price'>
                    <br>
                    <input type="file" id="file" name='image' style='display:none;'>
                    <label for="file">اختيار صورة للمنتج </label>
                    <button name='upload' type="submit">رفع المنتج</button>
                    <br><br>
                    <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Develoer Graduation project for group 99</p>
    </center>

</body>
</html>