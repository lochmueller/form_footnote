<?php

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Form footnote',
    'description' => 'Footnotes for EXT:form',
    'state' => 'stable',
    'author' => '',
    'author_email' => '',
    'category' => 'fe',
    'version' => '1.2.3',
    'constraints' => [
        'depends' => [
            'php' => '8.0.0-8.2.99',
            'typo3' => '11.5.0-11.5.99',
            'form' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
