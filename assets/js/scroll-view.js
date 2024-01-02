const elementsToWatch = Array.from(document.querySelectorAll('.scroll-view')) ?? [];

// Define the options for the Intersection Observer
const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.25
};

// Create a new Intersection Observer
const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.remove('scroll-view');
        }
    });
}, options);


elementsToWatch.forEach((element) => {
    observer.observe(element);
})
