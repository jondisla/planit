<?include "head.php" ?>

<nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color: #e3f2fd;border-bottom:1px solid #cecece;">

    <a class="navbar-brand" href="index.php"><img id="logo" src="assets/img/teachlogo.png"></a>

    <button class="navbar-toggler hidden-lg-up" id="menuButton" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>

    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <li class="nav-item active">
                <a class="nav-link" href="body_find.php">Find</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="body_upload.php">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>

            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alerts</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">New lesson 1...</a>
                </div>
            </li> -->

        </ul>

        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
</nav>
