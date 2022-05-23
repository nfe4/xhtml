<div class="page">
  <div class="navbar navbar-style-1">
    <div class="navbar-bg"></div>
    <div class="navbar-inner sliding">
      <div class="left">
        <a href="#" class="link back">
          <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M4.3419 8L10.2222 2.22222L8 2.73828e-07L1.22201e-06 8L8 16L10.2222 13.7778L4.3419 8Z" fill="#122261"/>
				</svg>
          <span class="if-not-md">Back</span>
        </a>
      </div>
      <div class="title">Nested Swipers</div>
    </div>
  </div>
  <div class="page-content">
    <div data-pagination='{"el": ".swiper-pagination-h"}' class="swiper-container swiper-init demo-swiper">
      <div class="swiper-pagination swiper-pagination-h"></div>
      <div class="swiper-wrapper">
        <div class="swiper-slide">Horizontal Slide 1</div>
        <div class="swiper-slide">
          <div data-pagination='{"el": ".swiper-pagination-v"}' data-direction="vertical" class="swiper-container swiper-init demo-swiper">
            <div class="swiper-pagination swiper-pagination-v"></div>
            <div class="swiper-wrapper">
              <div class="swiper-slide">Vertical Slide 1</div>
              <div class="swiper-slide">Vertical Slide 2</div>
              <div class="swiper-slide">Vertical Slide 3</div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">Horizontal Slide 3</div>
        <div class="swiper-slide">Horizontal Slide 4</div>
      </div>
    </div>
  </div>
</div>
