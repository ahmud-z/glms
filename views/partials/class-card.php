<a href="/class-details?id=<?php echo $class['id'] ?>">
    <div class="wrapper">
        <div class="block">
            <div class="cover" style="background-color: <?= random_color() ?>;">
                <div class="cover-photo">
                </div>
                <div class="classroom-info">
                    <p class="class-name"> <?= $class['name'] ?> </p>
                    <p><?= $class['teacher_name'] ?></p>
                </div>
                <div class="round-circle">
                    <!-- <img src="unnamed.jpg" alt=""> -->
                    <img src="https://i.pravatar.cc/70?img=<?= rand(10, 40) ?>" alt="">
                </div>
            </div>

            <div class="extra-icons">
                <i class="bi bi-person"></i>
                <i class="bi bi-folder2"></i>
            </div>
        </div>
    </div>
</a>