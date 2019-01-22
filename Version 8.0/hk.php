<?php

// First make sure that the variable is defined, to prevent notices
// when trying to use it later.
$answer = '';

// If something has been posted (submitted).
if (!empty ($_POST)) {
    // Calculate the answer.
    // TODO: Add some validation to make sure that the values are indeed numbers.
    // See filter_var () in the PHP manual.
    $answer = $_POST['text1'] + $_POST['text2'];
}

?>
<html>
<head>
<title>My Page</title>
</head>
<body>
<form name="myform" action="hk.php" method="POST">
    <input type="submit" name="submit" value = "go">
    <input type="number" name="text1" >
    <input type="number" name="text2" >
    <input type="number" name="text3" value="<?php echo $answer; ?>">
</form>