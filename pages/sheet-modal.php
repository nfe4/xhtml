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
        <div class="title">Sheet Modal</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p>Sheet Modals slide up from the bottom (or down from the top) of the screen to reveal more content. Such
          modals allow to create custom overlays with custom content.</p>
        <p class="row">
          <a class="col button button-fill sheet-open" data-sheet=".demo-sheet">Open Sheet</a>
          <a class="col button button-fill" @click=${createSheet}>Create Dynamic Sheet</a>
        </p>
        <p>
          <a class="col button button-fill sheet-open" data-sheet=".demo-sheet-top">Top Sheet</a>
        </p>
      </div>

      <div class="block-title">Push View</div>
      <div class="block block-strong">
        <p>Sheet can push view behind on open. By default it has effect only when <code>safe-area-inset-top</code> is
          more than
          zero (iOS fullscreen webapp or iOS cordova app)</p>
        <p>
          <a href="#" class="button button-fill sheet-open" data-sheet=".demo-sheet-push">Sheet Push</a>
        </p>
      </div>

      <div class="block-title">Swipeable Sheet</div>
      <div class="block block-strong">
        <p>Sheet modal can be closed with swipe to top (for top Sheet) or bottom (for default Bottom sheet):</p>
        <p>
          <a href="#" class="button button-fill sheet-open" data-sheet=".demo-sheet-swipe-to-close">Swipe To Close</a>
        </p>
        <p>Also there is swipe-step that can be set on Sheet modal to expand it with swipe:</p>
        <p>
          <a href="#" class="button button-fill sheet-open" data-sheet=".demo-sheet-swipe-to-step">Swipe To Step</a>
        </p>
      </div>
    </div>


    <div class="sheet-modal demo-sheet">
      <div class="toolbar">
        <div class="toolbar-inner">
          <div class="left"></div>
          <div class="right">
            <a class="link sheet-close">Close</a>
          </div>
        </div>
      </div>
      <div class="sheet-modal-inner">
        <div class="page-content">
          <div class="block">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus dolorum ipsa aliquid accusamus
              perferendis laboriosam delectus numquam minima animi, libero illo in tempora harum sequi corporis alias ex
              adipisci.</p>
            <p>Sunt magni enim saepe quasi aspernatur delectus consectetur fugiat necessitatibus qui sed, similique quis
              facere tempora, laudantium quae expedita ea, aperiam dolores. Aut deserunt soluta alias magnam.
              Consequatur, nisi, enim.</p>
            <p>Eaque maiores ducimus, impedit unde culpa qui, explicabo accusamus, non vero corporis voluptatibus
              similique odit ab. Quaerat quasi consectetur quidem libero? Repudiandae adipisci vel voluptatum, autem
              libero minus dignissimos repellat.</p>
            <p>Iusto, est corrupti! Totam minus voluptas natus esse possimus nobis, delectus veniam expedita sapiente ut
              cum reprehenderit aliquid odio amet praesentium vero temporibus obcaecati beatae aspernatur incidunt,
              perferendis voluptates doloribus?</p>
            <p>Illum id laborum tempore, doloribus culpa labore ex iusto odit. Quibusdam consequuntur totam nam
              obcaecati, enim cumque nobis, accusamus, quos voluptates, voluptatibus sapiente repellendus nesciunt
              praesentium velit ipsa illo iusto.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="sheet-modal sheet-modal-top demo-sheet-top">
      <div class="toolbar toolbar-bottom">
        <div class="toolbar-inner">
          <div class="left"></div>
          <div class="right">
            <a class="link sheet-close">Close</a>
          </div>
        </div>
      </div>
      <div class="sheet-modal-inner">
        <div class="page-content">
          <div class="block">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus dolorum ipsa aliquid accusamus
              perferendis laboriosam delectus numquam minima animi, libero illo in tempora harum sequi corporis alias ex
              adipisci.</p>
            <p>Sunt magni enim saepe quasi aspernatur delectus consectetur fugiat necessitatibus qui sed, similique quis
              facere tempora, laudantium quae expedita ea, aperiam dolores. Aut deserunt soluta alias magnam.
              Consequatur, nisi, enim.</p>
            <p>Eaque maiores ducimus, impedit unde culpa qui, explicabo accusamus, non vero corporis voluptatibus
              similique odit ab. Quaerat quasi consectetur quidem libero? Repudiandae adipisci vel voluptatum, autem
              libero minus dignissimos repellat.</p>
            <p>Iusto, est corrupti! Totam minus voluptas natus esse possimus nobis, delectus veniam expedita sapiente ut
              cum reprehenderit aliquid odio amet praesentium vero temporibus obcaecati beatae aspernatur incidunt,
              perferendis voluptates doloribus?</p>
            <p>Illum id laborum tempore, doloribus culpa labore ex iusto odit. Quibusdam consequuntur totam nam
              obcaecati, enim cumque nobis, accusamus, quos voluptates, voluptatibus sapiente repellendus nesciunt
              praesentium velit ipsa illo iusto.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="sheet-modal demo-sheet-push">
      <div class="toolbar">
        <div class="toolbar-inner">
          <div class="left"></div>
          <div class="right">
            <a class="link sheet-close">Close</a>
          </div>
        </div>
      </div>
      <div class="sheet-modal-inner">
        <div class="page-content">
          <div class="block">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus dolorum ipsa aliquid accusamus
              perferendis laboriosam delectus numquam minima animi, libero illo in tempora harum sequi corporis alias ex
              adipisci.</p>
            <p>Sunt magni enim saepe quasi aspernatur delectus consectetur fugiat necessitatibus qui sed, similique quis
              facere tempora, laudantium quae expedita ea, aperiam dolores. Aut deserunt soluta alias magnam.
              Consequatur, nisi, enim.</p>
            <p>Eaque maiores ducimus, impedit unde culpa qui, explicabo accusamus, non vero corporis voluptatibus
              similique odit ab. Quaerat quasi consectetur quidem libero? Repudiandae adipisci vel voluptatum, autem
              libero minus dignissimos repellat.</p>
            <p>Iusto, est corrupti! Totam minus voluptas natus esse possimus nobis, delectus veniam expedita sapiente ut
              cum reprehenderit aliquid odio amet praesentium vero temporibus obcaecati beatae aspernatur incidunt,
              perferendis voluptates doloribus?</p>
            <p>Illum id laborum tempore, doloribus culpa labore ex iusto odit. Quibusdam consequuntur totam nam
              obcaecati, enim cumque nobis, accusamus, quos voluptates, voluptatibus sapiente repellendus nesciunt
              praesentium velit ipsa illo iusto.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="sheet-modal demo-sheet-swipe-to-close" style="height:auto">
      <div class="sheet-modal-inner">
        <div class="swipe-handler"></div>
        <div class="page-content">
          <div class="block-title block-title-large">Hello!</div>
          <div class="block">
            <p>Eaque maiores ducimus, impedit unde culpa qui, explicabo accusamus, non vero corporis voluptatibus
              similique odit ab. Quaerat quasi consectetur quidem libero? Repudiandae adipisci vel voluptatum, autem
              libero minus dignissimos repellat.</p>
            <p>Iusto, est corrupti! Totam minus voluptas natus esse possimus nobis, delectus veniam expedita sapiente ut
              cum reprehenderit aliquid odio amet praesentium vero temporibus obcaecati beatae aspernatur incidunt,
              perferendis voluptates doloribus?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="sheet-modal demo-sheet-swipe-to-step" style="height:auto">
      <div class="sheet-modal-inner">
        <div class="swipe-handler" @click=${toggleSwipeStep}></div>
        <div class="sheet-modal-swipe-step">
          <div class="display-flex padding justify-content-space-between align-items-center">
            <div style="font-size: 18px"><b>Total:</b></div>
            <div style="font-size: 22px"><b>$500</b></div>
          </div>
          <div class="padding-horizontal padding-bottom">
            <a class="button button-large button-fill">Make Payment</a>
            <div class="margin-top text-align-center">Swipe up for more details</div>
          </div>
        </div>
        <div class="block-title block-title-medium margin-top">Your order:</div>
        <div class="list no-hairlines">
          <ul>
            <li class="item-content">
              <div class="item-inner">
                <div class="item-title">Item 1</div>
                <div class="item-after text-color-black"><b>$200</b></div>
              </div>
            </li>
            <li class="item-content">
              <div class="item-inner">
                <div class="item-title">Item 2</div>
                <div class="item-after text-color-black"><b>$180</b></div>
              </div>
            </li>
            <li class="item-content">
              <div class="item-inner">
                <div class="item-title">Delivery</div>
                <div class="item-after text-color-black"><b>$120</b></div>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $on }) => {
    let sheet;
    let sheetPush;
    let sheetSwipeToClose;
    let sheetSwipeToStep;

    const toggleSwipeStep = () => {
      sheetSwipeToStep.stepToggle();
    }
	
    const createSheet = () => {
      // Create sheet modal
      if (!sheet) {
        sheet = $f7.sheet.create({
          content: '\
            <div class="sheet-modal">\
              <div class="toolbar">\
                <div class="toolbar-inner justify-content-flex-end">\
                  <a href="#" class="link sheet-close">Close</a>\
                </div>\
              </div>\
              <div class="sheet-modal-inner">\
                <div class="page-content">\
                  <div class="block">\
                    <p>This sheet modal was created dynamically</p>\
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus mauris leo, eu bibendum neque congue non. Ut leo mauris, eleifend eu commodo a, egestas ac urna. Maecenas in lacus faucibus, viverra ipsum pulvinar, molestie arcu. Etiam lacinia venenatis dignissim. Suspendisse non nisl semper tellus malesuada suscipit eu et eros. Nulla eu enim quis quam elementum vulputate. Mauris ornare consequat nunc viverra pellentesque. Aenean semper eu massa sit amet aliquam. Integer et neque sed libero mollis elementum at vitae ligula. Vestibulum pharetra sed libero sed porttitor. Suspendisse a faucibus lectus.</p>\
                  </div>\
                </div>\
              </div>\
            </div>\
          '
        });
      }
      // Close inline sheet
      if ($('.demo-sheet.modal-in').length > 0) $f7.sheet.close('.demo-sheet');
      // Open it
      sheet.open();
    }

    $on('pageInit', () => {
      sheetPush = $f7.sheet.create({
        el: '.demo-sheet-push',
        push: true,
        backdrop: true,
      });
      sheetSwipeToClose = $f7.sheet.create({
        el: '.demo-sheet-swipe-to-close',
        swipeToClose: true,
        push: true,
        backdrop: true,
      });
      sheetSwipeToStep = $f7.sheet.create({
        el: '.demo-sheet-swipe-to-step',
        swipeToClose: true,
        swipeToStep: true,
        push: true,
        backdrop: true,
      });
    });
    $on('pageBeforeOut', () => {
      // Close opened sheets on page out
      $f7.sheet.close();
    });
    $on('pageBeforeRemove', () => {


      // Destroy sheet modal when page removed
      if (sheet) sheet.destroy();
      if (sheetPush) sheetPush.destroy();
      if (sheetSwipeToClose) sheetSwipeToClose.destroy();
      if (sheetSwipeToStep) sheetSwipeToStep.destroy();
    });

    return $render;
  };

</script>
