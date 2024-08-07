import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp, Link } from '@inertiajs/vue3';
import Layout from './Shared/Layout.vue';

createInertiaApp({
    progress: {
        delay: 250,
        color: 'red',
        includeCSS: true,
        showSpinner: true,
    },
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });

        Object.values(pages).forEach((page) => {
            page.default.layout = page.default.layout || Layout;
        });

        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('Link', Link)
            .mount(el);
    },
});
