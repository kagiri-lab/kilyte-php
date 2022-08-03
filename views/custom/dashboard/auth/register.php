<main class="main" id="top">
    <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
            <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="/assets/dashboard/img/icons/spot-illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="/assets/admin/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
                <div class="card overflow-hidden z-index-1">
                    <div class="card-body p-0">
                        <div class="row g-0 h-100">
                            <div class="col-md-5 text-center bg-card-gradient">
                                <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                    <div class="bg-holder bg-auth-card-shape" style="background-image:url(/assets/dashboard/img/icons/spot-illustrations/half-circle.png);">
                                    </div>
                                    <!--/.bg-holder-->

                                </div>
                                <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                    <a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="/">{{site-name}}</a>
                                    <p class="pt-3 text-white">Have an account?<br><a class="btn btn-outline-light mt-2 px-4" href="/admin/login">Log In</a></p>
                                </div>
                            </div>
                            <div class="col-md-7 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <h3>Register</h3>

                                    <?php

                                    use kilyte\form\Form;

                                    $form = Form::begin('', 'post', ['class' => 'row g-3 needs-validation']) ?>
                                    <div class="col-6">
                                        <?php $form->field($model, 'firstname')->isRequired()->show() ?>
                                    </div>
                                    <div class="col-6">
                                        <?php $form->field($model, 'lastname')->isRequired()->show() ?>
                                    </div>
                                    <?php $form->field($model, 'email')->emailField()->isRequired()->show() ?>
                                    <?php $form->field($model, 'password')->passwordField()->isRequired()->show()
                                    ?>
                                    <?php $form->field($model, 'passwordConfirm')->passwordField()->isRequired()->show() ?>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="card-register-checkbox" />
                                            <label class="form-label" for="card-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>