<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_email'])) {
    header("Location: ../access_denegate.php");
    exit();
}
$email_usuario = $_SESSION['usuario_email'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .sidebar {
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
            padding-top: 1rem;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
        }

        .sidebar .nav-link {
            color: #343a40;
            display: flex;
            align-items: center;
        }

        .sidebar .nav-link:hover {
            background-color: #e9ecef;
            color: #0078d7;
        }

        .sidebar .nav-link i {
            margin-right: 0.5rem;
        }

        main {
            margin-left: 250px;
            padding: 1rem;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                height: auto;
                width: 100%;
            }
            main {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <button class="btn btn-primary d-md-none mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#menu">Menú</button>
                <div id="menu" class="collapse d-md-block">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                            <a class="nav-link active" href="#" data-section="inico">
                                <i class="bi bi-house-fill"></i> Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../admin/maestros.php" data-section="maestros">
                                <i class="bi bi-person-fill"></i> Maestros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-section="materias">
                                <i class="bi bi-book-fill"></i> Materias
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="main-content">
                <!-- Contenido dinámico -->
                 <h1>Bienvenido Administrador</h1>
                <p>Usuario: <?php echo $email_usuario; ?></p>
                <p>Este es el panel de control del administrador.</p>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
