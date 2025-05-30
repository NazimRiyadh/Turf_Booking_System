
<html lang="en">
<head>
   
    <title>Customer </title>
    <link rel="stylesheet" href="style.css">
    

</head>

<body>
    <h1 >Customer Registration </h1>
    <form id="registrationForm" action="../Controller/action_page.php" method="post">


        <!-- Customer Information -->
        <fieldset>
            <legend><h3>Customer Information:</h3></legend>
                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type ="text"id="fname" name="fname" placeholder ="First Name">
                            <input type ="text" id="lname" name="lname" placeholder ="Last Name">
                        </td>
                       
                    </tr>

                    <tr>
                        <td>
                            Phone No:
                        </td>
                        
                        <td>
                            <input type ="text"id="PhoneNo" name="phone" placeholder ="01*********">
                        </td>

                    </tr>

                    <tr>
                        <td>
                            Adress:
                        </td>
                        
                        <td>
                            <input type ="text"id="adress" name="address" placeholder="Present Adress">
                        </td>

                    </tr>


                    <tr>
                        <td>
                            Gender:
                        </td>
                        
                        <td>
                            <input type="radio" id="Gender1" name="gender" value="Male">Male
                            <input type="radio" id="Gender2" name="gender" value="Female">Female
                            <input type="radio" id="Gender3" name="gender" value="Other">Other

                        </td>

                    </tr>

                    <tr>
                        <td>
                            Date Of Birth:
                        </td>
                        
                        <td>
                            <input type ="date"id="dob" name="dob" placeholder ="dd/mm/yyyy">
                        </td>

                    </tr>




                    <tr>
                        <td>
                            Email Adress:
                        </td>
                        
                        <td>
                            <input type ="text"id="email" name="email" placeholder ="*********@gmail.com">
                        </td>

                    </tr>

                    <tr>
                        <td>
                            Password:
                        </td>
                        
                        
                        <td>
                            <input type ="Password"id="password" name="password"placeholder ="password">
                        </td>
                    </tr>
                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                    </td>
                </tr>

                    <tr>
                        <td>
                            NID (copy's):
                        </td>
                        
                        <td>
                            <input type ="file">
                        </td>
                    </tr>

                    <tr>

                        <td>
                            Location:
                        </td>

                        <td>
                            <select name="location" id="location" >
                                <option>-select-</option>
                                <option>Bashundhara</option>
                                <option>Uttara</option>
                                <option>Mirpur</option>
                                <option>Gulshan</option>
                            </select>
    
                        </td>
                    </tr>

                </table>
           
            
        </fieldset>

        
        <br>
       
        <input type="submit"name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
    </form>
</body>
</html>