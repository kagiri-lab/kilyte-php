<?php

use kilyte\form\Form;

$this->title = "Login - KiLyte";

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
            <h2>Login</h2>
            <p>Login</p>
        </header>


        <div class="row gy-4">
            <div class="col-lg-4">
            </div>

            <div class="col-lg-4 align-center">
                <div class="row gy-4">
                    <?php $form = Form::begin('', 'post') ?>
                    <?php echo $form->field($model, 'email') ?>
                    <?php echo $form->field($model, 'password')->passwordField() ?>
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