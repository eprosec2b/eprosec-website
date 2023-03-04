<?php session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Home</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Cursos</a></li>
                </ul>
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
        <?php echo isset($_SESSION['nome'], $_SESSION['sobrenome'], $_SESSION['cargo']) 
                ? '<a href="dashboard.php"><i class="bx bxs-user"></i></a>' 
                : '<a href="index.php"><i class="bx bxs-user"></i></a>'; ?>
    </div>

    <div class="name-job">
        <div class="profile_name">
            <?php if(isset($_SESSION['nome'], $_SESSION['sobrenome'])) {
                $nome = htmlspecialchars($_SESSION['nome']);
                $sobrenome = htmlspecialchars($_SESSION['sobrenome']);
                    echo "$nome $sobrenome";
                } else {
                    echo 'Faça Login';
                } ?>
        </div>

        <div class="job"><?php echo isset($_SESSION['cargo']) ? htmlspecialchars($_SESSION['cargo']) : ''; ?></div>
    </div>

    <?php if (isset($_SESSION['nome'], $_SESSION['sobrenome'], $_SESSION['cargo'])) { ?>
        <a href="logout.php"><i class="bx bx-log-out"></i></a>
    <?php } else { ?>
        <a href="login.php"><i class="bx bx-log-in"></i></a>
    <?php } ?>
</div>


                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
        <div class="centro" style="position: static; top: 0; left: 0; width: 100%; height: 100%;">
            <img id="imagem" src="EPROSEC (1).png" alt="" style="width: 100%; height: 100%; object-fit: cover;">
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