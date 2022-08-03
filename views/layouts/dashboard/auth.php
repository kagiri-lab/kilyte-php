<?php

use kilyte\resources\HTML;

HTML::start();
require('header.php');
HTML::body_start();
echo "{{content}}";

HTML::Script([
    "/assets/dashboard/vendors/popper/popper.min.js",
    "/assets/dashboard/vendors/bootstrap/bootstrap.min.js",
    "/assets/dashboard/vendors/anchorjs/anchor.min.js",
    "/assets/dashboard/vendors/is/is.min.js",
    "/assets/dashboard/vendors/fontawesome/all.min.js",
    "/assets/dashboard/vendors/lodash/lodash.min.js",
    "https://polyfill.io/v3/polyfill.min.js?features=window.scroll",
    "/assets/dashboard/vendors/list.js/list.min.js",
    "/assets/dashboard/js/theme.js"
]);

HTML::body_end();
HTML::end();
