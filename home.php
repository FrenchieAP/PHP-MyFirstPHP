<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    <?php include 'CSS/style.css'; ?>
    </style>
    <title>Document</title>
</head>
<body>
    <div>
        <div class="nav">
            <h3><a href="/home.php" class="navtab">Antoine Pepino - Full Stack Developer</a></h3>
            <div class="navtabs">
                <h4><a href="/about.php" class="navtab">About</a></h4>
                <h4><a href="/projects.php" class="navtab">Projects</a></h4>
                <h4><a href="/resume.php" class="navtab">Resume</a></h4>
            </div>
        </div>
    </div>
    <div class="card1">
        <h4 style="color: green;">My first XAMPP project</h4>
        <h4 style="color: blue">Mon premier projet XAMPP</h4>
        <h4 style="color: red">Mi primer proyecto XAMPP</h4>

        <p></p>
        <?php
        echo "<p>Hello World from PHP ;-)</p>\n";
        echo "date : " . date('j-m-y h-i-s');
        ?>
        <p></p>
        <?php
        function firstName($fname) {
            echo "$fname Antoine.<br>";
            }
            
            
            firstName("Hello,");
        ?>
    </div>
    
</body>
</html>