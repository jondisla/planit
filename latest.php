<?php
include ("functions.php");
?>
<?php include ("nav.php");?>
<?php include ("head.php");


?>

<style>
    .findLesson{
        margin-top:80px;
        background: #E1F3FC;
    }

    h2{
        font-size:20px;
    }

</style>
    <!--SIDE MENU -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href= "body_find.php">
                    <div class="card lesson side-menu-card lesson-button">
                        <!-- <img class="card-img-top" src="assets/img/apple.png" alt=""> -->
                        <i class="far fa-map side-menu-icons"></i>
                        <div class="card-body">
                            <h4 class="card-title side-menu-text">Find a Lesson</h4>
                            <p class="card-text"></p>
                        </div>
                    </div>
                    </a>
                    <div class="card lesson side-menu-card">
                        <!-- <img class="card-img-top" src="assets/img/apple.png" alt=""> -->
                        <i class="fas fa-chalkboard-teacher side-menu-icons"></i>
                        <div class="card-body">
                            <h4 class="card-title side-menu-text">The Community</h4>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" >
                <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <center><h1>Latest Lessons</h1></center>
                <?php showLatestLessons();?>
            </div>
        </div>
    </div>
</div>
</div>

