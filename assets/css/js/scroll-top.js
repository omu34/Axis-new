function handleScroll() {
    const scrollToTopButton = document.getElementById('scrollToTop');
    if (window.scrollY > 100) {
        scrollToTopButton.style.display = 'block';
    } else {
        scrollToTopButton.style.display = 'none';
    }
}
window.addEventListener('scroll', handleScroll);

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
const scrollToTopButton = document.getElementById('scrollToTop');
scrollToTopButton.addEventListener('click', scrollToTop);