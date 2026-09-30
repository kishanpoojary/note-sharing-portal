<?php

require_once "config/db.php";

$subject_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($subject_id <= 0) {
    die("Invalid subject.");
}


/* Get subject */
$subject_sql = "SELECT * FROM subjects WHERE id = ?";
$subject_stmt = $conn->prepare($subject_sql);
$subject_stmt->bind_param("i", $subject_id);
$subject_stmt->execute();

$subject_result = $subject_stmt->get_result();
$subject = $subject_result->fetch_assoc();

if (!$subject) {
    die("Subject not found.");
}


/* Get chapters */
$chapter_sql = "SELECT * FROM chapters WHERE subject_id = ?";
$chapter_stmt = $conn->prepare($chapter_sql);
$chapter_stmt->bind_param("i", $subject_id);
$chapter_stmt->execute();

$chapters = $chapter_stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo htmlspecialchars($subject['subject_name']); ?> | NoteHub
    </title>

    <link rel="stylesheet" href="css/style.css">

</head>


<body>

    <main class="subject-page">

        <div class="subject-heading">

            <p class="section-label">
                NOTEHUB SUBJECT
            </p>

            <h1>
                <?php echo htmlspecialchars($subject['subject_name']); ?>
            </h1>

            <p>
                <?php echo htmlspecialchars($subject['description']); ?>
            </p>

        </div>


        <h2>Chapters</h2>


        <div class="chapters">

            <?php if ($chapters->num_rows > 0): ?>

                <?php while ($chapter = $chapters->fetch_assoc()): ?>

                    <a
                        href="chapter.php?id=<?php echo $chapter['id']; ?>"
                        class="chapter-card"
                    >

                        <div>

                            <h3>
                                <?php echo htmlspecialchars($chapter['chapter_name']); ?>
                            </h3>

                            <p>
                                <?php echo htmlspecialchars($chapter['description']); ?>
                            </p>

                        </div>

                    </a>

                <?php endwhile; ?>

            <?php else: ?>

                <p>No chapters available yet.</p>

            <?php endif; ?>

        </div>

    </main>

</body>

</html>
