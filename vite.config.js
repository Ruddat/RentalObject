import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    build: {
        manifest: true,
        outDir: 'public/build/', // Output directory for build
        cssCodeSplit: true,      // Split CSS into separate files
        rollupOptions: {
            output: {
                assetFileNames: (asset) => {
                    if (asset.name.split('.').pop() === 'css') {
                        return 'css/[name].min.css';
                    } else {
                        return 'icons/' + asset.name;
                    }
                },
                entryFileNames: 'js/[name].js',
            },
        },
    },
    publicDir: 'resources/assets', // Define a specific directory for public assets
    plugins: [
        laravel({
            input: [
                'resources/css/styles.css',
                'resources/js/script.js',
                'resources/assets/scss/style.scss',
                'resources/js/echo.js', // Ensure Echo is included
            ],
            refresh: true,
        }),

        viteStaticCopy({
            targets: [
                {
                    src: 'resources/css',
                    dest: '',
                },
                {
                    src: 'resources/fonts',
                    dest: '',
                },
                {
                    src: 'resources/images',
                    dest: '',
                },
                {
                    src: 'resources/js',
                    dest: '',
                },
                {
                    src: 'resources/json',
                    dest: '',
                },
                {
                    src: 'resources/plugins',
                    dest: '',
                },
                {
                    src: 'resources/scss',
                    dest: '',
                },
                {
                    src: 'resources/assets',
                    dest: '../backend', // Moves to `public/assets` outside of `public/build`
                },
            ],
        }),
    ],
    server: {
        watch: {
            usePolling: true, // Enable polling to support file changes in all environments
        },
        host: 'localhost', // Define server host
        port: 5173,        // Default Vite port
    },
    define: {
        'process.env': {
            VITE_REVERB_APP_KEY: process.env.VITE_REVERB_APP_KEY || '',
            VITE_REVERB_HOST: process.env.VITE_REVERB_HOST || 'localhost',
            VITE_REVERB_PORT: process.env.VITE_REVERB_PORT || '6001',
            VITE_REVERB_SCHEME: process.env.VITE_REVERB_SCHEME || 'http',
        },
    },
});
