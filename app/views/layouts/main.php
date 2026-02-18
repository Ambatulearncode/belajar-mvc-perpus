<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Perpustakaan MVC' ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons (lebih ringan dari FA) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="app">
        <!-- Navbar -->
        <?php $this->renderPartial('navbar'); ?>

        <!-- Main Content -->
        <main class="main-content">
            <div class="container">
                <?php include_once __DIR__ . "/../{$view}.php"; ?>
            </div>
        </main>

        <!-- Footer -->
        <?php $this->renderPartial('footer'); ?>
    </div>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>