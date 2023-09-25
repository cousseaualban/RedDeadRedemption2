import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/accueil.scss',
                'resources/sass/_header.scss',
                'resources/sass/_footer.scss',
                'resources/sass/histoire.scss',
                'resources/sass/gangs.scss',
                'resources/sass/personnages.scss',
                'resources/sass/unPersonnage.scss',
                'resources/sass/regions.scss',
                'resources/sass/blog.scss',
                'resources/sass/unArticle.scss',
                'resources/sass/contact.scss',
                'resources/sass/politiquedeconfidentialite.scss',
                'resources/sass/mentionslegales.scss',
                'resources/js/app.js',
                'resources/js/toTop.js',
                'resources/js/contact.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
