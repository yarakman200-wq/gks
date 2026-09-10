console.log('WE LOVE TYPO3');
// Job Card Toggle
document.addEventListener('DOMContentLoaded', function() {
    const jobToggles = document.querySelectorAll('.job-toggle');
    
    jobToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const jobCard = this.closest('.job-card');
            
            if (jobCard) {
                jobCard.classList.toggle('active');
                this.setAttribute('aria-expanded', jobCard.classList.contains('active'));
            }
        });
    });
});

