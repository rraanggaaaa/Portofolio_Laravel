import "./bootstrap";
document.addEventListener("DOMContentLoaded", function () {
    // Temukan semua elemen yang memiliki kelas 'menu-item'.
    const menuItems = document.querySelectorAll(".menu-item");

    // Tambahkan event listener untuk setiap item.
    menuItems.forEach((item) => {
        item.addEventListener("click", function (e) {
            // Cegah tindakan default dari link.
            e.preventDefault();

            // Toggle kelas 'hidden' pada elemen span di dalam item yang diklik.
            const span = this.querySelector("span");
            span.classList.toggle("hidden");
        });
    });
});
