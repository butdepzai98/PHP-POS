<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <span class="nav-link">
            <img src="views/assets/images/user-nav.jpg" alt="image"/>
            <span class="nav-profile-text">Xuân Vinh</span>
            <span class="badge badge-pill badge-gradient-danger">1</span>
            </span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">
            <i class="mdi mdi-home-outline menu-icon"></i>              
            <span class="menu-title">Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="mdi mdi-apps menu-icon"></i>              
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link active" href="index.php?control=users">List</a></li>
                <li class="nav-item"> <a class="nav-link active" href="index.php?control=users&action=create">Create User</a></li>
            </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="mdi mdi-apps menu-icon"></i>              
              <span class="menu-title">Categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link active" href="index.php?control=categories">List</a></li>
                <li class="nav-item"> <a class="nav-link active" href="index.php?control=categories&action=create">Create Category</a></li>
            </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="page-layouts">
            <i class="mdi mdi-apps menu-icon"></i>              
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts" style="">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link active" href="index.php?control=products">List</a></li>
                <li class="nav-item"> <a class="nav-link active" href="index.php?control=products&action=create">Create Products</a></li>                
            </ul>
            </div>
        </li>
        
    </ul>
</nav>