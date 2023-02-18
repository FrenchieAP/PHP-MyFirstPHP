<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    <?php include 'CSS/style.css'; ?>
    </style>
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
      <div>
          <h1 class="aboutMe">About Me</h1>
          <div class="aboutMain">
            <img class="moi" src={Moi}></img>
            <div class="about">
              <p>Former chef, currently a budding software developer! I have over 5 years of experience in fine dining restaurants, as well as 5 years of experience in sales and customer retention.
                I'm also natively fluent in French, and proficient in Spanish.
                During the pandemic, I discovered a new passion for coding, and decided to enroll at Coding Dojo to become a full-stack developer. 
                I am most proficient in developing full CRUD applications and APIs.
                The bootcamp provided a great foundation for me to keep developing skills on my own, and to continue learning new languages and technologies.</p>
                <p>When I'm not coding, you can usually find me at the gym, enjoying the outdoors or cooking up delicious meals for my friends and family. </p>
              <p>
              Programming Languages: Java, Python, Javascript, SQL, CSS, HTML
              Libraries/Frameworks/Tools: Spring Boot, React, Flask, Bootstrap, Jinja2, JSON, Bcrypt
              Databases: MongoDB, MySQL Workbench</p>
            </div>
          </div>
      </div>
    </div>
</body>
</html>