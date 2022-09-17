"use strict"


document.addEventListener('DOMContentLoaded', function(){
    //получаем инпут в file в переменную
    const formImage = document.getElementById('formImage')
     //получаем div для превью в переменную
    const formPreview = document.getElementById('formPreview') 
    

    //слушаем изменения в инпуте  file

    formImage.addEventListener('change', ()=>{
        uploadFile(formImage.files[0]);
    });

    function uploadFile(file){
        //проверяем тип файла
        if(!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)){
            alert('Разрешены только изображения.');
            formImage.value = '';
            return;
        }
        //проверим размер файла (<2мб)
        if(file.size > 2*1024*1024){
            alert('Файл должен быть менее 2 МБ.');
            return;
        }
        //то что ниже реализует отображение картинки на сайте
        var reader = new FileReader();
        reader.onload = function(e){
            formPreview.innerHTML = `<img src="${e.target.result}" alt="Фото">`;
        };
        reader.onerror = function(e){
            alert('Ошибка')
        };
        reader.readAsDataURL(file);
    }
});


// высота и добавление класса
const form = document.querySelector('.form__button');
const escho = document.querySelector('.form_escho');
const license__btn = document.querySelector('.license__btn');
const license__head = document.querySelector('.license__head')


let license__inner = document.querySelector('.license__inner');
let vse = document.querySelector('.vse')
let vsein = document.querySelector('.vse__inner')
//Вернуться назад или остаться
form.addEventListener('click', (event) =>{  
    event.preventDefault();
    if(!vse.classList.contains("active") && !vsein.classList.contains("active")) { 
        vse.classList.add('active'); 
        vsein.classList.add('active')

    }
           
});

escho.addEventListener('click', (event) =>{ 
    if(vse.classList.contains("active") && vsein.classList.contains("active"))  
    vse.classList.remove('active'); 
    vsein.classList.remove('active'); 
});

//license
license__btn.addEventListener('click', (event) =>{ 
    if(!vse.classList.contains("active") && !license__inner.classList.contains("active")) { 
        vse.classList.add('active'); 
        license__inner.classList.add('active')

    }
});

license__head.addEventListener('click', (event) =>{ 
    if(vse.classList.contains("active") && license__inner.classList.contains("active"))  
    vse.classList.remove('active'); 
    license__inner.classList.remove('active'); 
});

let scrollHeight = Math.max(
    document.body.scrollHeight, document.documentElement.scrollHeight,
    document.body.offsetHeight, document.documentElement.offsetHeight,
    document.body.clientHeight, document.documentElement.clientHeight
);

vse.style.height = scrollHeight + "px";
 