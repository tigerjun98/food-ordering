import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import sassGlobImports from 'vite-plugin-sass-glob-import';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.css',
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/scss/backend/app.css',
                'resources/scss/backend/app.scss',
                'resources/js/backend/app.js',
            ],
            refresh: true,
        }),
        sassGlobImports() // https://www.npmjs.com/package/vite-plugin-sass-glob-import
    ],
    resolve: {
        alias: {
            '@': '/public',
        },
    },
    server: {
        host: '127.0.0.1',
        watch: {
            usePolling: true,
        },
    },
});
