const counters = document.querySelectorAll('.counter');
const statItems = document.querySelectorAll('.stat-item');
// Function to check if an element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top >= 0 && rect.bottom <= window.innerHeight;
}
// Function to start the counter animation
function startCounter(counter) {
    const target = +counter.getAttribute('data-target');
    const initialValue = +counter.innerText.replace(/[^\d]/g, '');
    const updateCounter = () => {
        const current = +counter.innerText.replace(/[^\d]/g, '');
        const increment = (target - initialValue) / 100;
        if (current < target) {
            counter.innerText = `${Math.ceil(current + increment)}+`;
            setTimeout(updateCounter, 100);
        } else {
            counter.innerText = target + '+';
        }
    };
    // Start with the initial value
    counter.innerText = initialValue + '+';
    setTimeout(updateCounter, 500); // Wait 500ms before starting the counter
}
// Function to trigger the animation and counter when the element is visible
function handleScroll() {
    let anyVisible = false; // Track if any item is visible
    statItems.forEach((statItem) => {
        if (isInViewport(statItem)) {
            anyVisible = true; // Found at least one visible item
            // Add class to trigger CSS animation
            statItem.classList.add('appear');
            // Start the counter after the appearance animation
            const counter = statItem.querySelector('.counter');
            setTimeout(() => startCounter(counter), 800); // Start counter after 800ms
        }
    });
    // Debugging
    if (anyVisible) {
        console.log('Visible stat items triggered the counter.');
    } else {
        console.log('No visible stat items.');
    }
}
// Listen for scroll event
window.addEventListener('scroll', handleScroll);
// Trigger the scroll check in case the stats are already in view
handleScroll();