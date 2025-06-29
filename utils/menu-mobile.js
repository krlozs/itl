addEventListener("load", ()=>{
    const menuMobile = document.getElementById('header__content--mobile');
    const menuMobileContent = document.getElementById('toggle-menu--mobile');

    menuMobileContent.addEventListener('click', ()=>{
        menuMobile.classList.toggle('active')
    })
})

