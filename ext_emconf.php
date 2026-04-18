<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form distribution',
    'description' => 'Contains customized templates, YAML files for configuration and form definitions. Use it as a starter kit for your websites.',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'stable',
    'version' => '14.3.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.2.0-14.3.99',
            'form' => '14.2.0-14.3.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
