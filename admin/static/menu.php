<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="../home/home.php">
            <span class="align-middle">
                <img src="../../../images/logo.png" width="175px">
            </span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
            Visão Geral
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "home/home.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../home/home.php">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Português</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "english.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../home/english.php">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Inglês</span>
                </a>
            </li>

            <li class="sidebar-header">
                Português
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "consulta_home.php")) echo "active"; else if (strpos($_SERVER['REQUEST_URI'], "atualizar_home.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../home/consulta_home.php">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Página Inicial</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "sobre.php")) echo "active"; else if (strpos($_SERVER['REQUEST_URI'], "atualizar_sobre.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../sobre/consulta_sobre.php">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Sobre</span>
                </a>
            </li>


            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "servicos.php")) echo "active"; else if (strpos($_SERVER['REQUEST_URI'], "atualizar_servicosG.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../servicos/consulta_servicos.php">
                    <i class="align-middle" data-feather="scissors"></i> <span class="align-middle">Serviços</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "time.php")) echo "active"; else if (strpos($_SERVER['REQUEST_URI'], "atualizar_timeG.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../time/consulta_time.php">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Time</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "galeria.php")) echo "active"; else if (strpos($_SERVER['REQUEST_URI'], "atualizar_galeriaG.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../galeria/consulta_galeria.php">
                    <i class="align-middle" data-feather="image"></i> <span class="align-middle">Galeria</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "contato.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../contato/consulta_contato.php">
                    <i class="align-middle" data-feather="phone"></i> <span class="align-middle">Contato</span>
                </a>
            </li>

            <li class="sidebar-header">
                Inglês
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "consulta_homeEN")) echo "active"; else if (strpos($_SERVER['REQUEST_URI'], "atualizar_homeEN.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../home/consulta_homeEN.php">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "sobreEN.php")) echo "active"; else if (strpos($_SERVER['REQUEST_URI'], "atualizar_sobreEN.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../sobre/consulta_sobreEN.php">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">About</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "servicosEN")) echo "active"; else if (strpos($_SERVER['REQUEST_URI'], "atualizar_servicosGEN.php")) echo "active";?>">
                <a class="sidebar-link" href="../servicos/consulta_servicosEN.php">
                    <i class="align-middle" data-feather="scissors"></i> <span class="align-middle">Services</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "timeEN")) echo "active"; else if (strpos($_SERVER['REQUEST_URI'], "atualizar_timeGEN.php")) echo "active";?>">
                <a class="sidebar-link" href="../time/consulta_timeEN.php">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Team</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "galeriaEN")) echo "active"; else if (strpos($_SERVER['REQUEST_URI'], "atualizar_galeriaGEN.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../galeria/consulta_galeriaEN.php">
                    <i class="align-middle" data-feather="image"></i> <span class="align-middle">Gallery</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "contatoEN.php")) echo "active"; ?>">
                <a class="sidebar-link" href="../contato/consulta_contatoEN.php">
                    <i class="align-middle" data-feather="phone"></i> <span class="align-middle">Contact</span>
                </a>
            </li>

            <li class="sidebar-header">
                Diversos
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "icones")) echo "active"; ?>">
                <a class="sidebar-link" href="../icones/consulta_icones.php">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Ícones</span>
                </a>
            </li>

            <li class="sidebar-item <?php if (strpos($_SERVER['REQUEST_URI'], "cores")) echo "active"; ?>">
                <a class="sidebar-link" href="../cores/consulta_cores.php">
                    <i class="align-middle" data-feather="edit-2"></i> <span class="align-middle">Cores</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="../logout.php">
                    <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Sair</span>
                </a>
            </li>
        </ul>
    </div>
</nav>