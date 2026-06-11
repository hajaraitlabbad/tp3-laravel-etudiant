<?php $__env->startSection('title', $nom); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-white border rounded shadow-sm p-4">
        <h1 class="mb-3"><?php echo e($nom); ?></h1>
        <p class="text-muted mb-4">
            Correction du TP 3 Laravel: modele, migration, controleur resource, vues Blade et Bootstrap.
        </p>
        <a href="<?php echo e(route('etudiants.index')); ?>" class="btn btn-primary">Voir les etudiants</a>
        <a href="<?php echo e(route('etudiants.create')); ?>" class="btn btn-outline-primary">Ajouter un etudiant</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\admin\Documents\Codex\2026-06-11\tp-2-javascript-jquery-je-veux\outputs\tp3-laravel-etudiant\resources\views/welcome.blade.php ENDPATH**/ ?>