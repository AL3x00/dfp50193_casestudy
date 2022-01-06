<?php
require 'conn.php';

$track = $_GET['track'];
$sql = "SELECT * FROM trackselection WHERE track = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $track);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>

<body>
    <h1>Student <?php echo $track; ?></h1>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>No. Matric</th>
        </tr>
        <?php
        $bil = 1;
        while ($row = $result->fetch_object()) {
        ?>
            <tr>
                <td><?php echo $bil++; ?></td>
                <td><?php echo $row->student_name; ?></td>
                <td><?php echo $row->nomat; ?></td>
            </tr>
        <?php
        }
        ?>
    </table><br><br>
    <a href="index.php">BACK</a>
</body>

</html>