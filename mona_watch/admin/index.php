<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Admin</title>
</head>
<body>
    <h3 class="welcome-admin">Welcome to Admin</h3>
    
    <div class="grid">
        <div class="wrapper">
            <?php
                include('config/connect.php');
                include('modules/header.php');
                include('modules/menu.php');
                include('modules/main.php');
                include('modules/footer.php');
            ?>                  
        </div>
    </div>
</body>
</html>