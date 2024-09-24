<link href="<?php echo e(asset('css/special.css')); ?>" rel="stylesheet">
<div class="container faq-container">
    <h2 class="faq-title">Glossary & Abbreviation FAQs</h2>
    <ul class="faq-list">
        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <button class="faq-question">
                    <h6><?php echo e($faq->display_name); ?></h6>
                </button>
                <div class="faq-answer">
                    <?php echo e($faq->description); ?>

                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');
        const faqAnswers = document.querySelectorAll('.faq-answer');

        faqQuestions.forEach((question) => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;

                faqAnswers.forEach((faqAnswer) => {
                    if (faqAnswer !== answer) {
                        faqAnswer.classList.remove('show');
                    }
                });

                
                answer.classList.toggle('show');
            });
        });
    });
</script>

<?php /**PATH D:\faq\resources\views/faqs/special.blade.php ENDPATH**/ ?>