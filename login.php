<?php include "services/database.php"; 

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //login
    $sql ="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);

    if($result->num_rows > 0){
        echo
            '<script>
                 alert("Akun Ditemukan")
            </script>';
    } else {
        echo
            '<script>
                 alert("Akun tidak ditemukan")
             </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include "layout/header.html" ?>
    
    <h3>Login</h3>
    <form action="login.php" method="POST">
        <input
            type="text" placeholder="Username"
            name="username">
        <input
            type="password" placeholder="Password"
            name="password">
        <button type="submit" name="login">login</button>
    
    <?php include "Layout/footer.html" ?>
</body>
</html>