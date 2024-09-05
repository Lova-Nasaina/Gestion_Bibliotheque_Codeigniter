<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Animes - Row 1</title>
    <!-- Lien vers Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/synopsis.css">
    <style>
       .anime-card {
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 30px;
    display: flex;
    align-items: center;
    /* background-color: #f9f9f9; */
    background-color: red;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.anime-card img {
    width: 400px; /* Taille de l'image augmentée à grande échelle */
    height: auto;
    border-radius: 5px;
}

.anime-info {
    margin-left: 30px;
    flex-grow: 1;
}

.anime-info h5 {
    margin: 0 0 10px 0;
    font-size: 1.5rem;
}

.rating {
    color: #e74c3c;
    margin-bottom: 10px;
}

.rating-stars {
    color: #f39c12;
    font-size: 1.4rem;
}

.vf-badge {
    background-color: #e74c3c;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
}

.date-pill {
    background-color: #ddd;
    border-radius: 20px;
    padding: 8px 12px;
    font-size: 16px;
    margin-right: 5px;
    display: inline-block;
}

    </style>
</head>

<body>
    <div class="container mt-4">
        <!-- Row 1 -->
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex anime-card">
                    <img src="https://via.placeholder.com/400x600" alt="Tensei Shitara Slime Datta Ken">
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
                    <img src="https://via.placeholder.com/400x600" alt="Quality Assurance in Another World">
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
    </div>

    <!-- Lien vers Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>