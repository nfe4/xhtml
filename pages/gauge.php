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
        <div class="title">Gauge</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block block-strong">
        <p>Framework7 comes with Gauge component. It produces nice looking fully responsive SVG gauges.</p>
      </div>
      <div class="block block-strong text-align-center">
        <div class="gauge demo-gauge"></div>
        <p class="segmented segmented-raised">
          <a href="#" class="button ${gaugeValue === 0 ? 'button-active' : ''}" @click=${()=> setGaugeValue(0)}>0%</a>
          <a href="#" class="button ${gaugeValue === 25 ? 'button-active' : ''}" @click=${()=>
            setGaugeValue(25)}>25%</a>
          <a href="#" class="button ${gaugeValue === 50 ? 'button-active' : ''}" @click=${()=>
            setGaugeValue(50)}>50%</a>
          <a href="#" class="button ${gaugeValue === 75 ? 'button-active' : ''}" @click=${()=>
            setGaugeValue(75)}>75%</a>
          <a href="#" class="button ${gaugeValue === 100 ? 'button-active' : ''}" @click=${()=>
            setGaugeValue(100)}>100%</a>
        </p>
      </div>
      <div class="block-title">Circle Gauges</div>
      <div class="block block-strong">
        <div class="row">
          <div class="col text-align-center">
            <div class="gauge gauge-init" data-type="circle" data-value="0.44" data-value-text="44%" data-value-text-color="#ff9800" data-border-color="#ff9800"></div>
          </div>
          <div class="col text-align-center">
            <div class="gauge gauge-init" data-type="circle" data-value="0.12" data-value-text="$120"
              data-value-text-color="#4caf50" data-border-color="#4caf50" data-label-text="of $1000 budget"
              data-label-text-color="#f44336" data-label-font-weight="700"></div>
          </div>
        </div>
      </div>
      <div class="block-title">Semicircle Gauges</div>
      <div class="block block-strong">
        <div class="row">
          <div class="col text-align-center">
            <div class="gauge gauge-init" data-type="semicircle" data-value="0.3" data-value-text="30%"
              data-value-text-color="#f44336" data-border-color="#f44336"></div>
          </div>
          <div class="col text-align-center">
            <div class="gauge gauge-init" data-type="semicircle" data-value="0.5" data-value-text="30kg"
              data-value-text-color="#e91e63" data-border-color="#e91e63" data-label-text="of 60kg total"
              data-label-text-color="#333"></div>
          </div>
        </div>
      </div>
      <div class="block-title">Customization</div>
      <div class="block block-strong">
        <div class="row">
          <div class="col text-align-center">
            <div class="gauge gauge-init" data-type="circle" data-value="0.35" data-value-text="35%"
              data-value-text-color="#4caf50" data-value-font-size="51" data-value-font-weight="700"
              data-border-width="20" data-border-color="#4caf50" data-border-bg-color="#ffeb3b" data-bg-color="#ffeb3b">
            </div>
          </div>
          <div class="col text-align-center">
            <div class="gauge gauge-init" data-type="circle" data-value="0.67" data-value-text="$670"
              data-value-text-color="#000" data-border-color="#ff9800" data-label-text="of $1000 spent"
              data-label-text-color="#4caf50" data-label-font-weight="800" data-label-font-size="12"
              data-border-width="30"></div>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col text-align-center">
            <div class="gauge gauge-init" data-type="semicircle" data-value="0.5" data-value-text="50%"
              data-value-text-color="#ffeb3b" data-value-font-size="41" data-value-font-weight="700"
              data-border-width="10" data-border-color="#ffeb3b" data-border-bg-color="transparent"></div>
          </div>
          <div class="col text-align-center">
            <div class="gauge gauge-init" data-type="semicircle" data-value="0.77" data-border-color="#ff9800"
              data-label-text="$770 spent so far" data-label-text-color="#ff9800" data-label-font-weight="800"
              data-label-font-size="12" data-border-width="10"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $onMounted, $onBeforeUnmount, $update }) => {
    let gaugeValue = 50;
    let demoGauge;

    $onMounted(() => {
      demoGauge = $f7.gauge.create({
        el: '.demo-gauge',
        type: 'circle',
        value: 0.5,
        size: 250,
        borderColor: '#2196f3',
        borderWidth: 10,
        valueText: '50%',
        valueFontSize: 41,
        valueTextColor: '#2196f3',
        labelText: 'amount of something',
      });
    })

    $onBeforeUnmount(() => {
      demoGauge.destroy();
    })

    function setGaugeValue(value) {
      gaugeValue = value;
      demoGauge.update({
        value: value / 100,
        valueText: value + '%',
      });
      $update();
    }

    return $render;
  }
</script>