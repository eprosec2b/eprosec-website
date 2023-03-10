<?php session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPROSEC</title>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <img src="Logo.png" alt=""
                style="margin-left: 20%; min-width: 50px; width: 50%; align-items: center; max-width: 80px;">
            <span class="logo_name">EPROSEC</span>
        </div>
        <ul class="nav-links">
            <li>
            <div class="iocn-link">
                    <a href="index.php">
                    <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Home</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Cursos</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Cursos</a></li>
                    <li><a href="#">Técnico/a de Apoio à Gestão</a></li>
                    <li><a href="#">Programador/a de Informática</a></li>
                    <li><a href="#">Técnico/a de Apoio Psicossocial</a></li>
                    <li><a href="#">Técnico/a de Produção Agropecuária</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-news'></i>
                        <span class="link_name">Notícias</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Posts</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Login Form</a></li>
                    <li><a href="#">Card Designeofkeokfeokf</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Faltas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Análise</a></li>
                </ul>
            </li>
            <!--
            <li>
                <a href="#">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">123</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Chart</a></li>
                </ul>
            </li>
            -->
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-school'></i>
                        <span class="link_name">Secretaria</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Secretaria</a></li>
                    <li><a href="horarios.html">Horários</a></li>
                    <li><a href="#">Ementa</a></li>
                    <li><a href="#">Documentos</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-compass'></i>
                    <span class="link_name">ERASMUS+</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">ERASMUS+</a></li>
                </ul>
            </li>
            <!--
                <li>
                <a href="#">
                    <i class='bx bx-history'></i>
                    <span class="link_name">History</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">History</a></li>
                </ul>
            </li>
        -->
            <li>
                <a href="#">
                    <i class='bx bxs-contact'></i>
                    <span class="link_name">Contactos</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Contactos</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <i class='bx bxs-user'></i>
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                    <?php 
if (isset($_SESSION['nome'], $_SESSION['sobrenome'], $_SESSION['cargo'])) {
    $nome = htmlspecialchars($_SESSION['nome']);
    $sobrenome = htmlspecialchars($_SESSION['sobrenome']);
    $job = htmlspecialchars($_SESSION['cargo']);
    
    echo '<div class="profile_name">' . $nome .' ' . $sobrenome . '</div>';
    echo '<div class="job">' . $job . '</div>';
    echo '</div>';
    echo '<a href="logout.php"><i class="bx bx-log-out"></i></a>';
} else {
    echo '<div class="profile_name"> Faça Login </div>';
    echo '<div class="job"></div>';
    echo '</div>';
    echo '<a href="login.php"><i class="bx bx-log-in"></i></a>';
}
?>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
        <div class="centro">
            
        </div>
    </section>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
</body>
</html>
<?php
 } else {
    header("Location: index .php");
}
?>