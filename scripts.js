document.addEventListener("DOMContentLoaded", () => {
    const contactForm = document.getElementById('contact-form');

    contactForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        alert(`Thank you for your message, ${name}! We will get back to you soon.`);
        contactForm.reset();
    });

    const whatsappBtn = document.querySelector('.whatsapp-btn');
    whatsappBtn.addEventListener('click', openWhatsApp);
});

function openWhatsApp() {
    var phoneNumber = '6282150036778'; // Ganti dengan nomor WhatsApp Anda
    var message = 'Halo! Saya ingin pesan bucket bunga bulu kawatnya.'; // Ganti dengan pesan yang Anda inginkan

    var url = 'https://wa.me/' + phoneNumber + '?text=' + encodeURIComponent(message);

    window.open(url, '_blank');
}
