<div class="header-nav">
    <div class="title">
        <h3>Grading System</h3>
    </div>

    <div class="profile">
        <img src="../Shs_Grading/images/images.jpg" alt="" onclick="toggleMenu()">
    </div>

    <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
            <a href="dashboard.php" class="sub-menu-link d-flex align-items-center justify-content-center">
                <span class="material-icons-sharp">
                    logout
                </span>
              Sign out
            </a>
        </div>
    </div>

    <script>
        let subMenu = document.getElementById("subMenu");
        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>

</div>