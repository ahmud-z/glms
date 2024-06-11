<?php include 'partials/header.php' ?>

<main class="page_private">
    <?php include 'partials/navbar.php' ?>

    <section class="flex h-full">
        <?php include 'partials/sidebar.php' ?>

        <div class="main_content">
            <div class="class_list_cards">
                <?php foreach ($classes as $class) : ?>

                    <a href="/class-details?id=<?php echo $class['id'] ?>">
                        <div class="wrapper">
                            <div class="block">
                                <div class="cover">
                                    <div class="cover-photo">
                                    </div>
                                    <div class="classroom-info">
                                        <p class="class-name"> <?= $class['name'] ?> </p>
                                        <p><?= $class['teacher_name'] ?></p>
                                        <p><?= $class['section'] ?></p>
                                    </div>
                                    <div class="round-circle">
                                        <img src="https://i.pravatar.cc/70" alt="">
                                    </div>
                                </div>

                                <div class="extra-icons">
                                    <i class="bi bi-person"></i>
                                    <i class="bi bi-folder2"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php' ?>