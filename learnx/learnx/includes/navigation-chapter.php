<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../index.php" class="navbar-brand active"><?php echo $app_name;?></a>
        </div>
        <div class="navbar-collapse collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../">Home</a></li>
                <li><a href="../../../logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php include("space.php"); ?>