<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">
    <title>Web bán đồng hồ</title>
</head>
<body>
    <div class="wrapper">
        <?php
            include('admin/config/connect.php');
            include('pages/header__wrapper.php');
            include('pages/slider.php');
            include('pages/content.php');
            include('pages/footer.php');
        ?>
    </div>
</body>
</html>