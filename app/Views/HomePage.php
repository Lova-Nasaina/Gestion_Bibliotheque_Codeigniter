<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Animes</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/listbooks.css">
</head>
<body>  
    
    <div class="container mt-4">
        
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex anime-card">
                    <img src="https://via.placeholder.com/100" alt="Anime Image">
                    <div class="anime-info">
                        <h5>Tensei Shitara Slime Datta Ken 3 (VF)</h5>
                        <p class="rating">
                            <span class="rating-stars">★★★★☆</span>
                            <span>4.7</span>
                        </p>
                        <div>
                            <span class="date-pill">17</span>
                            <span>August 31, 2024</span>
                        </div>
                        <div>
                            <span class="date-pill">16</span>
                            <span>August 24, 2024</span>
                        </div>
                    </div>
                    <div class="ms-auto vf-badge">VF</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex anime-card">
                    <img src="https://via.placeholder.com/100" alt="Anime Image">
                    <div class="anime-info">
                        <h5>Quality Assurance in Another World (VF)</h5>
                        <p class="rating">
                            <span class="rating-stars">★★★★★</span>
                            <span>4.8</span>
                        </p>
                        <div>
                            <span class="date-pill">09</span>
                            <span>August 31, 2024</span>
                        </div>
                        <div>
                            <span class="date-pill">08</span>
                            <span>August 24, 2024</span>
                        </div>
                    </div>
                    <div class="ms-auto vf-badge">VF</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="d-flex anime-card">
                    <img src="https://via.placeholder.com/100" alt="Anime Image">
                    <div class="anime-info">
                        <h5>ATRI: My Dear Moments</h5>
                        <p class="rating">
                            <span class="rating-stars">★★★★☆</span>
                            <span>4.2</span>
                        </p>
                        <div>
                            <span class="date-pill">08</span>
                            <span>August 31, 2024</span>
                        </div>
                        <div>
                            <span class="date-pill">07</span>
                            <span>August 24, 2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex anime-card">
                    <img src="https://via.placeholder.com/100" alt="Anime Image">
                    <div class="anime-info">
                        <h5>Alya Sometimes Hides Her Feelings in Russian (VF)</h5>
                        <p class="rating">
                            <span class="rating-stars">★★★★★</span>
                            <span>4.8</span>
                        </p>
                        <div>
                            <span class="date-pill">02</span>
                            <span>August 31, 2024</span>
                        </div>
                        <div>
                            <span class="date-pill">01</span>
                            <span>August 22, 2024</span>
                        </div>
                    </div>
                    <div class="ms-auto vf-badge">VF</div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/dashbord.css">
    <link rel="stylesheet" href="css/listbooks.css">
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
    </div>
    <?php
    $i = 0;
    ?>
    <?php if (!empty($books) && is_array($books)): ?>
        <?php foreach ($books as $book): ?>

            <?php if ($i % 2 == 0):  ?>
                <div class="container mt-4">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex anime-card">
                                <img src="<?= base_url("sary/") . esc($book['profil']) ?>" alt="Anime Image">
                                <div class="anime-info">
                                    <h5><?= esc($book['title']) ?></h5>
                                    <p class="rating">
                                        <span class="rating-stars">★★★★☆</span>
                                        <span>Author : <?= esc($book['author']) ?></span>
                                    </p>
                                    <div>
                                      <a href="show/<?=$book['id']?>" style="text-decoration: none; color:black;"><span class="date-pill " >Voir le Synopsis</span></a>  
                                        <!-- <span>August 31, 2024</span> -->
                                    </div>
                                    <span class="btn rating-stars"><?= esc($book['statut_commande']) ?></span>
                                    <!-- <div>
                                        <span class="date-pill"></span>
                                        <span>August 24, 2024</span>
                                    </div> -->
                                </div>
                                <div class="ms-auto vf-badge">VF</div>
                            </div>
                        </div>

                    <?php else : ?>
                        <div class="col-md-6">
                            <div class="d-flex anime-card">
                                <img src="<?= base_url("sary/") . esc($book['profil']) ?>" alt="Anime Image">
                                <div class="anime-info">
                                    <h5><?= esc($book['title']) ?></h5>
                                    <p class="rating">
                                        <span class="rating-stars">★★★★★</span>
                                        <   span>author : <?= esc($book['author']) ?></span>
                                    </p>
                                    <div>
                                      <a href="" style="text-decoration: none; color:black;"><span class="date-pill " >Voir le Synopsis</span></a>  
                                        <!-- <span>August 31, 2024</span> -->
                                    </div>
                                    <span class="btn rating-stars"><?= esc($book['statut_commande']) ?></span>
                                   
                                </div>
                                <div class="ms-auto vf-badge">VF</div>
                            </div>
                        </div>
                    </div>

                <?php endif ?>
                <?php
                $i++;
                ?>

            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun livre</p>
        <?php endif ?>


        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>