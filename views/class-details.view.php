<?php include 'partials/header.php' ?>

<main class="page_private page_class_details">
    <?php include 'partials/navbar.php' ?>

    <section class="flex h-full">
        <div class="main_content">
            <div class="class_details_cover">
                <div class="class_details_info">
                    <h1><?= $class['name'] ?></h1>
                    <p><?= $class['section'] ?></p>
                </div>
            </div>

            <div class="class_details_area">
                <div class="class_actions">
                    <?php if (getCurrentUser()['type'] == 'teacher') : ?>
                        <a class="btn-secondary" href="/start-whiteboard?id=<?= $class['id'] ?>">Start Whiteboard</a>
                    <?php endif; ?>

                    <div class="flex justify-between p-6 class-code-container">
                        <span><?php echo $class['code'] ?></span>
                        <div class="btn-copy" onclick="navigator.clipboard.writeText('<?php echo $class['code'] ?>')">Copy</div>
                    </div>

                    <?php if (getCurrentUser()['type'] == 'teacher') : ?>
                        <div class="btn width-280">
                            <a href="/enrolled-students?class_id=<?= $class['id'] ?>">Enolled Students</a>
                        </div>
                    <?php endif; ?>

                    <?php if (getCurrentUser()['type'] == 'student') : ?>
                        <a class="btn btn-secondary flex items-center justify-between" href="/leave-class?class_id=<?= $class['id'] ?>">
                            Leave Class
                        </a>
                    <?php endif; ?>
                </div>

                <div class="class_content">
                    <form action="/create-post" method="POST" class="card card_create_post" enctype="multipart/form-data">
                        <input type="hidden" name="class_id" value="<?= $_GET['id'] ?>">

                        <div class="input_item_group">
                            <textarea name="content" placeholder="Announce something to your class" cols="30" rows="4" required></textarea>
                        </div>
                        <div class="choose-file-btn">
                            <input type="file" name="files[]" multiple>
                        </div>
                        <div>
                            <button class="create-post-btn btn-success">Create Post</button>
                        </div>
                    </form>

                    <div>
                        <?php foreach ($posts as $post) : ?>

                            <div class="card card_class_post">
                                <div class="card_class_post_header">
                                    <div class="class_post_author">
                                        <img src="https://i.pravatar.cc/40" alt="">
                                        <div>
                                            <p>
                                                <?= $post['user_name'] ?>

                                                <?php if ($post['user_type'] == 'teacher') : ?>
                                                <?php endif; ?>
                                            </p>
                                            <small><?= time_elapsed_string($post['created_at']) ?></small>
                                        </div>
                                    </div>

                                    <?php if (getCurrentUserId() == $post['user_id']) : ?>
                                        <div class="dropdown">
                                            <div onclick="handleDropDown(this)">
                                                <i data-lucide="ellipsis"></i>
                                            </div>
                                            <div class="dropdown-content">
                                                <a href="/delete-post?id=<?= $post['id'] ?>">Delete</a>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                </div>

                                <div class="class_post_content">
                                    <p><?= $post['content'] ?></p>
                                </div>
                                <div>
                                    <?php foreach ($post['attachments'] as $path) : ?>
                                        <p>
                                            <img class="postImage" src="<?= $path ?>" alt="">
                                        </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php' ?>