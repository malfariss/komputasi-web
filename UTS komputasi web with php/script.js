// Fungsi untuk memeriksa apakah elemen berada di viewport
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Fungsi untuk animasi masuk pada project box
function animateProjects() {
    const projectBoxes = document.querySelectorAll('.project-box');
    projectBoxes.forEach(box => {
        if (isElementInViewport(box)) {
            box.classList.add('show-project');
        }
    });
}

// Jalankan animasi saat halaman di-scroll dan ketika halaman selesai dimuat
window.addEventListener('scroll', animateProjects);
window.addEventListener('load', animateProjects);

// Fungsi untuk toggle menu dan animasi header saat menu dibuka atau ditutup
const menuToggle = document.querySelector('.menu-toggle');
const navItems = document.querySelector('.nav-items');
const body = document.body;

menuToggle.addEventListener('click', function() {
    navItems.classList.toggle('active');
    
    const h1 = document.querySelector('h1');
    const subtext = document.querySelector('.subtext');
    const credit = document.querySelector('.credit');

    if (navItems.classList.contains('active')) {
        // Transisi untuk memindahkan elemen ke bawah
        requestAnimationFrame(() => {
            h1.style.transition = 'transform 0.5s ease';
            subtext.style.transition = 'transform 0.5s ease';
            credit.style.transition = 'transform 0.5s ease';
            h1.style.transform = 'translateY(260px)';
            subtext.style.transform = 'translateY(260px)';
            credit.style.transform = 'translateY(260px)';
        });

        // Menghalangi scroll pada body saat menu aktif
        body.style.overflowY = 'hidden';
        // Ubah ikon menu (misalnya dari burger menjadi cross)
        menuToggle.innerHTML = '<i class="bi bi-x"></i>'; // Cross icon
    } else {
        // Kembalikan posisi elemen ke semula
        requestAnimationFrame(() => {
            h1.style.transition = 'transform 0.5s ease';
            subtext.style.transition = 'transform 0.5s ease';
            credit.style.transition = 'transform 0.5s ease';
            h1.style.transform = 'translateY(0)';
            subtext.style.transform = 'translateY(0)';
            credit.style.transform = 'translateY(0)';
        });

        // Mengizinkan scroll pada body kembali
        body.style.overflowY = 'auto';
        // Ubah ikon menu kembali ke hamburger
        menuToggle.innerHTML = '<i class="bi bi-list"></i>'; // Hamburger icon
    }
    document.addEventListener("DOMContentLoaded", function () {
        const projectBoxes = document.querySelectorAll('.project-box');
    
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show-project'); // Tambahkan kelas 'show-project'
                    observer.unobserve(entry.target); // Hentikan pengamatan setelah terlihat
                }
            });
        });
    
        projectBoxes.forEach(box => {
            observer.observe(box); // Amati setiap project box
        });
    });
    
});
