import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'build', // Change this to your desired output path
        assetsDir: 'assets', // Optional: customize assets directory name
        manifest: true,
    },
});
