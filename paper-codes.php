<?php

$semester = $_GET['semester'] ?? '';

$semesters = [

    "1" => [
        "name" => "Semester 1",
        "description" => "Previous year question papers for Semester 1.",
        "codes" => [
            "313301",
            "313302",
            "313303",
            "313304"
        ]
    ],

    "2" => [
        "name" => "Semester 2",
        "description" => "Previous year question papers for Semester 2.",
        "codes" => [
            "312301",
            "312302",
            "312303",
            "312304"
        ]
    ],

    "3" => [
        "name" => "Semester 3",
        "description" => "Previous year question papers for Semester 3.",
        "codes" => [
            "313301",
            "313302",
            "313303",
            "313304"
        ]
    ],

    "4" => [
        "name" => "Semester 4",
        "description" => "Previous year question papers for Semester 4.",
        "codes" => [
            "314301",
            "314302",
            "314303",
            "314304"
        ]
    ],

    "5" => [
        "name" => "Semester 5",
        "description" => "Previous year question papers for Semester 5.",
        "codes" => [
            "315301",
            "315302",
            "315303",
            "315304"
        ]
    ],

    "6" => [
        "name" => "Semester 6",
        "description" => "Previous year question papers for Semester 6.",
        "codes" => [
            "316301",
            "316302",
            "316303",
            "316304"
        ]
    ]

];

if (!isset($semesters[$semester])) {
    die("Invalid semester.");
}

$currentSemester = $semesters[$semester];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $currentSemester['name']; ?> | PYQs | NoteHub
    </title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar">

    <div class="logo">
        ✦ NoteHub
    </div>

    <nav>

        <a href="index.html">
            Home
        </a>

        <a href="notes.php">
            Browse Notes
        </a>

        <a href="pyq.php" class="active">
            PYQs
        </a>

        <a href="index.html#important">
            Important Questions
        </a>

        <a href="index.html#about">
            About
        </a>

    </nav>

</nav>


<!-- =========================
     HEADER
========================= -->

<section class="subject-header">

    <span class="section-label">
        NOTEHUB / PYQs
    </span>

    <h1>
        <?php echo $currentSemester['name']; ?>
    </h1>

    <p>
        <?php echo $currentSemester['description']; ?>
    </p>

</section>


<!-- =========================
     PAPER CODES
========================= -->

<section class="browse-section">

    <div class="section-heading">

        <div>

            <span class="section-label">
                PAPER CODES
            </span>

            <h2>
                Available Papers
            </h2>

            <p>
                Select a paper code to view the question paper.
            </p>

        </div>

    </div>


    <div class="browse-grid">

        <?php foreach ($currentSemester['codes'] as $index => $code): ?>

            <div class="browse-card">

                <div class="card-icon">
                    <?php echo str_pad($index + 1, 2, "0", STR_PAD_LEFT); ?>
                </div>

                <h3>
                    <?php echo $code; ?>
                </h3>

                <p>
                    MSBTE Question Paper
                </p>

                <a href="paper.php?code=<?php echo $code; ?>">
                    View Paper →
                </a>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <div class="footer-big-text">
        NOTEHUB
    </div>

    <p>
        Your college notes, all in one place.
    </p>

</footer>


</body>

</html>