let userlogo = document.querySelector('.userlogo')
let option = document.querySelector('.option')
let menu = document.querySelector('.menu')
let btn = document.querySelector('.toggle_btn')

let add = function(){
	menu.classList.toggle('active')

}

let active = function(){
	option.classList.toggle('active')
}

btn.addEventListener('click', add)
userlogo.addEventListener('click', active)