document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll('.star-rating span');
    const ratingInput = document.getElementById('rating');

    stars.forEach(star => {
        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            ratingInput.value = value;

            
            stars.forEach(s => s.classList.remove('active'));

            
            this.classList.add('active');
            let prev = this.previousElementSibling;
            while (prev) {
                prev.classList.add('active');
                prev = prev.previousElementSibling;
            }
        });

        
        star.addEventListener('mouseover', function() {
            stars.forEach(s => s.classList.remove('hover'));
            this.classList.add('hover');
            let prev = this.previousElementSibling;
            while (prev) {
                prev.classList.add('hover');
                prev = prev.previousElementSibling;
            }
        });

        star.addEventListener('mouseout', function() {
            stars.forEach(s => s.classList.remove('hover'));
        });
    });
});