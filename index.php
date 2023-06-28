<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>

<body>
<div class="card">
    <h1>Add Product: </h1>
    <form action="./save.php" method="post">

        <label>Name: </label>
        <input type="text" name="name">
        <br><br>

        <label>Price: </label>
        <input type="number" name="price">
        <br><br>

        <label>Stock: </label>
        <input type="number" name="stock">
        <br><br>

        <button>Add</button>

    </form>
</div>

</body>

</html>