<?php
include("db_connect.php");

header("Content-type: text/vnd.wap.wml");

echo "<?xml version='1.0'?>";
echo "<!DOCTYPE wml PUBLIC '-//WAPFORUM//DTD WML 1.1//EN' 'http://www.wapforum.org/DTD/wml_1.1.xml'>";
echo "<wml>";
echo "<card id='view' title='Diary Entries'>";
echo "<p>Entries:</p>";

$sql = "SELECT id, title FROM diary_entries ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><anchor>" . $row["title"] . "<go href='view_entry.php?id=" . $row["id"] . "'/></anchor></p>";
    }
} else {
    echo "<p>No entries found.</p>";
}

echo "<p><anchor>Back<prev/></anchor></p>";
echo "</card>";
echo "</wml>";

$conn->close();
?>
