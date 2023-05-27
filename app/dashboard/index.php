
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Martin Monroy Perez" content="">
    <link rel="stylesheet" href="../../assets/js/jquery.js">
    <link rel="stylesheet" href="../../assets/css/backg.css">
    <link rel="stylesheet" href="../../assets/css/maincarga.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="icon" type="image/png" href="../../assets/icon/logo.png" />
    <title>Control Taller</title>
  </head>
  <body>
    <div id="contenedor_cargar">
      <div id="carga"></div>
    </div>

    <script>
      window.onload = function(){
        var contenedor = document.getElementById('contenedor_cargar');
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
      }
    </script>
    <div class="sidebar">
   <div class="logo-details">
     <i class='bx bxl-c-plus-plus icon'><i class="fas fa-hand-holding-water"></i></i>
       <div class="logo_name">Control</div>
       <i class='bx bx-menu' id="btn" > <i class="fas fa-align-right"></i></i>
   </div>
   <ul class="nav-list">
     <li>
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search...">
        <span class="tooltip">Search</span>
     </li>
     <li>
       <a href="./">
         <i class="fas fa-home"></i>
         <span class="links_name">Tareas Activas</span>
       </a>
        <span class="tooltip">Tareas Activas</span>
     </li>
     <li>
      <a href="./kms/">
      <i class="fas fa-solid fa-compass"></i>
        <span class="links_name">Kilometrajes</span>
      </a>
      <span class="tooltip">Kilometrajes</span>
    </li>
     <li>
       <a href="./fechas/">
       <i class="fas fa-solid fa-file-excel"></i>
         <span class="links_name">Fechas</span>
       </a>
        <span class="tooltip">Fechas</span>
     </li>
     <li>
       <a href="./fechaunidades/">
       <i class="fas fa-solid fa-file-excel"></i>
         <span class="links_name">Fechas Y Unidad</span>
       </a>
        <span class="tooltip">Fechas Y Unidad</span>
     </li>
     <li>
       <a href="./fechamecanicos/">
       <i class="fas fa-solid fa-file-excel"></i>
         <span class="links_name">Fechas Y Mecanico</span>
       </a>
        <span class="tooltip">Fechas Y Mecanico</span>
     </li>
     <li>
      <a href="./catalogos/">
      <i class="fas fa-solid fa-books"></i>
        <span class="links_name">Catalogos</span>
      </a>
      <span class="tooltip">Catalogos</span>
    </li>
    <li>
       
    <li>
        <a href="./llantas-storage/">
        <i class="fas fa-solid fa-tire"></i>
          <span class="links_name">Control de Llantas</span>
        </a>
        <span class="tooltip">Control Llantas</span>
      </li>
 <!--
    <li> 
      <a href="./movimientos/">
        <i class="fas fa-cash-register"></i>
        <span class="links_name">Movimientos</span>
      </a>
      <span class="tooltip">Movimientos</span>
    </li>
    <li>
      <a href="./inventario_matriz/">
        <i class="fas fa-warehouse"></i>
        <span class="links_name">Inventario Matriz</span>
      </a>
      <span class="tooltip">Inventario Matriz</span>
    </li>
    <li>
      <a href="./inventario_clientes/">
        <i class="fas fa-boxes"></i>
        <span class="links_name">Clientes Stock</span>
      </a>
      <span class="tooltip">Clientes Stock</span>
    </li>
    <li>
      <a href="./pagos/">
        <i class="far fa-file-pdf"></i>
        <span class="links_name">Reporte Pagos</span>
      </a>
      <span class="tooltip">Reporte Pagos</span>
    </li>
    -->
    <li onclick="ajustecuenta()">
      <a>
        <i class="fas fa-cogs"></i>
        <span class="links_name">Ajustes</span>
      </a>
      <span class="tooltip">Ajustes</span>
    </li>
    <li class="profile">
        <div class="profile-details">
          <img src="../../assets/icon/logo.png" alt="profileImg">
          <div class="name_job">
            <div class="name">Martin Monroy Perez</div>
            <div class="job">Web Developer</div>
          </div>
        </div>
          <a href="../salir.php"><i class="fas fa-sign-out-alt" id="log_out"></i></a>
    </li>
   </ul>
 </div>
 <section class="home-section">
    <br>
      
   
    

     <div class="container-fluid">
       <h1 style="text-align:center;">Tareas Activas</h1>
       <br>
         <div class="row">
                 <div class="col-lg-12">
                     <div class="table-responsive">

                         <div id="resultado"></div>
                     </div>
                 </div>
         </div>
     </div>

     </div>

 </section>
 <script>
 let sidebar = document.querySelector(".sidebar");
 let closeBtn = document.querySelector("#btn");
 let searchBtn = document.querySelector(".fa-search");

 closeBtn.addEventListener("click", ()=>{
   sidebar.classList.toggle("open");
   menuBtnChange();//calling the function(optional)
 });

 searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
   sidebar.classList.toggle("open");
   menuBtnChange(); //calling the function(optional)
 });

 // following are the code to change sidebar button(optional)
 function menuBtnChange() {
  if(sidebar.classList.contains("open")){
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
  }else {
    closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
  }
 }

 $(document).ready(function() {
     //mostrar datos
     function obtener_datos(){
       $.ajax({
        url: './php/ajax.php',
        methop: 'POST',
        success: function(response) {
             $('#resultado').html(response);
         }
        });
     }
    setInterval(obtener_datos,1000);


    //console.log(output);
 });


 function ajustecuenta(){
  Swal.fire("Esperalo muy pronto");
 }

 </script>
  </body>
</html>
