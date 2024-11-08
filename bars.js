const navLinks = document.querySelector('.mobile');
const bars = document.querySelector('.bars'); // Correctly select the bars icon

bars.addEventListener('click', () => {
    navLinks.classList.toggle('hidden'); // Toggle the 'hidden' class
    bars.classList.toggle('fa-times'); // Toggle between 'fa-bars' and 'fa-times'
    bars.classList.toggle('fa-bars'); // Toggle between 'fa-bars' and 'fa-times'
    bars.classList.toggle('text-black'); // Toggle between 'fa-bars' and 'fa-times'
});
