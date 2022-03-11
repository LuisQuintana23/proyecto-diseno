addEventListener('DOMContentLoaded', () =>{
    const boton_menu = document.querySelector('.boton_menu')
    if (boton_menu) {
        boton_menu.addEventListener('click', () => {
            const enlaces_barra = document.querySelector('.enlaces_navbar')
            enlaces_barra.classList.toggle('show')

        })
    }
})