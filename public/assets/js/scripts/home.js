const buttonMenu = document.querySelector('.navbar-toggler');
const titleHomeOne = document.querySelector('.title-home.one');
const titleHomeSecond = document.querySelector('.title-home.second');
const dropDownLanguage = document.querySelector('.dropdown-toggle');

buttonMenu.addEventListener('click', () => {
    titleHomeOne.classList.toggle('title-reduce');
    titleHomeSecond.classList.toggle('title-reduce');
});

// dropDownLanguage.addEventListener('click', () => {
//     titleHomeOne.classList.toggle('title-small');
//     titleHomeSecond.classList.toggle('title-small');
// });

