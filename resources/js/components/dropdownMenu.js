class DropdownMenu{

    constructor(){
        this.dropdown__btn = document.querySelector('.dropdown__btn')
        this.dropdown__listWrapper = document.querySelector('.dropdown__listWrapper')
        this.actions();
    }
    actions(){
        this.dropdown__btn.addEventListener('click', ()=>this.toggleMenu())
    }

    toggleMenu(el){        
        this.dropdown__listWrapper.classList.toggle('hide')
    }

}



document.addEventListener('DOMContentLoaded',()=>{
    const accordion = new DropdownMenu();
})