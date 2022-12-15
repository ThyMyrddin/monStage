<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <title>ENSA-Kénitra – Ecole Nationale des Sciences Appliquées-المدرسة الوطنية للعلوم التطبيقية</title>
    <style>
        @font-face
 {
    font-family: 'dancing';
    src: url('polices-1/DancingScript-Regular.ttf');
}
@font-face
 {
    font-family:'philo';
    src: url('polices-1/Philosopher-Regular.ttf');
}
body{
    background-color:white;
    background-repeat:no-repeat;   
    width: 99%;
}

#page{
        background-color: #a8dadc;
        color:#1d3557;
        text-align: center;
        padding-top:10px;
        padding-bottom:10px;
        border-radius:10px;
        box-shadow:0px 0px 30px #1d3557;
        font-size:13px;
        text-transform:uppercase;
        margin-right: 5px;
        margin-top: 50px;
}

.titre{
    margin-top: 50px;
    margin-bottom: 30px;
    font-size:20px;
        text-transform:uppercase;
        color:#212529;
        
    padding: 10px;
    background-color:#ced4da;
    border-radius:10px;
    box-shadow:0px 0px 3px black;
    text-align: center;
    width: 60%;
    margin-left: 5%;
}
.titres{
    position: relative;
    margin: 50px;
    background-image: url(img/bg.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 500Px;
    width: 90%;
    border-radius:15px;
    box-shadow:0px 0px 15px #1d3557;
    margin-right:5%;
    margin-left:5%;
}
#titre1{
    position: absolute;
    padding-left:10%;
    background-color:#1d3557  ;
    border: 0.5px solid black;
    border-radius:5px;
    opacity: 0.7;
    color: white;
    margin-top: 10px;
    text-align: center;
    font-family: 'dancing';
    font-size: 60px;
    margin: 50px 50px;
    font-weight: bold;
}
p{
    font-size: 20px;
    margin:30px;
    line-height:40px; 
    font-family:'philo';
    color: #1d3557;
}
#fillières a{
    font-family:'philo';
    text-decoration: none;
    text-transform: uppercase; 
    color: #011025 ;
}
#clubs{
    font-family:'philo';
    line-height:30px; 
    font-size: 20px;
}
nav{
    margin-right:0px;
    border-radius:50px;
}

    </style>
</head>
<body>
    <?php include "baniere.html"; ?>
    <br><hr><br>
    <h2 class="titre">présentation de l'école</h2>
    <div class="titres">
    <h1 id="titre1">Ecole Nationale des Sciences Appliquées-المدرسة الوطنية للعلوم التطبيقية</h1>
    </div>
    <h3><p>L’Ecole Nationale des Sciences Appliquées de Kénitra (ENSAK) a été créée en 2008. Sa Majesté le Roi Mohammed VI a procédé le Lundi 13 0ctobre 2008 à la pose de la première pierre pour la construction des locaux de l’établissement. L’ENSAK a pour vocation de former des ingénieurs d’état dans des domaines scientifiques et techniques mais avec des compétences en management et en communication. L’ouverture de l’ENSAK vient conforter les efforts déployés tant au niveau national que régional visant à répondre au programme national de formation des 10 000 ingénieurs. quatre cycles ingénieurs sont ouverts dans des spécialités susceptibles de connaître d’importants développements. Il s’agit des filières:</p></h3>
    
<div>
    <ul id='fillières'>
        <li><a href="info.html"><h2 class="filliere">Génie Informatique</h2></a></li>
        <li><a href="RST.html"><h2 class="filliere">Réseaux et systèmes de télécommunications</h2></a></li>
        <li><a href="meca.html"><h2 class="filliere">Génie mecatronique d'automobile</h2></a></li>
        <li><a href="elec.html"><h2 class="filliere">Génie eléctrique</h2></a></li>
        <li><a href="indus.html"><h2 class="filliere">Génie industriel</h2></a></li>
    </ul>
</div>
    <h3><p>La formation à l’ENSAK se caractérise par une grande dimension pratique à travers les activités techniques, les stages et les projets réalisés en partenariat avec le milieu socio-économique national et international.</p></h3>
    <h2 class="titre">activitées parascolaires</h2>
    <h3><p>Depuis sa création, l’ENSA offre aux étudiants de multiples occasions d’appliquer concrètement ce qui est enseigné. Ceci s’est concrétiser par la création par les étudiants eux même, de plusieurs clubs scientifiques, culturels et sportifs auxquels adhérent presque la totalité des étudiants. Une douzaine de clubs opèrent aujourd’hui et dynamisent considérablement les activités parascolaires au sein de l’établissement. Ils contribuent à développer chez les étudiants leurs talents et capacités tout en participant à leurs épanouissements. Ces clubs organisent souvent en concertation avec le Bureau Des Etudiants « BDE » des activités, des conférences, des formations et des workshops. La liste des clubs aujourd’hui actifs, se décline comme suit :</p></h3>
    
    <ul id="clubs">
        <li>Club Robotique et Énergies Renouvelables « CRER ».</li>
        <li>ENSAK Informatics Club « EIC ».</li>
        <li>Club Information Technology and Telecommunication « ITT»</li>
        <li>ENACTUS ENSAK</li>
        <li>Anaruz ENSAK</li>
        <li>Event’s Club</li>
        <li>Ciel logistique</li>
        <li>Mécatronique.</li>
        <li>GDEK</li>
        <li>BDS</li>
        <li>ENSAK ARTS</li>
        <li>Research Awakening Club</li>
        <li>JLM</li>
        <li>afaaq</li>
    </ul>
</body>
</html>