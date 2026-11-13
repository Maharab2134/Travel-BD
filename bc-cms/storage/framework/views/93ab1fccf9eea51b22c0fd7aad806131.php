<div class="row">
    <div class="col-lg-3 col-md-12">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('car::filter',['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3672674440-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
    <div class="col-lg-9 col-md-12">
        <div class="bc-list-item">
            <div class="topbar-search">
                <h2 class="text result-count">
                    <!--[if BLOCK]><![endif]--><?php if($rows->total() > 1): ?>
                        <?php echo e(__(":count cars found",['count'=>$rows->total()])); ?>

                    <?php else: ?>
                        <?php echo e(__(":count car found",['count'=>$rows->total()])); ?>

                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </h2>
                <div class="control bc-form-order">
                    <?php echo $__env->make('Layout::global.search.orderby',['routeName'=>'car.search'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
            <div class="ajax-search-result">
                <?php echo $__env->make('Car::frontend.ajax.search-result', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/creativedesignbd/travel.creativedesign.com.bd/bc-cms/themes/BC/Car/Views/frontend/layouts/search/list-item.blade.php ENDPATH**/ ?>