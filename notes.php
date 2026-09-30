<?php

require_once "config/db.php";


/* Get all subjects + number of notes */
$sql = "
    SELECT 
        s.id,
        s.subject_name,
        s.description,
        COUNT(n.id) AS note_count
    FROM subjects s
    LEFT JOIN chapters c
        ON s.id = c.subject_id
    LEFT JOIN notes n
        ON c.id = n.chapter_id
    GROUP BY s.id
    ORDER BY s.id ASC
";

$result = $conn->query($sql);


/* Icons for subjects */
$icons = [
    1 => "&lt;/&gt;",
    2 => "🐍",
    3 => "🗄",
    4 => "⚡",
    5 => "🌳",
    6 => "∑"
];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Browse Notes | NoteHub</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <!-- ================= NAVBAR ================= -->

    <header class="navbar">

        <div class="logo">

            <span class="logo-icon">✦</span>

            NoteHub

        </div>


        <nav>

            <a href="index.html">Home</a>

            <a href="notes.php" class="active">Browse Notes</a>

            <a href="#pyq">PYQs</a>

            <a href="#about">About</a>

        </nav>


        <div class="nav-buttons">

            <button class="login-btn">Login</button>

            <button class="signup-btn">Get Started</button>

        </div>

    </header>



    <!-- ================= NOTES PAGE ================= -->

    <main>

        <section class="notes-page">


            <div class="notes-heading">

                <span class="section-label">
                    STUDY MATERIAL
                </span>

                <h1>
                    Browse Notes
                </h1>

                <p>
                    Find notes, manuals and study material
                    for your subjects.
                </p>

            </div>



            <!-- ================= SEARCH ================= -->

            <div class="notes-search">

                <span>⌕</span>

                <input
                    type="text"
                    id="notesSearch"
                    placeholder="Search for a subject..."
                >

            </div>



            <!-- ================= SUBJECTS ================= -->

            <div class="notes-grid" id="notesGrid">


                <?php if ($result && $result->num_rows > 0): ?>

                    <?php while ($subject = $result->fetch_assoc()): ?>

                        <div class="note-card">

                            <div class="note-icon">

                                <?php
                                echo $icons[$subject['id']] ?? "✦";
                                ?>

                            </div>


                            <h2>

                                <?php
                                echo htmlspecialchars(
                                    $subject['subject_name']
                                );
                                ?>

                            </h2>


                            <p>

                                <?php
                                echo htmlspecialchars(
                                    $subject['description']
                                );
                                ?>

                            </p>


                            <div class="note-bottom">

                                <span>

                                    <?php
                                    echo $subject['note_count'];
                                    ?>

                                    Notes

                                </span>


                                <a
                                    href="subject.php?id=<?php echo $subject['id']; ?>"
                                >
                                    View Notes →
                                </a>

                            </div>

                        </div>

                    <?php endwhile; ?>


                <?php else: ?>

                    <p>No subjects found.</p>

                <?php endif; ?>


            </div>

        </section>

    </main>



    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="footer-logo">

            ✦ NoteHub

        </div>


        <p>

            © 2026 NoteHub. Made for students.

        </p>

    </footer>



    <script src="js/script.js"></script>


</body>

</html>
