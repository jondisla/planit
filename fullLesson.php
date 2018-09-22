<?php
include ("functions.php");
?>
<?php include ("nav.php");
    include ("head.php");

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
            margin-top:80px;
            /* height:700px; */
        }
        @media print {
        body .card-body a {
          display:none;
        }
        body .card-body{
            border-radius:0px;
        }

        body .card-body {
          display:block;
        }
      }

</style>
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