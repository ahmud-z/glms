<?php include 'partials/header.php' ?>

<main class="page_private page_class_details">
    <?php include 'partials/navbar.php' ?>

    <section class="flex h-full">
        <div class="main_content">
            <div class="class_details_area">
                <div>
                    <?php if (count($enrolledStudents) == 0) : ?>
                        <p>No students yet.</p>
                    <?php endif; ?>
                    <table border="1" class="w-full">
                        <tr>
                            <td colspan="2">
                                <h1 class="text-center">Enrolled Students</h1>
                            </td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>

                        <?php foreach ($enrolledStudents as $enrolledStudent) : ?>
                            <tr>
                                <td><?= $enrolledStudent['name'] ?></td>
                                <td><?= $enrolledStudent['email'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php' ?>