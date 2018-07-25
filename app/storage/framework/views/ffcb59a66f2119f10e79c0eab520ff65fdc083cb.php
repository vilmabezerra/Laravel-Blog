<!-- Welcome page contain Pagination of all the published posts -->

<?php $__env->startSection('content'); ?>
                                <div class="content has-text-centered">
                                    <nav class="pagination" >

                                        <ul class="pagination-list">
                                            
                                            <?php $__currentLoopData = $paginator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="pagination-list is-current">
                                                <div class="blog-post">
                                                    <h3 class="blog-post-title"><?php echo e($element->title); ?></h3>
                                                    <p class="blog-post-meta"> 
                                                       em <?php echo e($element->created_at->toFormattedDateString()); ?>

                                                    </p>
                                                    <p>
                                                        <?php echo e($element->description); ?>

                                                    </p>

                                                </div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                        
                                    </nav>
                                    
                                </div>

                                <hr/>

                                <p class="row">
                                    <div class="columns is-vcentered">
                                        <div class="column is-3"></div>
                                        <?php if($paginator->onFirstPage()): ?>
                                            <a class="pagination-previous" disabled>Previous</a>
                                        <?php else: ?>
                                            <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" class="pagination-previous">Previous</a>
                                        <?php endif; ?>

                                        <?php if($paginator->hasMorePages()): ?>
                                            <a class="pagination-next" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">Next</a>
                                        <?php else: ?>
                                            <a class="pagination-next" disabled>Next page</a>
                                        <?php endif; ?>
                                    </div>
                                </p>
                               
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>