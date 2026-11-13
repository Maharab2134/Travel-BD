<div class="bc-car-term-featured-box">
        <!--[if BLOCK]><![endif]--><?php if(!empty($list_term)): ?>
        <div class="container">
            <div class="title">
                <?php echo e($title); ?>

            </div>
            <!--[if BLOCK]><![endif]--><?php if($desc): ?>
                <div class="sub-title">
                    <?php echo e($desc); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <div class="row">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $list_term; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $image_url = get_file_url($item->image_id, 'full');
                    $page_search = Modules\Car\Models\Car::getLinkForPageSearch(false , [ 'terms[]' =>  $item->id] );
                    $translation = $item->translate();
                    ?>
                    <div class="col-md-6 col-md-4 col-lg-3">
                        <a href="<?php echo e($page_search); ?>">
                            <div class="featured-item">
                                <div class="image">
                                    <img src="<?php echo e($image_url); ?>" class="img-responsive" alt="<?php echo e($translation->name); ?>">
                                </div>
                                <h4 class="text">
                                    <?php echo e($translation->name); ?>

                                </h4>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>

<?php /**PATH /home/creativedesignbd/travel.creativedesign.com.bd/bc-cms/themes/BC/Car/Views/frontend/blocks/term-featured-box/index.blade.php ENDPATH**/ ?>