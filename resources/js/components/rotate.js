class Scroll{

    constructor(){
        this.getElements();
        this.events()
    }
    getElements(){
        this.section1__circle = document.querySelector('.section1__circle')  
        this.section2__circle = document.querySelector('.section2__circle')   
    }

    events(){
        document.addEventListener('scroll', ()=>this.manageRotate())
    }

    isInViewPort(element){

        const elementTop = element.getBoundingClientRect().top;
        const elementBottom = element.getBoundingClientRect().bottom
        const topAtViewport = window.innerHeight - elementTop
        if(topAtViewport>0 && elementBottom>0){
            return true;
        }
    }

    manageRotate(){
        
        if(this.isInViewPort(this.section1__circle)){
            this.rotate(this.section1__circle)
        }
        if(this.isInViewPort(this.section2__circle)){
            this.rotate(this.section2__circle)
        }
                
    }

    rotate(element){
         
        const scrollY = window.scrollY/10
        if(element==this.section1__circle){
            element.style.transform=`translate(-30%, -30%) rotate(${scrollY}deg)`
        }else{
            element.style.transform=`translate(30%, -30%) rotate(${scrollY}deg)`
        }
     
    }



}



document.addEventListener('DOMContentLoaded',()=>{
    const scroll = new Scroll();
})








