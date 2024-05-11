<?php if (isset($_GET['error'])): ?>

<div class="alert alert-error">
    <p class="text-error"><?php echo $_GET['error']; ?></p>
</div>

<?php endif; ?>
