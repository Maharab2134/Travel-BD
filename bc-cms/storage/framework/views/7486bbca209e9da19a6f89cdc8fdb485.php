<div class="bc-box-category-tour">
    <!--[if BLOCK]><![endif]--><?php if($list_item): ?>
        <div class="container">
            <!--[if BLOCK]><![endif]--><?php if($title): ?>
                <div class="title">
                    <?php echo e($title); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php if(!empty($desc)): ?>
                <div class="desc">
                    <?php echo e($desc); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <div class="list-item owl-carousel">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $image_url = get_file_url($item['image_id'], 'full'); ?>
                        <!--[if BLOCK]><![endif]--><?php if( !empty( $item_cat =  $categories->firstWhere('id',$item['category_id']) )): ?>
                            <?php
                                $translate = $item_cat->translate();
                                $page_search = $item_cat->getLinkForPageSearch(false , [ 'cat_id[]' =>  $item_cat->id] );
                            ?>
                            <div class="item">
                                <a href="<?php echo e($page_search); ?>">
                                    <img src="<?php echo e($image_url); ?>" alt="<?php echo e($translate->name); ?>">
                                    <span class="text-title"><?php echo e($translate->name); ?></span>
                                </a>
                            </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /home/creativedesignbd/travel.creativedesign.com.bd/bc-cms/themes/BC/Tour/Views/frontend/blocks/box-category-tour/index.blade.php ENDPATH**/ ?>