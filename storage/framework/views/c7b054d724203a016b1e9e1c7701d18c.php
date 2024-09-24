<!-- resources/views/faqs/index.blade.php -->


<?php $__env->startSection('content'); ?>
<h1>FAQs</h1>
<input type="text" id="faqSearch" placeholder="Search FAQs" class="form-control">
<ul id="searchResults" class="list-group mt-3"></ul>
<h2>All FAQs</h2>
<ul class="list-group">
    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item"><?php echo e($faq->display_name); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $('#faqSearch').on('input', function() {
        let query = $(this).val();
        $.ajax({
            url: "<?php echo e(route('faq.search')); ?>",
            method: 'GET',
            data: { query: query },
            success: function(data) {
                $('#searchResults').empty();
                $.each(data, function(index, faq) {
                    $('#searchResults').append('<li class="list-group-item">' + faq.display_name + '</li>');
                });
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\faq\resources\views/index.blade.php ENDPATH**/ ?>