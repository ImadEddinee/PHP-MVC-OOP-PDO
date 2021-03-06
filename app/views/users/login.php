<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <?php flash("user_register"); ?>
            <?php flash("user_login"); ?>
            <?php flash("reset_pass"); ?>
            <h2 class="fw-light mx-auto">Login</h2>
            <p class="fw-light mx-auto">Please fill in your credentials to Log in</p>
            <form action="<?= ROOT."Users/login" ?>" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email: <sup>*</sup></label>
                    <input type="email" id="email" name="email"
                           class="form-control from-control-lg <?= !empty($data['email_error']) ? 'is-invalid' : ''; ?>"
                            value="<?= $data['email'] ?>">
                    <span class="invalid-feedback"><?= $data['email_error'] ?></span>
                </div>
                <div>
                    <label for="password" class="form-label">Password: <sup>*</sup></label>
                    <input type="password" id="password" name="password"
                           class="form-control from-control-lg <?= !empty($data['password_error']) ? 'is-invalid' : ''; ?>"
                            value="<?= $data['password'] ?>">
                    <span class="invalid-feedback"><?= $data['password_error'] ?></span>
                </div>
                <a class="btn btn-light text-muted" href="<?= ROOT."users/password" ?>">Forgot Password ?</a>
                <div class="row">
                    <div class="col d-grid gap-2">
                        <input type="submit" value="Login" class="btn btn-success">
                    </div>
                    <div class="col">
                        <a href="<?= ROOT."Users/register" ?>" class="btn btn-light fw-light">No account? Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>