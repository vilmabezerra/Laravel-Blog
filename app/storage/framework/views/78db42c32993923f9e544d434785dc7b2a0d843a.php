<?php $__env->startSection('content'); ?>
            <div class="card">
                <div class="card-header">Minhas Postagens</div>

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
                            <h6>Total: <?php echo e($counter); ?></h6>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="blog-post">
                                        <!--Post's Top line-->
                                        <hr/>

                                        <div class="m-t-10"></div>

                                        <!--Title-->
                                        <h3 class="blog-post-title"><?php echo e($element->title); ?></h3>

                                        <!--Creation date and Body-->
                                        <p class="blog-post-meta"> 
                                             em <?php echo e($element->created_at->toFormattedDateString()); ?>

                                        </p>
                                        <p>
                                            <?php echo e($element->description); ?>

                                        </p>

                                        <!-- Edit and Delete Buttons -->
                                        <p>
                                            <a href="post/<?php echo e($element->id); ?>/edit" class="btn btn-primary">Editar</a>


                                            <?php echo e(Form::open(['method' => 'delete', 'route' => ['post.destroy', $element->id]])); ?>

                                                <?php echo e(Form::hidden('id', $element->id)); ?>

                                                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                                            <?php echo e(Form::close()); ?>


                                        </p>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div> 
                </div>
            </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>