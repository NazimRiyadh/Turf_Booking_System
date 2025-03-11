<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turf Registration</title>
</head>
<body>
    <h1>Register your Turf</h1>
    <form action="seller.php" method="post">

               <!-- Turf Information -->
        <fieldset>
            <legend><h3>Turf Information:</h3></legend>

            <label for="turf_name">Enter Your Turf Name:</label><br>
            <input type="text" id="turf_name" name="turf_name" required><br>

            <label for="phone">Enter Your Phone:</label><br>
            <input type="tel" id="phone" name="phone"><br>

            <label for="email">Enter Your E-mail:</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="city">Choose City:</label>
            <select id="city" name="city">
                <option value="Dhaka">Dhaka</option>
                <option value="Chattogram">Chattogram</option>  
                <option value="Khulna">Khulna</option>
                <option value="Others">Others</option>
            </select><br><br>

            <label for="address">Enter Turf Address:</label><br>
            <input type="text" id="address" name="address"><br><br>

            <label>Choose Sports Facilities:</label><br>
            <input type="checkbox" id="cricket" name="sports[]" value="Cricket">
            <label for="cricket">Cricket</label><br>

            <input type="checkbox" id="football" name="sports[]" value="Football">
            <label for="football">Football</label><br>

            <input type="checkbox" id="badminton" name="sports[]" value="Badminton">
            <label for="badminton">Badminton</label><br>

            <input type="text" id="other_sport" name="other_sport" placeholder="Other sports (optional)"><br><br>

            <label for="images">Upload Turf Images:</label><br>
            <input type="file" id="images" name="images[]" multiple><br><br>
        </fieldset>
        
           <!-- Owner Information -->
           <fieldset>
            <legend><h3>Owner Information</h3></legend>

            <label for="owner_name">Owner's Name:</label><br>
            <input type="text" id="owner_name" name="owner_name" required><br>

            <label for="owner_phone">Owner's Phone:</label><br>
            <input type="tel" id="owner_phone" name="owner_phone" required><br>

            <label for="owner_email">Owner's Email:</label><br>
            <input type="email" id="owner_email" name="owner_email" required><br><br>

            <label for="owner_nid">Owner's NID (National ID):</label><br>
            <input type="text" id="owner_nid" name="owner_nid" required><br><br>
        </fieldset><br>

        <input type="submit" value="Register Turf">
    </form>
</body>
</html>
