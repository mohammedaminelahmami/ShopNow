let hmb__menu = document.getElementById("hmb__menu");
let arrow = document.getElementById("arrow")
let aside = document.querySelector("aside");
let my__icons = document.getElementsByClassName("icons");

hmb__menu.addEventListener("click", () => {
	if(arrow.className === "fas fa-arrow-left") {
		arrow.className = "fas fa-arrow-right";
	} else {
		arrow.className = "fas fa-arrow-left";
	}
	aside.classList.toggle("hide");
});

let logout = document.getElementById("logout-bt");


// Get the modal --------------------------------------------------------------
var modal = document.getElementsByClassName("modal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

var btn__edit = document.getElementsByClassName("btn__edit");



for(let i = 0; i < btn.length; i++){
	btn[i].addEventListener("click", ()=>{
		modal[i].style.display = "block";
	})

	// When the user clicks on <span> (x), close the modal
	span[i].addEventListener("click", ()=>{
		modal[i].style.display = "none";
	})
}








