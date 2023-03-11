<table id="searchList" class="table table-bordered table-hover">
    <thead>
        <tr class="active">
            <th class="text-center" width="50px"><?php echo app('translator')->get('label.SL'); ?></th>
            <th class="" width="100px"><?php echo app('translator')->get('label.KEYWORD'); ?></th>
            <th class="" width="100px"><?php echo app('translator')->get('label.USER'); ?></th>
            <th class="" width="300px"><?php echo app('translator')->get('label.SEARCH_RESULT'); ?></th>
            <th class="text-center" width="100px"><?php echo app('translator')->get('label.SEARCHING_TIME'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php if(!$searchInfo->isEmpty()): ?>
        <?php
            $sl = 0;
        ?>
        <?php $__currentLoopData = $searchInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo ++$sl; ?></td>
                <td class=""><?php echo $sh->keyword ?? ''; ?></td>
                <td class=""><?php echo $sh->user ?? ''; ?></td>
                <td class=""><?php echo $sh->result ?? ''; ?></td>
                <td class="text-center">
                    <?php echo !empty($sh->created_at) ? Helper::formatDateTime($sh->created_at) : ''; ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="5"><?php echo app('translator')->get('label.NO_SEARCH_RESULT_FOUND'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<script>
    $(function() {
        $('#searchList').dataTable({
            // "language": {
            //     "search": "Search Keywords : ",
            // },
            "paging": true,
            "searching": false,
            "info": true,
            "order": false
        });
    });
</script>
<?php /**PATH E:\xampp_7_4_15\htdocs\qtec-1\resources\views/userSearchHistory/showSearchList.blade.php ENDPATH**/ ?>