<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome To SOMO</h1>
    <form action="GoPage.php" method="post">
        <table>
            <tr>
                <td><label for="" name="user">User Name : </label></td>
                <td><input type="text" name="user" id="" required ></td>
            </tr>
             <tr>
                <td><label for="" name="pass">Passwored : </label></td>
                <td><input type="password" name="pass" id="" required ></td>
            </tr>
             <tr>
                <td><label for="" name="id">National ID : </label></td>
                <td><input type="number" name="id" id="" required ></td>
            </tr>
             <tr>
                <td><input type="checkbox" name="check"><lable>remember me .</lable></td>
            </tr>
            <tr>
                <td><input type="submit" value="Go"></td>
            </tr>
        </table>
    </form>
</body>
</html>