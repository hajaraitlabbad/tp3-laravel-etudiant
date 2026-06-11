<?php $__env->startSection('title', 'Ajouter un etudiant'); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-white border rounded shadow-sm p-4">
        <h1 class="h3 mb-4">Ajouter un etudiant</h1>

        <form action="<?php echo e(route('etudiants.store')); ?>" method="POST">
            <?php echo $__env->make('etudiants.form', ['bouton' => 'Enregistrer'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\admin\Documents\Codex\2026-06-11\tp-2-javascript-jquery-je-veux\outputs\tp3-laravel-etudiant\resources\views/etudiants/create.blade.php ENDPATH**/ ?>