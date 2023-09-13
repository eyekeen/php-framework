<?php

use App\Application\Views\View;
use App\Application\Config\Config;

?>

<!DOCTYPE html>
<html lang="<?= Config::get('app.lang') ?>">


<head>
    <?php View::component('head'); ?>
    <title><?= $title ?></title>
</head>

<body>
    <?php View::component('nav'); ?>
    <main>
        <div class="container">
            <div class="row mt-3">
                <form action="./contacts.view.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </main>
    <?php View::component('scripts'); ?>
</body>

</html>