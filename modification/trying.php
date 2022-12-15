<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" methode="GET">
<label for="">login</label><br>
                <input type="text" name="login" ><br/>
                <label for="">Mot de pass</label><br>
                <input type="password" name="pass" ><br/>
<label for="">Nom</label><br>
                <input type="text" name="nom"><br/>
                <label for="">Prenom</label><br>
                <input type="text" name="prenom"><br/>
                <label for="">Date naissance</label><br>
                <input type="date" name="date" id=""><br/>
                <label for="">Ville</label><br>
                <select name="ville" size="1">
                    <?php 
                    $sql1="select * from ville";
                    $result1=mysqli_query($link,$sql1);
                    while($row1=mysqli_fetch_assoc($result1)){
                    echo '<option value='.$row1['id_ville'].'>'.$row1['lib_ville'].'</option>';
                    }
                    ?>
                </select><br/>
                <label for="">Photo</label><br>
                <input type="file" name="photo" id=""><br>
                <input type="submit" name="submit" id="submit">
                </form>
                <?php
                if(isset($_GET['submit'])){
                    $login=$_GET['login'];
                    $pass=$_GET['pass'];
                    $nom=$_GET['nom'];
                    $prenom=$_GET['prenom'];
                    $date=$_GET['date'];
                    $ville=$_GET['ville'];
                    $photo=$_GET['photo'];
                    $sql="insert into user (login,passe,nom,prenom,date_naissance,id_ville) values
                     ('$login','$pass','$nom','$prenom','$date','$ville')";
                    $result=mysqli_query($link,$sql);
                    if($result==true){
                    echo "nice";
                    }
                    else{
                        echo "erreur";
                    }
                }

                ?>
</body>
</html>