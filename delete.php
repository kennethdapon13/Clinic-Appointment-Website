<?php 

if (isset($_GET["remove"]))
{
    $removeid= $_GET["remove"];

    $conn = new mysqli("localhost", "root", "", "id18532527_appointment_system");
    if (mysqli_connect_error()) {
        echo 'MySQL Error: ' . mysqli_connect_error();
    }

    $sql="DELETE FROM inventory where medicine_id= $removeid";

    $result= $conn -> query($sql);

    if (!$result) {
        $error  = $conn->errno . ' ' . $conn->error;
        echo $error;
        
    }
    echo "<script>alert(Medicine ID:  ' + $removeid + ' has been successfully deleted')</script>";
    echo "<script>window.location.href='admin-inventory.php?status=error&msg=Medicine ID:  ' + $removeid + ' has been successfully deleted'</script>";
}


?>