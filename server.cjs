const fs = require('fs');
const https = require('https');
const socketIo = require('socket.io');
const express = require('express');
const cors = require('cors');

const app = express();

// Aktiviere CORS
app.use(cors());

// SSL-Zertifikate laden
const server = https.createServer({
    key: fs.readFileSync('C:\\laragon\\www\\RentalObject\\key.pem'), // Pfad zum privaten Schlüssel
    cert: fs.readFileSync('C:\\laragon\\www\\RentalObject\\cert.pem') // Pfad zum Zertifikat
}, app);

// Konfiguriere Socket.IO
const io = socketIo(server, {
    cors: {
        origin: 'https://rentalobject.test', // Deine Frontend-Domain
        methods: ['GET', 'POST']
    }
});

io.on('connection', (socket) => {
    console.log('Neuer Client verbunden:', socket.id);

    // Weiterleiten von Angebot (Offer)
    socket.on('offer', (data) => {
        console.log(`Offer erhalten von ${socket.id}`);
        socket.broadcast.emit('offer', data);
    });

    // Weiterleiten von Antwort (Answer)
    socket.on('answer', (data) => {
        console.log(`Answer erhalten von ${socket.id}`);
        socket.broadcast.emit('answer', data);
    });

    // Weiterleiten von ICE-Kandidaten
    socket.on('ice-candidate', (data) => {
        console.log(`ICE-Kandidat erhalten von ${socket.id}`);
        socket.broadcast.emit('ice-candidate', data);
    });

    socket.on('disconnect', () => {
        console.log(`Client getrennt: ${socket.id}`);
    });
});

const PORT = 4000;
server.listen(PORT, () => {
    console.log(`Secure server läuft auf https://rentalobject.test:${PORT}`);
});
