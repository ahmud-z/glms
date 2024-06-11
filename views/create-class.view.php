<?php require 'partials/header.php'; ?>

<main class="page_private page_create_new_class">
    <section class="main_content">
        <form action="/create-class" class="card card_create_new_class" method="POST">
            <h2>Create New Class</h2>

            <div class="input_item_group">
                <label for=""></label>
                <input type="text" placeholder="Class Name" name="name" required>
                <p class="input_error"></p>
            </div>
            <div class="input_item_group">
                <label for=""></label>
                <input type="text" placeholder="Class Section" name="section" required>
                <p class="input_error"></p>
            </div>
            <div class="input_item_group">
                <label for=""></label>
                <input type="text" placeholder="Subject" name="subject" required>
                <p class="input_error"></p>
            </div>
            <div class="input_item_group">
                <label for=""></label>
                <input  type="text" placeholder="Room" name="room" required>
                <p class="input_error"></p>
            </div>

            <div>
                <button class="login-btn">Create Class</button>
            </div>
        </form>
    </section>
</main>

<?php require 'partials/footer.php'; ?>