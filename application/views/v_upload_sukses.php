<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Membuat Upload File</h1>
    <ul>
        <?php foreach ($upload_data as $item => $value):?>
            <li><?php echo $item; ?> : <?php echo $value;?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>