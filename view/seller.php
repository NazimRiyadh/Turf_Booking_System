<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turf Registration</title>
   <link rel="stylesheet" href="../css/seller.css">
    <script defer src="validation.js"></script>
</head>
<body>
    <h1>Register your Turf</h1>

   <form id="turf-form" action="../controller/validation.php" method="post" enctype="multipart/form-data" onsubmit="return validate(event)">
        <fieldset>
            <legend><h3>Login Credentials</h3></legend>
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td>
                        <input type="text" id="username" name="username" value="<?= htmlspecialchars($old['username'] ?? '') ?>">
                        <span id="username_error" class="error" style="color:red;"><?= htmlspecialchars($errors['username'] ?? '') ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td>
                        <input type="password" id="password" name="password">
                        <span id="password_error" class="error" style="color:red;"><?= htmlspecialchars($errors['password'] ?? '') ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="confirm_password">Confirm Password:</label></td>
                    <td>
                        <input type="password" id="confirm_password" name="confirm_password">
                        <span id="confirm_password_error" class="error" style="color:red;"><?= htmlspecialchars($errors['confirm_password'] ?? '') ?></span>
                    </td>
                </tr>
            </table>
        </fieldset>

        <fieldset>
            <legend><h3>Turf Information</h3></legend>
            <table>
                <tr>
                    <td><label for="turf_name">Enter Your Turf Name:</label></td>
                    <td>
                        <input type="text" id="turf_name" name="turf_name" value="<?= htmlspecialchars($old['turf_name'] ?? '') ?>">
                        <span id="turf_name_error" class="error" style="color:red;"><?= htmlspecialchars($errors['turf_name'] ?? '') ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="phone">Enter Your Phone:</label></td>
                    <td>
                        <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($old['phone'] ?? '') ?>">
                        <span id="phone_error" class="error" style="color:red;"><?= htmlspecialchars($errors['phone'] ?? '') ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Enter Your E-mail:</label></td>
                    <td>
                        <input type="text" id="email" name="email" value="<?= htmlspecialchars($old['email'] ?? '') ?>">
                        <span id="email_error" class="error" style="color:red;"><?= htmlspecialchars($errors['email'] ?? '') ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="address">Enter Turf Address:</label></td>
                    <td>
                        <input type="text" id="address" name="address" value="<?= htmlspecialchars($old['address'] ?? '') ?>">
                        <span id="address_error" class="error" style="color:red;"><?= htmlspecialchars($errors['address'] ?? '') ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label>Choose Sports Facilities:</label></td>
                    <td>
                        <input type="checkbox" id="cricket" name="sports[]" value="Cricket">
                        <label for="cricket">Cricket</label><br>
                        <input type="checkbox" id="football" name="sports[]" value="Football">
                        <label for="football">Football</label><br>
                        <input type="checkbox" id="badminton" name="sports[]" value="Badminton">
                        <label for="badminton">Badminton</label><br>
                        <input type="text" id="other_sport" name="other_sport" placeholder="Other sports (optional)">
                        <span id="sports_error" class="error" style="color: red;"></span><span style="color:red"><?= htmlspecialchars($errors['sports'] ?? '') ?></span>


                    </td>
                </tr>
                <tr>
                    <td><label for="images">Upload Turf Images:</label></td>
                    <td>
                        <input type="file" id="images" name="images[]" multiple>
                        <span id="image_error" class="error" style="color:red;"><?= htmlspecialchars($errors['images'] ?? '') ?></span>
                        <div style="font-size: 12px; color: #888;">If the form fails, please re-select your images.</div>
                    </td>
                </tr>
            </table>
        </fieldset>

        <fieldset>
            <legend><h3>Owner Information</h3></legend>
            <table>
                <tr>
                    <td><label for="owner_name">Owner's Name:</label></td>
                    <td>
                        <input type="text" id="owner_name" name="owner_name" value="<?= htmlspecialchars($old['owner_name'] ?? '') ?>">
                        <span id="owner_name_error" class="error" style="color:red;"><?= htmlspecialchars($errors['owner_name'] ?? '') ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="owner_phone">Owner's Phone:</label></td>
                    <td>
                        <input type="tel" id="owner_phone" name="owner_phone" value="<?= htmlspecialchars($old['owner_phone'] ?? '') ?>">
                        <span id="owner_phone_error" class="error" style="color:red;"><?= htmlspecialchars($errors['owner_phone'] ?? '') ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="owner_email">Owner's Email:</label></td>
                    <td>
                        <input type="email" id="owner_email" name="owner_email" value="<?= htmlspecialchars($old['owner_email'] ?? '') ?>">
                        <span id="owner_email_error" class="error" style="color:red;"><?= htmlspecialchars($errors['owner_email'] ?? '') ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="owner_nid">Owner's NID (National ID):</label></td>
                    <td>
                        <input type="text" id="owner_nid" name="owner_nid" value="<?= htmlspecialchars($old['owner_nid'] ?? '') ?>">
                        <span id="owner_nid_error" class="error" style="color:red;"><?= htmlspecialchars($errors['owner_nid'] ?? '') ?></span>
                    </td>
                </tr>
            </table>
        </fieldset><br>

        <input type="submit" value="Register Turf">
    </form>
</body>
</html>