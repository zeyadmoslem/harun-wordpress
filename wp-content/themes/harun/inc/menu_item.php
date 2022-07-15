<?php 

function slug($text) {
    return str_replace(' ', '_', $text);
}

$menu_item_array = [
    'IM BROT' => [
        'DÖNER KEBAB' => [
            'desc' => 'Traditioneller Döner mit Salat und Soße wahlweise mit Kalbsfleisch oder Hähnchenfleisch',
            'price' => '7',
            'stof' => '1, A, C, G, O'
        ],
        'DÖNER VEGGIE' => [
            'desc' => 'mit gebratenem Gemüse, Salat, Käse und Soße',
            'price' => '5,5',
            'stof' => 'A, C, G, O'
        ],
        'LAHMACUN DÖNER' => [
            'desc' => 'mit Dönerfleisch, Salat und Soße',
            'price' => '8',
            'stof' => '1, A, C, G, O'
        ],
        'LAHMACUN' => [
            'desc' => 'mit Salat und Soße',
            'price' => '6,5',
            'stof' => 'A, C, G, O'
        ], 
       'DÜRÜM DÖNER' => [
            'desc' => 'mit Salat und Soße',
            'price' => '8',
            'stof' => '1, A, C, G, O'
        ],
        'DÜRÜM VEGGIE' => [
            'desc' => 'mit gebratenem Gemüse, Salat, Käse und Soße',
            'price' => '6,5',
            'stof' => 'A, C, G, O'
        ],  
        'FALAFEL IM BROT' => [
            'desc' => 'hausgemachte Falafel mit gebratenem Gemüse, Salat und Soße',
            'price' => '6',
            'stof' => '4, G'
        ],
        'FALAFEL DÜRÜM' => [
            'desc' => 'hausgemachte Falafel mit gebratenem Gemüse, Salat und Soße',
            'price' => '6,5',
            'stof' => '4, G'
        ],
    ],
    'IM TELLER' => [
        'HARUN´S TELLER' => [
            'desc' => 'mit Dönerfleisch, Pommes oder Reis, Salat und Soße',
            'price' => '12',
            'stof' => '1, A, C, G, O'
        ],
        'LAHMACUN TELLER' => [
            'desc' => 'mit Dönerfleisch auf Lahmacun, Pommes, Salat und Soße',
            'price' => '13',
            'stof' => '1, A, C, G, O'
        ],
        'FALAFEL TELLER' => [
            'desc' => 'hausgemachte Falafel mit Pommes oder Reis, gebratene Gemüse, Salat, hausgemachte Hummus und Soße',
            'price' => '11',
            'stof' => '4'
        ],  
        'VEGGIE TELLER' => [
            'desc' => 'mit gebratenem Gemüse, Pommes oder Reis, Sigara Börek, Käse, Salat, hausgemachte Hummus und Soße',
            'price' => '10',
            'stof' => 'G'
        ], 
        'HARUN´S SPECIAL - "ISKENDER"' => [
            'desc' => 'Dönerfleisch auf einem Bett von Brotwürfel, dazu eine spezielle Tomatensoße und ein Hauch zerlassene Butter, garniert mit frischem Sahnejoghurt und Peperoni',
            'price' => '13,5',
            'stof' => ''
        ],

    ],
    'EXTRAS' => [
        'POMMES' => [
            'desc' => '',
            'price' => '3',
            'stof' => ''
        ],
        'REIS' => [
            'desc' => '',
            'price' => '3',
            'stof' => ''
        ],
        'DÖNER BOX' => [
            'desc' => 'Dönerfleisch mit Pommes oder Reis',
            'price' => '6,5',
            'stof' => ''
        ],
        'SIGARA BÖREK' => [
            'desc' => 'mit Weichkäse gefüllte und frittierte Teigröllchen',
            'price' => '1,5',
            'stof' => 'A, C, G'
        ],  
        'EXTRA DÖNERFLEISCH' => [
            'desc' => '',
            'price' => '2',
            'stof' => ''
        ], 
        'SCHALE SOßE' => [
            'desc' => '',
            'price' => '1,5',
            'stof' => ''
        ],  
        'EXTRA KÄSE' => [
            'desc' => '',
            'price' => '1,5',
            'stof' => ''
        ],
        'EXTRA BELAG FÜR PIZZEN' => [
            'desc' => '',
            'price' => 'Ab 1,5',
            'stof' => ''
        ],
    ],
    'SOßEN' => [
        'CLASSIC' => [
            'desc' => 'Joghurtsoße mit oder ohne Knoblauch',
            'price' => '',
            'stof' => 'C, G'
        ],
        'SPICY-COCKTAIL' => [
            'desc' => 'scharfe Soße',
            'price' => '',
            'stof' => 'C, G'
        ],
        'AMBA' => [
            'desc' => 'pürierte frische Mango mit Chili, Knoblauch und Gewürzen verfeinert - ZU EMPFEHLEN MIT FALAFEL',
            'price' => '',
            'stof' => ''
        ],
        'TAHINI' => [
            'desc' => 'Sesampaste mit Joghurt und Zitronensaft - ZU EMPFEHLEN MIT FALAFEL',
            'price' => '',
            'stof' => 'G, K'
        ],
    ],
    'PIZZA' => [
        'PIZZA MARGHERITA' => [
            'desc' => 'Tomatensoße, Mozzarella „Fior di Latte“, Basilikum',
            'price' => '8',
            'stof' => 'A, G'
        ],
        'PIZZA NAPOLI' => [
            'desc' => 'Tomatensoße, Knoblauch, Oregano, Sardellen, Kapern, Oliven, Kirschtomaten (ohne Käse)',
            'price' => '9',
            'stof' => 'A, D, G'
        ],
        'PIZZA TONNO' => [
            'desc' => 'Tomatensoße, Käse, Thunfisch, Zwiebel',
            'price' => '10',
            'stof' => 'A, D, G'
        ],  
        'PIZZA DÖNER' => [
            'desc' => 'Tomatensoße, Käse, Dönerfleisch, Zwiebel, Dönersoße',
            'price' => '11',
            'stof' => '1, A, G, O'
        ], 
        'PIZZA SUCUK' => [
            'desc' => 'Tomatensoße, Käse, Sucuk',
            'price' => '11',
            'stof' => 'A, G, O'
        ],
        'PIZZA VEGGIE' => [
            'desc' => 'Tomatensoße, Mozzarella, Paprika, Zwiebel, Champignons',
            'price' => '9',
            'stof' => 'A, G, O'
        ],       
        'PIZZA PASTIRMA' => [
            'desc' => 'Tomatensoße, Mozzarella, türkische Pastirma, Rucola, Kirschtomaten, Parmesansplitter',
            'price' => '14',
            'stof' => '1, A, G, O'
        ],

    ],
    'SALATE' => [
        'GEMISCHTER SALAT CLASSIC' => [
            'desc' => 'Blattsalat mit Tomaten, Gurken, Zwiebeln und Käse',
            'price' => '7',
            'stof' => '3, O, H'
        ],
        'DÖNER SALAT' => [
            'desc' => 'Blattsalat mit Dönerfleisch, Tomaten, Zwiebeln und Soße',
            'price' => '9',
            'stof' => '1, G, O, H'
        ],
        'THUNFISCH SALAT' => [
            'desc' => 'Blattsalat mit Tomaten, Gurken, Zwiebeln und Thunfisch',
            'price' => '7,5',
            'stof' => 'D'
        ],  
        'RUCOLA SALAT' => [
            'desc' => 'Rucola, Kirschtomaten, Parmesansplitter, Walnüsse, Olivenöl und Granatapfelsirup',
            'price' => '8',
            'stof' => 'H'
        ]
    ],
    'GETRÄNKE' => [
        'SOFTDRINKS IN DOSE' => [
            'desc' => '',
            'price' => '2',
            'stof' => ''
        ],
        'SOFTDRINKS IN FLASCHE' => [
            'desc' => '',
            'price' => '2,80',
            'stof' => ''
        ],
        'AYRAN' => [
            'desc' => '',
            'price' => '2',
            'stof' => ''
        ],
        'CAY' => [
            'desc' => 'türkischer Schwarztee, frisch aufgebrüht',
            'price' => '1,5',
            'stof' => ''
        ],  
        'SCHWARZER KAFFEE' => [
            'desc' => '',
            'price' => '2,5',
            'stof' => ''
        ]
    ],
    'DESSERTS' => [
        'BAKLAVA' => [
            'desc' => 'eine Portion (3 Stück) Baklava mit Pistazien gefüllt',
            'price' => '5',
            'stof' => 'H'
        ],
        'BAKLAVA MIT EIS' => [
            'desc' => '',
            'price' => '6,5',
            'stof' => 'H, G'
        ]
    ],
];