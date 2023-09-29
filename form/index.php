<?php
include('./assets/inc/form-setup.php');
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>form-template</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header></header>
    <main>
        <?php if ($page_flag === 1) : ?>

            <?php include('./assets/inc/confirm.php'); ?>

        <?php elseif ($page_flag === 2) : ?>
            <?php
            header('Location: thanks.php');
            ?>
        <?php else : ?>
            <?php include('./assets/inc/form.php'); ?>
        <?php endif; ?>
    </main>
    <footer></footer>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="assets/js/form.js"></script>
</body>


</html>