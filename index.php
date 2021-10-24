<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="form.php" method="post">
        <label for="">Name : </label>
        <input type="text" name="name">
        <br><br>

        <label for="">Education : </label>
        <label for="edu">GCE(O/L)</label>
        <input type="checkbox" name="edu" id="edu">
        <label for="ed">GCE(A/L)</label>
        <input type="checkbox" name="edu" id="ed">

        <br><br>
        <label for="">Contact </label>
        <input type="text" name="phone">

        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>