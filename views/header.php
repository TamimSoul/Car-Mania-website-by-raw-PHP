<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md shadow fw-bold">
    <div class="container">
        <a href="" class="navbar-brand text-dark fw-bold"><i class="fa-solid fa-car"></i>  CAR MANIA</a>
        <ul class="navbar-nav">
            <li><a href="" class="nav-link ">Home</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
                <ul class="dropdown-menu">
                    <?php foreach ($categories as $category){?>
                        <li><a href="" class="dropdown-item"><?php echo $category['name']; ?></a></li>
                    <?php } ?>

                </ul>
            </li>
            <li><a href="" class="nav-link ">Contact</a></li>
        </ul>
    </div>
</nav><?php
