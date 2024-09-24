<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage FAQs</title>

    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
   
    <link href="<?php echo e(asset('css/admin_index.css')); ?>" rel="stylesheet"> 

</head>
<body>

<div class="container">
    <h1>Manage FAQs</h1>

    <button class="btn btn-primary mb-3" id="addFaqButton">Add FAQ</button>

    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>FAQ Type</th>
                    <th>Display Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($faq->faq_type); ?></td>
                    <td><?php echo e($faq->display_name); ?></td>
                    <td><?php echo e($faq->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.faqs.edit', $faq->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('admin.faqs.destroy', $faq->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this FAQ?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

</div>


<div class="modal fade" id="addFaqModal" tabindex="-1" role="dialog" aria-labelledby="addFaqModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFaqModalLabel">Add FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="faqFormContainer">
               
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script src="<?php echo e(asset('js/script.js')); ?>"></script> 

<script>
    $(document).ready(function() {
        $('#addFaqButton').click(function() {
           
            $.ajax({
                url: '<?php echo e(route("admin.faqs.create.form")); ?>',
                method: 'GET',
                success: function(data) {
                    $('#faqFormContainer').html(data);
                    $('#addFaqModal').modal('show');
                },
                error: function() {
                    alert('Could not load the form. Please try again later.');
                }
            });
        });
    });
</script>

</body>
</html>
<?php /**PATH D:\faq\resources\views/admin/faqs/index.blade.php ENDPATH**/ ?>