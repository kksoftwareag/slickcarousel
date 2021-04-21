<?php

$EM_CONF['slickcarousel'] = [
    'title' => 'Slick Carousel',
    'description' => 'Slick Carousel (Slider) - Responsive, Multiple Items, Center Mode, Lazy Loading, Autoplay, Slider Syncing (Gallery)',
    'category' => 'templates',
    'version' => '4.0.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Boris Schauer',
    'author_email' => 'me@bschauer.de',
    'author_company' => 'bschauer, analog',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.17-10.4.99',
            'vhs' => '*',
        ],
        'conflicts' => [],
    ],
];
