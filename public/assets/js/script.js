let preveiwProfil = document.querySelector('.products-preview');
let previewBox = preveiwProfil.querySelectorAll('.preview');

document.querySelectorAll('.navbar .nav_right').forEach(nav_right =>{
	nav_right.onclick = () =>{
    preveiwProfil.style.display = 'flex';
    let name = Profil.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwProfil.style.display = 'none';
  };
});




var dd_main = document.querySelector(".dd_main");

	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
	})



	// navbar
	const navbarNav = document.querySelector
	("#navbar-nav");
	document.querySelector('#hamburger-menu').
	onclick = () => {
		navbarNav.classList.toggle("active");
	};

	const hamburger = document.querySelector("#hamburger-menu");
	
	document.addEventListener('click', function(e){
		if(!hamburger.contains(e.target)&& !navbarNav.contains(e.target)){
		navbarNav.classList.remove('active');
		}
	});
	