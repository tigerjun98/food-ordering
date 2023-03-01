


import.meta.glob([
    '../backend/vite/eager/*.js',
    '../helpers/*.js',

], { eager: true })

import.meta.glob([
    '../backend/pages/**',
], { eager: true })

// import.meta.glob([
//     // '../backend/dore/*.js',
//     '../backend/raw/*.js',
// ], { eager: true })

import.meta.glob([
    '../backend/vite/*.js',
    '../backend/vendor/*.js',
    '../../img/**',
    // '../fonts/**',
    // '@/js/vendor/*.js',
])

