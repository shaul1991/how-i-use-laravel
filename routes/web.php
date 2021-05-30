<?php

declare(strict_types=1);

/** @var array $adminRoutes */
$adminRoutes = glob(base_path('routes/admin/*.php'));
foreach ($adminRoutes as $file) {
    require $file;
}

/** @var array $frontRoutes */
$frontRoutes = glob(base_path('routes/front/*.php'));
foreach ($frontRoutes as $file) {
    require $file;
}
