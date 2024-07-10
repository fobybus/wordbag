import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/component.css',
                 'resources/css/component-day.css',
                'resources/css/root.css',
                'resources/css/root-day.css',
                'resources/css/profile.svg',
                'resources/css/logo.png',
                //manually copied root.js
            ],
            refresh: true,
        }),
    ],
});
