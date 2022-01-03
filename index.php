<?php
require 'conn.php';
$selectsum = "SELECT COUNT(track) as countn from trackselection WHERE track = 'network'";
$selectsum2 = "SELECT COUNT(track) as counts from trackselection WHERE track = 'software'";
$network = $conn->query($selectsum);
$software = $conn->query($selectsum2);
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
            <td>Software</td>
            <td>Network</td>
        </tr>
        <?php
        if ($software->num_rows > 0) {
            while ($row = $software->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $row['counts']; ?></td>
                <?php
            }
        }
        if ($network->num_rows > 0) {
            while ($row = $network->fetch_assoc()) {
                ?>
                    <td>
                        <?php echo $row['countn']; ?>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>