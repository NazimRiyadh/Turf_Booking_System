<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Login</title>
     <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1>Customer Login</h1>
    <form action="../Controller/login_check.php" method="post" id="loginForm">
        <fieldset>
            <table>
                <tr>
                    <td>Email Address:</td>
                    <td>
                        <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </td>
                </tr>
            </table>
        </fieldset>
        <br>
        <input type="submit" name="login" value="Login" >
        <input type="reset" name="reset" value="Reset">
        <br><br>
        <a href="../View/customer.php">Create an account first</a>
    </form>
</body>
</html>

