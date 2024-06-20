document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.querySelector('.menu');

    menuToggle.addEventListener('change', function () {
        if (this.checked) {
            menu.classList.add('open');
        } else {
            menu.classList.remove('open');
        }
    });
});

function openLoginTab() {
    // Replace with your actual login page URL
    var loginUrl = 'login_form.php';
    window.open(loginUrl, '_blank');
}

function openContactTab() {
    // Replace with your actual contact form URL
    var contactUrl = 'contact_form.php';
    window.open(contactUrl, '_blank');
}

document.addEventListener('DOMContentLoaded', function () {
    // Track current page number for each section
    let raggaMuffinPage = 1;
    let koolRunningsPage = 1;
    let krazyKartsPage = 1;
    let ezSkankinPage = 1;
    let arcadePage = 1;
    let restaurantPage = 1;

    // Function to check if a section is at the bottom of the page
    function isBottom(el) {
        return el.getBoundingClientRect().bottom <= window.innerHeight;
    }

    // Function to load more content for a section
    function loadMoreContent(page, section) {
        // Replace with your actual API endpoint or content loading logic
        let endpoint = `load_more_${section}.php?page=${page}`;

        fetch(endpoint)
            .then(response => response.text())
            .then(data => {
                // Append new content to the section
                document.getElementById(section).insertAdjacentHTML('beforeend', data);
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    // Check if sections are at the bottom of the page and load more content
    function checkAndLoadMore() {
        if (isBottom(document.getElementById('ragga_muffin'))) {
            loadMoreContent(++raggaMuffinPage, 'ragga_muffin');
        } else if (isBottom(document.getElementById('kool_runnings'))) {
            loadMoreContent(++koolRunningsPage, 'kool_runnings');
        } else if (isBottom(document.getElementById('krazy_karts'))) {
            loadMoreContent(++krazyKartsPage, 'krazy_karts');
        } else if (isBottom(document.getElementById('ez_skankin'))) {
            loadMoreContent(++ezSkankinPage, 'ez_skankin');
        } else if (isBottom(document.getElementById('arcade'))) {
            loadMoreContent(++arcadePage, 'arcade');
        } else if (isBottom(document.getElementById('restaurant_live_music'))) {
            loadMoreContent(++restaurantPage, 'restaurant_live_music');
        }
    }

    // Add event listener for scroll events
    window.addEventListener('scroll', function () {
        checkAndLoadMore();
    });

    // Initial check on page load
    checkAndLoadMore();
});
