<?php

$EM_CONF[$_EXTKEY ?? 'form_footnote'] = [
    'title' => 'Form footnote',
    'description' => 'Footnotes for EXT:form',
    'state' => 'stable',
    'author' => '',
    'author_email' => '',
    'category' => 'fe',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'form' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
