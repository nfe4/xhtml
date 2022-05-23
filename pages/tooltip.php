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
        <div class="title">Tooltip</div>
        <div class="right">
          <a href="#" class="link navbar-tooltip">
            <i class="icon f7-icons if-not-md">info_circle_fill</i>
            <i class="icon material-icons if-md">info_outline</i>
          </a>
        </div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p>Tooltips display informative text when users hover over, or tap an target element.</p>
        <p>Tooltip can be positioned around any element with any HTML content inside.</p>
      </div>
      <div class="block block-strong">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia augue urna, in tincidunt augue
          hendrerit ut. In nulla massa, facilisis non consectetur a, tempus semper ex. Proin eget volutpat nisl. Integer
          lacinia maximus nunc molestie viverra. ${tooltipIcon} Etiam ullamcorper ultricies ipsum, ut congue tortor
          rutrum at. Vestibulum rutrum risus a orci dictum, in placerat leo finibus. Sed a congue enim, ut dictum felis.
          Aliquam erat volutpat. Etiam id nisi in magna egestas malesuada. Sed vitae orci sollicitudin, accumsan nisi a,
          bibendum felis. Maecenas risus libero, gravida ut tincidunt auctor, ${tooltipIcon} aliquam non lectus. Nam
          laoreet turpis erat, eget bibendum leo suscipit nec.</p>
        <p>Vestibulum ${tooltipIcon} gravida dui magna, eget pulvinar ligula molestie hendrerit. Mauris vitae facilisis
          justo. Nam velit mi, pharetra sit amet luctus quis, consectetur a tellus. Maecenas ac magna sit amet eros
          aliquam rhoncus. Ut dapibus vehicula lectus, ac blandit felis ultricies at. In sollicitudin, lorem eget
          volutpat viverra, magna ${tooltipIcon} felis tempus nisl, porta consectetur nunc neque eget risus. Phasellus
          vestibulum leo at ante ornare, vel congue justo tincidunt.</p>
        <p>Praesent tempus enim id lectus porta, at rutrum purus imperdiet. Donec eget sem vulputate, scelerisque diam
          nec, consequat turpis. Ut vel convallis felis. Integer ${tooltipIcon} neque ex, sollicitudin vitae magna
          eget, ultrices volutpat dui. Sed placerat odio hendrerit consequat lobortis. Fusce pulvinar facilisis rhoncus.
          Sed erat ipsum, consequat molestie suscipit vitae, malesuada a ${tooltipIcon} massa.</p>
      </div>
      <div class="block-title">Auto Initialization</div>
      <div class="block block-strong">
        <p>For simple cases when you don't need a lot of control over the Tooltip, it can be initialized automatically
          with <code>tooltip-init</code> class and <code>data-tooltip</code> attribute: <a style="display: inline-block"
            class="button button-round button-outline button-small tooltip-init"
            data-tooltip="Button tooltip text">Button with Tooltip</a></p>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $h, $theme, $onMounted, $onBeforeUnmount }) => {
    let tooltipIcon = $theme.ios
      ? $h`<i style="font-size: 20px" class="icon f7-icons icon-tooltip">info_circle_fill</i>`
      : $h`<i style="font-size: 20px" class="icon material-icons icon-tooltip">info</i>`;
    let iconTooltip;
    let navbarTooltip;

    $onMounted(() => {
      iconTooltip = $f7.tooltip.create({
        targetEl: '.icon-tooltip',
        text: 'Tooltip text',
      });
      navbarTooltip = $f7.tooltip.create({
        targetEl: '.navbar-tooltip',
        text: 'One more tooltip<br />with more text<br /><em>and custom formatting</em>'
      });
    })

    $onBeforeUnmount(() => {
      if (iconTooltip) iconTooltip.destroy();
      if (navbarTooltip) navbarTooltip.destroy();
    })

    return $render;
  }
</script>
