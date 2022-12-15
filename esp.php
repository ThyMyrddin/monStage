<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <title>Acceuil</title>
    
    <style>
        body {
    width: 99%;
    font-family: sans-serif;
    background-color: white;
}
#ecole {
    position: absolute;
    top: 0px;
    right: 0px;
    width: 350px;
    height: 150px;
    
}
article {
    background-color: white;
    height: 550px;
    margin-top: 5px;
    padding-left: 200px;
    padding-top: 150px;
    padding-right: 150px;
    padding-bottom: 25px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
article div {
    width: 230px;
    height: 200px;
    margin-right: 90px;
    box-shadow: 0px 0px 9px black;
    border: 1px solid white;
    border-radius: 10px;
}
article .g:hover {
    transform: scale(1.03);
}

article a {
    color: rgb(0, 0, 0);
    text-decoration: none;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
}
article img {
    width: 100px;
    height: 100px;
    border-radius: 10px;
}
#gi {
    background-image: url(img/e.jpg);
    background-size: cover;
}
#gm {
    background-image: url(img/p.jpg);
    background-size: cover;
}
#ge {
    background-image: url(img/a.jpg);
    background-size: cover;
}
.grey {
    background-color: rgba(128, 128, 128, 0.589);
    padding-top: 20px;
    height: 178px;
}


    </style>
</head>
<body>
    <header>
<?php include "baniere.html"; ?>
</header>
<article>
       <a href="authentification.php"><div id="gi" class="g">
          <div class="grey"><img src="img/e.png"><br>
           Espace etudiant</div> 
    </div></a>
       <a href="authentificationp.php"><div id="gm" class="g"><div class="grey">
        <img src="img/p.png"><br>
        Espace enseignant</div> 
    </div></a>
       <a href="authentificationa.php"><div id="ge" class="g"><div class="grey">
        <img src="img/a.png"><br>
        Espace administration</div> 
    </div></a>
</article>
    
</body>
</html>