<!-- Sticky navbar -->
 <div class="header sticky-top">
          <nav class="navbar navbar-expand-md navbar-light">
             <a href="index.php" class="navbar-brand">
                 <img src="img/logo.png" alt="logo"/>
             </a>
             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#my-navbar">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                 <ul class="navbar-nav">
                     <?php
                         //Check if user is loging or not
                         if (!isset($_SESSION['user_id'])) {
                     ?>
                         <li class="nav-item">
                             <a href="#" class="nav-link" data-toggle="modal" data-target="#signup-modal">
                                 <i class="fas fa-user"></i>Signup
                             </a>
                         </li>
                         <div class="nav-vl"></div>
                          <li class="nav-item">
                             <a href="#" class="nav-link" data-toggle="modal" data-target="#login-modal">
                                  <i class="fas fa-sign-in-alt"></i>Login
                             </a>
                          </li>
                     <?php
                         } else {
                     ?>      
                         <div class='nav-name'>
                             Hi,  <?php echo $_SESSION["full_name"] ?>
                         </div>
                         <li class="nav-item">
                             <a href="dashboard.php" class="nav-link">
                                 <i class="fas fa-user"></i>Dashboard
                             </a>
                         </li>
                         <div class="nav-vl"></div>
                         <li class="nav-item">
                             <a href="logout.php" class="nav-link">
                                 <i class="fas fa-sign-out-alt"></i>Logout
                             </a>
                         </li>
                     <?php
                         }
                     ?>
                 </ul>  
             </div>
         </nav>
     </div>
     <div id="loading">
     </div>