<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= dirname(__DIR__); ?>/vendor/twbs/dist/css/bootstrap.css">
</head>
<body>
    <form action="../update" method="post">
        <input type="text" value="<?= $data['title']; ?>" name="title">
        <input type="hidden" value="<?= $data['id']; ?>" name="id"> 
        <input type="submit" style="btn btn-success"> 
    </form>
</body>
</html>