<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    
    <title>Material Design for Bootstrap</title>
    
    <link rel="stylesheet" href="css/mdb.min.css">
    
   
    <style>
       @font-face {
    font-family:"tangerine";
    src: url('fonts/Philosopher-Bold.ttf');
}
      .card{
        height:500px;
      }
      .card img{
        width:60%;
        height:200px;
        padding:10px;
      }
      .text-center{
        padding:50px;
      }
      .container{
        margin-top:100px;
      }
      .mb-5{
        padding-top:0px;
        font-family:"tangerine";
        font-size:40px;
      }
      .khz{
        margin-left:100px;
      }
    </style>
</head>
<body>

    <style>
      #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 58px;
      }
      @media (max-width: 991px) {
        #intro {
          /* Margin to fix overlapping fixed navbar */
          margin-top: 45px;
        }
      }
      
       @font-face {
    font-family:'par';
    src: url('fonts/poppins/Poppins-BoldItalic.ttf'); 
  }
  
  @font-face {
    font-family:'Poppins-Bold';
    src: url('fonts/poppins/Poppins-Bold.ttf'); 
  }
  
  @font-face {
    font-family:'Poppins-Medium';
    src: url('fonts/poppins/Poppins-Medium.ttf'); 
  }
  
  @font-face {
    font-family:'Montserrat-Bold';
    src: url('fonts/montserrat/Montserrat-Bold.ttf'); 
  }
 
  nav{
    float:right;
    display:inline-block;
    width:100%;
    background-color:#ced4da;
    height:80px;
    border-radius:4px;
   
    
  }
  .menu {
        
        text-align: center;
        font-size:13px;
        text-transform:uppercase;
        color:#495057;
        padding-bottom:20px;
        
    
}
.logo{
    width:10%;
    float:left;
    padding-top:5px;
   
  }
nav a
{
    text-decoration: none;
    text-transform: uppercase;
    font-weight:500;
    

    
    
}
nav li
{
    float:right;
    display: inline-block;
    vertical-align: center;
    width: 155px;
    padding-left:1%;
   
}
nav a :hover{
  color:white;
}
@font-face {
    font-family:"tangerine ";
    src: url('fonts/Steamed DEMO.otf');
}
.mb-5 strong{
  font-family:"tangerine" ;
}
nav{
  
}
body{
  padding:0px;

  height:1000px;
}
.diiv{
  border:3px solid white;
}
li{
  padding-top:27px;
  
}
.card-title{
  font-family:"tangerine" ;
  font-weight:bold;
  

}
.card-text{
 
  font-size:17px;


}
.mb-4{
  box-shadow:0px 0px 1px black; 
       
}
</style>

    <div class="diiv" >
      <nav>
    <img class="logo" src="img/logo-ensak.png">
    <ul >
                      <li><a href="index.html"><h2 class="menu">page d'acceuil</h2></a></li>
                      <li ><a href="acceuil.php"><h2 class="menu">Acceuil</h2></a></li>
                      <li><a href="partenaire.php"><h2 class="menu">Partenaire</h2></a></li>
                      <li ><a href="apropos.php"><h2 class="menu" >A propos de l'ENSA</h2></a></li>
                      <li><a href="esp.php"><h2 class="menu">Identification</h2></a></li>
                  </ul>
</nav>
</div>


  <main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Derniere ajout</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images1/projet1.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div  class="card-body">
                <h5 class="card-title">SOCIETE ABAFRI</h5>
                <p class="card-text">
                  Crée en 1996 et situé au cœur de CASABLANCA à AIN SEBAA, La société ABAFRI a bâti son savoir-faire au fil des décennies intégrant à chaque étape de développement, ses valeurs ...
                </p>
                <a href="https://www.telecontact.ma/annonceur/abafri/3306414/casablanca.php" class="btn btn-primary">visiter le site</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images1/projet2.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">GETB Engineering</h5>
                <p class="card-text">
                  GETB Engineering est un bureau d'études multidisciplinaire axé sur la construction et les i nstallations industrielles. Fondée en 1987, elle connaît une croissance régulière depuis 30 ans.
                </p>
                <a href="http://www.getb.ma/en/home_en/" class="btn btn-primary">visiter le site</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images1/projet3.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">AXE SURVEY</h5>
                <p class="card-text">
                  Bureau d'études
                </p>
                <a href="https://www.kerix.net/fr/annuaire-entreprise/axe-survey" class="btn btn-primary">visiter le site</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row" >
          
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images1/projet4.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">FIRCOM-SYSTÈME</h5>
                <p class="card-text">
                  FIRCOM-SYSTÈME depuis sa création en 2009, est l’un des importants fournisseurs de produits et de solutions de sécurité, qui met ses compétences et son professionnalisme à la disposition du client pour lui proposer des solutions...
                </p>
                <a href="http://www.fircomsysteme.com/index.php/first/" class="btn btn-primary">visiter le site</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images1/projet5.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Netafim</h5>
                <p class="card-text"> Fondée en 1965, Netafim a été le pionnier de la révolution de l’irrigation au goutte-à-goutte. Il est le premier à avoir inventé le créant un changement de mentalités vers l 'irrigation de précision. Netafim est le leader mondial de l' irrigation de précision
                </p>
                <a href="https://www.netafim.com/en/" class="btn btn-primary">visiter le site</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images1/white.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Comming soon</h5>
                <p class="card-text">
                  Restez brancher pour plus de partenaire..
                </p>
               
              </div>
            </div>
          </div>

          
            </div>
          
      </section>
      <!--Section: Content-->

      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
        
          <li class="page-item"><a class="page-link" href="index.html" color="white">Retour</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">actuel<span class="sr-only"></span></a>
          </li>
          
          
        </ul>
      </nav>
    </div>
  </main>

  <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>