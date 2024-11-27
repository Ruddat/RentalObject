import Echo from 'laravel-echo';

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY, // API Key für Reverb
    wsHost: import.meta.env.VITE_REVERB_HOST, // WebSocket Host (z.B. localhost oder dein Server)
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80, // WebSocket Port
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443, // Sicherer WebSocket Port
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https', // HTTPS erzwingen
    enabledTransports: ['ws', 'wss'], // Erlaubte Protokolle
});
