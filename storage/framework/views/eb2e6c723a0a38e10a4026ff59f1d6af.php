<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Gestion Etudiants'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo e(route('etudiants.index')); ?>">Gestion Etudiants</a>
            <div class="navbar-nav">
                <a class="nav-link" href="<?php echo e(url('/')); ?>">Accueil</a>
                <a class="nav-link" href="<?php echo e(route('etudiants.index')); ?>">Etudiants</a>
                <a class="nav-link" href="<?php echo e(route('etudiants.create')); ?>">Ajouter</a>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\admin\Documents\Codex\2026-06-11\tp-2-javascript-jquery-je-veux\outputs\tp3-laravel-etudiant\resources\views/layouts/app.blade.php ENDPATH**/ ?>