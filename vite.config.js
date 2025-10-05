import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                '/css/app.css', 
                '/js/app.js', 
                '/css/dashboard.css',
                '/js/dashboard.js',
                '/css/home.css',
                '/js/countup.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
    build: {
        rollupOptions: {
            output: {
                entryFileNames: 'js/[name].js',
                chunkFileNames: 'js/[name].js',
                assetFileNames: 'css/[name].[ext]'
            }
        }
    }
});