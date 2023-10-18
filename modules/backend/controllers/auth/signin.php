
<p style="font-weight: bold; font-size: 40px;color: rebeccapurple;"><?= e(Backend\Models\BrandSetting::get('title')) ?></p>

<?= Form::open() ?>
    <input type="hidden" name="postback" value="1" />

    <div class="form-elements" role="form">
        <!-- Login -->
        <div class="form-group">
            <label class="form-label" for="login-input" style="color: rebeccapurple;font-weight: bold;">
                <?= __('Địa chỉ E-mail') ?>
            </label>

            <input
                style="height:50px;"
                type="text"
                name="login"
                value="<?= e(post('login')) ?>"
                class="form-control"
                id="login-input"
                autocomplete="off"
                maxlength="255" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <label class="form-label" for="password-input" style="color: rebeccapurple;font-weight: bold;">
                <?= __('Mật khẩu') ?>
            </label>

            <input
                style="height:50px;"
                type="password"
                name="password"
                value=""
                id="password-input"
                class="form-control"
                autocomplete="off"
                maxlength="255" />
        </div>

        <!-- Submit Login -->
        <button type="submit" class="btn btn-primary login-button col-12" style="font-size: 20px; font-weight: 600; background-color: rgba(0,0,0,.12)!important;color: gray;">
            <?= __('ĐĂNG NHẬP') ?>
        </button>

        <div class="d-flex justify-content-center forgot-password">
            <!-- Forgot password? -->
            <a href="<?= Backend::url('backend/auth/restore') ?>">
                <?= __('Bạn có quên mật khẩu?') ?>
            </a>
        </div>

    </div>
<?= Form::close() ?>

<?= $this->fireViewEvent('backend.auth.extendSigninView') ?>
