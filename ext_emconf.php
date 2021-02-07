<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form distribution',
    'description' => 'Contains customized templates, YAML files for configuration and form definitions. Use it as a starter kit for your websites.',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'stable',
    'version' => '9.5.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'form' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
