import './bootstrap';
import '../css/app.css';

import { createRoot } from 'react-dom';
import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

const appName = document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

// Fonction utilitaire pour résoudre dynamiquement les chemins des modules JSX
function resolvePageModule(name) {
    // Chemin relatif explicite vers les modules JSX
    const moduleURL = `./Pages/${name}.jsx`;
    // Utilisation de resolvePageComponent avec le chemin explicite
    return resolvePageComponent(moduleURL, './Pages/**/*.jsx');
}

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: resolvePageModule, // Utilisation de la fonction de résolution
    setup({ el, App, props }) {
        const root = createRoot(el);
        root.render(<App {...props} />);
    },
    progress: {
        color: '#4B5563',
    },
});
