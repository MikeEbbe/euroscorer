// Global variables
const html = document.documentElement;
const logo = document.getElementById('app-logo');
const toggleModeButton = document.getElementById('toggle-mode');
const darkIcon = document.getElementById('toggle-dark-icon');
const lightIcon = document.getElementById('toggle-light-icon');
const hamburgerButton = document.getElementById('hamburger-button');
let setModeValue = localStorage.getItem('mode') || 'dark'; // User's set mode
html.classList.add('hidden'); // Hide app until it's done applying the mode

/**
 * When the toggle mode button is clicked, 
 * toggle the mode value between 'dark' and 'light' 
 * and update the mode
 */
toggleModeButton.addEventListener('click', function () {
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
    // Change the hamburger button color
    hamburgerButton.style.color = mode === 'dark' ? 'white' : '#111827';    

    // Toggle the icon
    darkIcon.classList.toggle('hidden', mode === 'dark');
    lightIcon.classList.toggle('hidden', mode !== 'dark');

    // Store the set mode in user's local storage
    localStorage.setItem('mode', mode);
    // Show the app
    html.classList.remove('hidden');
}

// Set page to dark/light mode according to the set value
setMode(setModeValue);