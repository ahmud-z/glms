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
                </div>
                <div class="class_content">
                    <form action="/create-post" method="POST" class="card card_create_post">
                        <input type="hidden" name="class_id" value="<?= $_GET['id'] ?>">

                        <div class="input_item_group">
                            <textarea name="content" placeholder="Announce something to your class" cols="30" rows="4"></textarea>
                        </div>
                        <div>
                            <input type="file" name="" id="">
                        </div>
                        <div>
                            <button>Create Post</button>
                        </div>
                    </form>

                    <div>
                        <?php foreach ($posts as $post) : ?>

                            <div class="card card_class_post">
                                <div class="class_post_author">
                                    <img src="https://picsum.photos/32" alt="">
                                    <div>
                                        <p>
                                            <?= $post['user_name'] ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-shield">
                                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                            </svg>
                                        </p>
                                        <small><?= $post['created_at'] ?></small>
                                    </div>
                                </div>
                                <div class="class_post_content">
                                    <p><?= $post['content'] ?></p>
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