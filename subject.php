
<?php

$subjects = [

    "c-programming" => [
        "name" => "C Programming",
        "description" => "Learn C programming from basics to advanced concepts.",
        "chapters" => [
            "Basics of C Programming",
            "Control Structures",
            "Arrays and Strings",
            "Functions and Recursion",
            "Pointers and Structures"
        ]
    ],

    "dsp" => [
        "name" => "DSP",
        "description" => "Data Structures using Python.",
        "chapters" => [
            "Introduction to Data Structures",
            "Arrays and Lists",
            "Stacks and Queues",
            "Linked Lists",
            "Searching and Sorting"
        ]
    ],

    "dms" => [
        "name" => "DMS",
        "description" => "Discrete Mathematics and its applications.",
        "chapters" => [
            "Sets and Relations",
            "Logic and Propositions",
            "Functions",
            "Graph Theory",
            "Combinatorics"
        ]
    ],

    "dte" => [
        "name" => "DTE",
        "description" => "Digital Techniques and Electronics.",
        "chapters" => [
            "Digital Logic Fundamentals",
            "Number Systems and Codes",
            "Boolean Algebra",
            "Logic Gates and Circuits",
            "Combinational and Sequential Circuits"
        ]
    ],

    "ams" => [
        "name" => "AMS",
        "description" => "Applied Mathematics and its concepts.",
        "chapters" => [
            "Matrices and Determinants",
            "Differential Calculus",
            "Integral Calculus",
            "Differential Equations",
            "Applications of Mathematics"
        ]
    ],

    "bsc" => [
        "name" => "BSC",
        "description" => "Basic Science concepts for engineering.",
        "chapters" => [
            "Fundamentals of Science",
            "Applied Physics",
            "Basic Chemistry",
            "Materials and Their Properties",
            "Science in Engineering"
        ]
    ],

    "bms" => [
        "name" => "BMS",
        "description" => "Business Management Studies.",
        "chapters" => [
            "Business Communication",
            "Principles of Management",
            "Organizational Management",
            "Entrepreneurship",
            "Business Environment"
        ]
    ],

    "bee" => [
        "name" => "BEE",
        "description" => "Basic Electrical Engineering.",
        "chapters" => [
            "Basic Electrical Concepts",
            "DC Circuits",
            "AC Circuits",
            "Electrical Machines",
            "Electrical Measurements"
        ]
    ],

    "java" => [
        "name" => "JAVA",
        "description" => "Learn Java programming and object-oriented concepts.",
        "chapters" => [
            "Java Fundamentals",
            "Object-Oriented Programming",
            "Classes and Inheritance",
            "Exception Handling",
            "Arrays, Strings and Collections"
        ]
    ],

    "dsa" => [
        "name" => "DSA",
        "description" => "Data Structures and Algorithms.",
        "chapters" => [
            "Introduction to Data Structures",
            "Arrays and Linked Lists",
            "Stacks and Queues",
            "Trees and Graphs",
            "Searching and Sorting"
        ]
    ],

    "communication-skills" => [
        "name" => "Communication Skills",
        "description" => "Improve communication, writing and presentation skills.",
        "chapters" => [
            "Communication Fundamentals",
            "Grammar and Vocabulary",
            "Reading and Comprehension",
            "Writing Skills",
            "Presentation and Interview Skills"
        ]
    ],

    "cpp" => [
        "name" => "C++",
        "description" => "Learn C++ programming and object-oriented programming.",
        "chapters" => [
            "C++ Fundamentals",
            "Functions and Arrays",
            "Object-Oriented Programming",
            "Inheritance and Polymorphism",
            "Classes, Objects and File Handling"
        ]
    ]
];


// Get subject from URL
$subject = $_GET['subject'] ?? '';


// Check if subject exists
if (!isset($subjects[$subject])) {
    die("Invalid subject.");
}

$currentSubject = $subjects[$subject];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $currentSubject['name']; ?> | NoteHub
    </title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar">

    <div class="logo">
        ✦ NoteHub
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

</nav>


    <!-- SUBJECT HEADER -->

    <section class="subject-header">

        <span class="section-label">
            NOTEHUB / SUBJECT
        </span>

        <h1>
            <?php echo $currentSubject['name']; ?>
        </h1>

        <p>
            <?php echo $currentSubject['description']; ?>
        </p>

    </section>


    <!-- CHAPTERS -->

    <section class="chapters-section">

        <div class="section-heading">

            <div>

                <span class="section-label">
                    CHAPTERS
                </span>

                <h2>
                    <?php echo count($currentSubject['chapters']); ?> Chapters
                </h2>

            </div>

        </div>


        <div class="chapters-list">

            <?php foreach ($currentSubject['chapters'] as $index => $chapter): ?>

                <div class="chapter-card">

                    <div class="chapter-number">
                        <?php echo str_pad($index + 1, 2, "0", STR_PAD_LEFT); ?>
                    </div>

                    <div class="chapter-info">

                        <h3>
                            <?php echo $chapter; ?>
                        </h3>

                        <p>
                            Chapter <?php echo $index + 1; ?>
                        </p>

                    </div>

                    <!-- PDF will be connected later -->

                    <a href="#" class="chapter-btn">
                        View Notes →
                    </a>

                </div>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- FOOTER -->

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