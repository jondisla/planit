<?php
include ("functions.php");
?>
<?php include ("head.php");
    

?>

<style>
    .findLesson{
        margin-top:80px;
        background: #E1F3FC;
    }
    #logo {
    width: 70px;
}

    h1, h2{
        font-size:20px;
    }
    .content{
            margin-top:130px;
            /* height:700px; */
        }
        @media print {
        body .card-body a {
          display:none;
        }
        body .card-body{
            border-radius:0px;
          display:block;
         
        }
      }

</style>
<nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color: #e3f2fd;border-bottom:1px solid #cecece;">

    <a class="navbar-brand" href="../index.php"><img id="logo" src="../assets/img/teachlogo.png"></a>

    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>

    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <li class="nav-item active">
                <a class="nav-link" href="../body_find.php">Find</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../body_upload.php">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../contact.php">Contact</a>
            </li>

            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alerts</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">New lesson 1...</a>
                </div>
            </li> -->
        </ul>
    </div>
</nav>

<div class="content">
        <?php showOneLesson() ?>
    </div>
</div>
</div>
</div>
</div>
<?php include ("footer.php")?>

<script>
function divPrint() {
        // Some logic determines which div should be printed...
        // This example uses div3.
        $("#div3").addClass("printable");
        window.print();
      }
</script>