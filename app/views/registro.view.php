<div id="register">
    <div class="container" style="display: flex; justify-content: center;">
        <div class="col-xs-12 col-sm-8 col-sm-push-2"
            style="display: flex; flex-direction: column; align-items: center; gap: 20px; justify-content: center;">
            <h1 style="font-size: 38px;">Register</h1>
            <?php include __DIR__ . '/show-error.part.view.php' ?>
            <form clas="form-horizontal" action="/check-registro" method="post"
                style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
                <div class="form-group" style="width: 100%;">
                    <div class="col-xs-12" style="width: 100%; display: flex; flex-direction: column; gap: 10px;">
                        <label class="label-control" style="font-size: 18px;">Username</label>
                        <input class="form-control" type="text" name="username" value="<?= $username ?? '' ?>"
                            style="width: 100%; height: 50px; font-size: 16px; padding: 10px;">
                    </div>
                </div>
                <div class="form-group" style="width: 100%;">
                    <div class="col-xs-12" style="width: 100%; display: flex; flex-direction: column; gap: 10px;">
                        <label class="label-control" style="font-size: 18px;">Password</label>
                        <input class="form-control" name="password" type="password"
                            style="width: 100%; height: 50px; font-size: 16px; padding: 10px;">
                    </div>
                </div>
                <div class="form-group" style="width: 100%;">
                    <div class="col-xs-12" style="width: 100%; display: flex; flex-direction: column; gap: 10px;">
                        <label class="label-control" style="font-size: 18px;">Repeat password</label>
                        <input class="form-control" name="re-password" type="password"
                            style="width: 100%; height: 50px; font-size: 16px; padding: 10px;">
                    </div>
                </div>
                <!-- CAPTCAHA -->
                <label class="label-control">Insert Captcha <img style="border: 1px solid #D3D0D0"
                        src="/app/utils/captcha.php" id='captcha'></label>
                <input class="form-control" type="text" name="captcha">
                <button class="btn btn-lg sr-button"
                    style="background-color: red; color: white; width: 50%; height: 50px; font-size: 18px; border: none; border-radius: 5px; cursor: pointer;">
                    ENVIAR
                </button>
            </form>
        </div>
    </div>
</div>