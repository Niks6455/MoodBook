
const boorger= document.querySelector('.header__inner');

boorger.addEventListener('click', (e) =>{
    if(!boorger.classList.contains("active")) { 
        boorger.classList.add('active'); 
    }else{
        boorger.classList.remove('active'); 
    } 
})
