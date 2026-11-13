<div>
    <!--[if BLOCK]><![endif]--><?php if(!empty($style) and $style == 'carousel' and !empty($list_slider)): ?>
        <div class="effect">
            <div class="owl-carousel">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $list_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $img = get_file_url($item['bg_image'],'full') ?>
                    <div class="item">
                        <div class="item-bg"
                            style="background-image: linear-gradient(0deg,rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)),url('<?php echo e($img); ?>') !important">
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-heading text-center"><?php echo e($title); ?></h1>
                <h2 class="sub-heading text-center"><?php echo e($sub_title); ?></h2>
                <div class="g-form-control">
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('tour::search-form', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1661822569-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/creativedesignbd/travel.creativedesign.com.bd/bc-cms/themes/BC/Tour/Views/frontend/blocks/form-search-tour/style-normal.blade.php ENDPATH**/ ?>