<?php include 'partials/header.php' ?>

<main class="page_private page_class_details">
    <?php include 'partials/navbar.php' ?>

    <section class="flex h-full">
        <div class="main_content">
            <div class="class_details_area">
                <div>
                    <?php foreach($enrolledStudents as $enrolledStudent) : ?>
                        <div class="student_card">
                            <?= $enrolledStudent['name'] ?>
                            <?= $enrolledStudent['email'] ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php' ?>