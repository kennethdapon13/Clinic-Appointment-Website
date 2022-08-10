<?php 

if (isset($_GET["remove"]))
{
    $id= $_GET["remove"];

    $conn = new mysqli("localhost", "root", "", "id18532527_appointment_system");
    if (mysqli_connect_error()) {
        echo 'MySQL Error: ' . mysqli_connect_error();
    }

    $sql="DELETE FROM booking where id= '$id'";

    $result= $conn -> query($sql);

    if (!$result) {
        $error  = $conn->errno . ' ' . $conn->error;
        echo $error;
        
    }
    echo "<script>alert(ID:  ' + $id + ' has been successfully deleted')</script>";
    echo "<script>window.location.href='admin.php?status=error&msg=ID:  ' + $id + ' has been successfully deleted'</script>";
}


?>