<html lang="en">

<h1>Verify Email</h1>

<?php
    if($_POST['email'] != ''){
        // The email to validate
        $email = $_POST['email'];

        // An optional sender
        function domain_exists($email, $record = 'MX'){
            list($user, $domain) = explode('@', $email);
            return checkdnsrr($domain, $record);
        }
        if(domain_exists($email)) {
            echo('This MX records exists; I will accept this email as valid.');
        }
        else {
            echo('No MX record exists;  Invalid email.');
        }
    }
?>
<form method="POST">
    <input type="text" name="email">
    <input type="submit" value="submit">
</form>
    <a href="php.html">Back</a>
</html>