<?php include '../view/employeeHeader.php' ?>

<div class="container-fluid">
   <div class="row">
     <nav class="col-md-2 d-none d-md-block bg-light sidebar">
       <div class="sidebar-sticky">
         <ul class="nav flex-column">
           <li class="nav-item">
             <a class="nav-link" href="<?php echo $base_path ?>/employee/index.php">
               <span data-feather="home"></span>
               Dashboard <span class="sr-only">(current)</span>
             </a>
           </li>
           <!-- <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="file"></span>
               Orders
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="shopping-cart"></span>
               Products
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="users"></span>
               Customers
             </a>
           </li> -->
           <li class="nav-item">
             <a class="nav-link active" href="<?php echo $base_path ?>/employee/index.php?reports">
               <span data-feather="bar-chart-2"></span>
               Reports
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo $base_path ?>/employee/index.php?downloads">
               <span data-feather="layers"></span>
               Integrations
             </a>
           </li>
         </ul>

         <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
           <span>Saved reports</span>
           <a class="d-flex align-items-center text-muted" href="#">
             <span data-feather="plus-circle"></span>
           </a>
         </h6>
         <ul class="nav flex-column mb-2">
           <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="file-text"></span>
               Current month
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="file-text"></span>
               Last quarter
             </a>
           </li>
           <!-- <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="file-text"></span>
               Social engagement
             </a>
           </li> -->
           <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="file-text"></span>
               Year-end sale
             </a>
           </li>
         </ul>
       </div>
     </nav>

     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
         <h1 class="h2">Reports</h1>
         <div class="btn-toolbar mb-2 mb-md-0">
           <div class="btn-group mr-2">
             <button class="btn btn-sm btn-outline-secondary">Share</button>
             <button class="btn btn-sm btn-outline-secondary">Export</button>
           </div>
           <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
             <span data-feather="calendar"></span>
             This week
           </button>
         </div>
       </div>
       <div class="container">
         <div class="row mb-3">
           <div class="col-lg-6">
             <canvas id="myChart1" width="300" height="200"></canvas>
           </div>
           <div class="col-lg-6">
             <canvas id="myChart2" width="300" height="200"></canvas>
           </div>
         </div>
         <div class="row mb-3">
           <div class="col-lg-6">
             <canvas id="myChart4" width="300" height="200"></canvas>
           </div>
           <div class="col-lg-6">
             <canvas id="myChart5" width="300" height="200"></canvas>
           </div>
         </div>
         <div class="row mb-3">
           <div class="col-lg-6">
             <canvas id="myChart7" width="300" height="200"></canvas>
           </div>
           <div class="col-lg-6">
             <canvas id="myChart3" width="300" height="200"></canvas>
           </div>
         </div>
         <div class="row mb-3">
           <div class="col-lg-12">
             <canvas id="myChart8" width="300" height="200"></canvas>
           </div>
         </div>
</div>

       <!-- <canvas class="my-4" id="donutOne" width="900" height="380"></canvas>
       <br>
       <canvas class="my-4" id="donutTwo" width="900" height="380"></canvas> -->
     </main>
   </div>
 </div>


<?php include '../view/charts.php' ?>
<?php include '../view/employeeFooter.php' ?>
