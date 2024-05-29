<nav>
    <a href="/" class="nav_logo">
        <img src="assets/images/gublogo.svg" alt="" srcset="">
    </a>

    <div class="flex flex-center">
        <?php if ($auth_user['type'] == 'teacher') : ?>
            <a class="btn btn-primary" href="/create-class">Create Class</a>
        <?php endif; ?>

        <?php if ($auth_user['type'] == 'student') : ?>
            <a class="btn" href="/join-class">Join Class</a>
        <?php endif; ?>

        <a href="" class="avatar">
            <img src="https://picsum.photos/32" alt="">
        </a>
    </div>
</nav>