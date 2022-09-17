const filterBox = document.querySelectorAll('.chto_block');//получаем все элемент
let count = 0
const genre__name = document.querySelector('.genre__name--furst')
const genres = document.querySelectorAll('.genre__name')
let pop = document.querySelector('.pop')
let podb = document.querySelector('.podbor')

filterBox.forEach(function(userItem) {
        count++;
});

console.log(`Вот столько всего книг`, count );


document.querySelector('ul').addEventListener('click', (event) => {
    if (event.target.tagName !== 'LI') return false;//проверка клика на li
    let filterClass = event.target.dataset['f'];//получаем жанр который записан в data-f
    let prov = 0;
   
  

    filterBox.forEach(elem => { 
        if (!elem.classList.contains(filterClass) && filterClass !== 'all') {
            prov = prov + 1;
           
        } 
    });

   
    console.log(filterClass);
   
    //если есть такие жанры
    if (prov != count){
       
         filterBox.forEach(elem => { 
            elem.classList.remove('hide');
            console.log(1);
            if (!elem.classList.contains(filterClass) && filterClass !== 'all') {
            elem.classList.add('hide')
           
            }
        })
    }

    
    else{
        alert("Такого жанра нет, но мы это обязательно исправим)")
        filterBox.forEach(elem => { 
            elem.classList.remove('hide');
           
        })
        clearActiveClasses();
        genre__name.classList.add('active')
       
    }
    open_pop(filterClass);
});

//добавление active
    for(const genre of genres){
        genre.addEventListener('click',() =>{
            clearActiveClasses()
            genre.classList.add('active')
          
        })
    }

    function clearActiveClasses(){
        genres.forEach((genre) => {
            genre.classList.remove('active')
            });
        };
  
   function close_pop(){
    pop.style.display = 'none';
    podb.style.display = 'none';
   }
   function open_pop(filterClass){
    if(filterClass === 'all'){
        pop.style.display = 'block';
        podb.style.display = 'flex';
   }else{
    close_pop()
   }
   
   }
               