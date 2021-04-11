<?php


if (isset($_POST['Experience_with_website']) && isset($_POST['Experience_with_services'])) {
    include 'db_conn.php';

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $Experience_with_website = validate($_POST['Experience_with_website']);
    $Experience_with_services = validate($_POST['Experience_with_services']);
    $Area_to_improve = validate($_POST['Area_to_improve']);
    

    if (empty($Experience_with_services) || empty($Experience_with_website) ) {
       header("Location: survey.php");
    }else {
        $sql = "INSERT INTO survey( Experience_with_website, Experience_with_services, Area_to_improve) VALUES('$Experience_with_website', '$Experience_with_services', '$Area_to_improve')";
        $res = mysqli_query($conn, $sql);
        if ($res){
            echo "Thank you for Taking Survey!! ";
            
        }
        else {
            echo "Feedback Not Successfuly Sent Contact Admin!!";
        }
    }
    

}else{
    header ("location: survey.php");
}
?>