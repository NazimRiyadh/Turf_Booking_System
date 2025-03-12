<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
</head>
<body>
    <h1>Register </h1>
    <form>

        <!-- Customer Information -->
        <fieldset>
            <legend><h3>Customer Information:</h3></legend>
                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type ="text"placeholder ="First Name">
                            <input type ="text"placeholder ="Last Name">
                        </td>
                       
                    </tr>

                    <tr>
                        <td>
                            Phone No:
                        </td>
                        
                        <td>
                            <input type ="number"placeholder ="01*********">
                        </td>

                    </tr>

                    <tr>
                        <td>
                            Adress:
                        </td>
                        
                        <td>
                            <input type ="text"placeholder="Present Adress">
                        </td>

                    </tr>


                    <tr>
                        <td>
                            Gender:
                        </td>
                        
                        <td>
                            <input type ="radio"name="gender">Male
                            <input type ="radio"name="gender">Female
                            <input type ="radio"name="gender">Other
                        </td>

                    </tr>

                    <tr>
                        <td>
                            Date Of Birth:
                        </td>
                        
                        <td>
                            <input type ="date">
                        </td>

                    </tr>




                    <tr>
                        <td>
                            Email Adress:
                        </td>
                        
                        <td>
                            <input type ="email"placeholder ="*********@gmail.com">
                        </td>

                    </tr>

                    <tr>
                        <td>
                            Password:
                        </td>
                        
                        <td>
                            <input type ="Password"placeholder ="password">
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

                   

                    



                </table>
           
            
        </fieldset>

        <!-- Turf -->
        <fieldset>
            <legend><h3>Turf </h3></legend>
            <table> 
                    <tr>
                        <td>
                            Select Sports:
                        </td>
                        
                        <td>
                            <input type ="checkbox" football>football
                            <input type ="checkbox" cricket>cricket
                            <input type ="checkbox" bandminton>bandminton
                        </td>

                    </tr>
                    <tr>

                        <td>
                            Location:
                        </td>
                        
                        <td>
                            <select >
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

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>