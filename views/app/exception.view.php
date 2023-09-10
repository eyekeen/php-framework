<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
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
        <?= $trace ?>
    </div>
</body>
</html>