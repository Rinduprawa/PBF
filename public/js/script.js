document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        const title = item.querySelector('.accordion-title');

        title.addEventListener('click', () => {
            const content = item.querySelector('.accordion-content');

            // Toggle the content visibility
            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }

            // Toggle the active class
            title.classList.toggle('active');
        });
    });
});
