<!Doctype html>
<html>

<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <?php
        include_once("header.php");
    ?>
     <style>
            #message {
                color: red;
            }
         .message{
             margin: auto;
         }
        </style>
    <script src="emailpostal.js"></script>

</head>

<body>
    <?php
        include("menu.php");
    ?>
    <br />
    <div class="hh2">
        <h1>Customer Registration
        </h1>
    </div>
    <br />
    <!-- registration form -->
    <form method="post" action="insertagent.php">
        <table class="table1">
            <tr class="tr1">
                <td class="td1"><label for="fname">First Name:</label></td>
                <td class="td1"><input type="text" name="fname" id="fname" placeholder="First Name" required /></td>
            </tr>
            <tr class="tr1">
                <td class="td1"><label for="lname">Last Name:</label></td>
                <td class="td1"> <input type="text" name="lname" id="iname" placeholder="Last Name" required /></td>
            </tr>
            <tr class="tr1">
                <td class="td1"><label for="birthday">Birth Date:</label></td>
                <td class="td1"><input type="date" name="birthday" id="birthday" required /></td>
            </tr>
            <tr class="tr1">
                <td class="td1"><label for="email">Email: </label></td>
                <td class="td1"> <input type="text" name="emal" id="email" placeholder="abc@xyz.com" required /></td>
            </tr>
            <tr class="tr1">
                <td class="td1"><label for="cellphone">Cellphone:</label></td>
                <td class="td1"> <input type="text" name="cellphone" id="cellphone" placeholder="Cellphone" required /></td>
            </tr>
            <tr class="tr1">
                <td class="textarea"><label for="address">Address:</label></td>
                <td class="td1"><textarea name="address" type="text" id="address" rows="2" cols="28" placeholder="    Address" required></textarea></td>
            </tr>

            <tr class="tr1">
                <td class="td1"><label for="postalcode">Postal Code:</label></td>
                <td class="td1"> <input type="text" name="postal" id="postal" placeholder="Postal Code" required /></td>
            </tr>
            <tr class="tr1">
                <td class="td1"><label for="city">City:</label></td>
                <td class="td1"> <input type="text" name="city" id="city" placeholder="City" required /></td>
            </tr>

            <tr>
                <td class="td1"><label for="province">Province:</label></td>
                <td class="td1">
                    <select id="province" name="province" required>
                        <option value="">Select a province</option>
                        <option value="AB">Alberta</option>
                        <option value="BC">British Columbia</option>
                        <option value="MB">Manitoba</option>
                        <option value="NS">Nova Scotia</option>
                        <option value="ON">Ontario</option>
                        <option value="QC">Quebec</option>
                        <option value="SK">Saskatchewan</option>

                    </select></td>
            </tr>

            <tr>
                <td class="td1"><label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
                </td>
            </tr>
            <!-- remember me confirmation -->
            <p id="message"></p>
            <tr>
                <td class="td1"> <button class="button1" type="reset" onclick="return confirm('Do you really want to reset?');" />Reset</td>
                <td class="td1"> <button class="button1" type="submit" onclick="return validate(this.form);" />Submit</td>
            </tr>
            <!-- submit button-->
        </table>
    </form>
<div class=hh4>
   <?php
    include("function.php");
    
    if (isset($_REQUEST["AgtFirstName"]))
    {
        //validate the form data
        //if data is okay
        //pass array to insertagent() function
        if (insertagent($_REQUEST))
        {
            print("Data inserted successfully");
        }
        else
        {
            print("Data insert failed, call tect support");
        }
    }
    else
    {
        //print ("no form data received");
        header("Location: day11exercise.php");
    }
?></div>

    <footer>
        <?php
                include_once("footer.php");
            ?>
    </footer>
</body>

</html>
