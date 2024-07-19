import './bootstrap';
document.querySelector('form').addEventListener('submit', function(event) {
    let isValid = true;
    // Add custom validation logic here

    if (!isValid) {
        event.preventDefault();
    }
});
