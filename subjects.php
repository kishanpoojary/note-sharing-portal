<?php

require_once "config/db.php";

$sql = "SELECT * FROM subjects";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects | NoteHub</title>
</head>

<body>

    <h1>NoteHub Subjects</h1>

    <?php

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo "<h2>" . $row["subject_name"] . "</h2>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<hr>";

        }

    } else {

        echo "<p>No subjects found.</p>";

    }

    ?>

</body>
</html>