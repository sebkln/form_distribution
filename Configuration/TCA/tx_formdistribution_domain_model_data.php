<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data',
        'label' => 'firstname',
        'label_userFunc' => 'Sebkln\\FormDistribution\\UserFunc\\Tca->formDataLabel',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'readOnly' => 1,
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'formtitle,firstname,lastname,title,email,address,zip,city,www,telephone,fax,subject,message,media',
        'iconfile' => 'EXT:form_distribution/Resources/Public/Icons/form-distribution-data.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, formtitle, firstname, lastname, title, email, address, zip, city, www, telephone, fax, subject, message, media',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, formtitle, firstname, lastname, title, email, address, zip, city, www, telephone, fax, subject, message, media, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_formdistribution_domain_model_data',
                'foreign_table_where' => 'AND tx_formdistribution_domain_model_data.pid=###CURRENT_PID### AND tx_formdistribution_domain_model_data.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],
        'formtitle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.formtitle',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'firstname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.firstname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'lastname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.lastname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'zip' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.zip',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'city' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.city',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'www' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.www',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'telephone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.telephone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'fax' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.fax',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'subject' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.subject',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => 1,
            ],
        ],
        'message' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.message',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'readOnly' => 1,
            ]
        ],
        'media' => [
            'exclude' => true,
            'label' => 'LLL:EXT:form_distribution/Resources/Private/Language/locallang.xlf:tx_formdistribution_domain_model_data.media',
            'config' => [
                    'type' => 'inline',
                    'foreign_table' => 'sys_file_reference',
                    'foreign_field' => 'uid_foreign',
                    'foreign_sortby' => 'sorting_foreign',
                    'readOnly' => 1,
            ],
        ],
    
    ],
];
