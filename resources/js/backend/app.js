import.meta.glob([
    // '../images/**',
    // '../fonts/**',
    // '@/js/vendor/*.js',
    // '../backend/vendor/*.js',
    // '../vendor/*.js',
    '../backend/vite/eager/*.js',
    '../helpers/*.js',

], { eager: true })

// import.meta.glob([
//     // '../backend/dore/*.js',
//     '../backend/raw/*.js',
// ], { eager: true })

import.meta.glob([
    '../backend/vite/*.js',
    '../backend/vendor/*.js',

    // '../vendor/*.js',
    // '../images/**',
    // '../fonts/**',
    // '@/js/vendor/*.js',
])
