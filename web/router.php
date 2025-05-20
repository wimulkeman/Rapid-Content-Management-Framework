<?php

/*
 * This file is part of the Rapid Content Management Framework.
 *
 * (c) Wim Ulkeman <wim@wimulkeman.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

// Router for the PHP built-in web server
if (php_sapi_name() === 'cli-server') {
    // Static file requests
    if (preg_match('/^\/assets\//', $_SERVER['REQUEST_URI']) ||
        preg_match('/\.(jpg|jpeg|png|gif|css|js|ico|svg)$/', $_SERVER['REQUEST_URI'])) {
        return false; // Let the built-in server handle static files
    }

    // All other requests go to the front controller
    include __DIR__.'/app.php';

    return true;
}
