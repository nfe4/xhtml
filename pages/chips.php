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
        <div class="title">Chips</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block-title">Chips With Text</div>
      <div class="block block-strong">
        <div class="chip">
          <div class="chip-label">Example Chip</div>
        </div>
        <div class="chip">
          <div class="chip-label">Another Chip</div>
        </div>
        <div class="chip">
          <div class="chip-label">One More Chip</div>
        </div>
        <div class="chip">
          <div class="chip-label">Fourth Chip</div>
        </div>
        <div class="chip">
          <div class="chip-label">Last One</div>
        </div>
      </div>
      <div class="block-title">Outline Chips</div>
      <div class="block block-strong">
        <div class="chip chip-outline">
          <div class="chip-label">Example Chip</div>
        </div>
        <div class="chip chip-outline">
          <div class="chip-label">Another Chip</div>
        </div>
        <div class="chip chip-outline">
          <div class="chip-label">One More Chip</div>
        </div>
        <div class="chip chip-outline">
          <div class="chip-label">Fourth Chip</div>
        </div>
        <div class="chip chip-outline">
          <div class="chip-label">Last One</div>
        </div>
      </div>
      <div class="block-title">Icon Chips</div>
      <div class="block block-strong">
        <div class="chip">
          <div class="chip-media bg-color-blue">
            <i class="icon f7-icons if-not-md">plus_circle</i>
            <i class="icon material-icons md-only">add_circle</i>
          </div>
          <div class="chip-label">Add Contact</div>
        </div>
        <div class="chip">
          <div class="chip-media bg-color-green">
            <i class="icon f7-icons if-not-md">compass</i>
            <i class="icon material-icons md-only">location_on</i>
          </div>
          <div class="chip-label">London</div>
        </div>
        <div class="chip">
          <div class="chip-media bg-color-red">
            <i class="icon f7-icons if-not-md">person</i>
            <i class="icon material-icons md-only">person</i>
          </div>
          <div class="chip-label">John Doe</div>
        </div>
      </div>
      <div class="block-title">Contact Chips</div>
      <div class="block block-strong">
        <div class="chip">
          <div class="chip-media"><img src="https://cdn.framework7.io/placeholder/people-100x100-9.jpg" /></div>
          <div class="chip-label">Jane Doe</div>
        </div>
        <div class="chip">
          <div class="chip-media"><img src="https://cdn.framework7.io/placeholder/people-100x100-3.jpg" /></div>
          <div class="chip-label">John Doe</div>
        </div>
        <div class="chip">
          <div class="chip-media"><img src="https://cdn.framework7.io/placeholder/people-100x100-7.jpg" /></div>
          <div class="chip-label">Adam Smith</div>
        </div>
        <div class="chip">
          <div class="chip-media bg-color-pink">J</div>
          <div class="chip-label">Jennifer</div>
        </div>
        <div class="chip">
          <div class="chip-media bg-color-yellow text-color-black">C</div>
          <div class="chip-label">Chris</div>
        </div>
        <div class="chip">
          <div class="chip-media bg-color-red">K</div>
          <div class="chip-label">Kate</div>
        </div>
      </div>
      <div class="block-title">Deletable Chips / Tags</div>
      <div class="block block-strong">
        <div class="chip">
          <div class="chip-label">Example Chip</div><a href="#" class="chip-delete" @click=${deleteChip}></a>
        </div>
        <div class="chip">
          <div class="chip-media bg-color-orange text-color-black">C</div>
          <div class="chip-label">Chris</div><a href="#" class="chip-delete" @click=${deleteChip}></a>
        </div>
        <div class="chip">
          <div class="chip-media"><img src="https://cdn.framework7.io/placeholder/people-100x100-9.jpg" /></div>
          <div class="chip-label">Jane Doe</div><a href="#" class="chip-delete" @click=${deleteChip}></a>
        </div>
        <div class="chip">
          <div class="chip-label">One More Chip</div><a href="#" class="chip-delete" @click=${deleteChip}></a>
        </div>
        <div class="chip">
          <div class="chip-media bg-color-pink">J</div>
          <div class="chip-label">Jennifer</div><a href="#" class="chip-delete" @click=${deleteChip}></a>
        </div>
        <div class="chip">
          <div class="chip-media"><img src="https://cdn.framework7.io/placeholder/people-100x100-7.jpg" /></div>
          <div class="chip-label">Adam Smith</div><a href="#" class="chip-delete" @click=${deleteChip}></a>
        </div>
      </div>
      <div class="block-title">Color Chips</div>
      <div class="block block-strong">
        <div class="chip color-red">
          <div class="chip-label">Red Chip</div>
        </div>
        <div class="chip color-green">
          <div class="chip-label">Green Chip</div>
        </div>
        <div class="chip color-blue">
          <div class="chip-label">Blue Chip</div>
        </div>
        <div class="chip color-orange">
          <div class="chip-label">Orange Chip</div>
        </div>
        <div class="chip color-pink">
          <div class="chip-label">Pink Chip</div>
        </div>
        <div class="chip chip-outline color-red">
          <div class="chip-label">Red Chip</div>
        </div>
        <div class="chip chip-outline color-green">
          <div class="chip-label">Green Chip</div>
        </div>
        <div class="chip chip-outline color-blue">
          <div class="chip-label">Blue Chip</div>
        </div>
        <div class="chip chip-outline color-orange">
          <div class="chip-label">Orange Chip</div>
        </div>
        <div class="chip chip-outline color-pink">
          <div class="chip-label">Pink Chip</div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $, $f7 }) => {
    const deleteChip = (e) => {
      $f7.dialog.confirm('Do you want to delete this tiny demo Chip?', function () {
        $(e.target).parents('.chip').remove();
      });
    }
    return $render;
  }
</script>
