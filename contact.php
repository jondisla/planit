<?php
include ("functions.php");
?>
<?php include ("nav.php");?>
<?php include ("head.php");

if(isset($_POST['delete'])){

    delete();
}
if(isset($_POST['find_lesson_btn'])){

    $subject = ($_POST['subject']);
    $grade = ($_POST['grade']);
    $type = ($_POST['type']);
}
?>

<style>
    body, html{
        overflow-x: hidden; 
    overflow-y: auto;
        background: #E1F2FE;
    }
    .card-body{
        background: #fdff9b;
        height:330px;
    }

    .btn{
        background:#55B134;
        color: white;
    }

    .contactHead{
        background: #dfe08d;
    }
    .contactHead h3, i, p{
        color:black;
    }
    .content{
        margin-top:100px;    
    }
    
    i{
        color: grey;
    }
    .submitbutton{

        width:30%; 
    }
    

</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="content">
<div class="container">
    <h2 class="text-center"></h2>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="mail.php" method="post">
                        <div class="card  rounded-0">
                            <div class="card-header p-0">
                                <div class="contactHead text-white text-center py-2">
                                    <h3><i class="fa fa-envelope " ></i> Contact Us</h3>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user "></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope "></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="example@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment "></i></div>
                                        </div>
                                        <textarea rows="5" class="form-control" placeholder="Your message" required></textarea>
                                    </div>
                                <center><div class="text-center submitbutton">
                                    <input type="submit" value="Send" class="btn  btn-block rounded-0 py-3">
                                    </div></center>
</div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
    </div>
</div>
<div style="position:fixed;bottom:0;width:100%;">
<?php include ("footer.php")?>
</div>
<script>
$(document).ready(function () {
    console.log("ready!");

    $('#form').click(() => {
        $('#latestSubs').hide();
        $('#loading').show();
    })

    $('#loading, #latestSubs').click(() => {
        $('#latestSubs').show();
        $('#loading').hide();
    })
});

</script>
