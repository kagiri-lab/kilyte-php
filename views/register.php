<?php

use kilyte\form\Form;

$this->title = "Register - KiLyte";

?>


<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container"></div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Register</h2>
            <p>Register</p>
        </header>


        <div class="row gy-4 align-center">
            <div class="d-flex justify-content-center">
                <div class="col-lg-6">
                    <?php $form = Form::begin('', 'post') ?>
                    <div class="row gy-4">
                        <div class="row">
                            <div class="col">
                                <?php echo $form->field($model, 'firstname') ?>
                            </div>
                            <div class="col">
                                <?php echo $form->field($model, 'lastname') ?>
                            </div>
                        </div>
                        <?php echo $form->field($model, 'email') ?>
                        <?php echo $form->field($model, 'password')->passwordField() ?>
                        <?php echo $form->field($model, 'passwordConfirm')->passwordField() ?>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <?php Form::end() ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->