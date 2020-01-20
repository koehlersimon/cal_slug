<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
defined('TYPO3_MODE') or die();

// Define a slug configuration
$tempColumns = [
    'slug' => [
        'exclude' => 1,
        'label' => 'Slug',
        'config' => [
            'type' => 'slug',
            'generatorOptions' => [
                'fields' => ['title','uid'],
                'fieldSeparator' => '/',
                'replacements' => [
                    '/' => '',
                ],
            ],
            'fallbackCharacter' => '-',
            'default' => '',
            'eval' => 'uniqueInPid',
        ],
    ],
];

// Add slug column to TCA
ExtensionManagementUtility::addTCAcolumns('tx_cal_event', $tempColumns);

// Insert slug column after title in the edit form
ExtensionManagementUtility::addToAllTCAtypes('tx_cal_event', 'slug', '', 'after:title');
