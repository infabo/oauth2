<?php

/**
 * Extension Manager/Repository config file for ext "oauth2".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'OAuth2 authentication and authorization',
    'description' => 'Generic OAuth 2.0 authentication and authorization for TYPO3 CMS',
    'category' => 'system',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Mfc\\OAuth2\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christian Hellmund, Simon Schmidt, Christian Spoo',
    'author_email' => 'typo3@marketing-factory.de',
    'author_company' => 'Marketing Factory Consulting GmbH',
    'version' => '2.0.3',
];
