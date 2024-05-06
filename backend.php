<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function selectform($conn, $input)
{
    $sql = "SELECT * FROM $input";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
        }
    }
}

function insertInto($conn, $input)
{
    $sql = "INSERT INTO $input (name) VALUES (?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "error";
    } else {
        mysqli_stmt_bind_param($stmt, "s", $input);
        mysqli_stmt_execute($stmt);
    }
}

function delete($conn, $input)
{
    $sql = "DELETE FROM $input WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "error";
    } else {
        mysqli_stmt_bind_param($stmt, "i", $input);
        mysqli_stmt_execute($stmt);
    }
}

function updateSet($conn, $input)
{
    $sql = "UPDATE $input SET name = ? WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "error";
    } else {
        mysqli_stmt_bind_param($stmt, "si", $input, $input);
        mysqli_stmt_execute($stmt);
    }
}
?>