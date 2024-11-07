import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(
    {
        server: {
            host: '0.0.0.0',
            port: 5173,
            strictPort: true,  // Garante que a porta seja sempre 5173
            hmr: {
                host: 'localhost',  // Pode ser 'localhost' ou '127.0.0.1'
                port: 5173
            }
        },
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.js'],
                refresh: true,
            }),
        ],
    }
);
