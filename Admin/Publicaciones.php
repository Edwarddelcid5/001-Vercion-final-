<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/images/cuidado-de-mascotas.png" type="image/png">
    
    <title>Administrador</title>
  
    <link rel="stylesheet" href="./css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/style.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<!--====== PRELOADER PART START ======-->

<div class="preloader">
  <div class="loader">
      <div class="ytp-spinner">
          <div class="ytp-spinner-container">
              <div class="ytp-spinner-rotator">
                  <div class="ytp-spinner-left">
                      <div class="ytp-spinner-circle"></div>
                  </div>
                  <div class="ytp-spinner-right">
                      <div class="ytp-spinner-circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!--====== PRELOADER PART ENDS ======-->






  
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">MASCOT</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Buscar">
         <span class="tooltip">Search</span>
      </li>
      <li>



        <a href="./Publicaciones.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Publicaciones</span>
        </a>
         <span class="tooltip">Publicaciones</span>
      </li>


      <li>
       <a href="./Usuarios.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Usuarios</span>
       </a>
       <span class="tooltip">Usuarios</span>
     </li>
     <li>
       <a href="./Perfil.html">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Perfil</span>
       </a>
       <span class="tooltip">Perfil</span>
     </li>

     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Acerca de</span>
       </a>
       <span class="tooltip">Acerca de</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="./img/Edu.jpg" alt="profileImg  ">
           <div class="name_job">
             <div class="name">Edward</div>
             <div class="job">Del Cid</div>
           </div>
         </div>
         <a href="../php/cerrarsesionadm.php"> <i class='bx bx-log-out' id="log_out" ></i></a>
        
     </li>
    </ul>
  </div>
  


<section class="home-section">  
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
              <h1 class="font-weight-bold mb-0">Bienvenido Edward</h1>
              <p class="lead text-muted">Revisa las ultimas Publicaciones</p>
            </div>
            <div class="col-lg-3 col-md-4 d-flex">
              <button class="btn btn-primary w-100 align-self-center">Administrar Publicaciones</button>
            </div>
        </div>
    </div>
<br>
<br>
 <div class="container">
  <div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


  </div>
</div>
</section>

  
  <script src="./js/script.js"></script>
<!-- Optional JavaScript -->

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

        <!-- Optional JavaScript -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
 
<!--====== Main js ======-->
<script src="../assets/js/main.js"></script>

</body>
</html>
