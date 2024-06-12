<?php include 'partials/header.php' ?>

<main class="page_private">
    <?php include 'partials/navbar.php' ?>

    <section class="flex h-full">
        <?php include 'partials/sidebar.php' ?>

        <div class="main_content">
        <div class="class_list_cards">
                <?php foreach ($classes as $class) : ?>
                    <?php include 'partials/class-card.php' ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php' ?>