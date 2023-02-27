<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handle_register.php" method="post">

    <label for="firstName">First Name </label>
    <input type="text" name="firstName" id="firstName">
    <br>
    <label for="lastName">Last Name </label>
    <input type="text" name="lastName" id="lastName">
    <br>
    <label for="emailText">emailText </label>
    <input type="email" name="emailText" id="emailText">
    <br>
    <label for="mobileAddress">Last Name </label>
    <input type="text" name="mobileAddress" id="mobileAddress">
    <br>
    <label for="countries">Countries </label>

    <select name="countries[]" id="countries">
    <option value="jordan">Jordan</option>
    <option value="palestine">Palestine</option>
    </select>
    <br>

    <input type="submit" value="submit">
</form>
</body>
</html>
