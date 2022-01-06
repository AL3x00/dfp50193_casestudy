<?php
require 'conn.php';

$name = $_POST['stdname'];
$nomat = $_POST['nomat'];
$track = $_POST['track'];
$sql = "SELECT * FROM trackselection WHERE track ='$track'";
$result = $conn->query($sql);

if ($result->num_rows < 5) {
    $insert = "INSERT INTO trackselection (student_name,nomat,track) VALUES (?,?,?)";
    $stmt = $conn->prepare($insert);
    $stmt->bind_param('sss', $name, $nomat, $track);
    $stmt->execute();
?>
    <script>
        alert('Successfully registered!');
        window.location = "index.php";
    </script>
<?php
} else {
    $result2 = $conn->query($insert);
?>
    <script>
        alert('This track is full, please select another track.');
        window.location = "index.php";
    </script>
<?php
}
?>