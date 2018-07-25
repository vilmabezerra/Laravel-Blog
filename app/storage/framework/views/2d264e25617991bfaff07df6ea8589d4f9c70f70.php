<!-- Home page - available to logged users only-->
<?php $__env->startSection('content'); ?>

            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <a href="post/create" class="btn btn-secondary">Criar Postagem</a>
                            </p>
                            <p>
                                <a href="post" class="btn btn-secondary">Visualizar Minhas Postagem</a>
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
                                
                                
                            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>