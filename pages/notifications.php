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
        <div class="title">Notifications</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p>Framework7 comes with simple Notifications component that allows you to show some useful messages to user and
          request basic actions.</p>
        <p><a href="#" class="button button-fill" @click=${showNotificationFull}>Full layout notification</a></p>
        <p><a href="#" class="button button-fill" @click=${showNotificationWithButton}>With close button</a></p>
        <p><a href="#" class="button button-fill" @click=${showNotificationCloseOnClick}>Click to close</a></p>
        <p><a href="#" class="button button-fill" @click=${showNotificationCallbackOnClose}>Callback on close</a></p>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $el, $on }) => {
    let notificationFull;
    let notificationWithButton;
    let notificationCloseOnClick;
    let notificationCallbackOnClose;

    const showNotificationFull = () => {
      // Create notification
      if (!notificationFull) {
        notificationFull = $f7.notification.create({
          icon: '<i class="icon icon-f7"></i>',
          title: 'Framework7',
          titleRightText: 'now',
          subtitle: 'This is a subtitle',
          text: 'This is a simple notification message',
          closeTimeout: 3000,
        });
      }
      // Open it
      notificationFull.open();
    }
    const showNotificationWithButton = () => {
      // Create notification
      if (!notificationWithButton) {
        notificationWithButton = $f7.notification.create({
          icon: '<i class="icon icon-f7"></i>',
          title: 'Framework7',
          subtitle: 'Notification with close button',
          text: 'Click (x) button to close me',
          closeButton: true,
        });
      }
      // Open it
      notificationWithButton.open();
    }
    const showNotificationCloseOnClick = () => {
      // Create notification
      if (!notificationCloseOnClick) {
        notificationCloseOnClick = $f7.notification.create({
          icon: '<i class="icon icon-f7"></i>',
          title: 'Framework7',
          titleRightText: 'now',
          subtitle: 'Notification with close on click',
          text: 'Click me to close',
          closeOnClick: true,
        });
      }
      // Open it
      notificationCloseOnClick.open();
    }
    const showNotificationCallbackOnClose = () => {
      // Create notification
      if (!notificationCallbackOnClose) {
        notificationCallbackOnClose = $f7.notification.create({
          icon: '<i class="icon icon-f7"></i>',
          title: 'Framework7',
          titleRightText: 'now',
          subtitle: 'Notification with close on click',
          text: 'Click me to close',
          closeOnClick: true,
          on: {
            close: function () {
              $f7.dialog.alert('Notification closed');
            },
          },
        });
      }
      // Open it
      notificationCallbackOnClose.open();
    }

    $on('pageBeforeRemove', () => {
      $f7.notification.close();
      if (notificationFull) notificationFull.destroy();
      if (notificationWithButton) notificationWithButton.destroy();
      if (notificationCloseOnClick) notificationCloseOnClick.destroy();
      if (notificationCallbackOnClose) notificationCallbackOnClose.destroy();
    });

    return $render;
  };
</script>