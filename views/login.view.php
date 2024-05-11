<?php require 'partials/header.php'; ?>

<main class="page_auth">
    <form class="card card_auth" action="/login" method="POST">
        <img src="assets/images/gublogo.svg" alt="">

        <?php require 'partials/errors.php'; ?>

        <div class="input_item_group">
            <label for=""></label>
            <input name="email" type="text" placeholder="_____@green.ac.bd" required>
            <p class="input_error"></p>
        </div>

        <div class="input_item_group">
            <label for=""></label>
            <input name="password" type="password" placeholder="*********" required>
            <p class="input_error"></p>
        </div>

        <div>
            <button>Login</button>

            New user? <a href="/register">Create Account</a>
        </div>
    </form>
</main>

<?php require 'partials/footer.php'; ?>