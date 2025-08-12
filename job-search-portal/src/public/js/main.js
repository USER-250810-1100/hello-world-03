// src/public/js/main.js

document.addEventListener('DOMContentLoaded', function() {
    const jobLinks = document.querySelectorAll('.job-link');
    
    jobLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const jobId = this.dataset.jobId;
            showJobDetails(jobId);
        });
    });

    function showJobDetails(jobId) {
        // Logic to fetch job details and display them
        // This could be a popup or redirect to detail.php
        fetch(`detail.php?id=${jobId}`)
            .then(response => response.text())
            .then(data => {
                // Assuming you have a modal or a section to display the job details
                const modal = document.getElementById('job-detail-modal');
                modal.innerHTML = data;
                modal.style.display = 'block';
            })
            .catch(error => console.error('Error fetching job details:', error));
    }

    // Pagination logic
    const paginationLinks = document.querySelectorAll('.pagination-link');
    
    paginationLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const page = this.dataset.page;
            loadJobs(page);
        });
    });

    function loadJobs(page) {
        // Logic to load jobs for the specified page
        fetch(`list.php?page=${page}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('job-list').innerHTML = data;
            })
            .catch(error => console.error('Error loading jobs:', error));
    }
});