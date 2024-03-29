<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
       <h1 class="text-center   shusha" style="font-size: 2rem;color:#f5ce36;">Wa Wa Hotpot</h1>
      
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">

                <img alt="Image placeholder" src="<?php echo e(asset('template/assets/img/theme/team-1-800x800.jpg')); ?>

">
              </span>
            </div>
          </a>
          <!-- <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div> -->
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
               <h1 class="text-center   shusha" style="font-size: 2rem;color:#f5ce36;">Wa Wa Hotpot</h1>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <!-- <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form> -->
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('admin.dashboard')); ?>">
              
                       <img src="<?php echo e(asset('template/assets/img/hotpot/da.png')); ?>" class="ni img-fluid" >
                     <span class="d-inline-block ml-4">Dashboard</span> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('curry.index')); ?>">
              
                       <img src="<?php echo e(asset('template/assets/img/hotpot/po.png')); ?>" class="ni img-fluid" >
                     <span class="d-inline-block ml-4">Curry</span> 
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('meat.index')); ?>">
              <img src="<?php echo e(asset('template/assets/img/hotpot/me.png')); ?>" class="ni img-fluid">
                     <span class="d-inline-block ml-4">Meat</span> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('seafood.index')); ?>">
              <img src="<?php echo e(asset('template/assets/img/hotpot/se.png')); ?>" class="ni img-fluid" height="15" width="15">
                     <span class="d-inline-block ml-4">Seafood</span> 
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('vegetable.index')); ?>">
              <img src="<?php echo e(asset('template/assets/img/hotpot/veg.png')); ?>" class="ni img-fluid" >
                     <span class="d-inline-block ml-4">Vegetable</span> 
            </a>
          </li>
         
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Setting</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="./examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="ni ni-curved-next"></i> Log out
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
          </li>
          
        </ul>
      </div>
    </div>
  </nav><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/prj/wawahotpot/resources/views/backend/backend-nav-side.blade.php ENDPATH**/ ?>