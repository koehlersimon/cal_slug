<?php
$EM_CONF[$_EXTKEY] = array (
    'title' => 'Calender Event Slug',
    'description' => 'Creates a slug field for the calendar event record of your TYPO3 Calendar Base',
    'category' => 'Frontend',
    'author' => 'Simon Köhler',
    'author_email' => 'info@simon-koehler.com',
    'author_company' => 'simon-koehler.com',
    'state' => 'beta',
    'uploadfolder' => '0',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' =>
    array (
        'depends' => array (
            'typo3' => '9.5.0-10.2.99',
            'cal' => '1.11.0-2.0.99',
        ),
        'conflicts' => array (),
        'suggests' => array (),
    ),
);
