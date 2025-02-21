const filterButtons = document.querySelectorAll(".destination-dd button");
const filterableCards = document.querySelectorAll(".cards .card");
const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.navbar__menu')



const filterCards = (event) => {
    const activeButton = document.querySelector(".destination-dd .active");
    if (activeButton) {
        activeButton.classList.remove("active");
    }


    event.target.classList.add("active");

    const filterName = event.target.dataset.name;


    filterableCards.forEach(card => {
        if (filterName === "sec1" || card.dataset.name === filterName) {
            card.classList.remove("hide");  
        } else {
            card.classList.add("hide");  
        }
    });
};


filterButtons.forEach(button => {
    button.addEventListener("click", filterCards);
});



menu.addEventListener('click',function(){
   menu.classList.toggle('is-active')
   menuLinks.classList.toggle('active')
})

