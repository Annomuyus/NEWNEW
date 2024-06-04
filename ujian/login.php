<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="log.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>


<body>

    <div class="centercontent">

        <form method="POST" id="box" class="margin" action="logfun.php">
            <h1 style="color: rgb(255, 255, 255);margin-left: 60px;">Ini Form Login</h1>
            <hr class="solid">
            <label for="name">Email: </label><br>
            <input type="email" id="name" name="email" placeholder="Your Email" class="inputbox"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Your Password" class="inputbox">
            <hr class="solid">
            <input name="submit" class="button" type="submit" value="LOGIN!"><br><br>
            <a href="regi.php" class="link">DAFTARKAN AKUN!</a>
        </form>

    </div>
</body>

</html>