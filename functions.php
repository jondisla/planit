<?php include "db.php";


function showSubjects(){
    global $connection;
    $query = "SELECT * FROM subjects";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Submission failed". mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        echo "<option value = $name>$name</option>";
    }
}

function showGrades() {
    global $connection;
    $query = "SELECT * FROM grades";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Submission failed". mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        $grade = $row['grade'];
        echo "<option value = $grade>$grade</option>";
    }
}

function showTypes() {
    global $connection;
    $query = "SELECT * FROM types";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Submission failed". mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        $type = $row['type'];
        echo "<option value = $type>$type</option>";
    }
}

function showBlogs(){
    global $connection;
    $query = "SELECT * FROM blog ORDER BY ID DESC LIMIT 3";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Submission failed". mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        $title = $row['title'];
        $blog = $row['blog'];
        $author = $row['author'];
        $AddedOnDate = $row['AddedOnDate'];

        echo '<div class="card blogpost">
        <div class="card-body">
            <blockquote class="blockquote"><h3>'.$title.'</h3><p>'.$blog.'</p>
        <footer class="card-blockquote"><cite title="Source title"> '.$AddedOnDate.'</footer>
        </blockquote>
        <a name="" id="" class="btn btn-success" href="#" role="button">Read More</a></div></div><br>';
    }
}

function showLatestLessons(){
    global $connection;
    $query = "SELECT * FROM lessons ORDER BY ID DESC LIMIT 4";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Submission failed". mysqli_error()); 
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $grade = $row['grade'];
        $subject = $row['subject'];
        $content_text = $row['content_text'];
        $content_file = $row['content_file'];
        $type = $row['type'];
        $duration = $row['duration'];

        //shorten the paragraph
        $position=250; // Define how many character you want to display.
        $message=$content_text; 
        $postShort = substr($message, 0, $position);
        
        echo '<div class="container card blogpost">
        <div class="card-body">
            <blockquote class="blockquote"><h3>'.$name.'<span style="float:right;font-size:15px;">'.$duration.' mins</span></h3><p class = "shortParagraph">'.$postShort.'...</p>
        <footer class="card-blockquote"><cite title="Source title"> '.$type.' for '.$subject.' '.$grade.' grade</footer>
        </blockquote>
        <a class="btn btn-success" href="fullLesson.php/?id='.$id.'" role="button">Read More</a></div></div><br>';
    }
}
// '. $author .'</cite>



function searchLesson(){
    global $connection;
    $subject = ($_POST['subject']);
    $grade = ($_POST['grade']);
    $type = ($_POST['type']);
    
    
    $query = "SELECT * FROM lessons WHERE subject='$subject' and grade='$grade' and type='$type'";

    $result = mysqli_query($connection, $query);
        if(!$result){
            die('Query Failed' . mysqli_error());
        }else{
            echo "";
        }
    $num_rows = mysqli_num_rows($result);
        echo '<center>' . $num_rows . ' Result(s) found</center>';
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $grade = $row['grade'];
            $subject = $row['subject'];
            $content_text = $row['content_text'];
            $content_file = $row['content_file'];
            $duration = $row['duration'];
            
            //shorten the paragraph
        $position=250; // Define how many character you want to display.
        $message=$content_text; 
        $postShort = substr($message, 0, $position);

            echo '<div class="container card blogpost">
        <div class="card-body">
            <blockquote class="blockquote"><h3>'.$name.'<span style="float:right;font-size:15px;">'.$duration.' mins</span></h3><p class = "shortParagraph">'.$postShort.'...</p>
        <footer class="card-blockquote"><cite title="Source title"> '.$type.' for '.$subject.' '.$grade.' grade</footer>
        </blockquote>
        <a name="" id="" class="btn btn-success" href="fullLesson.php/?id='.$id.'" role="button">Read More</a></div></div><br>';
        }
    }

function showOneLesson(){
    global $connection;
    $id = $_GET['id'];
    $query = "SELECT * FROM lessons WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Submission failed". mysqli_error()); 
    }
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $grade = $row['grade'];
        $subject = $row['subject'];
        $content_text = $row['content_text'];
        $content_file = $row['content_file'];
        $type = $row['type'];
        $duration = $row['duration'];

        echo '<div class="container card blogpost" id="div3">
        <div class="card-body" style = " margin-bottom:12%;">
            <blockquote class="blockquote"><h3>'.$name.'<span style="float:right;font-size:15px;">'.$duration.' mins</span></h3><p class = "shortParagraph">'.$content_text.'</p>
        <footer class="card-blockquote"><cite title="Source title"> '.$type.' for '.$subject.' '.$grade.' grade</footer>
        </blockquote>
        <a name=""  onclick="divPrint();" class="btn btn-success" href="" role="button">Print</a></div></div><br>';
    }
}

function delete() {
    global $connection;

    $subject = ($_POST['subject']);
    $grade = ($_POST['grade']);
    $type = ($_POST['type']);
    
    $query = "SELECT * FROM lessons WHERE subject='$subject' and grade='$grade' and type='$type'";

    $result = mysqli_query($connection, $query);
        if(!$result){
            die('Query Failed' . mysqli_error());
        }else{
            echo "";
        }
}

?>