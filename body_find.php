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
    .findLesson{
        margin-top:80px;
        background: #E1F3FC;
    }

    h2{
        font-size:20px;
    }
    #loading{
        height:100%;
        display:none;
    }

</style>

<div class="findLesson">
        <div class="container">
        <div class="row">
    <div class="col-lg-12">
        <br>
        <form method = "POST" action = "results.php" id="form">
        <div class="row">
            <div class="form-group col-lg-5">
                <label for="subject">Subject</label>
                <select class="form-control" name="subject" id="" size="6" required>
                <?php showSubjects(); ?>
                </select>
            </div>
            <div class="form-group col-lg-2">
                <label for="grade">Grade</label>
                <select class="form-control" name="grade" id="" style="width:80px;" required>
                <option><?php showGrades()?></option>
                </select>
            </div>
            <div class="form-group col-lg-5">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="" size="6" required>
                <option><?php showTypes()?></option>
                </select>
            </div>
            </div>
            <br>
            <input type="submit" class="btn btn-success" value ="Search" name = "find_lesson_btn">
            </div>
        </div>
        </form>
        </div>
        <div class="row" id = "latestSubs">
            <div class="col-lg-12">
                <center><h2>Latest Submissions</h2></center>
                <?php showLatestLessons();?>
            </div>
        </div>
    </div>
</div>
</div>

<h1 id = "loading"><center>Searching<br><i class="fa fa-circle-o-notch fa-spin"></i></center></h1>


<?php include ("footer.php")?>

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