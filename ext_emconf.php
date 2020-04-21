<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Demo Dependency Injection usage in localconf',
    'category' => '',
    'author' => 'Benjamin Franzke',
    'author_email' => 'benjaminfranzke@gmail.com',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.3.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '10.3.0-10.4.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Bnf\\DiInLocalconf\\' => 'Classes',
        ),
    ),
);
