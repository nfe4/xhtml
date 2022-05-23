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
        <div class="title">Swipeout</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block">
        <p>
          Swipe out actions on list elements is one of the most awesome F7 features. It allows you to call hidden menu
          for each list element where you can put default ready-to use delete button or any other buttons for some
          required actions.
        </p>
      </div>
      <div class="block-title">Swipe to delete with confirm modal</div>
      <div class="list">
        <ul>
          <li class="swipeout">
            <div class="item-content swipeout-content">
              <div class="item-media"><i class="icon icon-f7"></i>
              </div>
              <div class="item-inner">
                <div class="item-title">Swipe left on me please</div>
              </div>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" data-confirm="Are you sure you want to delete this item?" class="swipeout-delete">Delete</a>
            </div>
          </li>
          <li class="swipeout">
            <div class="item-content swipeout-content">
              <div class="item-media"> <i class="icon icon-f7"></i>
              </div>
              <div class="item-inner">
                <div class="item-title">Swipe left on me too</div>
              </div>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" data-confirm="Are you sure you want to delete this item?" class="swipeout-delete">Delete</a>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media">
                <i class="icon icon-f7"></i>
              </div>
              <div class="item-inner">
                <div class="item-title">I am not removable</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="block-title">Swipe to delete without confirm</div>
      <div class="list">
        <ul>
          <li class="swipeout">
            <div class="item-content swipeout-content">
              <div class="item-inner">
                <div class="item-title">Swipe left on me please</div>
              </div>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" class="swipeout-delete">Delete</a>
            </div>
          </li>
          <li class="swipeout">
            <div class="item-content swipeout-content">
              <div class="item-inner">
                <div class="item-title">Swipe left on me too</div>
              </div>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" class="swipeout-delete">Delete</a>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-inner">
                <div class="item-title">I am not removable</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="block-title">Swipe for actions</div>
      <div class="list">
        <ul>
          <li class="swipeout">
            <div class="item-content swipeout-content">
              <div class="item-media">
                <i class="icon icon-f7"></i>
              </div>
              <div class="item-inner">
                <div class="item-title">Swipe left on me please</div>
              </div>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" @click=${more}>More</a>
              <a href="#" class="swipeout-delete">Delete</a>
            </div>
          </li>
          <li class="swipeout">
            <div class="item-content swipeout-content">
              <div class="item-media">
                <i class="icon icon-f7"></i>
              </div>
              <div class="item-inner">
                <div class="item-title">Swipe left on me too</div>
              </div>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" @click=${more}>More</a>
              <a href="#" class="swipeout-delete">Delete</a>
            </div>
          </li>
          <li class="swipeout">
            <div class="item-content swipeout-content">
              <div class="item-media">
                <i class="icon icon-f7"></i>
              </div>
              <div class="item-inner">
                <div class="item-title">You can't delete me</div>
              </div>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" @click=${more}>More</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="block-title">With callback on remove</div>
      <div class="list">
        <ul>
          <li class="swipeout" @swipeout:deleted=${onDeleted}>
            <div class="item-content swipeout-content">
              <div class="item-inner">
                <div class="item-title">Swipe left on me please</div>
              </div>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" class="swipeout-delete">Delete</a>
            </div>
          </li>
          <li class="swipeout" @swipeout:deleted=${onDeleted}>
            <div class="item-content swipeout-content">
              <div class="item-inner">
                <div class="item-title">Swipe left on me too</div>
              </div>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" class="swipeout-delete">Delete</a>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-inner">
                <div class="item-title">I am not removable</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="block-title">With actions on left side (swipe to right)</div>
      <div class="list">
        <ul>
          <li class="swipeout">
            <div class="item-content swipeout-content">
              <div class="item-media">
                <i class="icon icon-f7"></i>
              </div>
              <div class="item-inner">
                <div class="item-title">Swipe right on me please</div>
              </div>
            </div>
            <div class="swipeout-actions-left">
              <a href="#" class="color-green" @click=${reply}>Reply</a>
              <a href="#" class="color-blue" @click=${forward}>Forward</a>
            </div>
          </li>
          <li class="swipeout">
            <div class="item-content swipeout-content">
              <div class="item-media">
                <i class="icon icon-f7"></i>
              </div>
              <div class="item-inner">
                <div class="item-title">Swipe right on me too</div>
              </div>
            </div>
            <div class="swipeout-actions-left">
              <a href="#" class="color-green" @click=${reply}>Reply</a>
              <a href="#" class="color-blue" @click=${forward}>Forward</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="block-title">On both sides with overswipes</div>
      <div class="list media-list">
        <ul>
          <li class="swipeout">
            <div class="swipeout-content">
              <a href="#" class="item-link item-content">
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">Facebook</div>
                    <div class="item-after">17:14</div>
                  </div>
                  <div class="item-subtitle">New messages from John Doe</div>
                  <div class="item-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis tellus ut turpis
                    condimentum, ut dignissim lacus tincidunt. Cras dolor metus, ultrices condimentum sodales sit amet,
                    pharetra sodales eros. Phasellus vel felis tellus. Mauris rutrum ligula nec dapibus feugiat. In vel
                    dui laoreet, commodo augue id, pulvinar lacus.
                  </div>
                </div>
              </a>
            </div>
            <div class="swipeout-actions-left">
              <a href="#" class="color-green swipeout-overswipe" @click=${reply}>Reply</a>
              <a href="#" class="color-blue" @click=${forward}>Forward</a>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" @click=${more}>More</a>
              <a href="#" class="color-orange" @click=${mark}>Mark</a>
              <a href="#" data-confirm="Are you sure you want to delete this item?"
                class="swipeout-delete swipeout-overswipe">Delete</a>
            </div>
          </li>
          <li class="swipeout">
            <div class="swipeout-content">
              <a href="#" class="item-link item-content">
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">John Doe (via Twitter)</div>
                    <div class="item-after">17:11</div>
                  </div>
                  <div class="item-subtitle">John Doe (@_johndoe) mentioned you on Twitter!</div>
                  <div class="item-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis tellus ut turpis
                    condimentum, ut dignissim lacus tincidunt. Cras dolor metus, ultrices condimentum sodales sit amet,
                    pharetra sodales eros. Phasellus vel felis tellus. Mauris rutrum ligula nec dapibus feugiat. In vel
                    dui laoreet, commodo augue id, pulvinar lacus.
                  </div>
                </div>
              </a>
            </div>
            <div class="swipeout-actions-left">
              <a href="#" class="color-green swipeout-overswipe" @click=${reply}>Reply</a>
              <a href="#" class="color-blue" @click=${forward}>Forward</a>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" @click=${more}>More</a>
              <a href="#" class="color-orange" @click=${mark}>Mark</a>
              <a href="#" data-confirm="Are you sure you want to delete this item?"
                class="swipeout-delete swipeout-overswipe">Delete</a>
            </div>
          </li>
          <li class="swipeout">
            <div class="swipeout-content">
              <a href="#" class="item-link item-content">
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">Facebook</div>
                    <div class="item-after">16:48</div>
                  </div>
                  <div class="item-subtitle">New messages from John Doe</div>
                  <div class="item-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis tellus ut turpis
                    condimentum, ut dignissim lacus tincidunt. Cras dolor metus, ultrices condimentum sodales sit amet,
                    pharetra sodales eros. Phasellus vel felis tellus. Mauris rutrum ligula nec dapibus feugiat. In vel
                    dui laoreet, commodo augue id, pulvinar lacus.
                  </div>
                </div>
              </a>
            </div>
            <div class="swipeout-actions-left">
              <a href="#" class="color-green swipeout-overswipe" @click=${reply}>Reply</a>
              <a href="#" class="color-blue" @click=${forward}>Forward</a>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" @click=${more}>More</a>
              <a href="#" class="color-orange" @click=${mark}>Mark</a>
              <a href="#" data-confirm="Are you sure you want to delete this item?"
                class="swipeout-delete swipeout-overswipe">Delete</a>
            </div>
          </li>
          <li class="swipeout">
            <div class="swipeout-content">
              <a href="#" class="item-link item-content">
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">John Doe (via Twitter)</div>
                    <div class="item-after">15:32</div>
                  </div>
                  <div class="item-subtitle">John Doe (@_johndoe) mentioned you on Twitter!</div>
                  <div class="item-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis tellus ut turpis
                    condimentum, ut dignissim lacus tincidunt. Cras dolor metus, ultrices condimentum sodales sit amet,
                    pharetra sodales eros. Phasellus vel felis tellus. Mauris rutrum ligula nec dapibus feugiat. In vel
                    dui laoreet, commodo augue id, pulvinar lacus.
                  </div>
                </div>
              </a>
            </div>
            <div class="swipeout-actions-left">
              <a href="#" class="color-green swipeout-overswipe" @click=${reply}>Reply</a>
              <a href="#" class="color-blue" @click=${forward}>Forward</a>
            </div>
            <div class="swipeout-actions-right">
              <a href="#" @click=${more}>More</a>
              <a href="#" class="color-orange" @click=${mark}>Mark</a>
              <a href="#" data-confirm="Are you sure you want to delete this item?"
                class="swipeout-delete swipeout-overswipe">Delete</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $onMounted, $onBeforeUnmount }) => {
    let actions;
    const more = () => {
      actions.open();
    }
    const mark = () => {
      $f7.dialog.alert('Mark');
    }
    const reply = () => {
      $f7.dialog.alert('Reply');
    }
    const forward = () => {
      $f7.dialog.alert('Forward');
    }
    const onDeleted = () => {
      $f7.dialog.alert('Thanks, item removed!');
    }

    $onBeforeUnmount(() => {
      actions.destroy();
    })

    $onMounted(() => {
      actions = $f7.actions.create({
        buttons: [
          [
            {
              text: 'Here comes some optional description or warning for actions below',
              label: true,
            },
            {
              text: 'Action 1',
            },
            {
              text: 'Action 2',
            },
          ],
          [
            {
              text: 'Cancel',
              bold: true,
            }
          ]
        ],
      })
    })

    return $render;
  }
</script>
