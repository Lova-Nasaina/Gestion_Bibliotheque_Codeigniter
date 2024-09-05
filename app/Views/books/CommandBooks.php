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
                    <a href="<?= base_url('AddBook') ?>" class="list-group-item list-group-item-action">Add news Books</a>
                    <a href="#" class="list-group-item list-group-item-action">View Command Users</a>
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
                        <h5 class="card-title">View commande User!</h5>
                        <p class="card-text">Vous pouvez Voir et Editeur les commandes des Users et Ajouter de Nouveau Livre</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div> -->
                    <div class="container mt-5">
        <h3 class="text-center mb-4">Liste des Commandes de Livres</h3>
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle shadow-sm">
                <thead class="table-primary text-center">
                    <tr>
                        <th scope="col">Nom d'utilisateur</th>
                        <th scope="col">Titre du Livre</th>
                        <th scope="col">Durée de la Commande</th>
                        <th scope="col">Validation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jean Dupont</td>
                        <td>Le Monde de Sophie</td>
                        <td>2 jours</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success btn-sm">Valider</button>
                            <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Marie Legrand</td>
                        <td>Les Misérables</td>
                        <td>5 jours</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success btn-sm">Valider</button>
                            <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Paul Martin</td>
                        <td>L'Alchimiste</td>
                        <td>3 jours</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success btn-sm">Valider</button>
                            <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
