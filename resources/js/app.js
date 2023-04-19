// Dark mode
const html = document.documentElement;
const logo = document.getElementById('app-logo');
const toggleModeButton = document.getElementById('toggle-mode');
const darkIcon = document.getElementById('toggle-dark-icon');
const lightIcon = document.getElementById('toggle-light-icon');

// Navbar
const dropdownContainers = document.querySelectorAll('.dropdown-container');
const navigation = document.querySelector('#navigation');
const hamburgerIcon = document.querySelector('#hamburger-icon');

let setModeValue = localStorage.getItem('mode') || 'dark'; // User's set mode
html.classList.add('hidden'); // Hide app until it's done applying the mode

/**
 * When the toggle mode button is clicked, 
 * toggle the mode value between 'dark' and 'light' 
 * and update the mode
 */
toggleModeButton && toggleModeButton.addEventListener('click', function () {
    setModeValue = setModeValue === 'dark' ? 'light' : 'dark';
    setMode(setModeValue);
});

/**
 * Update the app to use the given mode
 * @param {string} mode - Selected mode. Must be 'dark' or 'light' 
 */
function setMode(mode) {
    // Add or remove the dark class from the html element
    html.classList.toggle('dark', mode === 'dark');
    // Change the logo image based on the mode value (if the logo element exists)
    logo && (logo.src = mode === 'dark' ? 'storage/app-logo-white.png' : 'storage/app-logo.png');

    // Toggle the icon
    darkIcon && darkIcon.classList.toggle('hidden', mode === 'dark');
    lightIcon && lightIcon.classList.toggle('hidden', mode !== 'dark');

    // Store the set mode in user's local storage
    localStorage.setItem('mode', mode);
    // Show the app
    html.classList.remove('hidden');
}

/**
 * Dropdown menu functionality
 */
dropdownContainers.forEach(dropdownContainer => {
    const toggleDropdown = dropdownContainer.querySelector('.toggle-dropdown');
    const dropdown = dropdownContainer.querySelector('.dropdown');
    const dropdownMenu = dropdownContainer.querySelector('.dropdown-menu-items');
    const dropdownIcon = dropdownContainer.querySelector('.dropdown-icon');

    // Add an event listener to the toggleDropdown element
    if (window.matchMedia("(min-width: 768px)").matches) {
        toggleDropdown.addEventListener('mouseenter', () => {
            // Show the dropdown menu
            dropdownMenu.classList.remove('hidden');
            dropdownIcon.classList.add('rotate-180');
        });
    }

    if (window.matchMedia("(max-width: 768px)").matches) {
        // Add an event listener to the dropdown element
        dropdown.addEventListener('click', (event) => {
            // Prevent the default behavior of the button
            event.preventDefault();

            // Toggle the visibility of the dropdown menu
            dropdownMenu.classList.toggle('hidden');
            dropdownIcon.classList.toggle('rotate-180');
        });
    }

    if (window.matchMedia("(min-width: 768px)").matches) {
        dropdownContainer.addEventListener('mouseleave', event => {
            const target = event.target;
            if (target !== toggleDropdown && target !== dropdownMenu) {
                dropdownMenu.classList.add('hidden');
                dropdownIcon.classList.remove('rotate-180');
            }
        });
    }
});

function toggleHamburger() {
    navigation.classList.toggle('hidden');
    navigation.classList.toggle('flex');
    hamburgerIcon.children[0].classList.toggle('hidden');
    hamburgerIcon.children[1].classList.toggle('hidden');
}

/**
 * Hamburger menu functionality
 */
if (hamburgerIcon) {
    hamburgerIcon.addEventListener('click', function () {
        toggleHamburger();
    });
}

// Set page to dark/light mode according to the set value
setMode(setModeValue);