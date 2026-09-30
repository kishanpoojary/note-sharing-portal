
<?php
require_once "config/db.php";
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

            <a href="notes.php" class="active">
                Browse Notes
            </a>

            <a href="index.html#pyq">
                PYQs
            </a>

            <a href="index.html#important">
                Important Questions
            </a>

            <a href="index.html#about">
                About
            </a>
        </nav>

        <div class="nav-buttons">
            <button class="login-btn">
                Login
            </button>

            <button class="signup-btn">
                Get Started
            </button>
        </div>

    </header>


    <!-- ================= NOTES PAGE ================= -->

    <main>

        <section class="notes-page">

            <!-- PAGE HEADING -->

            <div class="notes-heading">

                <span class="section-label">
                    STUDY MATERIAL
                </span>

                <h1>
                    Browse Notes
                </h1>

                <p>
                    Find notes, manuals and study material
                    for all your subjects.
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


                <!-- ================= C PROGRAMMING ================= -->

                <div class="note-card" data-subject="c programming">

                    <div class="note-icon">
                        &lt;/&gt;
                    </div>

                    <h2>
                        C Programming
                    </h2>

                    <p>
                        Programming fundamentals and concepts.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="c-programming.html">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= DSP ================= -->

                <div class="note-card" data-subject="dsp">

                    <div class="note-icon">
                        ◈
                    </div>

                    <h2>
                        DSP
                    </h2>

                    <p>
                        Data Structures using Python.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=dsp">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= DMS ================= -->

                <div class="note-card" data-subject="dms">

                    <div class="note-icon">
                        ∞
                    </div>

                    <h2>
                        DMS
                    </h2>

                    <p>
                        Discrete Mathematics and concepts.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=dms">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= DTE ================= -->

                <div class="note-card" data-subject="dte">

                    <div class="note-icon">
                        ◉
                    </div>

                    <h2>
                        DTE
                    </h2>

                    <p>
                        Digital techniques and logic.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=dte">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= AMS ================= -->

                <div class="note-card" data-subject="ams">

                    <div class="note-icon">
                        Σ
                    </div>

                    <h2>
                        AMS
                    </h2>

                    <p>
                        Applied mathematics and calculations.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=ams">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= BSC ================= -->

                <div class="note-card" data-subject="bsc">

                    <div class="note-icon">
                        ⚛
                    </div>

                    <h2>
                        BSC
                    </h2>

                    <p>
                        Science fundamentals and applications.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=bsc">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= JAVA ================= -->

                <div class="note-card" data-subject="java">

                    <div class="note-icon">
                        ☕
                    </div>

                    <h2>
                        JAVA
                    </h2>

                    <p>
                        Object-oriented programming and Java concepts.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=java">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= DSA ================= -->

                <div class="note-card" data-subject="dsa">

                    <div class="note-icon">
                        ⌘
                    </div>

                    <h2>
                        DSA
                    </h2>

                    <p>
                        Data structures and algorithms fundamentals.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=dsa">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= COMMUNICATION SKILLS ================= -->

                <div
                    class="note-card"
                    data-subject="communication skills"
                >

                    <div class="note-icon">
                        ◌
                    </div>

                    <h2>
                        Communication Skills
                    </h2>

                    <p>
                        Communication, writing and presentation skills.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=communication-skills">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= C++ ================= -->

                <div class="note-card" data-subject="c++">

                    <div class="note-icon">
                        &lt;/&gt;
                    </div>

                    <h2>
                        C++
                    </h2>

                    <p>
                        Programming concepts and object-oriented programming.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=cpp">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= BMS ================= -->

                <div class="note-card" data-subject="bms">

                    <div class="note-icon">
                        ▣
                    </div>

                    <h2>
                        BMS
                    </h2>

                    <p>
                        Management, business and organizational concepts.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=bms">
                            View Notes →
                        </a>

                    </div>

                </div>


                <!-- ================= BEE ================= -->

                <div class="note-card" data-subject="bee">

                    <div class="note-icon">
                        ⚡
                    </div>

                    <h2>
                        BEE
                    </h2>

                    <p>
                        Electrical fundamentals, circuits and machines.
                    </p>

                    <div class="note-bottom">

                        <span>
                            5 Chapters
                        </span>

                        <a href="subject.php?subject=bee">
                            View Notes →
                        </a>

                    </div>

                </div>


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