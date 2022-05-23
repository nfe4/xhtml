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
        <div class="title">Action Sheet</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p class="row">
          <a href="#" class="col button button-fill" @click=${openDemo1}>One group</a>
          <a href="#" class="col button button-fill" @click=${openDemo2}>Two groups</a>
        </p>
        <p>
          <a href="#" class="button button-fill" @click=${openGrid}>Action Grid</a>
        </p>
      </div>
      <div class="block-title">Action Sheet To Popover</div>
      <div class="block block-strong">
        <p>Action Sheet can be automatically converted to Popover (for tablets). This button will open Popover on
          tablets and Action Sheet on phones: <a href="#" style="display:inline-block"
            class="button button-to-popover button-small" @click=${openActionsPopover}>Actions</a></p>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $on, $f7, $el }) => {
    let actions1;
    let actions2;
    let actionsGrid;
    let actionsToPopover;

    const openDemo1 = () => {
      actions1.open();
    }
    const openDemo2 = () => {
      actions2.open();
    }
    const openGrid = () => {
      actionsGrid.open();
    }
    const openActionsPopover = () => {
      actionsToPopover.open();
    }

    $on('pageInit', () => {
      // 1 Group
      const buttons1 = [
        {
          text: 'Do something',
          label: true
        },
        {
          text: 'Button 1',
          bold: true
        },
        {
          text: 'Button 2',
        },
        {
          text: 'Cancel',
          color: 'red'
        },
      ];

      // 2 Groups
      const buttons2 = [
        // First Group
        [
          {
            text: 'Do something',
            label: true
          },
          {
            text: 'Button 1',
            bold: true
          },
          {
            text: 'Button 2',
          }
        ],
        // Second Group
        [
          {
            text: 'Cancel',
            color: 'red'
          }
        ]
      ]

      // Grid buttons with icons/images
      const gridButtons = [
        [
          {
            text: 'Button 1',
            icon: '<img src="https://cdn.framework7.io/placeholder/people-96x96-1.jpg" width="48" style="max-width: 100%"/>'
          },
          {
            text: 'Button 2',
            icon: '<img src="https://cdn.framework7.io/placeholder/people-96x96-2.jpg" width="48" style="max-width: 100%">'
          },
          {
            text: 'Button 3',
            icon: '<img src="https://cdn.framework7.io/placeholder/people-96x96-3.jpg" width="48" style="max-width: 100%">'
          },
        ],
        [
          {
            text: 'Button 1',
            icon: '<img src="https://cdn.framework7.io/placeholder/fashion-96x96-4.jpg" width="48" style="max-width: 100%"/>'
          },
          {
            text: 'Button 2',
            icon: '<img src="https://cdn.framework7.io/placeholder/fashion-96x96-5.jpg" width="48" style="max-width: 100%">'
          },
          {
            text: 'Button 3',
            icon: '<img src="https://cdn.framework7.io/placeholder/fashion-96x96-6.jpg" width="48" style="max-width: 100%">'
          },
        ],
      ]

      actions1 = $f7.actions.create({ buttons: buttons1 });
      actions2 = $f7.actions.create({ buttons: buttons2 });
      actionsGrid = $f7.actions.create({ buttons: gridButtons, grid: true });

      // Actions To Popover
      actionsToPopover = $f7.actions.create({
        buttons: buttons1,
        // Need to specify popover target
        targetEl: $el.value.find('.button-to-popover')
      });
    })

    $on('pageBeforeRemove', () => {
      actions1.destroy();
      actions2.destroy();
      actionsGrid.destroy();
      actionsToPopover.destroy();
    })

    return $render;
  }

</script>
