<?php

return [

    'Wohnung' => [
        'area',
        'rooms',
        'buildYear',
        'moveIn',
        'floor',
    ],
    'Haus' => [
        'area',
        'landArea',
        'rooms',
        'buildYear',
        'moveIn',
    ],
    'Grundstück' => [
        'landArea',
        'divisibleMin',
        'divisibleMax',
    ],

    'Büro-/Praxisfläche' => [
        'area',
        'rooms',
        'buildYear',
        'divisibleArea',
        'moveIn',
        'floor',
        'windowArea',
    ],

    'Garage/Stellplatz' => [
        'buildYear',
        'moveIn',
        'parkingSlots',
    ],
    'Gastronomie/Hotel' => [
        'area',
        'landArea',
        'rooms',
        'seats',
        'buildYear',
        'moveIn',
        'floor',

    ],

    'Gewerbe-Grundstück' => [
        'landArea',
        'divisibleMin',
        'divisibleMax',
    ],

    'Hallen/Lager/Produktion' => [
        'area',
        'landArea',
        'buildYear',
        'moveIn',
        'divisibleArea',
        'floor',
    ],
    'Land-/Forstwirtschaft' => [
        'landArea',
        'divisibleMin',
        'divisibleMax',
    ],

    'Ladenfläche' => [
        'area',
        'landArea',
        'windowArea',
        'furniture',
        'position',
    ],
    'Renditeobjekt' => [
        'area',
        'landArea',
        'rooms',
        'buildYear',
        'multipleOfRent',
        'pricePerSquareMeter',
        'capitalInvestment',
        'floor',
        'windowArea',
    ],
    'Wohnen auf Zeit' => [
        'area',
        'rooms',
        'moveIn',
        'minLease',
        'maxPersons',
    ],

    'Wohngemeinschaft' => [
        'wgSize',
        'furniture',
        'buildYear',
        'floor',
        'available',
        'wgSize',
        'preferences',

        'preferencesGender',
        'preferencesAgeFrom',
        'preferencesAgeTo',
    ],

];
