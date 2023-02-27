import.meta.glob([
    // '../images/**',
    // '../fonts/**',
    // '@/js/vendor/*.js',
    // '../backend/vendor/*.js',
    // '../vendor/*.js',
    '../backend/vite/eager/*.js',
    '../backend/pages/**',
    '../helpers/*.js',

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
