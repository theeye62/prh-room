<?php

    session_start();

    include('dbconfig.php');

    if (isset($_POST['user_login'])) {
        $user_name_id = mysqli_real_escape_string($conn, $_POST['user_name_id']);
        $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
        $query = "SELECT * FROM user WHERE user_name_id = '$user_name_id' AND user_password = '$user_password' ";
        $result = mysqli_query($conn, $query);
        $fetch_result = mysqli_fetch_assoc($result);

        if($fetch_result) {
            $_SESSION['user_id'] = $fetch_result['user_id'];
            $_SESSION['userlevel'] = $fetch_result['userlevel'];
            if($fetch_result['userlevel'] == "1") {
                header("Location: dashboard.php");
            }else{
                header("Location: index.php");
            }
        }else{
            header("Location: index.php");
        }

        mysqli_close($conn);
    }


?>