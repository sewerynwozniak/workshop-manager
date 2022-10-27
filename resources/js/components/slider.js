class Slider{


       constructor(){
            this.opinie__moveLeft = document.querySelector('.home__opinie__moveLeft');
            this.opinie__moveRight = document.querySelector('.home__opinie__moveRight');
            this.opinie__sliders = document.querySelectorAll('.home__opinie__slider');
            this.directions = {
               left:'left',
               right:'right'
           }
           this.testimonialsSliderNr=0
           this.displaySlider()
           this.events()
           
           
       }


       events(){         
            this.opinie__moveLeft.addEventListener('click',()=>this.changeSlide(this.directions.left))
            this.opinie__moveRight.addEventListener('click',()=>this.changeSlide(this.directions.right))                             
       }


       displaySlider(){
        
           this.opinie__sliders.forEach(slider=>{
               slider.style.display='none';
               slider.style.opacity='0';

           })    
           this.opinie__sliders[this.testimonialsSliderNr].style.display='block';
           this.opinie__sliders[this.testimonialsSliderNr].style.opacity='1';
       }




       changeSlide(direction){
           this.opinie__sliders[this.testimonialsSliderNr].style.opacity=0;
           if(direction=='left'){
              this.testimonialsSliderNr--;
               if(this.testimonialsSliderNr<0){
                   this.testimonialsSliderNr=2
               }
           }else if(direction=='right'){
              this.testimonialsSliderNr++;
               if(this.testimonialsSliderNr>2){
                   this.testimonialsSliderNr=0
               }
           }
           setTimeout(()=>this.displaySlider(), 300)
  
       }

}


// export default new Slider()




document.addEventListener('DOMContentLoaded',()=>{
    const slider = new Slider()
})