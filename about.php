
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us | NoteHub</title>

    <link rel="stylesheet" href="css/style.css">

    <style>

        /* ================================
           ABOUT PAGE
        ================================= */

        .about-page {
            min-height: 100vh;
            padding-bottom: 0;
            background: #07060a;
        }


        /* ================================
           ABOUT HERO
        ================================= */

        .about-hero {
            position: relative;
            overflow: hidden;
            text-align: center;
            padding: 110px 20px 80px;
        }

        .about-hero::before {
            content: "";

            position: absolute;

            width: 500px;
            height: 500px;

            background: rgba(185, 130, 255, 0.10);

            filter: blur(120px);

            border-radius: 50%;

            top: -200px;
            left: 50%;

            transform: translateX(-50%);

            pointer-events: none;
        }

        .about-hero .section-label {
            position: relative;
        }

        .about-hero h1 {
            position: relative;

            margin: 15px 0;

            color: #ffffff;

            font-size: 58px;
            font-weight: 700;
        }

        .about-hero h1 span {
            color: #c69cff;

            text-shadow:
                0 0 25px rgba(198, 156, 255, 0.45);
        }

        .about-hero p {
            position: relative;

            max-width: 650px;

            margin: 0 auto;

            color: #81798e;

            font-size: 16px;

            line-height: 1.8;
        }


        /* ================================
           MAIN CONTAINER
        ================================= */

        .about-container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

        .about-block {
            margin-bottom: 80px;
        }

        .about-block h2 {
            color: #ffffff;

            font-size: 32px;

            margin-bottom: 15px;
        }

        .about-block h2 span {
            color: #c69cff;
        }

        .about-block > p {
            color: #81798e;

            line-height: 1.8;

            max-width: 850px;

            margin-bottom: 12px;
        }


        /* ================================
           WHY NOTEHUB
        ================================= */

        .why-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 22px;

            margin-top: 30px;
        }

        .why-card {
            padding: 30px;

            border: 1px solid rgba(185, 130, 255, 0.16);

            border-radius: 20px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255, 255, 255, 0.055),
                    rgba(255, 255, 255, 0.012)
                );

            transition: 0.35s ease;
        }

        .why-card:hover {
            transform: translateY(-7px);

            border-color: rgba(185, 130, 255, 0.55);

            box-shadow:
                0 20px 45px rgba(0, 0, 0, 0.45),
                0 0 30px rgba(185, 130, 255, 0.13);
        }

        .why-icon {
            font-size: 28px;

            margin-bottom: 18px;
        }

        .why-card h3 {
            color: #ffffff;

            margin-bottom: 10px;
        }

        .why-card p {
            color: #81798e;

            line-height: 1.7;

            font-size: 14px;
        }


        /* ================================
           TEAM SECTION
        ================================= */

        .team-heading {
            text-align: center;

            margin-bottom: 40px;
        }

        .team-heading .section-label {
            color: #b982ff;
        }

        .team-heading h2 {
            color: #ffffff;

            font-size: 36px;

            margin: 10px 0;
        }

        .team-heading h2 span {
            color: #c69cff;
        }

        .team-heading p {
            color: #81798e;
        }


        /* ================================
           TEAM GRID
        ================================= */

        .team-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;

            max-width: 900px;

            margin: 0 auto;
        }


        /* ================================
           OWNER CARD
        ================================= */

        .team-owner {
            grid-column: 1 / 4;

            width: 280px;

            margin: 0 auto;
        }


        /* ================================
           TEAM CARD
        ================================= */

        .team-card {
            text-align: center;

            padding: 35px 20px;

            border: 1px solid rgba(185, 130, 255, 0.16);

            border-radius: 22px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255, 255, 255, 0.055),
                    rgba(255, 255, 255, 0.012)
                );

            transition: 0.35s ease;
        }

        .team-card:hover {
            transform: translateY(-8px);

            border-color: rgba(185, 130, 255, 0.55);

            box-shadow:
                0 20px 45px rgba(0, 0, 0, 0.45),
                0 0 30px rgba(185, 130, 255, 0.15);
        }


        /* ================================
           TEAM AVATAR
        ================================= */

        .team-avatar {
            width: 85px;
            height: 85px;

            margin: 0 auto 20px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            border: 1px solid rgba(198, 156, 255, 0.5);

            background: rgba(185, 130, 255, 0.08);

            color: #c69cff;

            font-size: 25px;

            font-weight: 700;

            box-shadow:
                0 0 25px rgba(185, 130, 255, 0.12);
        }

        .team-card h3 {
            color: #ffffff;

            margin-bottom: 8px;
        }

        .team-card .role {
            color: #c69cff;

            font-size: 13px;

            font-weight: 600;

            letter-spacing: 1px;
        }

        .team-card p {
            color: #81798e;

            font-size: 13px;

            margin-top: 12px;
        }


        /* ================================
           VISION
        ================================= */

        .vision-box {
            padding: 45px;

            text-align: center;

            border-radius: 24px;

            border: 1px solid rgba(185, 130, 255, 0.20);

            background:
                radial-gradient(
                    circle at center,
                    rgba(185, 130, 255, 0.10),
                    rgba(255, 255, 255, 0.015) 60%
                );
        }

        .vision-box h2 {
            color: #ffffff;

            font-size: 32px;

            margin-bottom: 15px;
        }

        .vision-box h2 span {
            color: #c69cff;
        }

        .vision-box p {
            max-width: 750px;

            margin: auto;

            color: #81798e;

            line-height: 1.8;
        }


        /* ================================
           TECHNOLOGIES
        ================================= */

        .tech-list {
            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 14px;

            margin-top: 25px;
        }

        .tech-item {
            padding: 12px 22px;

            border: 1px solid rgba(185, 130, 255, 0.20);

            border-radius: 50px;

            color: #c69cff;

            background: rgba(185, 130, 255, 0.05);

            font-size: 14px;

            transition: 0.3s ease;
        }

        .tech-item:hover {
            border-color: rgba(185, 130, 255, 0.60);

            box-shadow:
                0 0 20px rgba(185, 130, 255, 0.15);

            transform: translateY(-3px);
        }


        /* ================================
           GIANT NOTEHUB
           SAME STYLE AS HOME PAGE
        ================================= */

        .about-footer {
            position: relative;

            margin-top: 120px;

            padding: 80px 0 30px;

            text-align: center;

            border-top:
                1px solid rgba(190, 150, 255, 0.10);

            overflow: hidden;

            background: #07060a;
        }


        /* Lavender glow behind NOTEHUB */

        .about-footer::before {
            content: "";

            position: absolute;

            width: 600px;
            height: 220px;

            left: 50%;
            bottom: 20px;

            transform: translateX(-50%);

            background: rgba(185, 130, 255, 0.12);

            filter: blur(100px);

            border-radius: 50%;

            pointer-events: none;
        }


        /* Giant NOTEHUB */

        .about-footer h2 {
            position: relative;

            z-index: 2;

            width: 100%;

            color: #c69cff;

            font-size: clamp(80px, 17vw, 230px);

            font-weight: 800;

            line-height: 0.82;

            letter-spacing: -10px;

            text-align: center;

            white-space: nowrap;

            margin: 0;

            opacity: 0.95;

            text-shadow:
                0 0 15px rgba(198, 156, 255, 0.35),
                0 0 40px rgba(198, 156, 255, 0.20),
                0 0 80px rgba(198, 156, 255, 0.10);
        }

        .about-footer p {
            position: relative;

            z-index: 2;

            color: #81798e;

            margin-top: 25px;

            font-size: 14px;
        }


        /* ================================
           TABLET
        ================================= */

        @media (max-width: 900px) {

            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .team-owner {
                grid-column: 1 / 3;
            }

            .why-grid {
                grid-template-columns: 1fr;
            }

        }


        /* ================================
           MOBILE
        ================================= */

        @media (max-width: 600px) {

            .about-hero {
                padding: 80px 20px 60px;
            }

            .about-hero h1 {
                font-size: 42px;
            }

            .about-hero p {
                font-size: 14px;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .team-owner {
                grid-column: auto;

                width: 100%;
            }

            .vision-box {
                padding: 30px 20px;
            }

            .about-footer {
                padding-top: 60px;
            }

            .about-footer h2 {
                font-size: 18vw;

                letter-spacing: -3px;
            }

        }

    </style>

</head>


<body>


    <!-- ================================
         NAVBAR
    ================================= -->

    <header class="navbar">

        <div class="logo">

            <span class="logo-icon">✦</span>

            NoteHub

        </div>


        <nav>

            <a href="index.html">
                Home
            </a>

            <a href="notes.php">
                Browse Notes
            </a>

            <a href="pyq.php">
                PYQs
            </a>

            <a href="index.html#important">
                Important Questions
            </a>

            <a href="about.php" class="active">
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



    <!-- ================================
         ABOUT PAGE
    ================================= -->

    <main class="about-page">


        <!-- HERO -->

        <section class="about-hero">

            <span class="section-label">
                NOTEHUB / ABOUT US
            </span>

            <h1>

                Meet the people behind

                <span>NoteHub</span>

            </h1>

            <p>

                NoteHub is a student-focused platform created
                to make academic resources easier to find,
                organize and access.

            </p>

        </section>



        <div class="about-container">


            <!-- ================================
                 WHAT IS NOTEHUB
            ================================= -->

            <section class="about-block">

                <h2>

                    What is

                    <span>NoteHub?</span>

                </h2>


                <p>

                    NoteHub is a centralized academic resource
                    platform designed for students. It brings
                    notes, previous year question papers and
                    important questions together in one
                    organized place.

                </p>


                <p>

                    Our goal is to make exam preparation simpler
                    by reducing the time students spend searching
                    for study material.

                </p>

            </section>



            <!-- ================================
                 WHY WE BUILT NOTEHUB
            ================================= -->

            <section class="about-block">

                <h2>

                    Why We Built

                    <span>NoteHub</span>

                </h2>


                <div class="why-grid">


                    <div class="why-card">

                        <div class="why-icon">
                            📚
                        </div>

                        <h3>
                            Organized Resources
                        </h3>

                        <p>

                            Keep notes, PYQs and important
                            questions organized in one platform.

                        </p>

                    </div>



                    <div class="why-card">

                        <div class="why-icon">
                            ⚡
                        </div>

                        <h3>
                            Easy Access
                        </h3>

                        <p>

                            Find the study material you need
                            without searching through multiple
                            folders.

                        </p>

                    </div>



                    <div class="why-card">

                        <div class="why-icon">
                            🚀
                        </div>

                        <h3>
                            Student Built
                        </h3>

                        <p>

                            Created with the needs of students
                            and academic preparation in mind.

                        </p>

                    </div>


                </div>

            </section>



            <!-- ================================
                 OUR TEAM
            ================================= -->

            <section class="about-block">


                <div class="team-heading">

                    <span class="section-label">
                        THE PEOPLE
                    </span>

                    <h2>

                        Our

                        <span>Team</span>

                    </h2>

                    <p>
                        Meet the people working behind NoteHub.
                    </p>

                </div>


                <div class="team-grid">


                    <!-- OWNER -->

                    <div class="team-card team-owner">

                        <div class="team-avatar">
                            KP
                        </div>

                        <h3>
                            Kishan Poojary
                        </h3>

                        <div class="role">
                            OWNER & PROJECT LEAD
                        </div>

                        <p>
                            Founder and project lead of NoteHub.
                        </p>

                    </div>



                    <!-- MEMBER 01 -->

                    <div class="team-card">

                        <div class="team-avatar">
                            M1
                        </div>

                        <h3>
                            Disha dharawat
                        </h3>

                        <div class="role">
                            CO-FOUNDER & TEAM MEMBER
                        </div>

                        <p>
                            Contributor to the NoteHub project.
                        </p>

                    </div>



                    <!-- MEMBER 02 -->

                    <div class="team-card">

                        <div class="team-avatar">
                            M2
                        </div>

                        <h3>
                            Yashshree deokate
                        </h3>

                        <div class="role">
                             DATA HANDLER & TEAM MEMBER
                        </div>

                        <p>
                            Contributor to the NoteHub project.
                        </p>

                    </div>



                    <!-- MEMBER 03 -->

                    <div class="team-card">

                        <div class="team-avatar">
                            M3
                        </div>

                        <h3>
                            Smit lingyat
                        </h3>

                        <div class="role">
                            DATA HANDLER & TEAM MEMBER
                        </div>

                        <p>
                            Contributor to the NoteHub project.
                        </p>

                    </div>


                </div>

            </section>



            <!-- ================================
                 VISION
            ================================= -->

            <section class="about-block">

                <div class="vision-box">

                    <h2>

                        Our

                        <span>Vision</span>

                    </h2>

                    <p>

                        We want to build a simple and organized
                        academic platform where students can
                        quickly discover the resources they need
                        for learning and exam preparation.

                    </p>

                </div>

            </section>



            <!-- ================================
                 TECHNOLOGIES
            ================================= -->

            <section class="about-block">


                <div class="team-heading">

                    <span class="section-label">
                        BUILT WITH
                    </span>

                    <h2>

                        Technologies Behind

                        <span>NoteHub</span>

                    </h2>

                </div>


                <div class="tech-list">

                    <div class="tech-item">
                        HTML
                    </div>

                    <div class="tech-item">
                        CSS
                    </div>

                    <div class="tech-item">
                        JavaScript
                    </div>

                    <div class="tech-item">
                        PHP
                    </div>

                    <div class="tech-item">
                        MySQL
                    </div>

                    <div class="tech-item">
                        XAMPP
                    </div>

                </div>

            </section>


        </div>



        <!-- ================================
             GIANT NOTEHUB
        ================================= -->

        <footer>
        

            <h2>
            NOTEHUB
            </h2>

            <p>
                Built by students, for students.
            </p>

        </footer>


    </main>


</body>

</html>