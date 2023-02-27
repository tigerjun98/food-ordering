import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import sassGlobImports from 'vite-plugin-sass-glob-import';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/backend/app.css',
                'resources/css/backend/app.scss',
                'resources/js/backend/app.js',
            ],
            refresh: [
                ...refreshPaths,
            ],
            buildDirectory: '/backendAssets',
        }),
        sassGlobImports() // https://github.com/cmalven/vite-plugin-sass-glob-import
    ],
    resolve: {
        alias: {
            '@': '/resources',
            // '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        },
    },
    server: {
        host: '127.0.0.1',
        watch: {
            usePolling: true,
        },
    },
});
