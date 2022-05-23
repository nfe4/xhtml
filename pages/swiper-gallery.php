<template>
  <div class="page" style="background: #000">
	<div class="navbar navbar-style-1">
      <div class="navbar-inner sliding">
        <div class="navbar-bg"></div>
        <div class="left">
          <a href="#" class="link back">
           <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M4.3419 8L10.2222 2.22222L8 2.73828e-07L1.22201e-06 8L8 16L10.2222 13.7778L4.3419 8Z" fill="#122261"/>
				</svg>
            <span class="if-not-md">Back</span>
          </a>
        </div>
        <div class="title">Thumbs Gallery</div>
      </div>
    </div>
    <div class="page-content">
      <div class="swiper-container demo-swiper-gallery-top">
        <div class="swiper-wrapper">
          <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-1.jpg)"
            class="swiper-slide"></div>
          <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-2.jpg)"
            class="swiper-slide"></div>
          <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-3.jpg)"
            class="swiper-slide"></div>
          <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-4.jpg)"
            class="swiper-slide"></div>
          <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-5.jpg)"
            class="swiper-slide"></div>
          <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-6.jpg)"
            class="swiper-slide"></div>
        </div>
        <div class="swiper-button-next color-white"></div>
        <div class="swiper-button-prev color-white"></div>
      </div>
      <div class="swiper-container demo-swiper-gallery-thumbs">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-1.jpg)"
              class="swiper-slide-pic"></div>
          </div>
          <div class="swiper-slide">
            <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-2.jpg)"
              class="swiper-slide-pic"></div>
          </div>
          <div class="swiper-slide">
            <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-3.jpg)"
              class="swiper-slide-pic"></div>
          </div>
          <div class="swiper-slide">
            <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-4.jpg)"
              class="swiper-slide-pic"></div>
          </div>
          <div class="swiper-slide">
            <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-5.jpg)"
              class="swiper-slide-pic"></div>
          </div>
          <div class="swiper-slide">
            <div style="background-image:url(https://cdn.framework7.io/placeholder/nature-800x800-6.jpg)"
              class="swiper-slide-pic"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $on }) => {
    let swiperTop;
    let swiperThumbs;
    $on('pageInit', () => {
      swiperThumbs = $f7.swiper.create('.demo-swiper-gallery-thumbs', {
        slidesPerView: 4,
        spaceBetween: 10,
        freeMode: true,
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
      });
      swiperTop = $f7.swiper.create('.demo-swiper-gallery-top', {
        spaceBetween: 10,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        thumbs: {
          swiper: swiperThumbs,
        },
      });
    });
    $on('pageBeforeRemove', () => {
      swiperTop.destroy();
      swiperThumbs.destroy();
    });

    return $render;
  };

</script>
