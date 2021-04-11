<?php


if (isset($_POST['type']) && isset($_POST['size'])) {
    include 'db_conn.php';

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $type = validate($_POST['type']);
    $size = validate($_POST['size']);
    $locations = validate($_POST['locations']);
    $contacts = validate($_POST['contacts']);

    if (empty($size) || empty($type) ) {
       header("Location: order.php");
    }else {
        $sql = "INSERT INTO neworders( type, size, location, contacts) VALUES('$type', '$size', '$locations', '$contacts')";
        $res = mysqli_query($conn, $sql);
        if ($res){
            echo "Order Successfull!! ";
            
        }
        else {
            echo "Order Not Successfull!!";
        }
    }

}else{
    header ("location: order.php");
}
?>