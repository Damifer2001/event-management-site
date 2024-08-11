document.addEventListener('DOMContentLoaded', function () {
    const showMoreBtns = document.querySelectorAll('.showMoreBtn');
    const hideContentBtns = document.querySelectorAll('.hideContentBtn');
    const moreContents = document.querySelectorAll('.moreContent');

    showMoreBtns.forEach((btn, index) => {
        btn.addEventListener('click', function () {
            moreContents[index].classList.remove('hidden');
            btn.style.display = 'none';
        });
    });

    hideContentBtns.forEach((btn, index) => {
        btn.addEventListener('click', function () {
            moreContents[index].classList.add('hidden');
            showMoreBtns[index].style.display = 'inline';
        });
    });
});
