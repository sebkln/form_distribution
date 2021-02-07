<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form distribution',
    'description' => 'Contains customized templates, YAML files for configuration and form definitions. Use it as a starter kit for your websites.',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'stable',
    'version' => '8.7.1',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'form' => '8.7.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
