class Accordion{

    constructor(){
        this.accordions = document.querySelectorAll('.accordion__single')
        this.actions();
    }
    actions(){
        this.accordions.forEach(el=> el.addEventListener('click', ()=>this.toggleAccordion(el)))
    }

    toggleAccordion(el){        
        const elementToToggle = el.children[1];
        elementToToggle.classList.toggle('accordion__toggle');
    }

}



document.addEventListener('DOMContentLoaded',()=>{
    const accordion = new Accordion();
})