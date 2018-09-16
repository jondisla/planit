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

    $connection = mysqli_connect('us-cdbr-iron-east-01.cleardb.net', 'b186ee9f845e68', '4b9feda0', 'heroku_5127e81f159d979');
    if(!$connection){
        die("DB connection failed");
    }

    $query = "INSERT INTO lessons(name, grade, subject, content_file, content_text, type)";
    $query .= "VALUES ('$name', $grade, '$subject', '$content_file', '$content_text', '$type')";
    
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

<script type="text/javascript">
    document.getElementById("attach-bth")
    });
</script>
   
   
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
            <br>
                <center><h1>Submit a Lesson Plan</h1></center>
                <hr>
            <form action = "body_upload.php" method = "POST">
                <div class="row">
                    <div class="form-group col-lg-12">
                    <label for="name">Lesson Name</label>
                    <input type="text" class="form-control" name="name" id="" aria-describedby="helpId">
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="">Grade</label>
                            <select class="form-control form-control-{3:sm|lg}" name="grade" id="">
                                <option><?php showGrades()?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="form-group">
                        <label for="">Subject</label>
                    <select class="form-control form-control-{12:lg}" name="subject" id="">
                        <option><?php showSubjects()?></option>
                    </select>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="form-group">
                        <label for="">Type</label>
                    <select class="form-control form-control-{12:lg}" name="type" id="">
                        <option><?php showTypes()?></option>
                    </select>
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
                <div class="row">
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-success attach-btn"><i class="far fa-folder-open" style="font-size:20px;">Add Attachment</i></button>
                        <div class="attach">
                            <input type="file" name="content_file"  size = "80" accept=".docx,.pdf,.doc,.txt,.rtf,.odt,.pptx,.ppt">
                            <p class=" card small-text" style="background:#DFF3FC;">Only: docx, pdf, doc, txt, rtf, odt, pptx, ppt</p>
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-1">
                        <input type="submit" class="btn btn-success" value = "SUBMIT" name="submit_plan">
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