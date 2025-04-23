<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Lists</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- Hotel Lists Section -->
    <section class="hotel-list-section">
        <div class="container">
            <h1 class="text-center mb-5">Available Hotels</h1>
            <div class="row">

            <?php
            include 'db.php';

            // Fetch hotel data
            $query = $pdo->query("SELECT * FROM hotels");
            while ($hotel = $query->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= htmlspecialchars($hotel['image_url']) ?>" class="card-img-top" alt="<?= htmlspecialchars($hotel['name']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($hotel['name']) ?></h5>
                            <p class="card-text">
                                Location: <?= htmlspecialchars($hotel['location']) ?><br>
                                Rating: 
                                <?php for ($i = 1; $i <= floor($hotel['rating']); $i++) { ?>
                                    <i class="fa-solid fa-star text-warning"></i>
                                <?php } ?>
                                <?php if ($hotel['rating'] - floor($hotel['rating']) > 0) { ?>
                                    <i class="fa-solid fa-star-half-alt text-warning"></i>
                                <?php } ?>
                                <?= htmlspecialchars($hotel['rating']) ?>
                            </p>
                            <p class="card-text"><strong>Price:</strong> $<?= htmlspecialchars($hotel['price']) ?> / night</p>
                            <a href="hotel-details.php?id=<?= htmlspecialchars($hotel['id']) ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-J6qa4849blE2+k9t8sr0vbxT5dS3U6lfz6DwzRL0RLzSlHJ0rxI7Kdhc+tk1WZ2x" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG81Y6iIhZpSAf3ymqMQ7t27MLb4Q2R8a7Q5GpVx1AIkCxkKMeBGAJyZkN2" crossorigin="anonymous"></script>
</body>
</html>
