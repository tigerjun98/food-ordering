import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/admin/app.css',
                'resources/scss/admin/app.scss',
                'resources/js/admin/app.js',
            ],
            refresh: [
                ...refreshPaths,
            ],
            buildDirectory: '/backendAssets',
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
