<?php
if (!class_exists('Mantrabrain_Theme_Helper')) {

    class Mantrabrain_Theme_Helper
    {

        static function font_awesome_icon_list()
        {
            $fontawesome = array(
                'fas fa-address-book' => 'f2b9',
                'fas fa-address-card' => 'f2bb',
                'fas fa-adjust' => 'f042',
                'fas fa-align-center' => 'f037',
                'fas fa-align-justify' => 'f039',
                'fas fa-align-left' => 'f036',
                'fas fa-align-right' => 'f038',
                'fas fa-allergies' => 'f461',
                'fas fa-ambulance' => 'f0f9',
                'fas fa-american-sign-language-interpreting' => 'f2a3',
                'fas fa-anchor' => 'f13d',
                'fas fa-angle-double-down' => 'f103',
                'fas fa-angle-double-left' => 'f100',
                'fas fa-angle-double-right' => 'f101',
                'fas fa-angle-double-up' => 'f102',
                'fas fa-angle-down' => 'f107',
                'fas fa-angle-left' => 'f104',
                'fas fa-angle-right' => 'f105',
                'fas fa-angle-up' => 'f106',
                'fas fa-archive' => 'f187',
                'fas fa-arrow-alt-circle-down' => 'f358',
                'fas fa-arrow-alt-circle-left' => 'f359',
                'fas fa-arrow-alt-circle-right' => 'f35a',
                'fas fa-arrow-alt-circle-up' => 'f35b',
                'fas fa-arrow-circle-down' => 'f0ab',
                'fas fa-arrow-circle-left' => 'f0a8',
                'fas fa-arrow-circle-right' => 'f0a9',
                'fas fa-arrow-circle-up' => 'f0aa',
                'fas fa-arrow-down' => 'f063',
                'fas fa-arrow-left' => 'f060',
                'fas fa-arrow-right' => 'f061',
                'fas fa-arrow-up' => 'f062',
                'fas fa-arrows-alt' => 'f0b2',
                'fas fa-arrows-alt-h' => 'f337',
                'fas fa-arrows-alt-v' => 'f338',
                'fas fa-assistive-listening-systems' => 'f2a2',
                'fas fa-asterisk' => 'f069',
                'fas fa-at' => 'f1fa',
                'fas fa-audio-description' => 'f29e',
                'fas fa-backward' => 'f04a',
                'fas fa-balance-scale' => 'f24e',
                'fas fa-ban' => 'f05e',
                'fas fa-band-aid' => 'f462',
                'fas fa-barcode' => 'f02a',
                'fas fa-bars' => 'f0c9',
                'fas fa-baseball-ball' => 'f433',
                'fas fa-basketball-ball' => 'f434',
                'fas fa-bath' => 'f2cd',
                'fas fa-battery-empty' => 'f244',
                'fas fa-battery-full' => 'f240',
                'fas fa-battery-half' => 'f242',
                'fas fa-battery-quarter' => 'f243',
                'fas fa-battery-three-quarters' => 'f241',
                'fas fa-bed' => 'f236',
                'fas fa-beer' => 'f0fc',
                'fas fa-bell' => 'f0f3',
                'fas fa-bell-slash' => 'f1f6',
                'fas fa-bicycle' => 'f206',
                'fas fa-binoculars' => 'f1e5',
                'fas fa-birthday-cake' => 'f1fd',
                'fas fa-blender' => 'f517',
                'fas fa-blind' => 'f29d',
                'fas fa-bold' => 'f032',
                'fas fa-bolt' => 'f0e7',
                'fas fa-bomb' => 'f1e2',
                'fas fa-book' => 'f02d',
                'fas fa-book-open' => 'f518',
                'fas fa-bookmark' => 'f02e',
                'fas fa-bowling-ball' => 'f436',
                'fas fa-box' => 'f466',
                'fas fa-box-open' => 'f49e',
                'fas fa-boxes' => 'f468',
                'fas fa-braille' => 'f2a1',
                'fas fa-briefcase' => 'f0b1',
                'fas fa-briefcase-medical' => 'f469',
                'fas fa-broadcast-tower' => 'f519',
                'fas fa-broom' => 'f51a',
                'fas fa-bug' => 'f188',
                'fas fa-building' => 'f1ad',
                'fas fa-bullhorn' => 'f0a1',
                'fas fa-bullseye' => 'f140',
                'fas fa-burn' => 'f46a',
                'fas fa-bus' => 'f207',
                'fas fa-calculator' => 'f1ec',
                'fas fa-calendar' => 'f133',
                'fas fa-calendar-alt' => 'f073',
                'fas fa-calendar-check' => 'f274',
                'fas fa-calendar-minus' => 'f272',
                'fas fa-calendar-plus' => 'f271',
                'fas fa-calendar-times' => 'f273',
                'fas fa-camera' => 'f030',
                'fas fa-camera-retro' => 'f083',
                'fas fa-capsules' => 'f46b',
                'fas fa-car' => 'f1b9',
                'fas fa-caret-down' => 'f0d7',
                'fas fa-caret-left' => 'f0d9',
                'fas fa-caret-right' => 'f0da',
                'fas fa-caret-square-down' => 'f150',
                'fas fa-caret-square-left' => 'f191',
                'fas fa-caret-square-right' => 'f152',
                'fas fa-caret-square-up' => 'f151',
                'fas fa-caret-up' => 'f0d8',
                'fas fa-cart-arrow-down' => 'f218',
                'fas fa-cart-plus' => 'f217',
                'fas fa-certificate' => 'f0a3',
                'fas fa-chalkboard' => 'f51b',
                'fas fa-chalkboard-teacher' => 'f51c',
                'fas fa-chart-area' => 'f1fe',
                'fas fa-chart-bar' => 'f080',
                'fas fa-chart-line' => 'f201',
                'fas fa-chart-pie' => 'f200',
                'fas fa-check' => 'f00c',
                'fas fa-check-circle' => 'f058',
                'fas fa-check-square' => 'f14a',
                'fas fa-chess' => 'f439',
                'fas fa-chess-bishop' => 'f43a',
                'fas fa-chess-board' => 'f43c',
                'fas fa-chess-king' => 'f43f',
                'fas fa-chess-knight' => 'f441',
                'fas fa-chess-pawn' => 'f443',
                'fas fa-chess-queen' => 'f445',
                'fas fa-chess-rook' => 'f447',
                'fas fa-chevron-circle-down' => 'f13a',
                'fas fa-chevron-circle-left' => 'f137',
                'fas fa-chevron-circle-right' => 'f138',
                'fas fa-chevron-circle-up' => 'f139',
                'fas fa-chevron-down' => 'f078',
                'fas fa-chevron-left' => 'f053',
                'fas fa-chevron-right' => 'f054',
                'fas fa-chevron-up' => 'f077',
                'fas fa-child' => 'f1ae',
                'fas fa-church' => 'f51d',
                'fas fa-circle' => 'f111',
                'fas fa-circle-notch' => 'f1ce',
                'fas fa-clipboard' => 'f328',
                'fas fa-clipboard-check' => 'f46c',
                'fas fa-clipboard-list' => 'f46d',
                'fas fa-clock' => 'f017',
                'fas fa-clone' => 'f24d',
                'fas fa-closed-captioning' => 'f20a',
                'fas fa-cloud' => 'f0c2',
                'fas fa-cloud-download-alt' => 'f381',
                'fas fa-cloud-upload-alt' => 'f382',
                'fas fa-code' => 'f121',
                'fas fa-code-branch' => 'f126',
                'fas fa-coffee' => 'f0f4',
                'fas fa-cog' => 'f013',
                'fas fa-cogs' => 'f085',
                'fas fa-coins' => 'f51e',
                'fas fa-columns' => 'f0db',
                'fas fa-comment' => 'f075',
                'fas fa-comment-alt' => 'f27a',
                'fas fa-comment-dots' => 'f4ad',
                'fas fa-comment-slash' => 'f4b3',
                'fas fa-comments' => 'f086',
                'fas fa-compact-disc' => 'f51f',
                'fas fa-compass' => 'f14e',
                'fas fa-compress' => 'f066',
                'fas fa-copy' => 'f0c5',
                'fas fa-copyright' => 'f1f9',
                'fas fa-couch' => 'f4b8',
                'fas fa-credit-card' => 'f09d',
                'fas fa-crop' => 'f125',
                'fas fa-crosshairs' => 'f05b',
                'fas fa-crow' => 'f520',
                'fas fa-crown' => 'f521',
                'fas fa-cube' => 'f1b2',
                'fas fa-cubes' => 'f1b3',
                'fas fa-cut' => 'f0c4',
                'fas fa-database' => 'f1c0',
                'fas fa-deaf' => 'f2a4',
                'fas fa-desktop' => 'f108',
                'fas fa-diagnoses' => 'f470',
                'fas fa-dice' => 'f522',
                'fas fa-dice-five' => 'f523',
                'fas fa-dice-four' => 'f524',
                'fas fa-dice-one' => 'f525',
                'fas fa-dice-six' => 'f526',
                'fas fa-dice-three' => 'f527',
                'fas fa-dice-two' => 'f528',
                'fas fa-divide' => 'f529',
                'fas fa-dna' => 'f471',
                'fas fa-dollar-sign' => 'f155',
                'fas fa-dolly' => 'f472',
                'fas fa-dolly-flatbed' => 'f474',
                'fas fa-donate' => 'f4b9',
                'fas fa-door-closed' => 'f52a',
                'fas fa-door-open' => 'f52b',
                'fas fa-dot-circle' => 'f192',
                'fas fa-dove' => 'f4ba',
                'fas fa-download' => 'f019',
                'fas fa-dumbbell' => 'f44b',
                'fas fa-edit' => 'f044',
                'fas fa-eject' => 'f052',
                'fas fa-ellipsis-h' => 'f141',
                'fas fa-ellipsis-v' => 'f142',
                'fas fa-envelope' => 'f0e0',
                'fas fa-envelope-open' => 'f2b6',
                'fas fa-envelope-square' => 'f199',
                'fas fa-equals' => 'f52c',
                'fas fa-eraser' => 'f12d',
                'fas fa-euro-sign' => 'f153',
                'fas fa-exchange-alt' => 'f362',
                'fas fa-exclamation' => 'f12a',
                'fas fa-exclamation-circle' => 'f06a',
                'fas fa-exclamation-triangle' => 'f071',
                'fas fa-expand' => 'f065',
                'fas fa-expand-arrows-alt' => 'f31e',
                'fas fa-external-link-alt' => 'f35d',
                'fas fa-external-link-square-alt' => 'f360',
                'fas fa-eye' => 'f06e',
                'fas fa-eye-dropper' => 'f1fb',
                'fas fa-eye-slash' => 'f070',
                'fas fa-fast-backward' => 'f049',
                'fas fa-fast-forward' => 'f050',
                'fas fa-fax' => 'f1ac',
                'fas fa-feather' => 'f52d',
                'fas fa-female' => 'f182',
                'fas fa-fighter-jet' => 'f0fb',
                'fas fa-file' => 'f15b',
                'fas fa-file-alt' => 'f15c',
                'fas fa-file-archive' => 'f1c6',
                'fas fa-file-audio' => 'f1c7',
                'fas fa-file-code' => 'f1c9',
                'fas fa-file-excel' => 'f1c3',
                'fas fa-file-image' => 'f1c5',
                'fas fa-file-medical' => 'f477',
                'fas fa-file-medical-alt' => 'f478',
                'fas fa-file-pdf' => 'f1c1',
                'fas fa-file-powerpoint' => 'f1c4',
                'fas fa-file-video' => 'f1c8',
                'fas fa-file-word' => 'f1c2',
                'fas fa-film' => 'f008',
                'fas fa-filter' => 'f0b0',
                'fas fa-fire' => 'f06d',
                'fas fa-fire-extinguisher' => 'f134',
                'fas fa-first-aid' => 'f479',
                'fas fa-flag' => 'f024',
                'fas fa-flag-checkered' => 'f11e',
                'fas fa-flask' => 'f0c3',
                'fas fa-folder' => 'f07b',
                'fas fa-folder-open' => 'f07c',
                'fas fa-font' => 'f031',
                'fas fa-font-awesome-logo-full' => 'f4e6',
                'fas fa-football-ball' => 'f44e',
                'fas fa-forward' => 'f04e',
                'fas fa-frog' => 'f52e',
                'fas fa-frown' => 'f119',
                'fas fa-futbol' => 'f1e3',
                'fas fa-gamepad' => 'f11b',
                'fas fa-gas-pump' => 'f52f',
                'fas fa-gavel' => 'f0e3',
                'fas fa-gem' => 'f3a5',
                'fas fa-genderless' => 'f22d',
                'fas fa-gift' => 'f06b',
                'fas fa-glass-martini' => 'f000',
                'fas fa-glasses' => 'f530',
                'fas fa-globe' => 'f0ac',
                'fas fa-golf-ball' => 'f450',
                'fas fa-graduation-cap' => 'f19d',
                'fas fa-greater-than' => 'f531',
                'fas fa-greater-than-equal' => 'f532',
                'fas fa-h-square' => 'f0fd',
                'fas fa-hand-holding' => 'f4bd',
                'fas fa-hand-holding-heart' => 'f4be',
                'fas fa-hand-holding-usd' => 'f4c0',
                'fas fa-hand-lizard' => 'f258',
                'fas fa-hand-paper' => 'f256',
                'fas fa-hand-peace' => 'f25b',
                'fas fa-hand-point-down' => 'f0a7',
                'fas fa-hand-point-left' => 'f0a5',
                'fas fa-hand-point-right' => 'f0a4',
                'fas fa-hand-point-up' => 'f0a6',
                'fas fa-hand-pointer' => 'f25a',
                'fas fa-hand-rock' => 'f255',
                'fas fa-hand-scissors' => 'f257',
                'fas fa-hand-spock' => 'f259',
                'fas fa-hands' => 'f4c2',
                'fas fa-hands-helping' => 'f4c4',
                'fas fa-handshake' => 'f2b5',
                'fas fa-hashtag' => 'f292',
                'fas fa-hdd' => 'f0a0',
                'fas fa-heading' => 'f1dc',
                'fas fa-headphones' => 'f025',
                'fas fa-heart' => 'f004',
                'fas fa-heartbeat' => 'f21e',
                'fas fa-helicopter' => 'f533',
                'fas fa-history' => 'f1da',
                'fas fa-hockey-puck' => 'f453',
                'fas fa-home' => 'f015',
                'fas fa-hospital' => 'f0f8',
                'fas fa-hospital-alt' => 'f47d',
                'fas fa-hospital-symbol' => 'f47e',
                'fas fa-hourglass' => 'f254',
                'fas fa-hourglass-end' => 'f253',
                'fas fa-hourglass-half' => 'f252',
                'fas fa-hourglass-start' => 'f251',
                'fas fa-i-cursor' => 'f246',
                'fas fa-id-badge' => 'f2c1',
                'fas fa-id-card' => 'f2c2',
                'fas fa-id-card-alt' => 'f47f',
                'fas fa-image' => 'f03e',
                'fas fa-images' => 'f302',
                'fas fa-inbox' => 'f01c',
                'fas fa-indent' => 'f03c',
                'fas fa-industry' => 'f275',
                'fas fa-infinity' => 'f534',
                'fas fa-info' => 'f129',
                'fas fa-info-circle' => 'f05a',
                'fas fa-italic' => 'f033',
                'fas fa-key' => 'f084',
                'fas fa-keyboard' => 'f11c',
                'fas fa-kiwi-bird' => 'f535',
                'fas fa-language' => 'f1ab',
                'fas fa-laptop' => 'f109',
                'fas fa-leaf' => 'f06c',
                'fas fa-lemon' => 'f094',
                'fas fa-less-than' => 'f536',
                'fas fa-less-than-equal' => 'f537',
                'fas fa-level-down-alt' => 'f3be',
                'fas fa-level-up-alt' => 'f3bf',
                'fas fa-life-ring' => 'f1cd',
                'fas fa-lightbulb' => 'f0eb',
                'fas fa-link' => 'f0c1',
                'fas fa-lira-sign' => 'f195',
                'fas fa-list' => 'f03a',
                'fas fa-list-alt' => 'f022',
                'fas fa-list-ol' => 'f0cb',
                'fas fa-list-ul' => 'f0ca',
                'fas fa-location-arrow' => 'f124',
                'fas fa-lock' => 'f023',
                'fas fa-lock-open' => 'f3c1',
                'fas fa-long-arrow-alt-down' => 'f309',
                'fas fa-long-arrow-alt-left' => 'f30a',
                'fas fa-long-arrow-alt-right' => 'f30b',
                'fas fa-long-arrow-alt-up' => 'f30c',
                'fas fa-low-vision' => 'f2a8',
                'fas fa-magic' => 'f0d0',
                'fas fa-magnet' => 'f076',
                'fas fa-male' => 'f183',
                'fas fa-map' => 'f279',
                'fas fa-map-marker' => 'f041',
                'fas fa-map-marker-alt' => 'f3c5',
                'fas fa-map-pin' => 'f276',
                'fas fa-map-signs' => 'f277',
                'fas fa-mars' => 'f222',
                'fas fa-mars-double' => 'f227',
                'fas fa-mars-stroke' => 'f229',
                'fas fa-mars-stroke-h' => 'f22b',
                'fas fa-mars-stroke-v' => 'f22a',
                'fas fa-medkit' => 'f0fa',
                'fas fa-meh' => 'f11a',
                'fas fa-memory' => 'f538',
                'fas fa-mercury' => 'f223',
                'fas fa-microchip' => 'f2db',
                'fas fa-microphone' => 'f130',
                'fas fa-microphone-alt' => 'f3c9',
                'fas fa-microphone-alt-slash' => 'f539',
                'fas fa-microphone-slash' => 'f131',
                'fas fa-minus' => 'f068',
                'fas fa-minus-circle' => 'f056',
                'fas fa-minus-square' => 'f146',
                'fas fa-mobile' => 'f10b',
                'fas fa-mobile-alt' => 'f3cd',
                'fas fa-money-bill' => 'f0d6',
                'fas fa-money-bill-alt' => 'f3d1',
                'fas fa-money-bill-wave' => 'f53a',
                'fas fa-money-bill-wave-alt' => 'f53b',
                'fas fa-money-check' => 'f53c',
                'fas fa-money-check-alt' => 'f53d',
                'fas fa-moon' => 'f186',
                'fas fa-motorcycle' => 'f21c',
                'fas fa-mouse-pointer' => 'f245',
                'fas fa-music' => 'f001',
                'fas fa-neuter' => 'f22c',
                'fas fa-newspaper' => 'f1ea',
                'fas fa-not-equal' => 'f53e',
                'fas fa-notes-medical' => 'f481',
                'fas fa-object-group' => 'f247',
                'fas fa-object-ungroup' => 'f248',
                'fas fa-outdent' => 'f03b',
                'fas fa-paint-brush' => 'f1fc',
                'fas fa-palette' => 'f53f',
                'fas fa-pallet' => 'f482',
                'fas fa-paper-plane' => 'f1d8',
                'fas fa-paperclip' => 'f0c6',
                'fas fa-parachute-box' => 'f4cd',
                'fas fa-paragraph' => 'f1dd',
                'fas fa-parking' => 'f540',
                'fas fa-paste' => 'f0ea',
                'fas fa-pause' => 'f04c',
                'fas fa-pause-circle' => 'f28b',
                'fas fa-paw' => 'f1b0',
                'fas fa-pen-square' => 'f14b',
                'fas fa-pencil-alt' => 'f303',
                'fas fa-people-carry' => 'f4ce',
                'fas fa-percent' => 'f295',
                'fas fa-percentage' => 'f541',
                'fas fa-phone' => 'f095',
                'fas fa-phone-slash' => 'f3dd',
                'fas fa-phone-square' => 'f098',
                'fas fa-phone-volume' => 'f2a0',
                'fas fa-piggy-bank' => 'f4d3',
                'fas fa-pills' => 'f484',
                'fas fa-plane' => 'f072',
                'fas fa-play' => 'f04b',
                'fas fa-play-circle' => 'f144',
                'fas fa-plug' => 'f1e6',
                'fas fa-plus' => 'f067',
                'fas fa-plus-circle' => 'f055',
                'fas fa-plus-square' => 'f0fe',
                'fas fa-podcast' => 'f2ce',
                'fas fa-poo' => 'f2fe',
                'fas fa-portrait' => 'f3e0',
                'fas fa-pound-sign' => 'f154',
                'fas fa-power-off' => 'f011',
                'fas fa-prescription-bottle' => 'f485',
                'fas fa-prescription-bottle-alt' => 'f486',
                'fas fa-print' => 'f02f',
                'fas fa-procedures' => 'f487',
                'fas fa-project-diagram' => 'f542',
                'fas fa-puzzle-piece' => 'f12e',
                'fas fa-qrcode' => 'f029',
                'fas fa-question' => 'f128',
                'fas fa-question-circle' => 'f059',
                'fas fa-quidditch' => 'f458',
                'fas fa-quote-left' => 'f10d',
                'fas fa-quote-right' => 'f10e',
                'fas fa-random' => 'f074',
                'fas fa-receipt' => 'f543',
                'fas fa-recycle' => 'f1b8',
                'fas fa-redo' => 'f01e',
                'fas fa-redo-alt' => 'f2f9',
                'fas fa-registered' => 'f25d',
                'fas fa-reply' => 'f3e5',
                'fas fa-reply-all' => 'f122',
                'fas fa-retweet' => 'f079',
                'fas fa-ribbon' => 'f4d6',
                'fas fa-road' => 'f018',
                'fas fa-robot' => 'f544',
                'fas fa-rocket' => 'f135',
                'fas fa-rss' => 'f09e',
                'fas fa-rss-square' => 'f143',
                'fas fa-ruble-sign' => 'f158',
                'fas fa-ruler' => 'f545',
                'fas fa-ruler-combined' => 'f546',
                'fas fa-ruler-horizontal' => 'f547',
                'fas fa-ruler-vertical' => 'f548',
                'fas fa-rupee-sign' => 'f156',
                'fas fa-save' => 'f0c7',
                'fas fa-school' => 'f549',
                'fas fa-screwdriver' => 'f54a',
                'fas fa-search' => 'f002',
                'fas fa-search-minus' => 'f010',
                'fas fa-search-plus' => 'f00e',
                'fas fa-seedling' => 'f4d8',
                'fas fa-server' => 'f233',
                'fas fa-share' => 'f064',
                'fas fa-share-alt' => 'f1e0',
                'fas fa-share-alt-square' => 'f1e1',
                'fas fa-share-square' => 'f14d',
                'fas fa-shekel-sign' => 'f20b',
                'fas fa-shield-alt' => 'f3ed',
                'fas fa-ship' => 'f21a',
                'fas fa-shipping-fast' => 'f48b',
                'fas fa-shoe-prints' => 'f54b',
                'fas fa-shopping-bag' => 'f290',
                'fas fa-shopping-basket' => 'f291',
                'fas fa-shopping-cart' => 'f07a',
                'fas fa-shower' => 'f2cc',
                'fas fa-sign' => 'f4d9',
                'fas fa-sign-in-alt' => 'f2f6',
                'fas fa-sign-language' => 'f2a7',
                'fas fa-sign-out-alt' => 'f2f5',
                'fas fa-signal' => 'f012',
                'fas fa-sitemap' => 'f0e8',
                'fas fa-skull' => 'f54c',
                'fas fa-sliders-h' => 'f1de',
                'fas fa-smile' => 'f118',
                'fas fa-smoking' => 'f48d',
                'fas fa-smoking-ban' => 'f54d',
                'fas fa-snowflake' => 'f2dc',
                'fas fa-sort' => 'f0dc',
                'fas fa-sort-alpha-down' => 'f15d',
                'fas fa-sort-alpha-up' => 'f15e',
                'fas fa-sort-amount-down' => 'f160',
                'fas fa-sort-amount-up' => 'f161',
                'fas fa-sort-down' => 'f0dd',
                'fas fa-sort-numeric-down' => 'f162',
                'fas fa-sort-numeric-up' => 'f163',
                'fas fa-sort-up' => 'f0de',
                'fas fa-space-shuttle' => 'f197',
                'fas fa-spinner' => 'f110',
                'fas fa-square' => 'f0c8',
                'fas fa-square-full' => 'f45c',
                'fas fa-star' => 'f005',
                'fas fa-star-half' => 'f089',
                'fas fa-step-backward' => 'f048',
                'fas fa-step-forward' => 'f051',
                'fas fa-stethoscope' => 'f0f1',
                'fas fa-sticky-note' => 'f249',
                'fas fa-stop' => 'f04d',
                'fas fa-stop-circle' => 'f28d',
                'fas fa-stopwatch' => 'f2f2',
                'fas fa-store' => 'f54e',
                'fas fa-store-alt' => 'f54f',
                'fas fa-stream' => 'f550',
                'fas fa-street-view' => 'f21d',
                'fas fa-strikethrough' => 'f0cc',
                'fas fa-stroopwafel' => 'f551',
                'fas fa-subscript' => 'f12c',
                'fas fa-subway' => 'f239',
                'fas fa-suitcase' => 'f0f2',
                'fas fa-sun' => 'f185',
                'fas fa-superscript' => 'f12b',
                'fas fa-sync' => 'f021',
                'fas fa-sync-alt' => 'f2f1',
                'fas fa-syringe' => 'f48e',
                'fas fa-table' => 'f0ce',
                'fas fa-table-tennis' => 'f45d',
                'fas fa-tablet' => 'f10a',
                'fas fa-tablet-alt' => 'f3fa',
                'fas fa-tablets' => 'f490',
                'fas fa-tachometer-alt' => 'f3fd',
                'fas fa-tag' => 'f02b',
                'fas fa-tags' => 'f02c',
                'fas fa-tape' => 'f4db',
                'fas fa-tasks' => 'f0ae',
                'fas fa-taxi' => 'f1ba',
                'fas fa-terminal' => 'f120',
                'fas fa-text-height' => 'f034',
                'fas fa-text-width' => 'f035',
                'fas fa-th' => 'f00a',
                'fas fa-th-large' => 'f009',
                'fas fa-th-list' => 'f00b',
                'fas fa-thermometer' => 'f491',
                'fas fa-thermometer-empty' => 'f2cb',
                'fas fa-thermometer-full' => 'f2c7',
                'fas fa-thermometer-half' => 'f2c9',
                'fas fa-thermometer-quarter' => 'f2ca',
                'fas fa-thermometer-three-quarters' => 'f2c8',
                'fas fa-thumbs-down' => 'f165',
                'fas fa-thumbs-up' => 'f164',
                'fas fa-thumbtack' => 'f08d',
                'fas fa-ticket-alt' => 'f3ff',
                'fas fa-times' => 'f00d',
                'fas fa-times-circle' => 'f057',
                'fas fa-tint' => 'f043',
                'fas fa-toggle-off' => 'f204',
                'fas fa-toggle-on' => 'f205',
                'fas fa-toolbox' => 'f552',
                'fas fa-trademark' => 'f25c',
                'fas fa-train' => 'f238',
                'fas fa-transgender' => 'f224',
                'fas fa-transgender-alt' => 'f225',
                'fas fa-trash' => 'f1f8',
                'fas fa-trash-alt' => 'f2ed',
                'fas fa-tree' => 'f1bb',
                'fas fa-trophy' => 'f091',
                'fas fa-truck' => 'f0d1',
                'fas fa-truck-loading' => 'f4de',
                'fas fa-truck-moving' => 'f4df',
                'fas fa-tshirt' => 'f553',
                'fas fa-tty' => 'f1e4',
                'fas fa-tv' => 'f26c',
                'fas fa-umbrella' => 'f0e9',
                'fas fa-underline' => 'f0cd',
                'fas fa-undo' => 'f0e2',
                'fas fa-undo-alt' => 'f2ea',
                'fas fa-universal-access' => 'f29a',
                'fas fa-university' => 'f19c',
                'fas fa-unlink' => 'f127',
                'fas fa-unlock' => 'f09c',
                'fas fa-unlock-alt' => 'f13e',
                'fas fa-upload' => 'f093',
                'fas fa-user' => 'f007',
                'fas fa-user-alt' => 'f406',
                'fas fa-user-alt-slash' => 'f4fa',
                'fas fa-user-astronaut' => 'f4fb',
                'fas fa-user-check' => 'f4fc',
                'fas fa-user-circle' => 'f2bd',
                'fas fa-user-clock' => 'f4fd',
                'fas fa-user-cog' => 'f4fe',
                'fas fa-user-edit' => 'f4ff',
                'fas fa-user-friends' => 'f500',
                'fas fa-user-graduate' => 'f501',
                'fas fa-user-lock' => 'f502',
                'fas fa-user-md' => 'f0f0',
                'fas fa-user-minus' => 'f503',
                'fas fa-user-ninja' => 'f504',
                'fas fa-user-plus' => 'f234',
                'fas fa-user-secret' => 'f21b',
                'fas fa-user-shield' => 'f505',
                'fas fa-user-slash' => 'f506',
                'fas fa-user-tag' => 'f507',
                'fas fa-user-tie' => 'f508',
                'fas fa-user-times' => 'f235',
                'fas fa-users' => 'f0c0',
                'fas fa-users-cog' => 'f509',
                'fas fa-utensil-spoon' => 'f2e5',
                'fas fa-utensils' => 'f2e7',
                'fas fa-venus' => 'f221',
                'fas fa-venus-double' => 'f226',
                'fas fa-venus-mars' => 'f228',
                'fas fa-vial' => 'f492',
                'fas fa-vials' => 'f493',
                'fas fa-video' => 'f03d',
                'fas fa-video-slash' => 'f4e2',
                'fas fa-volleyball-ball' => 'f45f',
                'fas fa-volume-down' => 'f027',
                'fas fa-volume-off' => 'f026',
                'fas fa-volume-up' => 'f028',
                'fas fa-walking' => 'f554',
                'fas fa-wallet' => 'f555',
                'fas fa-warehouse' => 'f494',
                'fas fa-weight' => 'f496',
                'fas fa-wheelchair' => 'f193',
                'fas fa-wifi' => 'f1eb',
                'fas fa-window-close' => 'f410',
                'fas fa-window-maximize' => 'f2d0',
                'fas fa-window-minimize' => 'f2d1',
                'fas fa-window-restore' => 'f2d2',
                'fas fa-wine-glass' => 'f4e3',
                'fas fa-won-sign' => 'f159',
                'fas fa-wrench' => 'f0ad',
                'fas fa-x-ray' => 'f497',
                'fas fa-yen-sign' => 'f157',
                'far fa-address-book' => 'f2b9',
                'far fa-address-card' => 'f2bb',
                'far fa-arrow-alt-circle-down' => 'f358',
                'far fa-arrow-alt-circle-left' => 'f359',
                'far fa-arrow-alt-circle-right' => 'f35a',
                'far fa-arrow-alt-circle-up' => 'f35b',
                'far fa-bell' => 'f0f3',
                'far fa-bell-slash' => 'f1f6',
                'far fa-bookmark' => 'f02e',
                'far fa-building' => 'f1ad',
                'far fa-calendar' => 'f133',
                'far fa-calendar-alt' => 'f073',
                'far fa-calendar-check' => 'f274',
                'far fa-calendar-minus' => 'f272',
                'far fa-calendar-plus' => 'f271',
                'far fa-calendar-times' => 'f273',
                'far fa-caret-square-down' => 'f150',
                'far fa-caret-square-left' => 'f191',
                'far fa-caret-square-right' => 'f152',
                'far fa-caret-square-up' => 'f151',
                'far fa-chart-bar' => 'f080',
                'far fa-check-circle' => 'f058',
                'far fa-check-square' => 'f14a',
                'far fa-circle' => 'f111',
                'far fa-clipboard' => 'f328',
                'far fa-clock' => 'f017',
                'far fa-clone' => 'f24d',
                'far fa-closed-captioning' => 'f20a',
                'far fa-comment' => 'f075',
                'far fa-comment-alt' => 'f27a',
                'far fa-comment-dots' => 'f4ad',
                'far fa-comments' => 'f086',
                'far fa-compass' => 'f14e',
                'far fa-copy' => 'f0c5',
                'far fa-copyright' => 'f1f9',
                'far fa-credit-card' => 'f09d',
                'far fa-dot-circle' => 'f192',
                'far fa-edit' => 'f044',
                'far fa-envelope' => 'f0e0',
                'far fa-envelope-open' => 'f2b6',
                'far fa-eye' => 'f06e',
                'far fa-eye-slash' => 'f070',
                'far fa-file' => 'f15b',
                'far fa-file-alt' => 'f15c',
                'far fa-file-archive' => 'f1c6',
                'far fa-file-audio' => 'f1c7',
                'far fa-file-code' => 'f1c9',
                'far fa-file-excel' => 'f1c3',
                'far fa-file-image' => 'f1c5',
                'far fa-file-pdf' => 'f1c1',
                'far fa-file-powerpoint' => 'f1c4',
                'far fa-file-video' => 'f1c8',
                'far fa-file-word' => 'f1c2',
                'far fa-flag' => 'f024',
                'far fa-folder' => 'f07b',
                'far fa-folder-open' => 'f07c',
                'far fa-font-awesome-logo-full' => 'f4e6',
                'far fa-frown' => 'f119',
                'far fa-futbol' => 'f1e3',
                'far fa-gem' => 'f3a5',
                'far fa-hand-lizard' => 'f258',
                'far fa-hand-paper' => 'f256',
                'far fa-hand-peace' => 'f25b',
                'far fa-hand-point-down' => 'f0a7',
                'far fa-hand-point-left' => 'f0a5',
                'far fa-hand-point-right' => 'f0a4',
                'far fa-hand-point-up' => 'f0a6',
                'far fa-hand-pointer' => 'f25a',
                'far fa-hand-rock' => 'f255',
                'far fa-hand-scissors' => 'f257',
                'far fa-hand-spock' => 'f259',
                'far fa-handshake' => 'f2b5',
                'far fa-hdd' => 'f0a0',
                'far fa-heart' => 'f004',
                'far fa-hospital' => 'f0f8',
                'far fa-hourglass' => 'f254',
                'far fa-id-badge' => 'f2c1',
                'far fa-id-card' => 'f2c2',
                'far fa-image' => 'f03e',
                'far fa-images' => 'f302',
                'far fa-keyboard' => 'f11c',
                'far fa-lemon' => 'f094',
                'far fa-life-ring' => 'f1cd',
                'far fa-lightbulb' => 'f0eb',
                'far fa-list-alt' => 'f022',
                'far fa-map' => 'f279',
                'far fa-meh' => 'f11a',
                'far fa-minus-square' => 'f146',
                'far fa-money-bill-alt' => 'f3d1',
                'far fa-moon' => 'f186',
                'far fa-newspaper' => 'f1ea',
                'far fa-object-group' => 'f247',
                'far fa-object-ungroup' => 'f248',
                'far fa-paper-plane' => 'f1d8',
                'far fa-pause-circle' => 'f28b',
                'far fa-play-circle' => 'f144',
                'far fa-plus-square' => 'f0fe',
                'far fa-question-circle' => 'f059',
                'far fa-registered' => 'f25d',
                'far fa-save' => 'f0c7',
                'far fa-share-square' => 'f14d',
                'far fa-smile' => 'f118',
                'far fa-snowflake' => 'f2dc',
                'far fa-square' => 'f0c8',
                'far fa-star' => 'f005',
                'far fa-star-half' => 'f089',
                'far fa-sticky-note' => 'f249',
                'far fa-stop-circle' => 'f28d',
                'far fa-sun' => 'f185',
                'far fa-thumbs-down' => 'f165',
                'far fa-thumbs-up' => 'f164',
                'far fa-times-circle' => 'f057',
                'far fa-trash-alt' => 'f2ed',
                'far fa-user' => 'f007',
                'far fa-user-circle' => 'f2bd',
                'far fa-window-close' => 'f410',
                'far fa-window-maximize' => 'f2d0',
                'far fa-window-minimize' => 'f2d1',
                'far fa-window-restore' => 'f2d2',
                'fab fa-500px' => 'f26e',
                'fab fa-accessible-icon' => 'f368',
                'fab fa-accusoft' => 'f369',
                'fab fa-adn' => 'f170',
                'fab fa-adversal' => 'f36a',
                'fab fa-affiliatetheme' => 'f36b',
                'fab fa-algolia' => 'f36c',
                'fab fa-amazon' => 'f270',
                'fab fa-amazon-pay' => 'f42c',
                'fab fa-amilia' => 'f36d',
                'fab fa-android' => 'f17b',
                'fab fa-angellist' => 'f209',
                'fab fa-angrycreative' => 'f36e',
                'fab fa-angular' => 'f420',
                'fab fa-app-store' => 'f36f',
                'fab fa-app-store-ios' => 'f370',
                'fab fa-apper' => 'f371',
                'fab fa-apple' => 'f179',
                'fab fa-apple-pay' => 'f415',
                'fab fa-asymmetrik' => 'f372',
                'fab fa-audible' => 'f373',
                'fab fa-autoprefixer' => 'f41c',
                'fab fa-avianex' => 'f374',
                'fab fa-aviato' => 'f421',
                'fab fa-aws' => 'f375',
                'fab fa-bandcamp' => 'f2d5',
                'fab fa-behance' => 'f1b4',
                'fab fa-behance-square' => 'f1b5',
                'fab fa-bimobject' => 'f378',
                'fab fa-bitbucket' => 'f171',
                'fab fa-bitcoin' => 'f379',
                'fab fa-bity' => 'f37a',
                'fab fa-black-tie' => 'f27e',
                'fab fa-blackberry' => 'f37b',
                'fab fa-blogger' => 'f37c',
                'fab fa-blogger-b' => 'f37d',
                'fab fa-bluetooth' => 'f293',
                'fab fa-bluetooth-b' => 'f294',
                'fab fa-btc' => 'f15a',
                'fab fa-buromobelexperte' => 'f37f',
                'fab fa-buysellads' => 'f20d',
                'fab fa-cc-amazon-pay' => 'f42d',
                'fab fa-cc-amex' => 'f1f3',
                'fab fa-cc-apple-pay' => 'f416',
                'fab fa-cc-diners-club' => 'f24c',
                'fab fa-cc-discover' => 'f1f2',
                'fab fa-cc-jcb' => 'f24b',
                'fab fa-cc-mastercard' => 'f1f1',
                'fab fa-cc-paypal' => 'f1f4',
                'fab fa-cc-stripe' => 'f1f5',
                'fab fa-cc-visa' => 'f1f0',
                'fab fa-centercode' => 'f380',
                'fab fa-chrome' => 'f268',
                'fab fa-cloudscale' => 'f383',
                'fab fa-cloudsmith' => 'f384',
                'fab fa-cloudversify' => 'f385',
                'fab fa-codepen' => 'f1cb',
                'fab fa-codiepie' => 'f284',
                'fab fa-connectdevelop' => 'f20e',
                'fab fa-contao' => 'f26d',
                'fab fa-cpanel' => 'f388',
                'fab fa-creative-commons' => 'f25e',
                'fab fa-creative-commons-by' => 'f4e7',
                'fab fa-creative-commons-nc' => 'f4e8',
                'fab fa-creative-commons-nc-eu' => 'f4e9',
                'fab fa-creative-commons-nc-jp' => 'f4ea',
                'fab fa-creative-commons-nd' => 'f4eb',
                'fab fa-creative-commons-pd' => 'f4ec',
                'fab fa-creative-commons-pd-alt' => 'f4ed',
                'fab fa-creative-commons-remix' => 'f4ee',
                'fab fa-creative-commons-sa' => 'f4ef',
                'fab fa-creative-commons-sampling' => 'f4f0',
                'fab fa-creative-commons-sampling-plus' => 'f4f1',
                'fab fa-creative-commons-share' => 'f4f2',
                'fab fa-css3' => 'f13c',
                'fab fa-css3-alt' => 'f38b',
                'fab fa-cuttlefish' => 'f38c',
                'fab fa-d-and-d' => 'f38d',
                'fab fa-dashcube' => 'f210',
                'fab fa-delicious' => 'f1a5',
                'fab fa-deploydog' => 'f38e',
                'fab fa-deskpro' => 'f38f',
                'fab fa-deviantart' => 'f1bd',
                'fab fa-digg' => 'f1a6',
                'fab fa-digital-ocean' => 'f391',
                'fab fa-discord' => 'f392',
                'fab fa-discourse' => 'f393',
                'fab fa-dochub' => 'f394',
                'fab fa-docker' => 'f395',
                'fab fa-draft2digital' => 'f396',
                'fab fa-dribbble' => 'f17d',
                'fab fa-dribbble-square' => 'f397',
                'fab fa-dropbox' => 'f16b',
                'fab fa-drupal' => 'f1a9',
                'fab fa-dyalog' => 'f399',
                'fab fa-earlybirds' => 'f39a',
                'fab fa-ebay' => 'f4f4',
                'fab fa-edge' => 'f282',
                'fab fa-elementor' => 'f430',
                'fab fa-ember' => 'f423',
                'fab fa-empire' => 'f1d1',
                'fab fa-envira' => 'f299',
                'fab fa-erlang' => 'f39d',
                'fab fa-ethereum' => 'f42e',
                'fab fa-etsy' => 'f2d7',
                'fab fa-expeditedssl' => 'f23e',
                'fab fa-facebook' => 'f09a',
                'fab fa-facebook-f' => 'f39e',
                'fab fa-facebook-messenger' => 'f39f',
                'fab fa-facebook-square' => 'f082',
                'fab fa-firefox' => 'f269',
                'fab fa-first-order' => 'f2b0',
                'fab fa-first-order-alt' => 'f50a',
                'fab fa-firstdraft' => 'f3a1',
                'fab fa-flickr' => 'f16e',
                'fab fa-flipboard' => 'f44d',
                'fab fa-fly' => 'f417',
                'fab fa-font-awesome' => 'f2b4',
                'fab fa-font-awesome-alt' => 'f35c',
                'fab fa-font-awesome-flag' => 'f425',
                'fab fa-font-awesome-logo-full' => 'f4e6',
                'fab fa-fonticons' => 'f280',
                'fab fa-fonticons-fi' => 'f3a2',
                'fab fa-fort-awesome' => 'f286',
                'fab fa-fort-awesome-alt' => 'f3a3',
                'fab fa-forumbee' => 'f211',
                'fab fa-foursquare' => 'f180',
                'fab fa-free-code-camp' => 'f2c5',
                'fab fa-freebsd' => 'f3a4',
                'fab fa-fulcrum' => 'f50b',
                'fab fa-galactic-republic' => 'f50c',
                'fab fa-galactic-senate' => 'f50d',
                'fab fa-get-pocket' => 'f265',
                'fab fa-gg' => 'f260',
                'fab fa-gg-circle' => 'f261',
                'fab fa-git' => 'f1d3',
                'fab fa-git-square' => 'f1d2',
                'fab fa-github' => 'f09b',
                'fab fa-github-alt' => 'f113',
                'fab fa-github-square' => 'f092',
                'fab fa-gitkraken' => 'f3a6',
                'fab fa-gitlab' => 'f296',
                'fab fa-gitter' => 'f426',
                'fab fa-glide' => 'f2a5',
                'fab fa-glide-g' => 'f2a6',
                'fab fa-gofore' => 'f3a7',
                'fab fa-goodreads' => 'f3a8',
                'fab fa-goodreads-g' => 'f3a9',
                'fab fa-google' => 'f1a0',
                'fab fa-google-drive' => 'f3aa',
                'fab fa-google-play' => 'f3ab',
                'fab fa-google-plus' => 'f2b3',
                'fab fa-google-plus-g' => 'f0d5',
                'fab fa-google-plus-square' => 'f0d4',
                'fab fa-google-wallet' => 'f1ee',
                'fab fa-gratipay' => 'f184',
                'fab fa-grav' => 'f2d6',
                'fab fa-gripfire' => 'f3ac',
                'fab fa-grunt' => 'f3ad',
                'fab fa-gulp' => 'f3ae',
                'fab fa-hacker-news' => 'f1d4',
                'fab fa-hacker-news-square' => 'f3af',
                'fab fa-hips' => 'f452',
                'fab fa-hire-a-helper' => 'f3b0',
                'fab fa-hooli' => 'f427',
                'fab fa-hotjar' => 'f3b1',
                'fab fa-houzz' => 'f27c',
                'fab fa-html5' => 'f13b',
                'fab fa-hubspot' => 'f3b2',
                'fab fa-imdb' => 'f2d8',
                'fab fa-instagram' => 'f16d',
                'fab fa-internet-explorer' => 'f26b',
                'fab fa-ioxhost' => 'f208',
                'fab fa-itunes' => 'f3b4',
                'fab fa-itunes-note' => 'f3b5',
                'fab fa-java' => 'f4e4',
                'fab fa-jedi-order' => 'f50e',
                'fab fa-jenkins' => 'f3b6',
                'fab fa-joget' => 'f3b7',
                'fab fa-joomla' => 'f1aa',
                'fab fa-js' => 'f3b8',
                'fab fa-js-square' => 'f3b9',
                'fab fa-jsfiddle' => 'f1cc',
                'fab fa-keybase' => 'f4f5',
                'fab fa-keycdn' => 'f3ba',
                'fab fa-kickstarter' => 'f3bb',
                'fab fa-kickstarter-k' => 'f3bc',
                'fab fa-korvue' => 'f42f',
                'fab fa-laravel' => 'f3bd',
                'fab fa-lastfm' => 'f202',
                'fab fa-lastfm-square' => 'f203',
                'fab fa-leanpub' => 'f212',
                'fab fa-less' => 'f41d',
                'fab fa-line' => 'f3c0',
                'fab fa-linkedin' => 'f08c',
                'fab fa-linkedin-in' => 'f0e1',
                'fab fa-linode' => 'f2b8',
                'fab fa-linux' => 'f17c',
                'fab fa-lyft' => 'f3c3',
                'fab fa-magento' => 'f3c4',
                'fab fa-mandalorian' => 'f50f',
                'fab fa-mastodon' => 'f4f6',
                'fab fa-maxcdn' => 'f136',
                'fab fa-medapps' => 'f3c6',
                'fab fa-medium' => 'f23a',
                'fab fa-medium-m' => 'f3c7',
                'fab fa-medrt' => 'f3c8',
                'fab fa-meetup' => 'f2e0',
                'fab fa-microsoft' => 'f3ca',
                'fab fa-mix' => 'f3cb',
                'fab fa-mixcloud' => 'f289',
                'fab fa-mizuni' => 'f3cc',
                'fab fa-modx' => 'f285',
                'fab fa-monero' => 'f3d0',
                'fab fa-napster' => 'f3d2',
                'fab fa-nintendo-switch' => 'f418',
                'fab fa-node' => 'f419',
                'fab fa-node-js' => 'f3d3',
                'fab fa-npm' => 'f3d4',
                'fab fa-ns8' => 'f3d5',
                'fab fa-nutritionix' => 'f3d6',
                'fab fa-odnoklassniki' => 'f263',
                'fab fa-odnoklassniki-square' => 'f264',
                'fab fa-old-republic' => 'f510',
                'fab fa-opencart' => 'f23d',
                'fab fa-openid' => 'f19b',
                'fab fa-opera' => 'f26a',
                'fab fa-optin-monster' => 'f23c',
                'fab fa-osi' => 'f41a',
                'fab fa-page4' => 'f3d7',
                'fab fa-pagelines' => 'f18c',
                'fab fa-palfed' => 'f3d8',
                'fab fa-patreon' => 'f3d9',
                'fab fa-paypal' => 'f1ed',
                'fab fa-periscope' => 'f3da',
                'fab fa-phabricator' => 'f3db',
                'fab fa-phoenix-framework' => 'f3dc',
                'fab fa-phoenix-squadron' => 'f511',
                'fab fa-php' => 'f457',
                'fab fa-pied-piper' => 'f2ae',
                'fab fa-pied-piper-alt' => 'f1a8',
                'fab fa-pied-piper-hat' => 'f4e5',
                'fab fa-pied-piper-pp' => 'f1a7',
                'fab fa-pinterest' => 'f0d2',
                'fab fa-pinterest-p' => 'f231',
                'fab fa-pinterest-square' => 'f0d3',
                'fab fa-playstation' => 'f3df',
                'fab fa-product-hunt' => 'f288',
                'fab fa-pushed' => 'f3e1',
                'fab fa-python' => 'f3e2',
                'fab fa-qq' => 'f1d6',
                'fab fa-quinscape' => 'f459',
                'fab fa-quora' => 'f2c4',
                'fab fa-r-project' => 'f4f7',
                'fab fa-ravelry' => 'f2d9',
                'fab fa-react' => 'f41b',
                'fab fa-readme' => 'f4d5',
                'fab fa-rebel' => 'f1d0',
                'fab fa-red-river' => 'f3e3',
                'fab fa-reddit' => 'f1a1',
                'fab fa-reddit-alien' => 'f281',
                'fab fa-reddit-square' => 'f1a2',
                'fab fa-rendact' => 'f3e4',
                'fab fa-renren' => 'f18b',
                'fab fa-replyd' => 'f3e6',
                'fab fa-researchgate' => 'f4f8',
                'fab fa-resolving' => 'f3e7',
                'fab fa-rocketchat' => 'f3e8',
                'fab fa-rockrms' => 'f3e9',
                'fab fa-safari' => 'f267',
                'fab fa-sass' => 'f41e',
                'fab fa-schlix' => 'f3ea',
                'fab fa-scribd' => 'f28a',
                'fab fa-searchengin' => 'f3eb',
                'fab fa-sellcast' => 'f2da',
                'fab fa-sellsy' => 'f213',
                'fab fa-servicestack' => 'f3ec',
                'fab fa-shirtsinbulk' => 'f214',
                'fab fa-simplybuilt' => 'f215',
                'fab fa-sistrix' => 'f3ee',
                'fab fa-sith' => 'f512',
                'fab fa-skyatlas' => 'f216',
                'fab fa-skype' => 'f17e',
                'fab fa-slack' => 'f198',
                'fab fa-slack-hash' => 'f3ef',
                'fab fa-slideshare' => 'f1e7',
                'fab fa-snapchat' => 'f2ab',
                'fab fa-snapchat-ghost' => 'f2ac',
                'fab fa-snapchat-square' => 'f2ad',
                'fab fa-soundcloud' => 'f1be',
                'fab fa-speakap' => 'f3f3',
                'fab fa-spotify' => 'f1bc',
                'fab fa-stack-exchange' => 'f18d',
                'fab fa-stack-overflow' => 'f16c',
                'fab fa-staylinked' => 'f3f5',
                'fab fa-steam' => 'f1b6',
                'fab fa-steam-square' => 'f1b7',
                'fab fa-steam-symbol' => 'f3f6',
                'fab fa-sticker-mule' => 'f3f7',
                'fab fa-strava' => 'f428',
                'fab fa-stripe' => 'f429',
                'fab fa-stripe-s' => 'f42a',
                'fab fa-studiovinari' => 'f3f8',
                'fab fa-stumbleupon' => 'f1a4',
                'fab fa-stumbleupon-circle' => 'f1a3',
                'fab fa-superpowers' => 'f2dd',
                'fab fa-supple' => 'f3f9',
                'fab fa-teamspeak' => 'f4f9',
                'fab fa-telegram' => 'f2c6',
                'fab fa-telegram-plane' => 'f3fe',
                'fab fa-tencent-weibo' => 'f1d5',
                'fab fa-themeisle' => 'f2b2',
                'fab fa-trade-federation' => 'f513',
                'fab fa-trello' => 'f181',
                'fab fa-tripadvisor' => 'f262',
                'fab fa-tumblr' => 'f173',
                'fab fa-tumblr-square' => 'f174',
                'fab fa-twitch' => 'f1e8',
                'fab fa-twitter' => 'f099',
                'fab fa-twitter-square' => 'f081',
                'fab fa-typo3' => 'f42b',
                'fab fa-uber' => 'f402',
                'fab fa-uikit' => 'f403',
                'fab fa-uniregistry' => 'f404',
                'fab fa-untappd' => 'f405',
                'fab fa-usb' => 'f287',
                'fab fa-ussunnah' => 'f407',
                'fab fa-vaadin' => 'f408',
                'fab fa-viacoin' => 'f237',
                'fab fa-viadeo' => 'f2a9',
                'fab fa-viadeo-square' => 'f2aa',
                'fab fa-viber' => 'f409',
                'fab fa-vimeo' => 'f40a',
                'fab fa-vimeo-square' => 'f194',
                'fab fa-vimeo-v' => 'f27d',
                'fab fa-vine' => 'f1ca',
                'fab fa-vk' => 'f189',
                'fab fa-vnv' => 'f40b',
                'fab fa-vuejs' => 'f41f',
                'fab fa-weibo' => 'f18a',
                'fab fa-weixin' => 'f1d7',
                'fab fa-whatsapp' => 'f232',
                'fab fa-whatsapp-square' => 'f40c',
                'fab fa-whmcs' => 'f40d',
                'fab fa-wikipedia-w' => 'f266',
                'fab fa-windows' => 'f17a',
                'fab fa-wolf-pack-battalion' => 'f514',
                'fab fa-wordpress' => 'f19a',
                'fab fa-wordpress-simple' => 'f411',
                'fab fa-wpbeginner' => 'f297',
                'fab fa-wpexplorer' => 'f2de',
                'fab fa-wpforms' => 'f298',
                'fab fa-xbox' => 'f412',
                'fab fa-xing' => 'f168',
                'fab fa-xing-square' => 'f169',
                'fab fa-y-combinator' => 'f23b',
                'fab fa-yahoo' => 'f19e',
                'fab fa-yandex' => 'f413',
                'fab fa-yandex-international' => 'f414',
                'fab fa-yelp' => 'f1e9',
                'fab fa-yoast' => 'f2b1',
                'fab fa-youtube' => 'f167',
                'fab fa-youtube-square' => 'f431'
            );
            return $fontawesome;
        }

        static function all_font_varients($font_name = '')
        {
            $varients = array(

                'normal' => esc_html__('Normal', 'yatri'),
                'bold' => esc_html__('Bold', 'yatri'),
                '100' => esc_html__('100', 'yatri'),
                '200' => esc_html__('200', 'yatri'),
                '300' => esc_html__('Light 300', 'yatri'),
                '400' => esc_html__('Normal 400', 'yatri'),
                '500' => esc_html__('Medium 500', 'yatri'),
                '600' => esc_html__('Semi-Bold 600', 'yatri'),
                '700' => esc_html__('Bold 700', 'yatri'),
                '800' => esc_html__('Extra-Bold 800', 'yatri'),
                '900' => esc_html__('Ultra-Bold 900', 'yatri'),

            );

            if (!empty($font_name)) {

                $google_fonts = (self::get_google_fonts());

                $font_varient = array();

                if (isset($google_fonts[$font_name])) {

                    $all_varients = isset($google_fonts[$font_name]['variants']) ? $google_fonts[$font_name]['variants'] : array();


                    foreach ($all_varients as $varient) {

                        $font_varient[$varient] = $varient;
                    }
                    return (apply_filters('yatri_all_font_varients', $font_varient));

                }
            }

            return (apply_filters('yatri_all_font_varients', $varients));
        }

        static function all_fonts()
        {
            $fonts = array(
                'normal' => array(
                    'title' => esc_html__('Default Web Fonts', 'yatri'),
                    'fonts' => self::get_normal_fonts(),
                ),
                'google' => array(
                    'title' => esc_html__('Google Web Fonts', 'yatri'),
                    'fonts' => self::get_google_fonts(),
                ),
            );

            return (apply_filters('yatri_all_fonts', $fonts));
        }

        static function get_google_fonts()
        {

            return Mantrabrain_Theme_Helper_Google_Fonts::get_all();
        }


        static function get_normal_fonts()
        {
            $fonts = array(
                'Arial' => array(
                    'family' => 'Arial',
                    'category' => ' sans-serif',
                ),
                'Baskerville' => array(
                    'family' => 'Baskerville',
                    'category' => 'serif',
                ),
                'Palatino' => array(
                    'family' => 'Palatino',
                    'category' => 'serif',
                ),

                'Bodoni MT' => array(
                    'family' => 'Bodoni MT',
                    'category' => 'serif',
                ),

                'Georgia' => array(
                    'family' => 'Georgia',
                    'category' => 'serif',
                ),

                'Century Gothic' => array(
                    'family' => 'Century Gothic',
                    'category' => 'sans-serif',
                ),

                'Tahoma' => array(
                    'family' => 'Tahoma',
                    'category' => 'sans-serif',
                ),

                'Arial Narrow' => array(
                    'family' => 'Arial Narrow',
                    'category' => ' sans-serif',
                ),

                'Trebuchet MS' => array(
                    'family' => 'Trebuchet MS',
                    'category' => ' sans-serif',
                ),

                'Consolas' => array(
                    'family' => 'Consolas',
                    'category' => ' sans-serif',
                ),

            );

            return $fonts;
        }

        static function css_units()
        {
            return apply_filters('yatri_css_units', array(
                'px' => esc_html__('px', 'yatri'),
                'rem' => esc_html__('rem', 'yatri'),
                'em' => esc_html__('em', 'yatri'),
                '%' => esc_html__('%', 'yatri'),
            ));
        }

        static function css_image_sizes()
        {
            return apply_filters('yatri_css_image_sizes', array(
                '' => esc_html__('Default', 'yatri'),
                'auto' => esc_html__('Auto', 'yatri'),
                'cover' => esc_html__('Cover', 'yatri'),
                'contain' => esc_html__('Contain', 'yatri'),
            ));
        }

        public static function css_image_positions()
        {
            return apply_filters('yatri_css_image_positions', array(
                '' => esc_html__('Default', 'yatri'),
                'center' => esc_html__('Center', 'yatri'),
                'top left' => esc_html__('Top Left', 'yatri'),
                'top right' => esc_html__('Top Right', 'yatri'),
                'top center' => esc_html__('Top Center', 'yatri'),
                'bottom left' => esc_html__('Bottom Left', 'yatri'),
                'bottom center' => esc_html__('Bottom Center', 'yatri'),
                'bottom right' => esc_html__('Bottom Right', 'yatri'),
            ));
        }

        public static function css_image_repeats()
        {
            return apply_filters('yatri_css_image_sizes', array(
                'repeat' => esc_html__('Default', 'yatri'),
                'no-repeat' => esc_html__('No repeat', 'yatri'),
                'repeat-x' => esc_html__('Repeat horizontal', 'yatri'),
                'repeat-y' => esc_html__('Repeat vertical', 'yatri'),
            ));
        }

        public static function css_image_parallax_styles()
        {
            return apply_filters('yatri_css_image_parallax_styles', array(
                '' => esc_html__('Default', 'yatri'),
                'scroll' => esc_html__('Scroll', 'yatri'),
                'fixed' => esc_html__('Fixed', 'yatri'),
            ));
        }

        public static function css_border_styles()
        {
            return apply_filters('yatri_css_border_styles', array(
                '' => esc_html__('Default', 'yatri'),
                'none' => esc_html__('None', 'yatri'),
                'solid' => esc_html__('Solid', 'yatri'),
                'dotted' => esc_html__('Dotted', 'yatri'),
                'dashed' => esc_html__('Dashed', 'yatri'),
                'double' => esc_html__('Double', 'yatri'),
                'ridge' => esc_html__('Ridge', 'yatri'),
                'inset' => esc_html__('Inset', 'yatri'),
                'outset' => esc_html__('Outset', 'yatri'),
            ));
        }

        public static function css_font_style()
        {
            return array(
                '' => esc_html__('Default', 'yatri'),
                'normal' => esc_html__('Normal', 'yatri'),
                'italic' => esc_html__('Italic', 'yatri'),
                'oblique' => esc_html__('Oblique', 'yatri'),

            );

        }

        public static function css_text_decoration()
        {
            return array(
                '' => esc_html__('Default', 'yatri'),
                'underline' => esc_html__('Underline', 'yatri'),
                'overline' => esc_html__('Overline', 'yatri'),
                'line-through' => esc_html__('Line through', 'yatri'),
                'none' => esc_html__('None', 'yatri'),

            );
        }

        public static function css_text_transform()
        {
            return array(
                '' => esc_html__('Default', 'yatri'),
                'uppercase' => esc_html__('Uppercase', 'yatri'),
                'lowercase' => esc_html__('Lowercase', 'yatri'),
                'capitalize' => esc_html__('Capitalize', 'yatri'),
                'none' => esc_html__('None', 'yatri'),

            );
        }

        public static function all_font_subsets($font_name = '')
        {
            $subsets = array();

            if (!empty($font_name)) {

                $google_fonts = (self::get_google_fonts());

                if (isset($google_fonts[$font_name])) {

                    $all_subsets = isset($google_fonts[$font_name]['subsets']) ? $google_fonts[$font_name]['subsets'] : array();


                    foreach ($all_subsets as $subset) {

                        $subsets[$subset] = $subset;
                    }
                    return (apply_filters('yatri_all_font_subsets', $subsets));

                }
            }
            return (apply_filters('yatri_all_font_subsets', $subsets));
        }

        static function maybe_positive_number($value)
        {
            if (is_null($value) || $value == '') {

                return null;
            }

            $value = (int)$value;

            if ($value < 1) {

                return 0;
            }

            return absint($value);
        }

        static function media_query()
        {
            return array(
                'all' => '{{query}}',
                'desktop' => '@media (min-width: 1025px) { {{query}} }',
                'tablet' => '@media (min-width: 640px) and (max-width: 1024px) { {{query}} }',
                'mobile' => '@media (max-width: 639px) { {{query}} }',
            );
        }

        static function sanitize_color($color)
        {
            if (empty($color) || is_array($color)) {
                return '';
            }

            // If string does not start with 'rgba', then treat as hex.
            // sanitize the hex color and finally convert hex to rgba.
            if (false === strpos($color, 'rgba')) {
                return sanitize_hex_color($color);
            }

            // By now we know the string is formatted as an rgba color so we need to further sanitize it.
            $color = str_replace(' ', '', $color);
            sscanf($color, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha);

            return 'rgba(' . $red . ',' . $green . ',' . $blue . ',' . $alpha . ')';
        }

        static function sanitize_modal($input, $setting)
        {
            $input_array = array();

            $setting_id = $setting->id;

            $setting_id = str_replace(YATRI_THEME_SETTINGS, '', $setting_id);

            $setting_id = trim(str_replace(array('[', ']'), '', $setting_id));

            $all_field_from_modal = yatri_customizer_modal_all_fields($setting_id);

            $all_field_value = array();
            try {

                $all_field_value = json_decode($input, true);

            } catch (Exception $e) {

                $all_field_value = array();
            }

            foreach ($all_field_from_modal as $field) {

                $field_type = isset($field['type']) ? $field['type'] : '';

                $field_name = isset($field['name']) ? $field['name'] : '';

                $devices = isset($field['devices']) ? $field['devices'] : array();

                $field_value = isset($all_field_value[$field_name]) ? $all_field_value[$field_name] : array();

                if ($field_type !== 'heading') {

                    $input_array[$field_name] = self::get_modal_value($field_type, $field_name, $field_value, $devices, $field);


                }

            }


            return json_encode($input_array);

        }

        static function mabye_int_empty($value)
        {
            if ('' !== $value) {
                return absint($value);
            }
            return '';

        }

        static function get_modal_value($field_type, $field_name, $field_value, $devices, $field = array())
        {

            $single_value = array();

            foreach ($devices as $device) {

                $field_val = isset($field_value[$device]) ? $field_value[$device] : array();

                $single_value[$device] = self::get_modal_value($field_type, $field_name, $field_val, array());
            }


            if (count($devices) < 1) {

                switch ($field_type) {
                    case "image":
                        $valid_value = isset($field_value['value']) ? ($field_value['value']) : '';
                        $valid_value['attachment_id'] = isset($valid_value['attachment_id']) ? absint($valid_value['attachment_id']) : '';
                        $valid_value['attachment_url'] = isset($valid_value['attachment_url']) ? esc_url_raw($valid_value['attachment_url']) : '';
                        $valid_value['attachment_mime'] = isset($valid_value['attachment_mime']) ? sanitize_text_field($valid_value['attachment_mime']) : '';
                        $valid_value['image_size'] = isset($valid_value['image_size']) ? sanitize_text_field($valid_value['image_size']) : '';
                        $valid_value['image_position'] = isset($valid_value['image_position']) ? sanitize_text_field($valid_value['image_position']) : '';
                        $valid_value['image_repeat'] = isset($valid_value['image_repeat']) ? sanitize_text_field($valid_value['image_repeat']) : '';
                        $valid_value['parallax_image'] = isset($valid_value['parallax_image']) ? sanitize_text_field($valid_value['parallax_image']) : '';
                        $single_value['value'] = $valid_value;
                        break;
                    case "border":
                        $valid_value = isset($field_value['value']) ? ($field_value['value']) : '';
                        $valid_value['style'] = isset($valid_value['style']) ? sanitize_text_field($valid_value['style']) : '';
                        $valid_value['border_top'] = isset($valid_value['border_top']) ? self::mabye_int_empty($valid_value['border_top']) : '';
                        $valid_value['border_right'] = isset($valid_value['border_right']) ? self::mabye_int_empty($valid_value['border_right']) : '';
                        $valid_value['border_bottom'] = isset($valid_value['border_bottom']) ? self::mabye_int_empty($valid_value['border_bottom']) : '';
                        $valid_value['border_left'] = isset($valid_value['border_left']) ? self::mabye_int_empty($valid_value['border_left']) : '';
                        $valid_value['border_color'] = isset($valid_value['border_color']) ? self::sanitize_color($valid_value['border_color']) : '';
                        $valid_value['border_radius_top'] = isset($valid_value['border_radius_top']) ? self::mabye_int_empty($valid_value['border_radius_top']) : '';
                        $valid_value['border_radius_right'] = isset($valid_value['border_radius_right']) ? self::mabye_int_empty($valid_value['border_radius_right']) : '';
                        $valid_value['border_radius_bottom'] = isset($valid_value['border_radius_bottom']) ? self::mabye_int_empty($valid_value['border_radius_bottom']) : '';
                        $valid_value['border_radius_left'] = isset($valid_value['border_radius_left']) ? self::mabye_int_empty($valid_value['border_radius_left']) : '';
                        $valid_value['box_shadow_color'] = isset($valid_value['box_shadow_color']) ? self::sanitize_color($valid_value['box_shadow_color']) : '';
                        $valid_value['box_shadow_x'] = isset($valid_value['box_shadow_x']) ? absint($valid_value['box_shadow_x']) : '';
                        $valid_value['box_shadow_y'] = isset($valid_value['box_shadow_y']) ? absint($valid_value['box_shadow_y']) : '';
                        $valid_value['box_shadow_blur'] = isset($valid_value['box_shadow_blur']) ? absint($valid_value['box_shadow_blur']) : '';
                        $valid_value['box_shadow_spread'] = isset($valid_value['box_shadow_spread']) ? absint($valid_value['box_shadow_spread']) : '';
                        $valid_value['box_shadow_inset'] = isset($valid_value['box_shadow_inset']) ? absint($valid_value['box_shadow_inset']) : 0;
                        $single_value['value'] = $valid_value;
                        break;
                    case "color":
                        $valid_value = isset($field_value['value']) ? self::sanitize_color($field_value['value']) : '';
                        $single_value['value'] = $valid_value;
                        break;
                    case "overlay":
                        $valid_value = isset($field_value['value']) ? self::sanitize_color($field_value['value']) : '';
                        $single_value['value'] = $valid_value;
                        break;
                    case "alignment":
                        $valid_value = isset($field_value['value']) ? sanitize_text_field($field_value['value']) : '';
                        $single_value['value'] = $valid_value;
                        break;
                    case "number":
                        $valid_value = isset($field_value['value']) ? absint($field_value['value']) : '';
                        $single_value['value'] = $valid_value;
                        break;
                    case "font":
                    case "select":
                    case "font_weight":
                    case "text":
                        $valid_value = isset($field_value['value']) ? sanitize_text_field($field_value['value']) : '';
                        $single_value['value'] = $valid_value;
                        break;
                    case "checkbox":
                    case "font_languages":
                        $valid_value = isset($field_value['value']) ? ($field_value['value']) : array();

                        if (is_array($valid_value)) {

                            foreach ($valid_value as $val_index => $val) {

                                $valid_value[$val_index] = sanitize_text_field($val);
                            }

                        } else {
                            $valid_value = array();
                        }

                        $single_value['value'] = $valid_value;
                        break;
                    case "range":
                        $valid_number = isset($field_value['value']['value']) && ("" !== $field_value['value']['value']) ? ($field_value['value']['value']) : '';

                        if ('' != $valid_number) {

                            $valid_number = intval($valid_number);

                            $max = isset($field['max']) ? $field['max'] : '';

                            $min = isset($field['min']) ? $field['min'] : '';

                            if ($max < $valid_number && '' != $max) {

                                $valid_number = $max;
                            }
                            if ($min > $valid_number && '' != $max) {

                                $valid_number = $min;
                            }
                        }
                        $valid_value['value'] = $valid_number;
                        $valid_value['unit'] = isset($field_value['value']['unit']) ? sanitize_text_field($field_value['value']['unit']) : 'px';
                        $single_value['value'] = $valid_value;
                        break;
                    case "margin":

                        foreach (array('top', 'right', 'bottom', 'left') as $position) {
                            $valid_value[$position]['value'] = isset($field_value[$position]['value']) && "" !== ($field_value[$position]['value']) ? (int)($field_value[$position]['value']) : '';
                            $valid_value[$position]['unit'] = isset($field_value[$position]['unit']) ? sanitize_text_field($field_value[$position]['unit']) : 'px';
                        }
                        $single_value = $valid_value;
                        break;
                    case "padding":
                        foreach (array('top', 'right', 'bottom', 'left') as $position) {
                            $valid_value[$position]['value'] = isset($field_value[$position]['value']) && !is_null($field_value[$position]['value']) ? (self::maybe_positive_number($field_value[$position]['value'])) : '';
                            $valid_value[$position]['unit'] = isset($field_value[$position]['unit']) ? sanitize_text_field($field_value[$position]['unit']) : 'px';
                        }
                        $single_value = $valid_value;
                        break;
                    default:
                        $valid_value = isset($field_value['value']) ? sanitize_text_field($field_value['value']) : '';
                        $single_value['value'] = $valid_value;
                        break;

                }
            }


            return $single_value;
        }

        static function maybe_json_decode($maybe_json_string)
        {
            $decoded_value = array();

            try {

                if (is_string($maybe_json_string)) {

                    $decoded = json_decode($maybe_json_string, true);

                    $decoded_value = (json_last_error() == JSON_ERROR_NONE) ? $decoded : $decoded_value;

                } else if (is_array($maybe_json_string)) {

                    $decoded_value = $maybe_json_string;

                } else if (is_object($maybe_json_string)) {

                    $decoded_value = $maybe_json_string;
                }

            } catch (Exception $e) {

                $decoded_value = array();
            }
            return $decoded_value;
        }
        static function sanitize_builder($input, $setting)
        {
            $all_valid_fields = array();

            $fields = ($setting->manager->get_control($setting->id)->fields);

            $field_keys = array_keys($fields);

            $all_field_value = array();

            try {

                $all_field_value = self::maybe_json_decode($input);

            } catch (Exception $e) {

                $all_field_value = array();
            }
            $is_empty_field_count = 0;

            $not_empty_count = 0;

            foreach ($all_field_value as $field_array) {

                $section = isset($field_array['section']) ? sanitize_text_field($field_array['section']) : '';

                $section = in_array($section, $field_keys) ? $section : '';

                $width = isset($field_array['width']) ? sanitize_text_field($field_array['width']) : '';

                if ($width == '') {

                    $is_empty_field_count++;
                } else {
                    $not_empty_count++;
                }

                $all_valid_fields[] = array(
                    'section' => $section,
                    'width' => $width
                );


            }

            if (count($all_field_value) == 3 && ($is_empty_field_count == 3 || $not_empty_count == 3)) {

                return $all_valid_fields;
            }
            return $setting->default;

        }

        static function sanitize_switch_group($input, $setting)
        {
            $all_field_value = array();

            $valid_field_value = array();

            try {

                $all_field_value = json_decode($input, true);

            } catch (Exception $e) {

                $all_field_value = array();
            }
            $switch_choices = ($setting->manager->get_control($setting->id)->switch_choices);

            foreach ($switch_choices as $choice_key => $choice_value) {

                $valid_field_value[$choice_key] = isset($all_field_value[$choice_key]) ? (boolean)($all_field_value[$choice_key]) : false;
            }

            return $valid_field_value;

        }
    }


}