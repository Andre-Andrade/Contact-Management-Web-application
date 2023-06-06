
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card my-5">
            <div class="container-form">
                <div class="form">
                    <div class="card-header">
                        <div class="titulo">
                            <h3 class="fw-bold text-center">Adiciona Novo contato</h3>
                        </div>
                    </div>
                    <div id="fade" class="d-none d-flex justify-content-center">
                        <div id="loader" class="spinner-border text-info d-none" role="status">
                            <span class="visually-hidden">Loading</span>
                        </div>
                        <div id="message" class="d-none">
                            <div class="alert alert-light" role="alert">
                                <strong>
                                    <h4 class="text-center">Error:</h4>
                                </strong>
                                <strong>
                                    <p class="text-danger"></p>
                                </strong>
                                <div class="d-flex justify-content-center">
                                    <button id="close-message" type="button" class="btn btn-secondary">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="createcontato" class="row g-3 mt-4" action="<?php echo e(route('contatos.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                           
                            <div class="col-md-4">
                                <label for="nome" class="form-label">Nome</label>
                                <input name="nome" type="text"
                                    class="form-control <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nome"
                                    placeholder="Nome">
                                <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="alert alert-danger mt-2 p-2 error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email"
                                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email"
                                    placeholder="Email">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="alert alert-danger mt-2 p-2 error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-4">
                                <label for="contato" class="form-label">Contato</label>
                                <input name="contato" type="tel"
                                    class="form-control <?php $__errorArgs = ['contato'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="contato"
                                    placeholder="(99) 99999-9999">
                                <?php $__errorArgs = ['contato'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="alert alert-danger mt-2 p-2 error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-12 text-center ">
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                    Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/contatos/create.blade.php ENDPATH**/ ?>