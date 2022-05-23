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
        <div class="title">Stepper</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block-title">Shape and size</div>
      <div class="block block-strong text-align-center">
        <div class="row">
          <div class="col">
            <small>Default</small>
            <div class="stepper stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Round</small>
            <div class="stepper stepper-round stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <small>Fill</small>
            <div class="stepper stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Round Fill</small>
            <div class="stepper stepper-fill stepper-round stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <small>Small</small>
            <div class="stepper stepper-small stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Small Round</small>
            <div class="stepper stepper-small stepper-round stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <small>Small Fill</small>
            <div class="stepper stepper-small stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Small Round Fill</small>
            <div class="stepper stepper-small stepper-round stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <small>Large</small>
            <div class="stepper stepper-large stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Large Round</small>
            <div class="stepper stepper-large stepper-round stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <small>Large Fill</small>
            <div class="stepper stepper-large stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Large Round Fill</small>
            <div class="stepper stepper-large stepper-round stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="block-title">Raised</div>
      <div class="block block-strong text-align-center">
        <div class="row">
          <div class="col">
            <small>Default</small>
            <div class="stepper stepper-raised stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Round</small>
            <div class="stepper stepper-raised stepper-round stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <small>Fill</small>
            <div class="stepper stepper-raised stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Round Fill</small>
            <div class="stepper stepper-raised stepper-fill stepper-round stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <small>Small</small>
            <div class="stepper stepper-raised stepper-small stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Small Round</small>
            <div class="stepper stepper-raised stepper-small stepper-round stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <small>Small Fill</small>
            <div class="stepper stepper-raised stepper-small stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Small Round Fill</small>
            <div class="stepper stepper-raised stepper-small stepper-round stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <small>Large</small>
            <div class="stepper stepper-raised stepper-large stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Large Round</small>
            <div class="stepper stepper-raised stepper-large stepper-round stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <small>Large Fill</small>
            <div class="stepper stepper-raised stepper-large stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Large Round Fill</small>
            <div class="stepper stepper-raised stepper-large stepper-round stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="block-title">Colors</div>
      <div class="block block-strong text-align-center">
        <div class="row">
          <div class="col">
            <div class="stepper stepper-init stepper-fill color-red">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <div class="stepper stepper-round stepper-fill stepper-init color-green">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <div class="stepper stepper-fill stepper-init color-blue">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <div class="stepper stepper-fill stepper-round stepper-init color-pink">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <div class="stepper stepper-small stepper-fill stepper-init color-yellow">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <div class="stepper stepper-small stepper-fill stepper-round stepper-init color-orange">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>

        <div class="row margin-top">
          <div class="col">
            <div class="stepper stepper-small stepper-fill stepper-init color-gray">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <div class="stepper stepper-small stepper-round stepper-fill stepper-init color-black">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="block-title">Without input element</div>
      <div class="block block-strong text-align-center">
        <div class="row">
          <div class="col">
            <div class="stepper stepper-init" data-value="0" data-min="0" data-max="100" data-step="1">
              <div class="stepper-button-minus"></div>
              <div class="stepper-value"></div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <div class="stepper stepper-round stepper-init" data-value="0" data-min="0" data-max="100" data-step="1">
              <div class="stepper-button-minus"></div>
              <div class="stepper-value"></div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="block-title">Min, max, step</div>
      <div class="block block-strong text-align-center">
        <div class="row">
          <div class="col">
            <div class="stepper stepper-fill stepper-init">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="100" min="0" max="1000" step="100" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <div class="stepper stepper-fill stepper-round stepper-init" data-value="5" data-min="0" data-max="10"
              data-step="0.5">
              <div class="stepper-button-minus"></div>
              <div class="stepper-value"></div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="block-title">Autorepeat (Tap & hold)</div>
      <div class="block-header">Pressing and holding one of its buttons increments or decrements the stepper’s value
        repeatedly. With dynamic autorepeat, the rate of change depends on how long the user continues pressing the
        control.</div>
      <div class="block block-strong text-align-center">
        <div class="row">
          <div class="col">
            <small>Default</small>
            <div class="stepper stepper-fill stepper-init" data-autorepeat="true">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
          <div class="col">
            <small>Dynamic</small>
            <div class="stepper stepper-fill stepper-init" data-autorepeat="true" data-autorepeat-dynamic="true">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="100" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="block-title">Wraps</div>
      <div class="block-header">In wraps mode incrementing beyond maximum value sets value to minimum value, likewise,
        decrementing below minimum value sets value to maximum value</div>
      <div class="block block-strong text-align-center">
        <div class="row">
          <div class="col">
            <div class="stepper stepper-fill stepper-init" data-wraps="true" data-autorepeat="true"
              data-autorepeat-dynamic="true">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="10" step="1" readonly />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="block-title">Custom value element</div>
      <div class="list">
        <ul>
          <li class="item-content">
            <div class="item-inner">
              <div class="item-title">Apples: <span id="apples-count"></span></div>
              <div class="item-after">
                <div class="stepper stepper-init stepper-small stepper-raised" data-value-el="#apples-count">
                  <div class="stepper-button-minus"></div>
                  <div class="stepper-button-plus"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="item-content">
            <div class="item-inner">
              <div class="item-title">Oranges: <span id="oranges-count"></span></div>
              <div class="item-after">
                <div class="stepper stepper-init stepper-small stepper-raised" data-value-el="#oranges-count">
                  <div class="stepper-button-minus"></div>
                  <div class="stepper-button-plus"></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="block-title">Custom value format</div>
      <div class="list">
        <ul>
          <li class="item-content">
            <div class="item-inner">
              <div class="item-title">
                <div class="item-header">Meeting starts in</div>
                <span id="meeting-start-time"></span>
              </div>
              <div class="item-after">
                <div class="stepper stepper-fill stepper-small stepper-raised" id="stepper-time">
                  <div class="stepper-button-minus"></div>
                  <div class="stepper-button-plus"></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="block-title">Manual input</div>
      <div class="block-header">It is possible to enter value manually from keyboard or mobile keypad. When click on
        input field, stepper enter into manual input mode, which allow type value from keyboard and check fractional
        part with defined accurancy. Click outside or enter Return key, ending manual mode.</div>
      <div class="block block-strong text-align-center">
        <div class="row">
          <div class="col">
            <div class="stepper stepper-fill stepper-init" data-wraps="true" data-autorepeat="true"
              data-autorepeat-dynamic="true" data-decimal-point="2" data-manual-input-mode="true">
              <div class="stepper-button-minus"></div>
              <div class="stepper-input-wrap">
                <input type="text" value="0" min="0" max="1000" step="1" />
              </div>
              <div class="stepper-button-plus"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style>
  .col small {
    display: block;
  }
</style>
<script>
  export default (props, { $f7, $on }) => {
    let stepperTime;
    $on('pageInit', () => {
      stepperTime = $f7.stepper.create({
        el: '#stepper-time',
        valueEl: '#meeting-start-time',
        min: 15, // 15 minutes min
        max: 240, // 4 hours max
        step: 15, // every 15 minutes
        value: 15,
        formatValue: function (value) {
          var hours = Math.floor(value / 60);
          var minutes = value - (hours * 60);
          var formatted = [];
          if (hours > 0) {
            formatted.push(hours + ' ' + (hours > 1 ? 'hours' : 'hour'));
          }
          if (minutes > 0) {
            formatted.push(minutes + ' minutes');
          }
          return formatted.join(' ');
        }
      })
    });
    $on('pageBeforeRemove', () => {
      stepperTime.destroy()
    });

    return $render;
  };

</script>
