
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="text col-md-6 mt-5">
                <h3 class="mb-3">Contact Book</h3>
                <p> <strong>CRUD Contato.</strong>
                    <br>
                    A aplicação contem todos os contatos do sistema</strong>
                    <strong>Para ver detalhes do contato, é necesario efeturar o cadastro.</strong>
                </p>
                <a href="<?php echo e(route('contatos')); ?>"><button class="btn btn-success">Iniciar</button></a>
            </div>
            <div class="col-md-6">
                <img src="<?php echo e(url('img/photohome.png')); ?>" class="rounded float-end img-fluid" alt="Foto Home - Ilustração UI">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/contatos/index.blade.php ENDPATH**/ ?>