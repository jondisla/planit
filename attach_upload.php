<?php
include ("functions.php");
?>
<?php include ("head.php") ?>
<?php include ("nav.php") ?>
<?php 
if(isset($_POST['submit_worksheet'])){
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
        height:100%;
    }
    #didSubmit{
        margin-top:95px;
        margin-bottom:-120px;
    }

    .attach{
        /* background:red;
        width:30%; */
    }
    @media only screen and (max-width: 700px) {
    #stickyFooter{
        position:relative;
        bottom:0;
        background:#E33B37;
    }
}
</style>

<div class="content">
    <div class="container">
        
        <div class="col-lg-12">
            <br>
            <center><h1>Attach your Worksheet</h1></center>
            <hr>
            <form action = "attach_upload.php" method = "POST">
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
                <div class="row">
                <div class="attach">
                    <input type="file" name="content_file"  size = "80" accept=".docx,.pdf,.doc,.txt,.rtf,.odt,.pptx,.ppt" style="width:300px">
                    <p class="card small-text" style="background:#DFF3FC;">Only: docx, pdf, doc, txt, rtf, odt, pptx, ppt</p>
                </div>
            </div>
            <center><input type="submit" class="btn btn-success" value = "SUBMIT" name="submit_worksheet"></center>
            <form>              
        </div>
    </div>
</div>

<?php //include ("footer.php")?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src = "assets/js/main.js"></script>
  </body>

<script type="text/javascript">
    $('.attach-btn').click(() => {
        // $('.attach').toggle();
    console.log("");
});
</script>