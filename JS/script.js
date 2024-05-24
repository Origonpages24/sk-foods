document.addEventListener('DOMContentLoaded', function() {
    let options = {
        threshold: 0.5
    };

    let observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    let targets = document.querySelectorAll('.about-img, .about-details');
    targets.forEach(target => {
        observer.observe(target);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.number-col h1');
    const duration = 2000; // Duration of the animation in milliseconds

    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const startTime = performance.now();

        const updateCount = (currentTime) => {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / duration, 1);
            const currentCount = Math.floor(progress * target);

            counter.innerText = currentCount + '+';

            if (progress < 1) {
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target + '+';
            }
        };

        requestAnimationFrame(updateCount);
    };

    let observerOptions = {
        threshold: 0.5
    };

    let observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                animateCounter(entry.target.querySelector('h1'));
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    let targets = document.querySelectorAll('.number-col');
    targets.forEach(target => {
        observer.observe(target);
    });
}); 




  const filterButtons = document.querySelectorAll(".filterable-menus button")
  const filterableCards = document.querySelectorAll(".filterable-card-wrapper .card")

//   console.log(filterButtons, filterableCards)
const filterCards = e => {
    document.querySelector(".active").classList.remove("active");
    e.target.classList.add("active");
    // console.log(e.target);

    filterableCards.forEach(card => {
        card.classList.add("hide");
        if(card.dataset.name === e.target.dataset.name || e.target.dataset.name === "all"){
            card.classList.remove("hide")
        }
    })
}
filterButtons.forEach(button => button.addEventListener("click", filterCards));
