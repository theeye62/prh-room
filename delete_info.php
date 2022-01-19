<?php

    include('dbconfig.php');

    if(isset($_GET['delete'])){
        $wa_id = mysqli_real_escape_string($conn, $_GET['delete']);

        $sql = "DELETE FROM ward WHERE wa_id = $wa_id";
        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "<script type='text/javascript'>";
            echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
            echo "window.location = 'dashboard.php';";
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('มีบางอย่างผิดพลาด');";
            echo "window.location = 'dashboard.php';";
            echo "</script>";
        }

        mysqli_close($conn);
    }


?>