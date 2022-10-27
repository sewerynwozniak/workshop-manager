class FreezSectionAnimation{

    constructor(){
        this.getElements();
        this.scrollYValue =null
        this.events()
        this.fromTop=null
    }
    getElements(){
        this.section = document.querySelector('.section5__innerSection1--fixed')   
        this.sectionBackground = document.querySelector('.section5--after')   
        this.images = document.querySelectorAll('.section5__img ');      
    
    }

    events(){
        document.addEventListener('scroll', ()=>this.manageAnimation())
        window.addEventListener('load', ()=>this.topOrBottom(this.section))
    }

    topOrBottom(section){
        if(section.getBoundingClientRect().top>0){
            this.fromTop=true
        }else{
            this.fromTop=false
        }
    }


    ifViewportMeetSection(section){
        if((this.fromTop==true && section.getBoundingClientRect().top<=0) || ( this.fromTop==false && (section.getBoundingClientRect().top>=0))){
            return true;
        }
    }


    assignSectionScrollY(){
        if(this.scrollYValue==null){
            this.scrollYValue=window.scrollY          
        }
    }


    distanceFromSectionTop(){
        
        return window.scrollY-this.scrollYValue
    }



    manageAnimation(){

        // console.log('distanceFromSectionTop', this.distanceFromSectionTop())
        // console.log('scrollY', window.scrollY)
        //show first image when viewport enter
        if(this.fromTop==true && (this.section.getBoundingClientRect().top - window.innerHeight<=0) && !this.ifViewportMeetSection(this.section)){
            this.images[0].style.opacity = '1'
        }

        if(this.fromTop==false && (this.section.getBoundingClientRect().bottom >=0) && !this.ifViewportMeetSection(this.section)){
            this.images[2].style.opacity = '1'
        }
     
        if(this.ifViewportMeetSection(this.section)){
           
   

            this.section.classList.add('fixed');

            this.assignSectionScrollY()
            let distanceFromSectionTop = this.distanceFromSectionTop()
          
            
            if(this.fromTop ==true){
               
                if(distanceFromSectionTop<=100){
                    this.images[1].style.opacity = '0'
                    this.images[0].style.opacity = '1'           
                }
                if(distanceFromSectionTop>100 && distanceFromSectionTop<200){
                    this.images[0].style.opacity = '0'
                    this.images[2].style.opacity = '0'
                    this.images[1].style.opacity = '1'
                }
                if(distanceFromSectionTop>200 && distanceFromSectionTop<300){
                    this.images[1].style.opacity = '0'
                    this.images[2].style.opacity = '1'      
                }
                //remove freez when cross below
                if(distanceFromSectionTop>300){
                    console.log(window.scrollY)
                    const scrollValue = window.scrollY -290
                    this.section.classList.remove('fixed');
                    this.fromTop=false;
                    scrollTo(0, scrollValue)
                }
                //remove freez when cross above
                if(window.scrollY<this.scrollYValue){        
                    this.section.classList.remove('fixed');
                    this.fromTop=true;
                }
            }else{
                //from bottom
                console.log(distanceFromSectionTop)
                if(distanceFromSectionTop>=-100){
                    this.images[1].style.opacity = '0'
                    this.images[2].style.opacity = '1'        
                }
                else if(distanceFromSectionTop<-100 && distanceFromSectionTop>-200){
                    
                    this.images[0].style.opacity = '0'
                    this.images[2].style.opacity = '0'
                    this.images[1].style.opacity = '1'
                }
                else if(distanceFromSectionTop<-200 && distanceFromSectionTop>-300){
                    this.images[1].style.opacity = '0'
                    this.images[0].style.opacity = '1'
                }
                //remove freez when cross above
                else if(distanceFromSectionTop<-300){
                    this.section.classList.remove('fixed');
                    this.fromTop=true;
                }
                 //remove freez when cross below
                else if(distanceFromSectionTop>0){
                    console.log('odapala')
                    this.section.classList.remove('fixed');
                   
                }
            }


      

            // console.log('window.scrollY', window.scrollY)
            // console.log('this.scrollYValue', this.scrollYValue)
            
            
            //console.log(window.scrollY<this.scrollYValue)


    }

         

    }





}




document.addEventListener('DOMContentLoaded',()=>{
    const freezSectionAnimation = new FreezSectionAnimation();
})