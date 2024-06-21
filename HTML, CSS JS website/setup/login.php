<?php



$connection = new mysqli("localhost", "id22275543_projectwolf", "Project@2510", "id22275543_firestorm", null, null);
if ($connection->connect_errno) {
    echo json_encode(array("message" => "u r falur"));
    die();
}

$retval = mysqli_query($connection, "SELECT * FROM user WHERE user.id = 2");
if (!$retval) {
    echo json_encode(array("message" => "u r falur"));
    die();
}

$table_row = $retval->fetch_row();
echo json_encode(array("message" => $table_row[2]));

$retval->free_result();
$connection->close();

?>
