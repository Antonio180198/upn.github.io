document.addEventListener("keyup", e => {
    if (e.target.matches ('#buscador')) {
        document.querySelectorAll('.articulos').forEach(nombre => {
            nombre.textContent.toLocaleLowerCase().includes(e.target.value)
            ? nombre.classList.remove('filtro')
            : nombre.classList.add('filtro');
        })
    }
})