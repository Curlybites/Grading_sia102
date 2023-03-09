<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>

    <link rel="stylesheet" href="../Shs_Grading/css/dashboard.css">
    <link rel="stylesheet" href="../Shs_Grading/css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
</head>
<body>

   <main>
        <div class="sidebar">
            <div class="logo">
                <a href="professor.php">
                <span class="material-icons-sharp">school</span>
                <h4>SCHOOL</h4>
                </a>
            </div>

            <div class="list">
                <ul >
                    <li>
                        <a href="dashboard.php">
                        <span class="material-icons-sharp">dashboard</span>    
                        Dashboard</a>
                    </li>
                    <li>
                        <a href="studentlist.php" class="active">
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

        <div class="main-content">
      
        <div class="table-main">
                <table class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="active">
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Middle Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Halaman</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Ham</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>Bird</td>
                            <td>Hatdog</td>
                        </tr>
                    </tbody>  
                </table>
        </div>
        
        </div>
        
        
         </div>
   </main>




    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

