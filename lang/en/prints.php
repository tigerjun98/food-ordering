<?php

use App\Models\Queue;

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'layout'  => [
        'header' => 'Header',
    ],

    'info'  => [
        'patient' => 'Patient details',
        'detail' => 'Info detail',
    ],

    'table'  => [
        'category'      => 'Category',
        'description'   => 'Description',
        'qty'           => 'Quantity',
        'total'         => 'Total',
        'instruction'   => 'Instruction',
    ],

    'bottom'  => [
//        'amount'        => 'Amount',
        'symptom'       => 'Symptom',
        'advice'        => 'Doctor advise',
        'internal_remark'        => 'Internal remark',
    ],
];