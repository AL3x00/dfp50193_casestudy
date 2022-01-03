<?php
require 'conn.php';

$name = $_POST['stdname'];
$nomat = $_POST['nomat'];
$track = $_POST['track'];
$sql = "SELECT * from trackselection where track ='$track'";
$insert = "INSERT INTO trackselection (student_name,nomat,track) VALUES ('$name','$nomat','$track')";
$result = $conn->query($sql);
if ($result->num_rows >= 5) {
?>
    <script>
        alert('This track is full, please select another track.');
        window.location = "index.php";
    </script>
<?php
} else {
    $result2 = $conn->query($insert);
?>
    <script>
        alert('Succesfully registered!');
        window.location = "index.php";
    </script>
<?php
}
?>