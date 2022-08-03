<?php

use kilyte\resources\HTML;

if (!$this->title)
    $this->title = "{{site-name}}";

HTML::header_start();
HTML::Meta([
    ['charset' => 'utf-8'],
    ['http' => 'X-UA-Compatible', 'content' => 'IE=edge'],
    ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1'],
    ["name" => "msapplication-TileImage", "content" => "/assets/dashboard/img/favicons/mstile-150x150.png"],
    ["name" => "theme-color", "content" => "#ffffff"]
]);
HTML::title($this->title);
HTML::Link(
    [
        ["rel" => "apple-touch-icon", "sizes" => "180x180", "href=" => "/assets/default/img/apple-touch-icon.png"],
        ["rel" => "shortcut icon", "type" => "image/x-icon", "/assets/default/img/favicon.png"],
        ["rel" => "manifest", "href" => "/assets/dashboard/img/favicons/manifest.json"],
        ['rel' => 'stylesheet', 'href' => '/assets/dashboard/vendors/choices/choices.min.css'],
        ['rel' => 'stylesheet', 'href' => '/assets/dashboard/vendors/flatpickr/flatpickr.min.css'],
        ['rel' => 'stylesheet', 'href' => '/assets/dashboard/vendors/dropzone/dropzone.min.css'],
        ['rel' => 'stylesheet', 'href' => '/assets/dashboard/vendors/swiper/swiper-bundle.min.css'],
        ['rel' => 'preconnect', 'href' => 'https://fonts.gstatic.com'],
        ['rel' => 'stylesheet', 'href' => 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap'],
        ['rel' => 'stylesheet', 'href' => '/assets/dashboard/vendors/overlayscrollbars/OverlayScrollbars.min.css'],
        ['rel' => 'stylesheet', 'href' => '/assets/dashboard/css/theme-rtl.min.css', 'id' => 'style-rtl'],
        ['rel' => 'stylesheet', 'href' => '/assets/dashboard/css/theme.min.css', 'id' => 'style-default'],
        ['rel' => 'stylesheet', 'href' => '/assets/dashboard/css/user-rtl.min.css', 'id' => 'user-style-rtl'],
        ['rel' => 'stylesheet', 'href' => '/assets/dashboard/css/user.min.css', 'id' => 'user-style-default']
    ]
);
HTML::Script([
    "/assets/dashboard/js/config.js",
    "/assets/dashboard/vendors/overlayscrollbars/OverlayScrollbars.min.js"
]);

?>

<script>
    var isRTL = JSON.parse(localStorage.getItem('isRTL'));
    if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }
</script>
<?php HTML::header_end(); ?>