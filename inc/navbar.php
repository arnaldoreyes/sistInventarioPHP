<nav class="navbar navbar-expand-lg bg-dark bg-gradient">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?view=home">
            <img src="./img/logo.png" width="50" height="50"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuarios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="index.php?view=user_new">Nuevo</a></li>
                        <li><a class="dropdown-item" href="index.php?view=user_list">Lista</a></li>
                        <li><a class="dropdown-item" href="index.php?view=user_search">Buscar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Nueva</a></li>
                        <li><a class="dropdown-item" href="#">Lista</a></li>
                        <li><a class="dropdown-item" href="#">Buscar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Nuevo</a></li>
                        <li><a class="dropdown-item" href="#">Lista</a></li>
                        <li><a class="dropdown-item" href="#">Por Categoría</a></li>
                        <li><a class="dropdown-item" href="#">Buscar</a></li>
                    </ul>
                </li>
            </ul>
            <div class="col-md-3 text-end">
                <a class="btn btn-sm btn btn-success me-2" role="button">Mi Cuenta</a>
                <a class="btn btn-sm btn-outline-danger" role="button" href="index.php?view=logout">Salir</a>
            </div>
        </div>
    </div>
</nav>