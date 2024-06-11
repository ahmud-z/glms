<?php require 'partials/header.php' ?>

<main class="page_auth">
    <form class="card card_auth" action="/register" method="POST">
        <img src="assets/images/gublogo.svg" alt="">

        <?php include 'partials/errors.php'; ?>

        <div class="input_item_group">
            <input name="name" type="text" placeholder="Enter your name" required>
            <p class="input_error"></p>
        </div>

        <div class="input_item_group">
            <input name="email" type="email" placeholder="_____@green.edu.bd" required>
            <p class="input_error"></p>
        </div>

        <div class="input_item_group">
            <input name="password" type="password" placeholder="*********" required>
            <p class="input_error"></p>
        </div>

        <div class="input_item_group">
            <label for="">Are you?</label>
            <div>
                <div>
                    <input type="radio" name="type" value="student" id="radio_student" required>
                    <label for="radio_student">Student</label>
                </div>
                <div>
                    <input type="radio" name="type" value="teacher" id="radio_teacher" required>
                    <label for="radio_teacher">Teacher</label>
                </div>
            </div>
            <p class="input_error"></p>
        </div>

        <div class="login-div">
            <button class="login-btn">Create Account</button>

            <p> Have an account? <a href="/login">Login</a></p>
        </div>
    </form>
</main>

<?php require 'partials/footer.php' ?>