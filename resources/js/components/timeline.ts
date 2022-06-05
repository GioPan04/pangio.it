const observerCallback: IntersectionObserverCallback = (entries, observer) => {
    entries.forEach((oe) => {
        if(!oe.target.classList.contains('timeline-shown') && oe.isIntersecting) {
            oe.target.classList.add('timeline-shown');
            observer.unobserve(oe.target);
        }
    });
};

export default () => {
    const observer = new IntersectionObserver(observerCallback, { rootMargin: '100px 0px 0px 0px' });
    document.querySelectorAll('.timeline-content').forEach(e => {
        observer.observe(e);
    });
};
