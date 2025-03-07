<?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    if (!empty($title) && !empty($content)) {
        $sql = "INSERT INTO diary_entries (title, content) VALUES ('$title', '$content')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<?xml version='1.0'?><wml><card><p>Entry Added Successfully!</p><anchor>Back<prev/></anchor></card></wml>";
        } else {
            echo "<?xml version='1.0'?><wml><card><p>Error Adding Entry</p><anchor>Back<prev/></anchor></card></wml>";
        }
    }
}
$conn->close();
?>
