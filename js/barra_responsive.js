const enlaces_barra = document.querySelector(".enlaces_navbar")
const boton_barra = document.querySelector(".boton_barra")

boton_barra.addEventListener("click", () => {
    enlaces_barra.classList.toggle("barra_menu_visible")
})