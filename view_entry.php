<?php
include("db_connect.php");

header("Content-type: text/vnd.wap.wml");

$id = $_GET["id"];
$sql = "SELECT title, content FROM diary_entries WHERE id='$id'";
$result = $conn->query($sql);

echo "<?xml version='1.0'?>";
echo "<wml>";
echo "<card id='entry' title='Diary Entry'>";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<p><b>" . $row["title"] . "</b></p>";
    echo "<p>" . $row["content"] . "</p>";
} else {
    echo "<p>Entry not found.</p>";
}

echo "<p><anchor>Back<prev/></anchor></p>";
echo "</card>";
echo "</wml>";

$conn->close();
?>
