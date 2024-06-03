document.addEventListener("DOMContentLoaded", function() {
    // Increment page view counter
    fetch('backend/update_visits.php')
        .then(response => response.text())
        .then(() => {
            // Fetch updated page views
            return fetch('backend/get_visits.php');
        })
        .then(response => response.text())
        .then(visits => {
            document.getElementById('page-views').innerText = visits;
        });

    // Increment social links counter
    document.querySelectorAll('.social-links a').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const platform = this.getAttribute('data-platform');

            fetch(`backend/update_social_visits.php?platform=${platform}`)
                .then(() => {
                    window.location.href = this.href;
                });
        });
    });
});