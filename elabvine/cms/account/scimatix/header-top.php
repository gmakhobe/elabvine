
<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                <button class="search-trigger btn"><?php echo $company_name;?></button>
                
            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="images/profile.png" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="account.php"><i class="fa fa- user"></i>My Profile</a>

                    <a class="nav-link" href="business-settings.php"><i class="fa fa -cog"></i>Bisiness Settings</a>

                    <a class="nav-link" href="signout.php"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>

            <div class="language-select dropdown" id="language-select">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                   <i class="fa fa-language"></i> Eng
                </a>
                
            </div>

        </div>
    </div>

</header>
<!-- Header-->