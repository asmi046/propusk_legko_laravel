import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/css/null.css',
                'public/css/main.css',
                'public/css/main-header.css',
                'public/js/main.js',
                'public/js/menu.js',
                'public/css/menu.css'
            ],
            refresh: true,
        }),
    ],
});
