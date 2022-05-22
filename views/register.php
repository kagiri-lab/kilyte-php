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


        <div class="row gy-4">
            <div class="col-lg-4">
            </div>

            <div class="col-lg-4 align-center">
                <div class="row gy-4">
                    <?php $form = Form::begin('', 'post') ?>
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
                    </br>
                    <button class="btn btn-success">Submit</button>
                    <?php Form::end() ?>
                </div>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->