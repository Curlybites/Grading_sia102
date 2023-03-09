<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- custom style link-->
    <link rel="stylesheet" href="../Shs_Grading/css/login.css">
    <!-- material icon cdn -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    
</head>
<body>

    <div class="custom-shape-divider-bottom-1677079032">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
        </svg>
    </div>
    <nav>
        <div class="header_container">
            <div class="icon">
            <span class="material-icons-sharp">school</span>
            <h1>SCHOOL</h1>
            </div>

            <div class="title">
                <h5>Grading System</h5>
            </div>
        </div>

        <div class="header_title">
            <div class="school">
                <h1>Amlac Senior High School</h1>
                <P>created by SBIT3L Students</P>
            </div>
        </div>
    </nav>

    <section>
        <div class="header_section">
            <div class="illustration">
                <img src="../Shs_Grading/images/Education-cuate.png" alt="">
            </div>

            <div class="login_form">

             <h1>WELCOME TO GRADING SYSTEM</h1>

                <form action="" method="POST">
                    <input type="email" name="email" id="email" placeholder="Email" class="input" required>

                    <div class="eye">
                         <input type="password" name="password" id="password" placeholder="Password" class="input" required>

                        <span class="material-icons-sharp" id="eye">visibility_off</span>
                    </div>

                    <input type="submit" value="LOG IN" class="btn">
                </form>
            </div>
        </div>
    </section>

    <script src="./js/script.js"></script>
</body>
</html>