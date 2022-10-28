<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="shortcut icon" href="pictures/icons8-folder-24.png">
    <link rel="stylesheet" href="style.css"> 
    </style>
</head>
<body>
    <div class="container">
        <?php include'nav.inc.php';?>
        <div class="form">
            <form action="/action_page.php" method="POST">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" value=""><br>

                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" value=""><br>
                
                <label for="email">E-mail:</label><br>
                <input type="text" id="email" name="email" value=""><br>
                
                <label for="phone">phone number:</label><br>
                <input type="text" id="phone" name="phone" value=""><br><br> 
                
                <input type="submit" value="Submit">
            </form>
    </div>
    </div>
</body>
</html>
