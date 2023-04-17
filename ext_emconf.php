<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form distribution',
    'description' => 'Contains customized templates, YAML files for configuration and form definitions. Use it as a starter kit for your websites.',
    'category' => 'fe',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sebkln.de',
    'state' => 'stable',
    'version' => '10.4.3',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'form' => '10.4.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
