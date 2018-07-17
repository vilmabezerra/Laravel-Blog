<?php $__env->startSection('content'); ?>
                                
                                <?php if($paginator->hasPages()): ?>
                                    <nav class="pagination" style="position: relative">

                                        <ul class="pagination-list">
                                            
                                            <?php $__currentLoopData = $paginator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="pagination-list is-current">
                                                <div class="blog-post">
                                                    <h3 class="blog-post-title"><?php echo e($element->title); ?></h3>
                                                    <p class="blog-post-meta"> 
                                                       By <?php echo e($element->ownerid); ?> at <?php echo e($element->created_at->toFormattedDateString()); ?>

                                                    </p>
                                                    <p>
                                                        <?php echo e($element->description); ?>

                                                    </p>

                                                </div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>

                                        <p style="position: fixed; bottom: 0; width:100%; text-align: center">
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
                                        </p>
                                    </nav>
                                <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>