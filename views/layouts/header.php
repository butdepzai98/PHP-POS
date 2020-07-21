
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="h3 text-white" style="text-decoration:none; margin-bottom:0" href="/">Home</a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
    </button>
    <span class="d-none d-md-inline">Admin Dashboard</span>
    <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile">
        <a class="nav-link">
            <div class="nav-profile-text">
            <p class="mb-0">Xuân Vinh</p>
            </div>
            <div class="nav-profile-img">
            <img src="views/assets/images/user-nav.jpg" alt="image">
            </div>
        </a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-message-text-outline"></i>
            <span class="count-symbol"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <h6 class="p-3 mb-0">Messages</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="views/assets/images/faces/face4.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                <p class="text-gray mb-0">
                1 Minutes ago
                </p>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="views/assets/images/faces/face2.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                <p class="text-gray mb-0">
                15 Minutes ago
                </p>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="views/assets/images/faces/face3.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                <p class="text-gray mb-0">
                18 Minutes ago
                </p>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="p-3 mb-0 text-center">4 new messages</h6>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline"></i>
            <span class="count-symbol bg-info"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <h6 class="p-3 mb-0">Notifications</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                <i class="mdi mdi-calendar"></i>
                </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                <p class="text-gray ellipsis mb-0">
                Just a reminder that you have an event today
                </p>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                <i class="mdi mdi-settings"></i>
                </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                <p class="text-gray ellipsis mb-0">
                Update dashboard
                </p>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                <i class="mdi mdi-link-variant"></i>
                </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                <p class="text-gray ellipsis mb-0">
                New admin wow!
                </p>
            </div>
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
        </div>
        </li>
        <li class="nav-item nav-logout d-none d-lg-block">
        <a class="nav-link" href="index.php?control=logout">
            Logout
            <i class="mdi mdi-power"></i>
        </a>
        </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
    </button>
    </div>
</nav>