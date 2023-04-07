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
    'patient'  => [
        'index'     => 'Patient management',
        'create'    => 'Create',
        'edit'      => 'Edit',
        'delete'    => 'Delete',
    ],
    'consultation'  => [
        'index'     => 'Consultation management',
        'create'    => 'Create consultation',
    ],

    'queue'  => [
        'tab'               => 'Show queue tab',
        'index'             => 'Queue management',
        'create'            => 'Create queue',
        Queue::RECEPTIONIST => Queue::getRoleList()[Queue::RECEPTIONIST],
        Queue::DOCTOR       => Queue::getRoleList()[Queue::DOCTOR],
        Queue::PHARMACY     => Queue::getRoleList()[Queue::PHARMACY],
        Queue::CASHIER      => Queue::getRoleList()[Queue::CASHIER],
    ],

    'setting' => [
        'index'         => 'Show setting tab',
    ],

    'setting-consultation'  => [
        'medicine'      => 'Medicine management',
        'specialist'    => 'Specialist management',
        'syndrome'      => 'Syndrome management',
        'diagnose'      => 'Diagnose management',
    ],

    'setting-admin'  => [
        'account'       => 'Admin account management',
        'role'          => 'Role management',
    ],

    'setting-other'  => [
        'print'         => 'Print template management',
        'group'         => 'Group management',
        'fee'           => 'Consultation fee management',
    ],

    'appointment-management' => [
        'index'         => 'View appointment',
        'create'        => 'Create appointment',
        'edit'          => 'Edit appointment',
        'delete'        => 'Delete appointment',
    ],
];
