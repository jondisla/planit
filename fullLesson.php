
<?php include ("head.php");?>
<?php
include ("functions.php");
?>
<?php include ("nav.php");

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
<div class="content">
<div class="row">
    <div class="col-lg-12">
        <center><h2>Latest Submissions</h2></center>
        <?php showOneLesson() ?>
    </div>
</div>
</div>
</div>
</div>

<?php include ("footer.php")?>