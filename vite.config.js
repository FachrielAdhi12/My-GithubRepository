import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Daftarkan semua file CSS kamu di sini
                'resources/css/home.css',
                'resources/css/about.css',
                'resources/css/admin.css',
                
                // Jika ada file JS, biarkan saja
                'resources/js/app.js', 
            ],
            refresh: true,
        }),
    ],
});
