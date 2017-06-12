<?php

return [
    'indicator' =>  [
        'base' => 'close',
        'period' => 30,
        'devup' => 2,
        'devdown' => 2,
        'matype' => TRADER_MA_TYPE_SMA,
    ],
    'adjustable' => [
        'base' => [
            'name' => 'Base',
            'type' => 'base',
        ],
        'period' => [
            'name' => 'Period',
            'type' => 'number',
            'min' => 2,
            'step' => 1,
            'max' => 99,
        ],
        'devup' => [
            'name' => 'Deviation multiplier for upper band',
            'type' => 'number',
            'min' => 0,
            'step' => .05,
            'max' => 10,
        ],
        'devdown' => [
            'name' => 'Deviation multiplier for lower band',
            'type' => 'number',
            'min' => 0,
            'step' => .05,
            'max' => 10,
        ],
        'matype' => [
            'name' => 'MA Type',
            'type' => 'select',
        ],
    ],
    'output' => [
        0 => 'Upper',
        1 => 'Middle',
        2 => 'Lower',
    ],
    'display' => [
        'name' => 'BBands',
        'description' => 'Bollinger Bands',
        'y_axis_pos' => 'left',
        'top_level' => true,
    ],
    'fill_value' => null,
];