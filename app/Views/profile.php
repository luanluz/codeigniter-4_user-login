<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3><?= $user['email'] ?></h3>
                <hr>
                <?php if (session()->get('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>
                <form action="/profile" class="" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" name="email" id="email" readonly class="form-control" value="<?= set_value('email', $user['email']) ?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password_confirm">Confirm Password</label>
                                <input type="password" name="password_confirm" id="password_confirm" class="form-control">
                            </div>
                        </div>
                    </div>
                    <?php  if (isset($validation)) : ?>
                        <div class="col-12 alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>