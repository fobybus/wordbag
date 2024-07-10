import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/component.css',
                'resources/css/root.css',
                'resources/css/profile.svg',
                //manually copied root.js
            ],
            refresh: true,
        }),
    ],
});
