<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once __DIR__ . '/../components/head.php' ?>
    <title>Error</title>
</head>
<style>
    body{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 20px;
    }
</style>
<body>
    <div class="alert alert-danger" role="alert">
        <?= $message ?>
    </div>
    <div class="alert alert-secondary" role="alert">
        <pre><?= $trace ?></pre>
    </div>
</body>
</html>