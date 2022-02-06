<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add">add new category</a>
    <table border="1">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>delete</th>
            <th>update</th>
        </tr>

        <?php foreach($data as $c): ?>
            <tr>
                <td><?= $c['id']; ?></td>
                <td><?= $c['title']; ?></td>
                <td><a href="delete/<?= $c['id']; ?>">delete</a></td>
                <td><a href="edit/<?= $c['id']; ?>">update</a></td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>