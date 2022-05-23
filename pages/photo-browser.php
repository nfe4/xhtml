<template>
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
        <div class="title">Photo Browser</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p>Photo Browser is a standalone and highly configurable component that allows to open window with photo viewer
          and navigation elements with the following features:</p>
        <ul>
          <li>Swiper between photos</li>
          <li>Multi-gestures support for zooming</li>
          <li>Toggle zoom by double tap on photo</li>
          <li>Single click on photo to toggle Exposition mode</li>
        </ul>
      </div>
      <div class="block block-strong">
        <p>Photo Browser could be opened in a three ways - as a Standalone component (Popup modification), in Popup, and
          as separate Page:</p>
        <div class="row">
          <div class="col-33"><a href="#" class="button button-fill" @click=${openStandalone}>Standalone</a></div>
          <div class="col-33"><a href="#" class="button button-fill" @click=${openPopup}>Popup</a></div>
          <div class="col-33"><a href="#" class="button button-fill" @click=${openPage}>Page</a></div>
        </div>
      </div>
      <div class="block block-strong">
        <p>Photo Browser supports 2 default themes - default Light (like in previous examples) and Dark theme. Here is a
          Dark theme examples:</p>
        <div class="row">
          <div class="col-33"><a href="#" class="button button-fill" @click=${openStandaloneDark}>Standalone</a></div>
          <div class="col-33"><a href="#" class="button button-fill" @click=${openPopupDark}>Popup</a></div>
          <div class="col-33"><a href="#" class="button button-fill" @click=${openPageDark}>Page</a></div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $on }) => {
    const photos = [
      {
        url: 'img/beach.jpg',
        caption: 'Amazing beach in Goa, India'
      },
      'http://placekitten.com/1024/1024',
      'img/lock.jpg',
      {
        url: 'img/monkey.jpg',
        caption: 'I met this monkey in Chinese mountains'
      },
      {
        url: 'img/mountains.jpg',
        caption: 'Beautiful mountains in Zhangjiajie, China'
      }
    ];

    let standalone;
    let popup;
    let page;
    let standaloneDark;
    let popupDark;
    let pageDark;

    const openStandalone = () => {
      standalone.open();
    }
    const openPopup = () => {
      popup.open();
    }
    const openPage = () => {
      page.open();
    }
    const openStandaloneDark = () => {
      standaloneDark.open();
    }
    const openPopupDark = () => {
      popupDark.open();
    }
    const openPageDark = () => {
      pageDark.open();
    }
    $on('pageInit', () => {
      // Create PBs when page init
      standalone = $f7.photoBrowser.create({
        photos: photos,
      });
      popup = $f7.photoBrowser.create({
        photos: photos,
        type: 'popup',
      });
      page = $f7.photoBrowser.create({
        photos: photos,
        type: 'page',
        backLinkText: 'Back',
      });
      standaloneDark = $f7.photoBrowser.create({
        photos: photos,
        theme: 'dark',
      });
      popupDark = $f7.photoBrowser.create({
        photos: photos,
        type: 'popup',
        theme: 'dark',
      });
      pageDark = $f7.photoBrowser.create({
        photos: photos,
        type: 'page',
        backLinkText: 'Back',
        theme: 'dark',
      });
    });
    $on('pageBeforeRemove', () => {
      // Destroy PBs on page remove
      standalone.destroy();
      popup.destroy();
      page.destroy();
      standaloneDark.destroy();
      popupDark.destroy();
      pageDark.destroy();
    });

    return $render;
  };
</script>
