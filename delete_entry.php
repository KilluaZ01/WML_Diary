<?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entry_id = $_POST["entry_id"];

    if (!empty($entry_id)) {
        $sql = "DELETE FROM diary_entries WHERE id='$entry_id'";

        if ($conn->query($sql) === TRUE) {
            echo "<?xml version='1.0'?><wml><card><p>Entry Deleted Successfully!</p><anchor>Back<prev/></anchor></card></wml>";
        } else {
            echo "<?xml version='1.0'?><wml><card><p>Error Deleting Entry</p><anchor>Back<prev/></anchor></card></wml>";
        }
    }
}
$conn->close();
?>
