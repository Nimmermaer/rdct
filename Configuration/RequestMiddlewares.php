<?php

use FoT3\Rdct\Middleware\SendRedirect;

/**
 * Definitions for middlewares provided by EXT:rdct
 */
return [
    'frontend' => [
        'friends-of-typo3/rdct/send-redirect' => [
            'target' => SendRedirect::class,
            'before' => [
                'typo3/cms-frontend/content-length-header',
            ],
            'after' => [
                'typo3/cms-frontend/maintenance-mode',
            ],
        ],
    ],
];
