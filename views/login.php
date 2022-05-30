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


        <div class="row gy-4 align-center">
            <div class="d-flex justify-content-center">
                <div class="col-lg-6">
                    <?php $form = Form::begin('', 'post') ?>
                    <div class="row gy-4">
                        <?php echo $form->field($model, 'email') ?>
                        <?php echo $form->field($model, 'password')->passwordField() ?>
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