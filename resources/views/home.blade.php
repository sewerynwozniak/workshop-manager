@extends('layouts.landingPageLayout')

@section('content')

<section class='section1'>
    <div class="section1__top">
        <div class="section1__left">
            <span class="section1__circle"></span>
            <h1 class='section1__h1'>Public Speaker</h1>
            <div class="section1__innerLeft">
                <h6 class='section1__h6'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil consectetur voluptatibus dicta? Odit nobis mollitia excepturi porro aspernatur possimus esse.</h6>
                <button class='btn btn--yellow'>Click</button>
            </div>
            
            
        </div>
    <div class="section1__right"></div>
    <!-- </div>   -->
    <div class="section1__bottom">
       
    </div>
</section>

<section class='section2'>
    <span class="section2__circle"></span>
    <h6 class='section2__h6'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil consectetur voluptatibus dicta? Odit nobis mollitia excepturi porro aspernatur possimus esse.</h6>
    
</section>

<section class='section3'>
    <h2 class='section3__h2'>How it works</h2>
    <div class="iconContainer">
        <div class="iconContainer__single">
            <img class='iconContainer__icon' src="{{ asset('images/icons/speech.png') }}" alt="speech">
            <h4 class='iconContainer__title'>Practic</h4>
            <p class='iconContainer__text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae alias totam omnis ut mollitia minus nisi hic illo itaque et?</p>
        </div>
        <div class="iconContainer__single">
            <img class='iconContainer__icon' src="{{ asset('images/icons/monitor.png') }}" alt="">
            <h4 class='iconContainer__title'>Account</h4>
            <p class='iconContainer__text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae alias totam omnis ut mollitia minus nisi hic illo itaque et?</p>
        </div>
        <div class="iconContainer__single">
            <img class='iconContainer__icon' src="{{ asset('images/icons/play-button.png') }}" alt="">
            <h4 class='iconContainer__title'>Video recording</h4>
            <p class='iconContainer__text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae alias totam omnis ut mollitia minus nisi hic illo itaque et?</p>
        </div>
        <div class="iconContainer__single">
            <img class='iconContainer__icon' src="{{ asset('images/icons/development.png') }}" alt="">
            <h4 class='iconContainer__title'>Unlock level</h4>
            <p class='iconContainer__text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae alias totam omnis ut mollitia minus nisi hic illo itaque et?</p>
        </div>
    </div>
</section>

<section class='section4'>
    <div class="section4__imgContainer"></div>
</section>



<section class="home__opinie" id="opinie">
  
  <h1 class="home__opinie__h1 animation-down">From our clients</h1>

  <div class="home__opinie__sliderWrapper">
      <img class="home__opinie__moveLeft" src="{{ asset('images/icons/left-arrow.png') }}" alt="strzałka w lewo"></img>


          <div class=" home__opinie__slider">
              <img class=" home__opinie__icon" src="{{ asset('images/icons/qutationMarks.png') }}" alt="quotation icon">
              <p class="home__opinie__pTestimonial">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam incidunt ad provident maiores obcaecati doloremque?</p>
              <p class="home__opinie__pName">Kacper P.</p>
          </div>

          <div class=" home__opinie__slider">
              <img class=" home__opinie__icon" src="{{ asset('images/icons/qutationMarks.png') }}" alt="quotation icon">
              <p class="home__opinie__pTestimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, magnam.</p>
              <p class="home__opinie__pName">Tomasz B.</p>
          </div>

          <div class=" home__opinie__slider">
              <img class=" home__opinie__icon" src="{{ asset('images/icons/qutationMarks.png') }}" alt="quotation icon">
              <p class="home__opinie__pTestimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat similique, perspiciatis obcaecati adipisci tempore illo temporibus! Deserunt, tempora delectus? A minima corporis est. Eius, nostrum.</p>
              <p class="home__opinie__pName">Marcin W.</p>
          </div>
      

      <img class="home__opinie__moveRight" src="{{ asset('images/icons/right-arrow.png') }}" alt="strzałka w prawo"></img>
  </div>

</section>




<section class='section-faq'>    
  
  <h1 class='section-faq__h1'>FAQ</h1>
  

  <div class="accordion__wrapper">

      <div class="accordion__column">

          <div class="accordion__single">
              <div class="accordion__innerWrapper">
                  <span class="accordion__span">Lorem ipsum dolor sit.</span>
                  <span class="accordion__circle"></span>
              </div>
              <div class="accordion__hidden">
                  <span class="accordion__hiddenSpan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure necessitatibus similique ex voluptates velit magni.</span>
              </div>
          </div>

          <div class="accordion__single">
              <div class="accordion__innerWrapper">
                  <span class="accordion__span">Lorem, ipsum.</span>
                  <span class="accordion__circle"></span>
              </div>
              <div class="accordion__hidden">
                  <span class="accordion__hiddenSpan">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae quasi, sint inventore dolore repellendus praesentium.</span>
              </div>
          </div>

          <div class="accordion__single">
              <div class="accordion__innerWrapper">
                  <span class="accordion__span">Lorem, ipsum dolor.</span>
                  <span class="accordion__circle"></span>
              </div>
              <div class="accordion__hidden">
                  <span class="accordion__hiddenSpan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste qui tempora tenetur? Facilis dolorem esse quo non ullam. Quidem, praesentium.</span>
              </div>
          </div>
        
      </div>

      <div class="accordion__column">

          <div class="accordion__single">
              <div class="accordion__innerWrapper">
                  <span class="accordion__span">Lorem, ipsum.</span>
                  <span class="accordion__circle"></span>
              </div>
              <div class="accordion__hidden">
                  <span class="accordion__hiddenSpan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ullam, odit asperiores molestias officiis non.</span>
              </div>
          </div>

          <div class="accordion__single">
              <div class="accordion__innerWrapper">
                  <span class="accordion__span">Lorem, ipsum.</span>
                  <span class="accordion__circle"></span>
              </div>
              <div class="accordion__hidden">
                  <span class="accordion__hiddenSpan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ipsam dolores animi expedita facere debitis?</span>
              </div>
          </div>

          <div class="accordion__single">
              <div class="accordion__innerWrapper">
                  <span class="accordion__span">Lorem, ipsum.</span>
                  <span class="accordion__circle"></span>
              </div>
              <div class="accordion__hidden">
                  <span class="accordion__hiddenSpan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut adipisci delectus odio quis ab debitis?</span>
              </div>
          </div>

      </div>
  </div>


</section>



<section class='section-endingBanner'>

    <h5 class='section-endingBanner__h5'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, perferendis.</h5>

</section>



<section class='section-contact'>

   
    <div class="contactForm__wrapper">
        <h2 class="contactForm__h2">Leave a message</h2>

        <form class="contactForm__form" action="">
            <input class="contactForm__input" type="text" placeholder="name" name="" id="">
            <input class="contactForm__input" type="text" placeholder="email" name="" id="">
            <textarea class="contactForm__input" placeholder="message" name="" id="" cols="30" rows="5"></textarea>
            <button class="contactForm__submit btn btn--yellow" type="submit">Submit</button>
        </form>
    </div>

</section>






@endsection
