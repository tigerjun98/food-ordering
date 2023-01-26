import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.css',
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/scss/admin/app.css',
                'resources/scss/admin/app.scss',
                'resources/js/admin/app.js',
            ],
            refresh: true,
        }),
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
