import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                
            ],
            refresh: true,
        }),
    ],
    wathc: {
        usePolling: true,
        origin: 'http://utprbg.test'
    },
    server: {
        hmr: { host: 'utprbg-new.test' },
      },
});
