<?php

require_once "config/db.php";

$chapter_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($chapter_id <= 0) {
    die("Invalid chapter.");
}

/* Get chapter information */
/* Get chapter + subject information */
$chapter_sql = "
    SELECT 
        c.*,
        s.subject_name
    FROM chapters c
    INNER JOIN subjects s
        ON c.subject_id = s.id
    WHERE c.id = ?
";
$chapter_stmt = $conn->prepare($chapter_sql);
$chapter_stmt->bind_param("i", $chapter_id);
$chapter_stmt->execute();

$chapter_result = $chapter_stmt->get_result();
$chapter = $chapter_result->fetch_assoc();

if (!$chapter) {
    die("Chapter not found.");
}

/* Get notes belonging to this chapter */
$notes_sql = "SELECT * FROM notes WHERE chapter_id = ?";
$notes_stmt = $conn->prepare($notes_sql);
$notes_stmt->bind_param("i", $chapter_id);
$notes_stmt->execute();

$notes_result = $notes_stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($chapter['chapter_name']); ?> | NoteHub</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main class="chapter-page">

        <div class="subject-heading">

            <p class="section-label">
    <?php echo htmlspecialchars($chapter['subject_name']); ?>
</p>

            <h1>
                <?php echo htmlspecialchars($chapter['chapter_name']); ?>
            </h1>

            <p>
                <?php echo htmlspecialchars($chapter['description']); ?>
            </p>

        </div>


        <h2>Notes</h2>


        <?php if ($notes_result->num_rows > 0): ?>

            <?php while ($note = $notes_result->fetch_assoc()): ?>

                <div class="pdf-card">

                    <div>
                        <h3>
                            <?php echo htmlspecialchars($note['title']); ?>
                        </h3>

                        <p>
                            PDF Study Material
                        </p>
                    </div>

                    <a
                        href="<?php echo htmlspecialchars($note['file_path']); ?>"
                        target="_blank"
                        class="pdf-button"
                    >
                        Open PDF →
                    </a>

                </div>

            <?php endwhile; ?>

        <?php else: ?>

            <p>No notes available for this chapter yet.</p>

        <?php endif; ?>

    </main>

</body>
</html>
