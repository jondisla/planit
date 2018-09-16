<?php
include ("functions.php");
?>
<?php include ("head.php") ?>
<?php include ("nav.php") ?>
    
<style>
        a,
        a:hover{
            text-decoration:none;
            color:#363A3E;
        }
    </style>

    <!-- carousel -->
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="assets/img/planning.png" alt="First slide" class="img-responsive">
                <div class="carousel-caption">
                    <h1>Welcome</h1>
                    <p class="lead">  This is an effort led by a principal who loves to share her many years of lesson planning.  By making the lesson planning easier you can spend time on the most important aspects of your lesson.  Browse the vast content made available by a community of teachers and other professionals.  </p>
                    <!-- <a class="btn btn-success" href="#">Learn more</a> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/plantogether.jpg" alt="Second slide" class="img-responsive">
                <div class="carousel-caption">
                    <h1>Work Together</h1>
                    <p class="lead">On PlanIt<span style="font-size:15px;">&copy;</span> you will find some great resrouces for lesson plans.There is also a community of countless teachers who collaborate to bring their creativeness to other class rooms.  Collaborate with other teachers by susbmitting your own lesson plan and allowing others to add their input.</p>
                    <!-- <a class="btn btn-success" href="#">Collaborate</a> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/teachmarker.jpg" alt="Third slide" class="img-responsive">
                <div class="carousel-caption">
                    <h1>Connect Across the World</h1>
                    <p class="lead">Connect with other teachers on the forums</p>
                    <!-- <a class="btn btn-success" href="#">Enter Forum</a> -->
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <!--SIDE MENU -->
    <div class="content" style="margin-bottom:30px;">
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
                    <a href ="body_upload.php">
                    <div class="card lesson side-menu-card own-button">
                        <!-- <img class="card-img-top" src="assets/img/apple.png" alt=""> -->
                        <i class="fas fa-edit side-menu-icons"></i>
                        <div class="card-body">
                            <h4 class="card-title side-menu-text">Submit Your Own</h4>
                            <p class="card-text"></p>
                        </div>
                    </div>
                    </a>
                    <a href="forum.php">
                    <div class="card lesson side-menu-card">
                        <i class="fas fa-chalkboard-teacher side-menu-icons"></i>
                        <div class="card-body">
                            <h4 class="card-title side-menu-text">The Community</h4>
                            <p class="card-text"></p>
                        </div>
                    </div>
                    </a>
                </div>
                    <div class="col-lg-8" >
                    <div class="blogpost">
                    <div class="card-body">
                        <blockquote class="blockquote"><h3>Welcome</h3>
                    </blockquote>
                    <!-- <div class="row">
                        <div class="col-lg-8"> -->
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique est consectetur, suscipit illum veritatis eos molestias ut ad esse harum nobis quibusdam, repellendus incidunt fugit sit totam sunt temporibus eum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit eum nisi exercitationem commodi mollitia possimus beatae atque tempore modi excepturi dolore, ullam officia ipsam laboriosam velit repudiandae consequatur perspiciatis sapiente.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique est consectetur, suscipit illum veritatis eos molestias ut ad esse harum nobis quibusdam, repellendus incidunt fugit sit totam sunt temporibus eum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit eum nisi exercitationem commodi mollitia possimus beatae atque tempore modi excepturi dolore, ullam officia ipsam laboriosam velit repudiandae consequatur perspiciatis sapiente.</p>
                            <br>
                            Mrs. Daniela
                            <br>
                            Principal
                        </div>
                        <!-- <div class="col-lg-4">
                            <img id = "danipic" src="assets/img/daniela.jpg">
                            <br>
                            Mrs. Daniela
                            <br>
                            Principal
                        </div> -->
                    </div></div></div><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ("footer.php")?>
    