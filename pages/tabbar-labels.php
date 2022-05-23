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
        <div class="title">Tabbar Labels</div>
        <div class="right">
          <a class="link" @click=${toggleToolbarPosition}>
            <i class="icon material-icons rotate-icon md-only">compare_arrows</i>
            <i class="icon f7-icons rotate-icon if-not-md">arrow_up_arrow_down_circle_fill</i>
          </a>
        </div>
      </div>
    </div>
    <div class="toolbar tabbar tabbar-labels toolbar-${toolbarPosition}">
      <div class="toolbar-inner">
        <a href="#tab-1" class="tab-link tab-link-active">
          <i class="icon f7-icons if-not-md">envelope_fill</i>
          <i class="icon material-icons md-only">email</i>
          <span class="tabbar-label">Inbox</span>
        </a>
        <a href="#tab-2" class="tab-link">
          <i class="icon f7-icons if-not-md">calendar_fill<span class="badge color-red">5</span></i>
          <i class="icon material-icons md-only">today<span class="badge color-red">5</span></i>
          <span class="tabbar-label">Calendar</span>
        </a>
        <a href="#tab-3" class="tab-link">
          <i class="icon f7-icons if-not-md">cloud_upload_fill</i>
          <i class="icon material-icons md-only">file_upload</i>
          <span class="tabbar-label">Upload</span>
        </a>
      </div>
    </div>
    <div class="tabs">
      <div id="tab-1" class="page-content tab tab-active">
        <div class="block">
          <p><b>Tab 1 content</b></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam enim quia molestiae facilis laudantium
            voluptates obcaecati officia cum, sit libero commodi. Ratione illo suscipit temporibus sequi iure ad
            laboriosam accusamus?</p>
          <p>Saepe explicabo voluptas ducimus provident, doloremque quo totam molestias! Suscipit blanditiis eaque
            exercitationem praesentium reprehenderit, fuga accusamus possimus sed, sint facilis ratione quod, qui
            dignissimos voluptas! Aliquam rerum consequuntur deleniti.</p>
          <p>Totam reprehenderit amet commodi ipsum nam provident doloremque possimus odio itaque, est animi culpa modi
            consequatur reiciendis corporis libero laudantium sed eveniet unde delectus a maiores nihil dolores? Natus,
            perferendis.</p>
          <p>Atque quis totam repellendus omnis alias magnam corrupti, possimus aspernatur perspiciatis quae provident
            consequatur minima doloremque blanditiis nihil maxime ducimus earum autem. Magni animi blanditiis similique
            iusto, repellat sed quisquam!</p>
          <p>Suscipit, facere quasi atque totam. Repudiandae facilis at optio atque, rem nam, natus ratione cum enim
            voluptatem suscipit veniam! Repellat, est debitis. Modi nam mollitia explicabo, unde aliquid impedit!
            Adipisci!</p>
          <p>Deserunt adipisci tempora asperiores, quo, nisi ex delectus vitae consectetur iste fugiat iusto dolorem
            autem. Itaque, ipsa voluptas, a assumenda rem, dolorum porro accusantium, officiis veniam nostrum cum cumque
            impedit.</p>
          <p>Laborum illum ipsa voluptatibus possimus nesciunt ex consequatur rem, natus ad praesentium rerum libero
            consectetur temporibus cupiditate atque aspernatur, eaque provident eligendi quaerat ea soluta doloremque.
            Iure fugit, minima facere.</p>
        </div>
      </div>
      <div id="tab-2" class="page-content tab">
        <div class="block">
          <p><b>Tab 2 content</b></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam enim quia molestiae facilis laudantium
            voluptates obcaecati officia cum, sit libero commodi. Ratione illo suscipit temporibus sequi iure ad
            laboriosam accusamus?</p>
          <p>Saepe explicabo voluptas ducimus provident, doloremque quo totam molestias! Suscipit blanditiis eaque
            exercitationem praesentium reprehenderit, fuga accusamus possimus sed, sint facilis ratione quod, qui
            dignissimos voluptas! Aliquam rerum consequuntur deleniti.</p>
          <p>Totam reprehenderit amet commodi ipsum nam provident doloremque possimus odio itaque, est animi culpa modi
            consequatur reiciendis corporis libero laudantium sed eveniet unde delectus a maiores nihil dolores? Natus,
            perferendis.</p>
          <p>Atque quis totam repellendus omnis alias magnam corrupti, possimus aspernatur perspiciatis quae provident
            consequatur minima doloremque blanditiis nihil maxime ducimus earum autem. Magni animi blanditiis similique
            iusto, repellat sed quisquam!</p>
          <p>Suscipit, facere quasi atque totam. Repudiandae facilis at optio atque, rem nam, natus ratione cum enim
            voluptatem suscipit veniam! Repellat, est debitis. Modi nam mollitia explicabo, unde aliquid impedit!
            Adipisci!</p>
          <p>Deserunt adipisci tempora asperiores, quo, nisi ex delectus vitae consectetur iste fugiat iusto dolorem
            autem. Itaque, ipsa voluptas, a assumenda rem, dolorum porro accusantium, officiis veniam nostrum cum cumque
            impedit.</p>
          <p>Laborum illum ipsa voluptatibus possimus nesciunt ex consequatur rem, natus ad praesentium rerum libero
            consectetur temporibus cupiditate atque aspernatur, eaque provident eligendi quaerat ea soluta doloremque.
            Iure fugit, minima facere.</p>
        </div>
      </div>
      <div id="tab-3" class="page-content tab">
        <div class="block">
          <p><b>Tab 3 content</b></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam enim quia molestiae facilis laudantium
            voluptates obcaecati officia cum, sit libero commodi. Ratione illo suscipit temporibus sequi iure ad
            laboriosam accusamus?</p>
          <p>Saepe explicabo voluptas ducimus provident, doloremque quo totam molestias! Suscipit blanditiis eaque
            exercitationem praesentium reprehenderit, fuga accusamus possimus sed, sint facilis ratione quod, qui
            dignissimos voluptas! Aliquam rerum consequuntur deleniti.</p>
          <p>Totam reprehenderit amet commodi ipsum nam provident doloremque possimus odio itaque, est animi culpa modi
            consequatur reiciendis corporis libero laudantium sed eveniet unde delectus a maiores nihil dolores? Natus,
            perferendis.</p>
          <p>Atque quis totam repellendus omnis alias magnam corrupti, possimus aspernatur perspiciatis quae provident
            consequatur minima doloremque blanditiis nihil maxime ducimus earum autem. Magni animi blanditiis similique
            iusto, repellat sed quisquam!</p>
          <p>Suscipit, facere quasi atque totam. Repudiandae facilis at optio atque, rem nam, natus ratione cum enim
            voluptatem suscipit veniam! Repellat, est debitis. Modi nam mollitia explicabo, unde aliquid impedit!
            Adipisci!</p>
          <p>Deserunt adipisci tempora asperiores, quo, nisi ex delectus vitae consectetur iste fugiat iusto dolorem
            autem. Itaque, ipsa voluptas, a assumenda rem, dolorum porro accusantium, officiis veniam nostrum cum cumque
            impedit.</p>
          <p>Laborum illum ipsa voluptatibus possimus nesciunt ex consequatur rem, natus ad praesentium rerum libero
            consectetur temporibus cupiditate atque aspernatur, eaque provident eligendi quaerat ea soluta doloremque.
            Iure fugit, minima facere.</p>
        </div>
      </div>
    </div>
  </div>
</template>
<style>
  .rotate-icon {
    transform: rotate(90deg);
  }
</style>
<script>
  export default (props, { $update }) => {
    let toolbarPosition = 'bottom';

    const toggleToolbarPosition = () => {
      toolbarPosition = toolbarPosition === 'top' ? 'bottom' : 'top';
      $update();
    }

    return $render;
  };
</script>
