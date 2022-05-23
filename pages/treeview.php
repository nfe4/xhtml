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
        <div class="title">Treeview</div>
      </div>
    </div>
    <div class="page-content">
      <div class="block-title">Basic tree view</div>
      <div class="block block-strong no-padding-horizontal">
        <div class="treeview">
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <div class="treeview-item-label">Item 1</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-toggle"></div>
                  <div class="treeview-item-content">
                    <div class="treeview-item-label">Sub Item 1</div>
                  </div>
                </div>
                <div class="treeview-item-children">
                  <div class="treeview-item">
                    <div class="treeview-item-root">
                      <div class="treeview-item-content">
                        <div class="treeview-item-label">Sub Sub Item 1</div>
                      </div>
                    </div>
                  </div>
                  <div class="treeview-item">
                    <div class="treeview-item-root">
                      <div class="treeview-item-content">
                        <div class="treeview-item-label">Sub Sub Item 2</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-toggle"></div>
                  <div class="treeview-item-content">
                    <div class="treeview-item-label">Sub Item 2</div>
                  </div>
                </div>
                <div class="treeview-item-children">
                  <div class="treeview-item">
                    <div class="treeview-item-root">
                      <div class="treeview-item-content">
                        <div class="treeview-item-label">Sub Sub Item 1</div>
                      </div>
                    </div>
                  </div>
                  <div class="treeview-item">
                    <div class="treeview-item-root">
                      <div class="treeview-item-content">
                        <div class="treeview-item-label">Sub Sub Item 2</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <div class="treeview-item-label">Item 2</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-toggle"></div>
                  <div class="treeview-item-content">
                    <div class="treeview-item-label">Sub Item 1</div>
                  </div>
                </div>
                <div class="treeview-item-children">
                  <div class="treeview-item">
                    <div class="treeview-item-root">
                      <div class="treeview-item-content">
                        <div class="treeview-item-label">Sub Sub Item 1</div>
                      </div>
                    </div>
                  </div>
                  <div class="treeview-item">
                    <div class="treeview-item-root">
                      <div class="treeview-item-content">
                        <div class="treeview-item-label">Sub Sub Item 2</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-toggle"></div>
                  <div class="treeview-item-content">
                    <div class="treeview-item-label">Sub Item 2</div>
                  </div>
                </div>
                <div class="treeview-item-children">
                  <div class="treeview-item">
                    <div class="treeview-item-root">
                      <div class="treeview-item-content">
                        <div class="treeview-item-label">Sub Sub Item 1</div>
                      </div>
                    </div>
                  </div>
                  <div class="treeview-item">
                    <div class="treeview-item-root">
                      <div class="treeview-item-content">
                        <div class="treeview-item-label">Sub Sub Item 2</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-item-content">
                <div class="treeview-item-label">Item 3</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block-title">With icons</div>
      <div class="block block-strong no-padding-horizontal">
        <div class="treeview">
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <i class="icon f7-icons">folder_fill</i>
                <div class="treeview-item-label">images</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">photo_fill</i>
                    <div class="treeview-item-label">avatar.png</div>
                  </div>
                </div>
              </div>
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">photo_fill</i>
                    <div class="treeview-item-label">background.jpg</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <i class="icon f7-icons">folder_fill</i>
                <div class="treeview-item-label">documents</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">doc_text_fill</i>
                    <div class="treeview-item-label">cv.docx</div>
                  </div>
                </div>
              </div>
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">doc_text_fill</i>
                    <div class="treeview-item-label">info.docx</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-item-content">
                <i class="icon f7-icons">logo_github</i>
                <div class="treeview-item-label">.gitignore</div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-item-content">
                <i class="icon f7-icons">doc_text_fill</i>
                <div class="treeview-item-label">index.html</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block-title">With checkboxes</div>
      <div class="block block-strong no-padding-horizontal">
        <div class="treeview">
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
                <i class="icon f7-icons">folder_fill</i>
                <div class="treeview-item-label">images</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <label class="checkbox">
                      <input type="checkbox" />
                      <i class="icon-checkbox"></i>
                    </label>
                    <i class="icon f7-icons">photo_fill</i>
                    <div class="treeview-item-label">avatar.png</div>
                  </div>
                </div>
              </div>
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <label class="checkbox">
                      <input type="checkbox" />
                      <i class="icon-checkbox"></i>
                    </label>
                    <i class="icon f7-icons">photo_fill</i>
                    <div class="treeview-item-label">background.jpg</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
                <i class="icon f7-icons">folder_fill</i>
                <div class="treeview-item-label">documents</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <label class="checkbox">
                      <input type="checkbox" />
                      <i class="icon-checkbox"></i>
                    </label>
                    <i class="icon f7-icons">doc_text_fill</i>
                    <div class="treeview-item-label">cv.docx</div>
                  </div>
                </div>
              </div>
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <label class="checkbox">
                      <input type="checkbox" />
                      <i class="icon-checkbox"></i>
                    </label>
                    <i class="icon f7-icons">doc_text_fill</i>
                    <div class="treeview-item-label">info.docx</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-item-content">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
                <i class="icon f7-icons">logo_github</i>
                <div class="treeview-item-label">.gitignore</div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-item-content">
                <label class="checkbox">
                  <input type="checkbox" />
                  <i class="icon-checkbox"></i>
                </label>
                <i class="icon f7-icons">doc_text_fill</i>
                <div class="treeview-item-label">index.html</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block-title">Whole item as toggle</div>
      <div class="block block-strong no-padding-horizontal">
        <div class="treeview">
          <div class="treeview-item treeview-item-toggle">
            <div class="treeview-item-root">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <i class="icon f7-icons">folder_fill</i>
                <div class="treeview-item-label">images</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">photo_fill</i>
                    <div class="treeview-item-label">avatar.png</div>
                  </div>
                </div>
              </div>
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">photo_fill</i>
                    <div class="treeview-item-label">background.jpg</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treeview-item treeview-item-toggle">
            <div class="treeview-item-root">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <i class="icon f7-icons">folder_fill</i>
                <div class="treeview-item-label">documents</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">doc_text_fill</i>
                    <div class="treeview-item-label">cv.docx</div>
                  </div>
                </div>
              </div>
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">doc_text_fill</i>
                    <div class="treeview-item-label">info.docx</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-item-content">
                <i class="icon f7-icons">logo_github</i>
                <div class="treeview-item-label">.gitignore</div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root">
              <div class="treeview-item-content">
                <i class="icon f7-icons">doc_text_fill</i>
                <div class="treeview-item-label">index.html</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block-title">Selectable</div>
      <div class="block block-strong no-padding-horizontal">
        <div class="treeview">
          <div class="treeview-item">
            <div class="treeview-item-root treeview-item-selectable" @click=${toggleSelectable}>
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <i class="icon f7-icons">folder_fill</i>
                <div class="treeview-item-label">images</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <div class="treeview-item-root treeview-item-selectable" @click=${toggleSelectable}>
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">photo_fill</i>
                    <div class="treeview-item-label">avatar.png</div>
                  </div>
                </div>
              </div>
              <div class="treeview-item">
                <div class="treeview-item-root treeview-item-selectable" @click=${toggleSelectable}>
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">photo_fill</i>
                    <div class="treeview-item-label">background.jpg</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root treeview-item-selectable" @click=${toggleSelectable}>
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <i class="icon f7-icons">folder_fill</i>
                <div class="treeview-item-label">documents</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <div class="treeview-item-root treeview-item-selectable" @click=${toggleSelectable}>
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">doc_text_fill</i>
                    <div class="treeview-item-label">cv.docx</div>
                  </div>
                </div>
              </div>
              <div class="treeview-item">
                <div class="treeview-item-root treeview-item-selectable" @click=${toggleSelectable}>
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">doc_text_fill</i>
                    <div class="treeview-item-label">info.docx</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root treeview-item-selectable" @click=${toggleSelectable}>
              <div class="treeview-item-content">
                <i class="icon f7-icons">logo_github</i>
                <div class="treeview-item-label">.gitignore</div>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root treeview-item-selectable" @click=${toggleSelectable}>
              <div class="treeview-item-content">
                <i class="icon f7-icons">doc_text_fill</i>
                <div class="treeview-item-label">index.html</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block-title">Preload children</div>
      <div class="block block-strong no-padding-horizontal">
        <div class="treeview">
          <div class="treeview-item treeview-load-children" @treeview:loadchildren=${loadChildren}>
            <div class="treeview-item-root">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <i class="icon f7-icons">person_2_fill</i>
                <div class="treeview-item-label">Users</div>
              </div>
            </div>
            <div class="treeview-item-children">
              ${loadedChildren.map((item) => $h`
              <div class="treeview-item">
                <div class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">person_fill</i>
                    <div class="treeview-item-label">${item.name}</div>
                  </div>
                </div>
              </div>
              `)}
            </div>
          </div>
        </div>
      </div>


      <div class="block-title">With links</div>
      <div class="block block-strong no-padding-horizontal">
        <div class="treeview">
          <div class="treeview-item">
            <div class="treeview-item-root treeview-item-toggle">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <i class="icon f7-icons">square_grid_2x2_fill</i>
                <div class="treeview-item-label">Modals</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <a href="/popup/" class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">link</i>
                    <div class="treeview-item-label">Popup</div>
                  </div>
                </a>
              </div>
              <div class="treeview-item">
                <a href="/dialog/" class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">link</i>
                    <div class="treeview-item-label">Dialog</div>
                  </div>
                </a>
              </div>
              <div class="treeview-item">
                <a href="/action-sheet/" class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">link</i>
                    <div class="treeview-item-label">Action Sheet</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="treeview-item">
            <div class="treeview-item-root treeview-item-toggle">
              <div class="treeview-toggle"></div>
              <div class="treeview-item-content">
                <i class="icon f7-icons">square_grid_2x2_fill</i>
                <div class="treeview-item-label">Navigation Bars</div>
              </div>
            </div>
            <div class="treeview-item-children">
              <div class="treeview-item">
                <a href="/navbar/" class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">link</i>
                    <div class="treeview-item-label">Navbar</div>
                  </div>
                </a>
              </div>
              <div class="treeview-item">
                <a href="/toolbar-tabbar/" class="treeview-item-root">
                  <div class="treeview-item-content">
                    <i class="icon f7-icons">link</i>
                    <div class="treeview-item-label">Toolbar & Tabbar</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</template>
<script>
  export default (props, { $f7, $el, $, $on, $update }) => {
    let loadedChildren = [];

    const toggleSelectable = (e) => {
      var $targetEl = $(e.target);
      if ($targetEl.closest('.treeview-item-selected').length) return;
      if ($targetEl.is('.treeview-toggle')) return;
      $targetEl.parents('.treeview').find('.treeview-item-selected').removeClass('treeview-item-selected')
      $targetEl.closest('.treeview-item-selectable').addClass('treeview-item-selected')
    }
    const loadChildren = (e) => {
      var done = e.detail;
      setTimeout(function () {
        // call done() to hide preloader
        done();
        loadedChildren = [
          {
            name: 'John Doe',
          },
          {
            name: 'Jane Doe',
          },
          {
            name: 'Calvin Johnson',
          },
        ];
        $update();
      }, 2000);
    }

    $on('pageInit', () => {
      $($el.value).find('input[type="checkbox"]').on('change', function (e) {
        var $rootEl = $(e.target).closest('.treeview-item-root');
        var $itemEl = $rootEl.parent('.treeview-item');
        var $childrenCheckboxes = $itemEl.find('.treeview-item-children input[type="checkbox"]');
        var $parentItemEl = $itemEl.parents('.treeview-item');
        var $parentCheckbox = $parentItemEl.children('.treeview-item-root').find('input[type="checkbox"]');
        if ($childrenCheckboxes.length) {
          $childrenCheckboxes.prop('checked', e.target.checked);
        }
        if ($parentItemEl) {
          var checkedChildren = $parentItemEl.find('.treeview-item-children input[type="checkbox"]:checked').length;
          $parentCheckbox.prop('checked', checkedChildren > 0);
          $parentCheckbox.prop('indeterminate', checkedChildren === 1);
        }
      })
    });

    return $render;
  };

</script>
