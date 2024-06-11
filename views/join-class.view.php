<?php require 'partials/header.php'; ?>

<main class="page_private page_create_new_class">
    <section class="main_content">
        <form action="/join-class" class="card card_create_new_class" method="POST">
            <h2>Join New Class</h2>

            <?php include 'views/partials/errors.php'; ?>

            <div class="input_item_group">
                <label class="form-label" for="">Enter a class code</label>
                <input type="text" placeholder="Class Code" name="code" required>
                <p class="input_error"></p>
            </div>
            <div>
                <button class="login-btn">Join Class</button>
            </div>
        </form>
    </section>
</main>

<?php require 'partials/footer.php'; ?>