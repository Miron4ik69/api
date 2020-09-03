<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" enctype="multipart/form-data" method="POST">
        <p>text :</p>
        <input type="text" name="text" require>
        <p>price :</p>
        <input type="text" name="price" require>
        <p>amount :</p>
        <input type="text" name="amount" require>
        <p>file :</p>
        <input type="file" name="image" require>
        <button type="submit">submit</button>
    </form>

</body>
</html>