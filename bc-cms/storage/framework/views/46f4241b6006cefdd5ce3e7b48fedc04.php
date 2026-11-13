<div class="effect">
    <div class="owl-carousel">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $list_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $img = get_file_url($item['bg_image'],'full') ?>
            <div class="item" style="background-image: linear-gradient(0deg,rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)),url('<?php echo e($img); ?>') !important">
                <h1 class="text-heading text-center"><?php echo e($item['title'] ?? ""); ?></h1>
                <h2 class="sub-heading text-center"><?php echo e($item['desc'] ?? ""); ?></h2>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="g-form-control">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('tour::search-form',['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1885432205-0', $__slots ?? [], get_defined_vars());

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
</div><?php /**PATH /home/creativedesignbd/travel.creativedesign.com.bd/bc-cms/themes/BC/Tour/Views/frontend/blocks/form-search-tour/style-slider-ver2.blade.php ENDPATH**/ ?>