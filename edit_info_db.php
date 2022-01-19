<?php

    include('dbconfig.php');

    if(isset($_POST['update'])){
        $wa_id = mysqli_real_escape_string($conn, $_POST['wa_id']);
        $wa_no = mysqli_real_escape_string($conn, $_POST['wa_no']);
        $patient_name = mysqli_real_escape_string($conn, $_POST['patient_name']);
        $patient_age = mysqli_real_escape_string($conn, $_POST['patient_age']);
        $diagnosis = mysqli_real_escape_string($conn, $_POST['diagnosis']);
        $main_dis = mysqli_real_escape_string($conn, $_POST['main_dis']);
        $sneak = mysqli_real_escape_string($conn, $_POST['sneak']);
        $note = mysqli_real_escape_string($conn, $_POST['note']);

        $sql = "UPDATE ward SET wa_no = '$wa_no', patient_name = '$patient_name', patient_age = '$patient_age', diagnosis = '$diagnosis', 
                main_dis = '$main_dis', sneak = '$sneak', note = '$note' WHERE wa_id = $wa_id";

        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "<script type='text/javascript'>";
            echo "alert('แก้ไขข้อมูลเรียบร้อยแล้ว');";
            echo "window.location = 'dashboard.php';";
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('มีบางอย่างผิดพลาด กรุณาตรวจสอบและกรอกข้อมูลให้ครบถ้วน');";
            echo "window.location = 'dashboard.php';";
            echo "</script>";
        }

        mysqli_close($conn);
    }



?>