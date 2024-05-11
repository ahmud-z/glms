<?php include 'partials/header.php' ?>

<main class="page_private">
    <?php include 'partials/navbar.php' ?>

    <section class="flex h-full">
        <?php include 'partials/sidebar.php' ?>

        <div class="main_content">
            <div class="class_list_cards">
                <?php foreach ($classes as $class) : ?>
                    <a class="card card_class" href="/class-details?id=<?= $class['id'] ?>">
                        <div>
                            <h4><?= $class['name'] ?></h4>
                            <p><?= $class['section'] ?></p>
                            <p>Teacher name</p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php' ?>