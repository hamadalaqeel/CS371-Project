<script>$(document).ready(function () {
    

    $("#deleteNew").click(function () {
        
       <?php 
                include 'include/dbconfig.php';
                $id = $_GET['id'];
                    $idF=  filter_input(INPUT_GET,$id);
                 alert($id);

                $sql = "DELETE FROM news WHERE id='$idF'";

                $result = $conn->query($sql);

        ?>
                
    });
     
});</script>