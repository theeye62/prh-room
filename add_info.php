<?php

    session_start();
    include('dbconfig.php');

    if ($_SESSION['user_id']=="") {
        header("Location: index.php");
        exit();
    }

    if ($_SESSION['userlevel'] !="1") {
        echo "This page for admin only!!";
        exit();
    }

    $sql = "SELECT * FROM user WHERE user_id = '".$_SESSION['user_id']."' ";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Page</title>
</head>
<body>

    <header>
        <h1>Welcome "<?php echo $result['username'] ?>"</h1>
    </header>

    <section>
        <?php include('layouts/sidebar.php'); ?>

        <div class="add_info">
            <h1>ฟอร์มเพิ่มข้อมูล</h1>
            <form action="add_info_db.php" method="post" class="addinfo">
                <input type="text" name="wa_no" placeholder="หมายเลขห้อง" required>
                <br>
                <input type="text" name="patient_name" placeholder="ชื่อ-นามสกุลผู้ป่วย" required>
                <br>
                <input type="text" name="patient_age" placeholder="อายุ" required>
                <br>
                <input type="text" name="diagnosis" placeholder="ระบุอาการ" required>
                <br>
                <input type="text" name="main_dis" placeholder="อาหารหลัก" required>
                <br>
                <input type="text" name="sneak" placeholder="อาหารว่าง" required>
                <br>
                <textarea name="note" placeholder="หมายเหตุ"></textarea>
                <br>
                <input type="submit" name="add_info"> 
            </form>
        </div>

    </section>

    <?php include('layouts/footer.php'); ?>


</body>
</html>