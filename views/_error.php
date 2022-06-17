<?php $this->title = $exception->getCode() . " - Error" ?>


<div class="container">
    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1><?php echo $exception->getCode() ?></h1>
        <br />
        <h2><?php echo $exception->getMessage() ?></h2>
        <a class="btn" href="/">Back to home</a>
    </section>
</div>