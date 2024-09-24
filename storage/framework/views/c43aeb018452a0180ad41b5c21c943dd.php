<!-- resources/views/faqs/index.blade.php -->


<?php $__env->startSection('content'); ?>
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    color: #333;
    overflow: hidden; /* Prevent scrolling */
}

h1, h2 {
    text-align: center;
    color: white; /* Text color for headings */
}

#faqSearch {
    max-width: 600px;
    margin: 20px auto;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.list-group {
    max-width: 600px;
    margin: auto;
    border-radius: 5px;
}

.list-group-item {
    background: rgba(255, 255, 255, 0.8); /* Semi-transparent background for list items */
    margin: 5px 0;
    transition: background 0.3s;
}

.list-group-item:hover {
    background: rgba(255, 255, 255, 1); /* Solid white on hover */
}

/* Background Animation */
@keyframes moveBackground {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}

body {
    background-image: url('bg (2).jpg'); /* Update the path to your background image */
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    animation: moveBackground 20s ease infinite; /* Apply animation */
}

    </style>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\faq\resources\views/faqs/index.blade.php ENDPATH**/ ?>