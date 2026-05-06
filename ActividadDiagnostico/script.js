

 const items = document.querySelectorAll('li');

items.forEach(item => {
    item.addEventListener('click', function() {  
        this.classList.toggle('seleccionada');

    });
});
