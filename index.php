<?php
require 'conn.php';

$sql = "SELECT * FROM trackselection WHERE track ='software'";
$result = $conn->query($sql);
$software = $result->num_rows;

$sql = "SELECT * FROM trackselection WHERE track ='network'";
$result = $conn->query($sql);
$network = $result->num_rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <h1>Student Registration</h1>
    <form action="simpan.php" method="POST">
        <table border="1">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="stdname"></td>
            </tr>
            <tr>
                <td>No Matric: </td>
                <td><input type="text" name="nomat"></td>
            </tr>
            <tr>
                <td>Track: </td>
                <td>
                    <select name="track" id="track">
                        <option value="">Select Track</option>
                        <option value="software">Software</option>
                        <option value="network">Network</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" name="submit" value="Register"></th>
            </tr>
        </table><br><br>
    </form>

    <h3>Registered Student Based On Track</h3>
    <table border="1">
        <tr>
            <th>Track</th>
            <th>Number of Registered Student</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>Software</td>
            <td><?php echo $software; ?> </td>
            <td><a href="list.php?track=software">View</a></td>
        </tr>
        <tr>
            <td>Network</td>
            <td><?php echo $network; ?></td>
            <td><a href="list.php?track=network">View</a></td>
        </tr>
    </table>
</body>

</html>