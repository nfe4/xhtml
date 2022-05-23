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
        <div class="title">Virtual List VDOM</div>
        <div class="subnavbar">
          <form data-search-container=".virtual-list-vdom" data-search-item="li" data-search-in=".item-title"
            class="searchbar searchbar-init">
            <div class="searchbar-inner">
              <div class="searchbar-input-wrap">
                <input type="search" placeholder="Search" />
                <i class="searchbar-icon"></i>
                <span class="input-clear-button"></span>
              </div>
              <span class="searchbar-disable-button if-not-aurora">Cancel</span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="searchbar-backdrop"></div>
    <div class="page-content">
      <div class="block">
        <p>This example shows how to use Virtual List with external renderer, like with built-in Virtual DOM</p>
      </div>
      <div class="list simple-list searchbar-not-found">
        <ul>
          <li>Nothing found</li>
        </ul>
      </div>
      <div class="list virtual-list virtual-list-vdom media-list searchbar-found">
        <ul>
          ${virtualListData.items.map((item) => $h`
          <li key=${item.id} style="top: ${virtualListData.topPosition}px">
            <a href="#" class="item-link item-content">
              <div class="item-inner">
                <div class="item-title-row">
                  <div class="item-title">${item.title}</div>
                </div>
                <div class="item-subtitle">${item.subtitle}</div>
              </div>
            </a>
          </li>
          `)}
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $el, $theme, $onMounted, $onBeforeUnmount, $update }) => {
    let items = [];
    let virtualListData = { items: [] };
    let virtualList;

    for (var i = 1; i <= 10000; i++) {
      items.push({
        id: i,
        title: 'Item ' + i,
        subtitle: 'Subtitle ' + i,
      });
    }
    $onMounted(() => {
      virtualList = $f7.virtualList.create({
        // List Element
        el: $el.value.find('.virtual-list'),
        // Pass array with items
        items,
        // Custom search function for searchbar
        searchAll: function (query, items) {
          var found = [];
          for (var i = 0; i < items.length; i++) {
            if (items[i].title.toLowerCase().indexOf(query.toLowerCase()) >= 0 || query.trim() === '') found.push(i);
          }
          return found; //return array with mathced indexes
        },
        // Item height
        height: $theme.ios ? 63 : ($theme.md ? 73 : 77),
        // Render external function
        renderExternal(vl, vlData) {
          virtualListData = vlData;
          $update();
        },
      });
    })

    return $render;
  }
</script>