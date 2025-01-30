document.addEventListener("DOMContentLoaded", () => {

    // Sélectionne le bouton hamburger et le menu déroulant
    const toggleBtn = document.querySelector('.toggle_btn');
    const dropdownContainer = document.querySelector('.dropdown_container');

    // Vérifie si les éléments existent avant d'ajouter les événements
    if (toggleBtn && dropdownContainer) {
        toggleBtn.addEventListener('click', () => {
            dropdownContainer.classList.toggle('show'); // Affiche/masque le menu
        });
    } else {
        console.error("Éléments .toggle_btn ou .dropdown_container introuvables !");
    }
});
