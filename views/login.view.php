<?php require 'partials/header.php'; ?>

<main class="page_auth">
    <form class="card card_auth" action="/login" method="POST">
        <img src="assets/images/gublogo.svg" alt="">

        <?php require 'partials/errors.php'; ?>

        <div class="input_item_group">
            <label class="form-label" for="">Email address</label>
            <input name="email" type="text" placeholder="_____@green.edu.bd" required>
            <p class="input_error"></p>
        </div>

        <div class="input_item_group">
            <label class="form-label" for="">Password</label>
            <input name="password" type="password" placeholder="*********" required>
            <p class="input_error"></p>
        </div>

        <div class="login-div">
            <button class="login-btn">Login</button>
            <p>New user? <a href="/register">Create Account</a> </p>
        </div>
    </form>
</main>

<?php require 'partials/footer.php'; ?>