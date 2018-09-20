

<?php
include ("functions.php");
?>
<?php include ("nav.php");
    include ("body_find.php");
?>

<style>
    .findLesson{
        margin-top:80px;
        background: #E1F3FC;
    }

    h1, h2{
        font-size:20px;
    }

    .content{
            margin-top:540px;
            /* height:700px; */
        }

</style>
<div class="content">
<div class="row">
    <div class="col-lg-12">
        <center><h2>Latest Submissions</h2></center>
        <?php searchLesson() ?>
    </div>
</div>
</div>
</div>
</div>

<?php include ("footer.php")?>