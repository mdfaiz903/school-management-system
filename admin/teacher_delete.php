<?php
    include ('database/connection.php');
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }else{
//     echo "success";
// }
if(isset($_GET['id'])){
    
     
    $id = $_GET['id'];
    $sql = "DELETE FROM teachers WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header ('location:index.php?page=teachers');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
    
}
}
mysqli_close($conn);
?>
    

    
