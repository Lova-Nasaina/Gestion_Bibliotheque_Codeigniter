<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/dashbord.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestion Bibliothèque</a>
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
                        <a class="nav-link" href="<?= base_url('logout') ?>"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <!-- <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Analytics</a>
                    <a href="#" class="list-group-item list-group-item-action">Reports</a>
                    <a href="#" class="list-group-item list-group-item-action">Settings</a>
                </div>
            </div>
            <div class="col-md-9">
                
                <div class="card">
                    <div class="card-header">
                        Dashboard
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Welcome to your dashboard!</h5>
                        <p class="card-text">Here is where you can manage your data and settings.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Consulter les listes de livre</h2>
        <table class="table table-hover table-bordered">

           <thead class="table-dark">
                <tr>
                    <th scope="c:ol">ID</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php if(!empty($books) && is_array($books)): ?>
            <?php foreach($books as $book): ?>
        
                <tr>
                    <th scope="row"><?= esc($book['id']) ?></th>
                    <td><?= esc($book['title']) ?></td>
                    <td><?= esc($book['author']) ?></td>
                    <td><?= esc($book['Descriptions']) ?></td>
                    <td><?= esc($book['statut_commande']) ?></td>
                </tr>
                
            <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun livre</p>
            <?php endif ?>
            </tbody>
        </table>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>