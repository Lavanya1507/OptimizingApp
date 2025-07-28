// No optimization
document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded');
    // Inefficient DOM manipulation
    const rows = document.querySelectorAll('tr');
    rows.forEach(row => {
        row.addEventListener('click', function() {
            alert('Clicked row: ' + this.innerText);
        });
    });
});