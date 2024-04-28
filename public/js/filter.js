document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const fundraisersContainer = document.getElementById('fundraisersContainer');
      const fundraisers = document.querySelectorAll('.home-fundraiser-card');
      const notFoundMessage = document.getElementById('notFoundMessage');

      // Event listener for search input
      searchInput.addEventListener('input', function() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        let found = false;

        fundraisers.forEach(fundraiser => {
          const title = fundraiser.getAttribute('data-title').toLowerCase();
          if (title.includes(searchTerm)) {
            fundraiser.style.display = 'block';
            found = true;
          } else {
            fundraiser.style.display = 'none';
          }
        });

        if (!found) {
          notFoundMessage.style.display = 'block';
          fundraisersContainer.style.display = 'none'; // Hide fundraisers container
        } else {
          notFoundMessage.style.display = 'none';
          fundraisersContainer.style.display = 'grid'; // Show fundraisers container
        }
      });
    });