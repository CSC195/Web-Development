<?php

if(!isset($fName) && !isset($lName) && !isset($zip) && !isset($email) && !isset($password)) {
    $fName = '';
    $lName = '';
    $zip = '';
    $email = '';
    $password = '';
    $error_message = '';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/CentralPerk/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="formstyles.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="aside">
         <h1>Register For An Account</h1>
    </div>

    <form action="index.php" method="post" id="registration_form">
        <input type="hidden" name="action" value="register">
        <span style="color:red; font-size:1.3em;"><?php echo $error_message; ?></span>
        <br>
        <label>Personal Information</label>
        <br>
        <br>

        <input type="text" name="fName" placeholder="First Name" required
                value="<?php echo htmlspecialchars($fName); ?>" />
        <br>
        <br>

        <input type="text" name="lName" placeholder="Last Name" required 
                value="<?php echo htmlspecialchars($lName); ?>" />
        <br>
        <br>

        <input name="zip" id="zipcode" type="text" placeholder="Zipcode" required
      		pattern="^\d{5}(-\d{4})?$" 
            value="<?php echo htmlspecialchars($zip); ?>" />
        <br>
        <br>

        <label>Account Information</label>
        <br>
        <br>

        <input type="email" name="email"  placeholder="Email Address" required
                value="<?php echo htmlspecialchars($email); ?>" />
        <br>
        <br>

        <input type="password" name="password"  placeholder="password" required
                value="<?php echo htmlspecialchars($password); ?>" />
        <br>
        <br>

    </form>

    <button type="submit" form="registration_form" value="Submit">Submit</button>
    
</body>
</html>