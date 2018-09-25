<?php
$servername = "{mysql-server}";
$username = "username";
$password = "Pwd1234!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
$flag = true;

if ($conn->connect_error) {
    $flag = false;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php if($flag === true): ?>
    <div style="text-align: center; color: rgb(65, 173, 73)">
        <h1 style="font-size: 100px;">Connected successfully</h1>
        <img style="height: 90%; width: 90%;" src="https://imgur.com/UB5TATD.png" />
    </div>
<?php else: ?>
    <div style="text-align: center; color: rgb(235, 35, 35)">
        <h1 style="font-size: 100px;">Connection failed</h1>
        <img style="height: 500px; width: 500px;" src="https://vignette.wikia.nocookie.net/outlast/images/6/60/X_mark.png/revision/latest/scale-to-width-down/420?cb=20140422222331" />
    </div>
<?php endif; ?>

</body>
</html>
