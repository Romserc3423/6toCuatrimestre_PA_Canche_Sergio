

 const cambiarColor = document.querySelectorAll('li');

cambiarColor.forEach(cambiarColor => {
    cambiarColor.addEventListener('click', function() {
        this.classList.toggle('seleccionada');
    });
});
