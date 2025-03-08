
window.onload = function() {
    const links = document.querySelectorAll('nav a');  // Selecciona todos los enlaces en el nav
    const currentPage = window.location.pathname;  // Obtiene la URL de la página actual
    
    links.forEach(link => {
        if (link.href.includes(currentPage)) {
            link.classList.add('active');  // Agrega la clase active al enlace correspondiente
        }
    });
};
