// Hamburger Dropdown Toggle
document.addEventListener('DOMContentLoaded', function() {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobileDropdown = document.getElementById('mobileDropdown');
    
    // Toggle dropdown
    hamburgerBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        mobileDropdown.classList.toggle('active');
        hamburgerBtn.classList.toggle('active');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!mobileDropdown.contains(e.target) && !hamburgerBtn.contains(e.target)) {
            mobileDropdown.classList.remove('active');
            hamburgerBtn.classList.remove('active');
        }
    });
    
    // Close dropdown when clicking on a link
    const dropdownLinks = document.querySelectorAll('.dropdown-link');
    dropdownLinks.forEach(link => {
        link.addEventListener('click', function() {
            setTimeout(function() {
                mobileDropdown.classList.remove('active');
                hamburgerBtn.classList.remove('active');
            }, 200);
        });
    });
});