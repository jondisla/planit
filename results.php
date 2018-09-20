<?php
include ("functions.php");
?>
<?php include ("nav.php");?>
<?php include ("head.php");
?>

<style>
    body{
        height:100%;
    }

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
    .results{
        height:100%;
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
        <form>
        </div>
        </div>
        <div class = "results"><?php
            searchLesson();
            ?>
        </div>

<?php include ("footer.php")?>