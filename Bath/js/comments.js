//DOMContentLoaded needs to succesfully load all info from db and after that button will work correctly
document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggle-comments');
    const commentsSection = document.getElementById('comments');
//on click text of button will change to hide comments if its open
    toggleButton.addEventListener('click', () => {
        if (commentsSection.classList.contains('hidden')) {
            commentsSection.classList.remove('hidden');
            toggleButton.textContent = 'Hide Comments';
        } else {
            commentsSection.classList.add('hidden');
            toggleButton.textContent = 'Show Comments';
        }
    });
});
