<?php include 'pure_php.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP demo 3102</title>
</head>
<body>
    <h1> HEllo world</h1>
    <?php echo "<h1> HEllo world</h1>"; ?>
    <h2>username: <?php echo $username; ?> </u></h2>
    <h2>user_id: <?php echo $user_id; ?> </u></h2>
    <a href="next_page.php">click me</a>
    <h3><button type= "button" onclick ='greetUser()'>click</button></h3>
    <script>
        const username = "<?php echo $username;?>";
        const user_id = "<?php echo $user_id;?>";

        function greetUser(){
            alert ("Kamusta" + " " + username +" " + "!"+ " "+ 'Your ID is:'+" " + user_id);
    }
    </script>


</body>
</html>