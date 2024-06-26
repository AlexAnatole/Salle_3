<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?php echo @$Titre; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= PATH ?>/css/index.css">
    
    <link rel="stylesheet" href="../../NPM/node_modules/sweetalert2/dist/sweetalert2.css">
</head>

<body>

    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="<?= PATH ?>/">Accueil</a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/continents">Gestion des Continents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/lespays">Gestion des Pays</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/marques">Gestion des Marques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/tickets">Gestion des Tickets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <header>
                <?php
                $scriptJS = "";
            // Y a t il un message d'alert à afficher
            if (isset($message)) {
                if (!isset($type_message)) {
                    $type_message ="info";
                    
                }
                if ($type_message == "success") {
                    $scriptJS = "const Toast = Swal.mixin({
                        toast: true,
                        position: 'center',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      
                      Toast.fire({
                        icon: 'success',
                        title: '{$message}'
                      })";
                }
                echo "<div class='alert alert-$type_message alert-dismissible'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                    $message
                </div>";
            }
        ?>
                <?= $content ?>

                <footer>
                    <h2>KHERIS Saïd -- ANATOLE Alexy</h2>
                </footer>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

                <script src="../../NPM/node_modules/sweetalert2/dist/sweetalert2.js"></script>

                <script>
                    <?php
                        echo @$scriptJS;
                    ?>
                </script>

    </div>
    
</body>

</html>