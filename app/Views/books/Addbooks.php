<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Administrator Section</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person-circle"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Administration Table</a>
                    <a href="#" class="list-group-item list-group-item-action">Add news Books</a>
                    <a href="<?= base_url('ViewsCommand') ?>" class="list-group-item list-group-item-action">View Command Users</a>
                    <a href="<?= base_url('Dashbord') ?>" class="list-group-item list-group-item-action">Main Page</a>
                </div>
            </div>
            <div class="col-md-9">
                <!-- Dashboard content -->
                <!-- <div class="card">
                    <div class="card-header">
                        Dashboard
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nouveau Livre!</h5>
                        <p class="card-text">Vous pouvez Voir et Editeur les commandes des Users et Ajouter de Nouveau Livre</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    
                    
                    
                    </div>
                </div> -->
                <div class="container mt-5">
                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white text-center">
                            <h3>Ajouter un Livre</h3>
                        </div>
                        <div class="card-body">


                            <?php if (session()->getFlashdata('success')): ?>
                                <div class="alert alert-success">
                                    <?= session()->getFlashdata('success') ?>
                                </div>
                            <?php endif; ?>

                            <form method="post" action="<?= base_url('AddLivre') ?>">
                                <!-- Titre -->
                                <div class="mb-3">
                                    <label for="title" class="form-label">Titre du Livre</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Entrez le titre du livre" required>
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="Descriptions" rows="4" placeholder="Entrez la description" required></textarea>
                                </div>

                                <!-- Auteur -->
                                <div class="mb-3">
                                    <label for="author" class="form-label">Auteur</label>
                                    <input type="text" class="form-control" id="author" name="author" placeholder="Entrez le nom de l'auteur" required>
                                </div>

                                <!-- Bouton de soumission -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success w-50">Ajouter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>