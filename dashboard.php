<?php
    $userlevel = '1';
    session_start();
    include('dbconfig.php');

   /* if ($_SESSION['admin_id']=="") {
        header("Location: index.php");
        exit();
    }

    if ($_SESSION['status'] !="admin") {
        echo "This page for admin only!!";
        exit();
    }
    */
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

        <div class="info">
            <a href="add_info.php" style="padding: .5rem; background: green; display: inline-block;
                color: #fff; text-decoration: none;">เพิ่มข้อมูล</a>
                <?php
                     if ($_SESSION['user_id'] == $userlevel) {
                        $userlevel_check = $userlevel;
                        
                    }
                    $query = "SELECT * FROM ward where wa_no IN ('WA401', '402') order by time_stamp desc";
                    $result = mysqli_query($conn, $query);

                ?>
            <table>
                <tr>
                    <td>หมาเลขห้อง</td>
                    <td>ชื่อ-นามสกุลผู้ป่วย</td>
                    <td>อายุ</td>
                    <td>อาการ</td>
                    <td>อาหารหลัก</td>
                    <td>อาหารว่าง</td>
                    <td>หมายเหตุ</td>
                    <td>ข้อมูล ณ วัน-เวลา</td>
                    <td colspan="2">Actions</td>
                </tr>
                <?php  while($row = mysqli_fetch_assoc($result)) { 
                       if($row['note']=='dc'){
                            echo "<tr><td>".$row['wa_no']."</td>";
                            echo "<td colspan='7'>PT Dischange</td>";
                            echo "<td><a href='edit_info.php?edit=".$row['wa_id']."' style='padding: .5rem; background: green; display: inline-block;
                            color: #fff; text-decoration: none;'>Edit</a></td>";
                            echo "</tr>";

                       }else{
                ?>
                <tr>
                    <td><?php echo $row['wa_no'] ?></td>
                    <td><?php echo $row['patient_name'] ?></td>
                    <td><?php echo $row['patient_age'] ?> ปี</td>
                    <td><?php echo $row['diagnosis'] ?></td>
                    <td><?php echo $row['main_dis'] ?></td>
                    <td><?php echo $row['sneak'] ?></td>
                    <td><?php echo $row['note'] ?></td>
                    <td><?php echo $row['time_stamp'] ?></td>
                    <td><a href="edit_info.php?edit=<?php echo $row['wa_id'];?>" style="padding: .5rem; background: green; display: inline-block;
                                color: #fff; text-decoration: none;">Edit</a></td>
                    <td><a href="delete_info.php?delete=<?php echo $row['wa_id']; ?>" onclick="return confirm('ต้องการลบข้อมูลนี้ใช่หรือไม่');" style="padding: .5rem; background: red; display: inline-block;
                                color: #fff; text-decoration: none;">Delete</a></td>
                </tr>
                <?php } }  ?>
            </table>
        </div>

    </section>

    <?php include('layouts/footer.php'); ?>


</body>
</html>