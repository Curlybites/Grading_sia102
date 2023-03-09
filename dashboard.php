<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>

    <link rel="stylesheet" href="../Shs_Grading/css/dashboard.css">
    <link rel="stylesheet" href="../Shs_Grading/css/navbar.css">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- material icon link -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
</head>

<body>

    <main>
        <div class="sidebar">
            <div class="logo d-flex align-items-center justify-content-center">
                <a href="professor.php">
                    <span class="material-icons-sharp">school</span>
                    <h4>SCHOOL</h4>
                </a>
            </div>

            <div class="list">
                <ul>
                    <li>
                        <a href="dashboard.php" class="active">
                            <span class="material-icons-sharp">dashboard</span>
                            Dashboard</a>
                    </li>
                    <li>
                        <a href="studentlist.php" class="a">
                            <span class="material-icons-sharp">people</span>
                            Student List</a>
                    </li>
                    <li>
                        <a href="subjectlist.php" class="a">
                            <span class="material-icons-sharp">subject
                            </span>
                            Subject List</a>
                    </li>
                    <li>
                        <a href="classlist.php" class="a">
                            <span class="material-icons-sharp">class</span>
                            Class List</a>
                    </li>
                </ul>

            </div>

        </div>

        <div class="mainbar">
            <?php
            include '../Shs_Grading/includes/navbar.php'
            ?>

            <div class="numbers">

                <div class="cards">
                    <div class="top-cards">
                        <span class="material-icons-sharp">people</span>
                        <small>Number Of Section </small>

                    </div>

                    <h5>19</h5>

                </div>

                <div class="cards">
                    <div class="top-cards">
                        <span class="material-icons-sharp">people</span>
                        <small>Number Of Section </small>
                    </div>

                    <h5>19</h5>
                </div>

                <div class="cards">
                    <div class="top-cards">
                        <span class="material-icons-sharp">people</span>
                        <small>Number Of Section </small>
                    </div>

                    <h5>19</h5>
                </div>

            </div>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>