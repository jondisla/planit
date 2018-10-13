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
    .content{
        margin-top:140px;
        height:100%;
    }
    .attach{
        display:none;
    }
    #didSubmit{
        margin-top:95px;
        margin-bottom:-120px;
    }
</style>



<div class="content">
    <div class="container">
        
        <div class="col-lg-12">
        <br>
            <center><h1>Would you like to...</h1></center>
            <hr>
            <a href= "attach_upload.php">
                <div class="card lesson side-menu-card lesson-button">
                    <!-- <img class="card-img-top" src="assets/img/apple.png" alt=""> -->
                    <center><i class="far fa-file-text" aria-hidden="true"></i></center>

                    <div class="card-body">
                        <h4 class="card-title side-menu-text">Add a worksheet</h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </a>
            <a href= "lesson_upload.php">
                <div class="card lesson side-menu-card lesson-button">
                    <!-- <img class="card-img-top" src="assets/img/apple.png" alt=""> -->
                    <center><i class="far fa-pencil-square-o" aria-hidden="true"></i></center>
                    <div class="card-body">
                        <h4 class="card-title side-menu-text">Create a Lesson</h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>


<?php include ("footer.php")?>

<script type="text/javascript">
    $('.attach-btn').click(() => {
        // $('.attach').toggle();
    console.log("");
});
</script>