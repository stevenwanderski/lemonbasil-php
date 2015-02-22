<h1>Menus</h1>

<div class="menus-container">
  <aside>
    <?php foreach($categories as $category): ?>
    <div class="category">
      <a href="" data-tid="<?php print $category->tid ?>" class="category-link"><?php print $category->taxonomy_term_data_name ?></a>
    </div>
    <?php endforeach; ?>
  </aside>

  <div class="content">
    <?php foreach($menu_items as $menu_item): ?>
    <div class="menu-item" data-tid="<?php print $menu_item->field_data_field_category_field_category_tid ?>" style="display: none;">
      <div><strong><?php print $menu_item->node_title; ?></strong></div>
      <div><?php print $menu_item->field_field_description[0]['raw']['value']; ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</div>