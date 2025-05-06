document.addEventListener("DOMContentLoaded", function () {
    const dropbtns = document.querySelectorAll(".dropbtn");
    dropbtns.forEach(function (dropbtn) {
        dropbtn.addEventListener("click", function (event) {
            event.preventDefault();
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');
            const dropdownContent = this.nextElementSibling;
            dropdownContent.classList.toggle("active");

            // Transición para el botón
            this.style.transition = 'all 0.3s ease-in-out';
            
            if (dropdownContent.classList.contains("active")) {
                // Configuración de transición para el dropdown
                dropdownContent.style.transition = 'all 0.3s ease-in-out';
                dropdownContent.style.display = 'block';
                dropdownContent.style.width = '100%';
                dropdownContent.style.position = 'fixed';
                dropdownContent.style.height = '100vh';
                dropdownContent.style.listStyle = 'none';
                this.classList.add("pressed");
            } else {
                // Transición al cerrar
                dropdownContent.style.transition = 'all 0.3s ease-in-out';
                setTimeout(() => {
                    dropdownContent.style.display = 'none';
                }, 300); // Espera a que termine la transición
                this.classList.remove("pressed");
            }
        });
    });

    const submenuItems = document.querySelectorAll(".submenu-item > a");
    submenuItems.forEach(function (submenuItem) {
        submenuItem.addEventListener("click", function (event) {
            event.preventDefault();
            const submenu = this.nextElementSibling;
            submenu.style.transition = 'all 0.3s ease-in-out';
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        });
    });

    // Cerrar el menú al hacer click en el icono back
    const backIcons = document.querySelectorAll(".back-icon");
    backIcons.forEach(function (backIcon) {
        backIcon.addEventListener("click", function (event) {
            event.preventDefault();
            const dropdownContent = this.closest(".dropdown-content");
            dropdownContent.classList.remove("active");
            dropdownContent.style.transition = 'all 0.3s ease-in-out';
            setTimeout(() => {
                dropdownContent.style.display = 'none';
            }, 300);
            const dropbtn = dropdownContent.previousElementSibling;
            dropbtn.setAttribute('aria-expanded', 'false');
            dropbtn.classList.remove("pressed");
        });
    });

    // Cerrar el menú al presionar la tecla Esc
    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            const activeDropdowns = document.querySelectorAll(".dropbtn[aria-expanded='true']");
            activeDropdowns.forEach(function (dropbtn) {
                dropbtn.setAttribute('aria-expanded', 'false');
                const dropdownContent = dropbtn.nextElementSibling;
                dropdownContent.classList.remove("active");
                dropdownContent.style.transition = 'all 0.3s ease-in-out';
                setTimeout(() => {
                    dropdownContent.style.display = 'none';
                }, 300);
                dropbtn.classList.remove("pressed");
            });
        }
    });

    // Cerrar el menú al hacer clic fuera
    document.addEventListener("click", function (event) {
        const isClickInside = event.target.closest(".dropbtn") || event.target.closest(".dropdown-content");
        if (!isClickInside) {
            const activeDropdowns = document.querySelectorAll(".dropbtn[aria-expanded='true']");
            activeDropdowns.forEach(function (dropbtn) {
                dropbtn.setAttribute('aria-expanded', 'false');
                const dropdownContent = dropbtn.nextElementSibling;
                dropdownContent.classList.remove("active");
                dropdownContent.style.transition = 'all 0.3s ease-in-out';
                setTimeout(() => {
                    dropdownContent.style.display = 'none';
                }, 300);
                dropbtn.classList.remove("pressed");
            });
        }
    });

    const nav = document.querySelector('nav');
    const footer = document.querySelector('footer');
    const header = document.querySelector('header');

    // Añade transición al nav y header
    nav.style.transition = 'all 0.3s ease-in-out';
    header.style.transition = 'background-color 0.3s ease-in-out';

    // Detecta el scroll para verificar si el footer está visible
    window.addEventListener('scroll', function () {
        const footerRect = footer.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (footerRect.top <= windowHeight && footerRect.bottom >= 0) {
            nav.classList.add('hidden');
            header.style.backgroundColor = '#ffffff00';
        } else {
            nav.classList.remove('hidden');
            header.style.backgroundColor = '#ffffff';
        }
    });

    const links = document.querySelectorAll("nav a");
    let currentIndex = -1;
    const currentUrl = window.location.href;

    // Añade transición a los enlaces del nav
    links.forEach(link => {
        link.style.transition = 'all 0.2s ease-in-out';
    });

    function highlightLink(index) {
        links.forEach((link, i) => {
            if (i === index) {
                link.style.backgroundColor = "#e67e22";
                link.style.color = "#fff";
            } else {
                link.style.backgroundColor = "transparent";
                link.style.color = "";
            }
        });
    }

    function setActiveLink() {
        links.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });
    }

    setActiveLink();

    document.addEventListener("keydown", function (event) {
        if (
            event.key === "Tab" ||
            event.key === "ArrowDown" ||
            event.key === "ArrowUp" ||
            event.key === "ArrowLeft" ||
            event.key === "ArrowRight" ||
            event.key === "Enter"
        ) {
            event.preventDefault();

            if (currentIndex === -1) {
                currentIndex = 0;
                highlightLink(currentIndex);
            } else {
                if (event.key === "ArrowRight" || event.key === "ArrowDown" || event.key === "Tab") {
                    currentIndex = (currentIndex + 1) % links.length;
                    highlightLink(currentIndex);
                } else if (event.key === "ArrowLeft" || event.key === "ArrowUp") {
                    currentIndex = (currentIndex - 1 + links.length) % links.length;
                    highlightLink(currentIndex);
                } else if (event.key === "Enter") {
                    links[currentIndex].click();
                }
            }
        }
    });

    document.addEventListener("click", function () {
        if (currentIndex !== -1) {
            currentIndex = -1;
            links.forEach(link => {
                link.style.backgroundColor = "transparent";
                link.style.color = "";
            });
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const nav = document.querySelector('nav');
    const footer = document.querySelector('footer');

    // Añade transición al nav
    nav.style.transition = 'all 0.3s ease-in-out';

    window.addEventListener('scroll', function () {
        const footerRect = footer.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (footerRect.top <= windowHeight && footerRect.bottom >= 0) {
            nav.classList.add('hidden');
        } else {
            nav.classList.remove('hidden');
        }
    });
});

window.addEventListener('resize', function() {
    const isFolded = window.matchMedia('(max-width: 800px) and (min-aspect-ratio: 1/1)').matches;
    
    // Añade transición al cambio de modo
    document.body.style.transition = 'all 0.3s ease-in-out';
    
    if (isFolded) {
        document.body.classList.add('folded-mode');
    } else {
        document.body.classList.remove('folded-mode');
    }
});