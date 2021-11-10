<!DOCTYPE html>
<html>
<head>
    <title>180204142 (Assignment-3)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php

$fileName = "uploads/inputData.csv";

$file_handle = fopen($fileName, 'r');
while (!feof($file_handle)) {
    $data[] = fgetcsv($file_handle, 1024);
}
fclose($file_handle);

$values = sizeof($data[0]) - 6;
$rows = $values / 5;

if (!empty($_POST)) {
    $new_csv = fopen($fileName, 'a');
    $list = array(
        0 => sizeof($data),
        1 => $_POST['usernamefirst'],
        2 => $_POST['usernamesecond'],
        3 => $_POST['email'],
        4 => $_POST['phone'],      
        5 => $_POST['message']
    );
    fputcsv($new_csv, $list);
    $msg = "List of Data";
    fclose($new_csv);

    $data = NULL;
    $file_handle = fopen($fileName, 'r');
    while (!feof($file_handle)) {
        $data[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);

    $values = sizeof($data[0]) - 6;
    $rows = $values / 5;
}
?>

<body>
    <div class="container table-container">
        <div class="row">
            <div class="msg">
                <?php
                if (isset($msg)) {
                ?> <p> <?php echo $msg; ?> </p> <?php }?>
            </div>
            <table class="table table-dark table-hover">
                <tr>
                    <th width="14%">Serial No</th>
                    <th width="14%">First Name</th>
                    <th width="14%">Last Name</th>
                    <th width="14%">Email ID</th>
                    <th width="14%">Phone No</th>
                    <th width="30%">Message</th>
                </tr>
                <?php
                $serial = 0;
                for ($x = 0; $x < (sizeof($data) - 1); $x += 1) {
                ?>
                    <tr>
                        <td><?php echo ++$serial ?></td>
                        <td><?php echo $data[$x][1] ?></td>
                        <td><?php echo $data[$x][2] ?></td>
                        <td><?php echo $data[$x][3] ?></td>
                        <td><?php echo $data[$x][4] ?></td>
                        <td><?php
                            if ($serial < $rows) {
                                $data[$x][5] = substr($data[$x][4], 0, strlen($data[$x][5]) - 2);
                                echo $data[$x][5];
                            } else {
                                echo $data[$x][5];
                            }
                            ?></td>
                    </tr>
                <?php } ?>
            </table>
            <div class="back-button">
                <form action="http://localhost/AUST/180204142" method="post" class="icon-button btn2">
                    <input type="submit" class="button" value="Return to Homepage" />
                </form>
            </div>
        </div>
    </div>
</body>