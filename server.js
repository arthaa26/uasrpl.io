app.post('/send-order', (req, res) => {
    // Proses pesanan seperti sebelumnya...

    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            return console.log(error);
        }
        console.log('Pesan terkirim: %s', info.messageId);
        res.status(200).send('Pesanan berhasil ditempatkan'); // Konfirmasi pesanan berhasil
    });
});
