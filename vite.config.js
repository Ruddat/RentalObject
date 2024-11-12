import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    build: {
        manifest: true,
        rtl: true,
        outDir: 'public/build/',
        cssCodeSplit: true,
        rollupOptions: {
            output: {
                assetFileNames: (css) => {
                    if (css.name.split('.').pop() === 'css') {
                        return 'css/[name].min.css';
                    } else {
                        return 'icons/' + css.name;
                    }
                },
                entryFileNames: 'js/[name].js',
            },
        },
    },
    publicDir: 'resources/assets', // Define a specific directory for assets only
    plugins: [
        laravel({
            input: ['resources/css/styles.css', 'resources/js/script.js', 'resources/assets/scss/style.scss'],
            refresh: true,
        }),

        viteStaticCopy({
            targets: [
                {
                    src: 'resources/css',
                    dest: ''
                },
                {
                    src: 'resources/fonts',
                    dest: ''
                },
                {
                    src: 'resources/images',
                    dest: ''
                },
                {
                    src: 'resources/js',
                    dest: ''
                },
                {
                    src: 'resources/json',
                    dest: ''
                },
                {
                    src: 'resources/plugins',
                    dest: ''
                },
                {
                    src: 'resources/scss',
                    dest: ''
                },
                {
                    src: 'resources/assets',
                    dest: '../backend'  // Moves to `public/assets` outside of `public/build`
                },
            ]
        }),
    ],
});
