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
                    <button>Start Whiteboard</button>

                    <div class="flex justify-between p-6">
                        <span><?php echo $class['code'] ?></span>
                        <div class="btn-copy" onclick="navigator.clipboard.writeText('<?php echo $class['code'] ?>')">Copy</div>
                    </div>
                </div>
                <div class="class_content">
                    <form action="/create-post" method="POST" class="card card_create_post" enctype="multipart/form-data">
                        <input type="hidden" name="class_id" value="<?= $_GET['id'] ?>">

                        <div class="input_item_group">
                            <textarea name="content" placeholder="Announce something to your class" cols="30" rows="4" required></textarea>
                        </div>
                        <div>
                            <input type="file" name="files[]" multiple>
                        </div>
                        <div>
                            <button>Create Post</button>
                        </div>
                    </form>

                    <div>
                        <?php foreach ($posts as $post) : ?>

                            <div class="card card_class_post">
                                <div class="card_class_post_header">
                                    <div class="class_post_author">
                                        <img src="https://picsum.photos/32" alt="">
                                        <div>
                                            <p>
                                                <?= $post['user_name'] ?>

                                                <?php if ($post['user_type'] == 'teacher') : ?>
                                                    <i data-lucide="star"></i>
                                                <?php endif; ?>
                                            </p>
                                            <small><?= $post['created_at'] ?></small>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <div onclick="handleDropDown(this)">
                                            <i data-lucide="ellipsis"></i>
                                        </div>
                                        <div class="dropdown-content">
                                            <a href="/delete-post?id=<?= $post['id'] ?>">Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="class_post_content">
                                    <p><?= $post['content'] ?></p>
                                </div>
                                <div>
                                    <?php foreach ($post['attachments'] as $path) : ?>
                                        <p>
                                            <a href="<?= $path ?>">
                                                <i data-lucide="file-down"></i>
                                            </a>
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