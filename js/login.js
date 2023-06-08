$(document).ready(function(){

    $nav=$('.nav')  
    $togleCollapse=$('.toggle-icon i')
    $togglemenu=$('.nav .nav-menu')
    $toggleitems=$('.nav .nav-items')

    $togleCollapse.click(function(){
        $nav.toggleClass('collapse');
        
    })

    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container1');
    const signupo = document.getElementById('signupo');
    const signino = document.getElementById('signino');

    signUpButton.addEventListener('click', () => {
	    container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
	    container.classList.remove("right-panel-active");
    });

    signupo.addEventListener('click', () => {
	    container.classList.add("right-panel-active");
    });
})