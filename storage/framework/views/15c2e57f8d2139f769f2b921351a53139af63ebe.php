<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
            <div class="text col-md-6 mt-5">
                <h3 class="mb-3">Gerencia de Contatos</h3>
                <?php if(auth()->guard()->guest()): ?>
                     <br>
                    <strong>A aplicação contem todos os contatos do sistema.</strong>
                    <p></p>
                    <strong>Efetue o login para fazer alterações no sistema.</strong>
                    <p></p>
                    
                 <?php else: ?>
                 <br>
                    <strong>Seja bem vindo ao nosso painel de gerencia de contatos.</strong>
                    <p></p>
                    <strong>Através dele voce pode gerenciar todos os seus contatos.</strong>
                    <p></p>
                   
                
                <?php endif; ?>
                <a href="<?php echo e(route('contatos')); ?>"><button class="btn btn-success">Iniciar</button></a>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>