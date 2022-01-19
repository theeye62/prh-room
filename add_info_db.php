<?php 

    include('dbconfig.php');

    if (isset($_POST['add_info'])){
        $wa_no = mysqli_real_escape_string($conn, $_POST['wa_no']);
        $patient_name = mysqli_real_escape_string($conn, $_POST['patient_name']);
        $patient_age = mysqli_real_escape_string($conn, $_POST['patient_age']);
        $diagnosis = mysqli_real_escape_string($conn, $_POST['diagnosis']);
        $main_dis = mysqli_real_escape_string($conn, $_POST['main_dis']);
        $sneak = mysqli_real_escape_string($conn, $_POST['sneak']);
        $note = mysqli_real_escape_string($conn, $_POST['note']);

            $query = "INSERT INTO ward (wa_no, patient_name, patient_age, diagnosis, main_dis, sneak, note)
                           VALUES ('$wa_no', '$patient_name', '$patient_age', '$diagnosis', '$main_dis', '$sneak', '$note')";

                    $result = mysqli_query($conn, $query); //or die(mysqli_error($conn));

                    if($result) {
                        echo "<script type='text/javascript'>";
                        echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
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