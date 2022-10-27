class AnimateOnScroll{

    constructor(){
        this.getElements();
        this.events()
        const isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
        this.getInitialDimensions()
        
    }
    getElements(){
        this.section4__imgContainer = document.querySelector('.section4__imgContainer')  
        
    }

    events(){
        document.addEventListener('scroll', ()=>this.manageAnimation())
    }

    getInitialDimensions(){
        const initalComputetStyle = window.getComputedStyle(this.section4__imgContainer, null)
        const initalHeight = initalComputetStyle.getPropertyValue('height');
        const initalWidth = initalComputetStyle.getPropertyValue('width');
        this.initialHeightWithoutUnit = parseInt(initalHeight)
        this.initialWidthWithoutUnit = parseInt(initalWidth)
    }

    manageAnimation(){
        
        const elementTop = this.section4__imgContainer.getBoundingClientRect().top
        const computedStyle = window.getComputedStyle(this.section4__imgContainer, null);
        const computedHeight = computedStyle.getPropertyValue('height');
        if(elementTop<0){
            //console.log(computedStyle.getPropertyValue('height'))
            console.log(this.initialHeightWithoutUnit)
            // this.section4__imgContainer.style.position='sticky'
            // this.section4__imgContainer.style.top='0px'
            this.section4__imgContainer.style.height =`${this.initialHeightWithoutUnit + (elementTop*10)}px`;
            console.log(computedHeight)
        }
        //console.log(this.section4__imgContainer.getBoundingClientRect().top)
    }





}



document.addEventListener('DOMContentLoaded',()=>{
    //const animateOnScroll = new AnimateOnScroll();
})








