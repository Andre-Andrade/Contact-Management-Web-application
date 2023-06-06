
<?php $__env->startSection('content'); ?>
    <div class="container mt-4">

        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Contatos</h2>
                </div>
                <div class="card-body">
                   <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('contatos.create')); ?>" class="btn btn-success text-center" title="Adiciona novo contato">
                        <i class="fas fa-plus-circle"></i> Novo contato
                    </a>
                  <?php endif; ?>      
                    <div class="table-responsive">
                        <?php if(count($contatos) > 0): ?>
                            <?php if(session('message')): ?>
                                <div class="alert alert-success p-3 mt-3"><?php echo e(session('message')); ?></div>
                            <?php endif; ?>
                            <?php if(session('deleted')): ?>
                                <div class="alert alert-danger p-3 mt-3"><?php echo e(session('deleted')); ?></div>
                            <?php endif; ?>
                            <?php if(session('updated')): ?>
                                <div class="alert alert-success p-3 mt-3"><?php echo e(session('updated')); ?></div>
                            <?php endif; ?>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Contato</th>
                                      <?php if(auth()->guard()->check()): ?>   
                                        <th></th>
                                       <?php endif; ?>      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($contato->id); ?></td>
                                            <td><?php echo e($contato->nome); ?></td>
                                            <td><?php echo e($contato->email); ?></td>
                                            <td><?php echo e($contato->contato); ?></td>
                                        <?php if(auth()->guard()->check()): ?>    
                                            <td style="width:250px;">
                                                <a href="<?php echo e(route('contatos.edit', $contato->id)); ?>"
                                                    title="Edit Student"><button style="height:50px;width:60px;"
                                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i>
                                                        Edit</button></a>
                                                <form method="POST" action="<?php echo e(route('contatos.delete', $contato->id)); ?>"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <?php echo csrf_field(); ?>
                                                    <button style="height:50px;width:60px;" type="submit"
                                                        class="btn btn-danger btn-sm" title="Delete "
                                                        onclick="return confirm(&quot;Confirma delete?&quot;)"><i
                                                            class="fa fa-pen-trash-o" aria-hidden="true"></i>
                                                        Delete</button>
                                                </form>
                                            </td>
                                        <?php endif; ?>    
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <div class="alert alert-warning mt-3">
                                <strong> Nenhum contato encontrado!</strong>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/contatos/contato.blade.php ENDPATH**/ ?>