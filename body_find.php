<?php
include ("functions.php");
?>
<?php include ("nav.php");?>
<?php include ("head.php");

// function showLessons() {
//     global $connection;
//     $query = "SELECT * FROM lessons";
//     $result = mysqli_query($connection, $query);

//     if(!$result){
//         die("Submission failed". mysqli_error());
//     }

//     while($row = mysqli_fetch_assoc($result)){
//         $name = $row['name'];
//         $grade = $row['grade'];
//         $subject = $row['subject'];
//         $author = $row['author'];
//         $content = $row['content'];
//         $type = $row['type'];

//         echo '<div class="card blogpost">
//         <div class="card-body">
//             <blockquote class="blockquote"><h3>'.$title.'</h3><p>'.$blog.'</p>
//         <footer class="card-blockquote"><cite title="Source title">'. $author .'</cite> '.$AddedOnDate.'</footer>
//         </blockquote>
//         <a name="" id="" class="btn btn-success" href="#" role="button">Read More</a></div></div><br>';
//     }


// }

if(isset($_POST['find_lesson'])){

    $subject = ($_POST['subject']);
    $grade = ($_POST['grade']);
    $type = ($_POST['type']);


    // $query = "INSERT INTO lessons(name, grade, subject, content_file, content_text, type)";
    // $query .= "VALUES ('$name', $grade, '$subject', '$content_file', '$content_text', '$type')";
    
    $result = mysqli_query($connection, $query);
        if(!$result){
            die('Query Failed' . mysqli_error());
        }else{
            echo "Lesson created successfully";
        }
}
?>

<style>
    .findLesson{
        margin-top:80px;
        background: #E1F3FC;
    }

    h1, h2{
        font-size:20px;
    }

</style>

<div class="findLesson">
        <div class="container">
        <div class="row">
    <div class="col-lg-12">
        <br>
        <form method = "POST" action = "" >
        <div class="row">
            <div class="form-group col-lg-5">
                <label for="subject">Subject</label>
                <select class="form-control" name="name" id="" size="6" required>
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
        <input type="submit" class="btn btn-success" value ="Search" name = "find_lesson">
        </div>
    </div>
<form>
</div>
<div class="row">
    <div class="col-lg-12">
        <center><h2>Latest Submissions</h2></center>
        <?php showLessons() ?>
    </div>
</div>
</div>
</div>
</div>

<?php include ("footer.php")?>