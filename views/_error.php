<?php $this->title = $exception->getCode() . " - Error" ?>

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container"></div>
</section>
<!-- End Breadcrumbs -->

<br />
<br />
<br />
<br />

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row gx-5">
            <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <h1 class="text-center"><?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->


<br />
<br />
<br />
<br />