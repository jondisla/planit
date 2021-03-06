<?php
include ("functions.php");
?>
<?php include ("head.php") ?>
<?php include ("nav.php") ?>
<?php 
if(isset($_POST['submit_plan'])){
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $grade = mysqli_real_escape_string($connection, $_POST['grade']);
    $subject = mysqli_real_escape_string($connection, $_POST['subject']);
    $content_file = mysqli_real_escape_string($connection, $_POST['content_file']);
    $content_text = mysqli_real_escape_string($connection, $_POST['content_text']);
    $type = mysqli_real_escape_string($connection, $_POST['type']);
    $duration = mysqli_real_escape_string($connection, $_POST['duration']);
    $connection = mysqli_connect('us-cdbr-iron-east-01.cleardb.net', 'b186ee9f845e68', '4b9feda0', 'heroku_5127e81f159d979');
    if(!$connection){
        die("DB connection failed");
    }
    $query = "INSERT INTO lessons(name, grade, subject, content_file, content_text, type, duration)";
    $query .= "VALUES ('$name', $grade, '$subject', '$content_file', '$content_text', '$type', '$duration')";
    
    $result = mysqli_query($connection, $query);
        if(!$result){
            echo '<center><p class = "bg-warning" id="didSubmit">Lesson not submitted</p></center>';
        }else{
            echo '<center><p class = "bg-success" id="didSubmit">Lesson created successfully <a style="color:blue;" href="body_find.php">See the latest<a></p></center>';
        }
}
?>
    <style>
        a,
        a:hover{
            text-decoration:none;
            color:#363A3E;
        }
        .content{
            margin-top:140px;
            /* height:700px; */
        }
        .attach{
            display:none;
        }
        #didSubmit{
            margin-top:95px;
            margin-bottom:-120px;
        }
    </style>


    <!--SIDE MENU -->
    <div class="content">
        <div class="container">
           
            <div class="col-lg-12">
            <br>
                <center><h1>Create a Lesson</h1></center>
                <hr>
            <form action = "body_upload.php" method = "POST">
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label for="name">Lesson Name</label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" required>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="">Grade</label>
                            <select class="form-control form-control-{3:sm|lg}" name="grade" id="" required>
                            <option><?php showGrades()?></option>
                            </select>
                        </div>
                    </div>
                    <div class=" col-lg-1"></div>
                    <div class="form-group col-sm-12 col-lg-3">
                        <label for="">Subject</label>
                    <select class="form-control form-control-{12:lg}" name="subject" id="" required>
                        <option><?php showSubjects()?></option>
                    </select>
                    </div>
                    <div class=" col-lg-1"></div>
                    <div class="form-group col-sm-12 col-lg-2">
                        <label for="">Type</label>
                    <select class="form-control form-control-{12:lg}" name="type" id="" required>
                        <option><?php showTypes()?></option>
                    </select>
                    </div>
                    <div class=" col-lg-1"></div>
                    <div class="form-group col-sm-12 col-lg-2">
                        <label for="">Duration</label>
                    <input type="text" class="form-control form-control-{12:lg}" name="duration" id="" placeholder="In minutes" required>
                    </div>
                </div>
                <br>
                <br>
            
                <!-- <div class= "paste-form"> -->
                <div class="form-group">
                    <label for="paste-submission"></label>
                    <textarea class="form-control" name="content_text" id="" rows="10" cols="100" placeholder="Paste a Submission"></textarea>
                    <script>
                        CKEDITOR.replace( 'content_text' );
                    </script>
                <div>
                    <center><input type="submit" class="btn btn-success" value = "SUBMIT" name="submit_plan"></center>
                    </div>
                </div>
            </div>
        </div>
    <form>
    </div>
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