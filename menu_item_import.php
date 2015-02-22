<?php

  define('DRUPAL_ROOT', './');
  $_SERVER['REMOTE_ADDR'] = "localhost";
  chdir(DRUPAL_ROOT);
  require './includes/bootstrap.inc';
  drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

  $menu = 'caesar | romaine, red onion, sourdough croutons, shaved parm, caesar dressing';
  $pos = strpos($menu, '|');
  $title = substr($menu, 0, $pos - 1);
  $desc = substr($menu, $pos + 2);

  $items = array(
    array(
      // Salads
      'tid' => 1,
      'menu_items' => array(
        "grilled garden | arugula, radicchio, grilled zucchini, squash, eggplant, charred cherry tomato, herb vinaigrette",
        "papa salad | romaine, tomato, onion, oregano, sea salt, cracked pepper, olive oil, red wine vinegar",
        "tutti frutti | red leaf, frisee, pear, manderin orange, raspberry, walnut, bleu, balsamic vinaigrette",
        "siciliana | supreme oranges, shaved fennel, fresh chopped mint, cracked pepper, olive oil",
        "kale | dried cranberry, chick pea, slivered almond, cracked pepper, lemon vinaigrette",
        "caesar | romaine, red onion, sourdough croutons, shaved parm, caesar dressing",
      )
    ),
    array(
      // Meat Entrees
      'tid' => 2,
      'menu_items' => array(
        'chicken parm | breaded chicken cutlets, tomato sauce, melty parm, basil, best with speghetti & marinara',
        '"italian" beef | braised to perfect tenderness in a spicy beef stock, tomato, homemade giardiniera, au jus, crostini',
        'korean style steak | marinated in a sweet & savory sauce, grilled, thinly sliced, scallion, sesame seed, best over jasmine rice',
        'cajun salmon | oven-baked in a homemade cajun rub, drizzled with cucumber dill yogurt sauce, best over the grilled garden salad',
        'lemon-rosemary turkey meatballs | sauteed to perfection, sun dried tomato, basil leaves, best over bow ties with a drizzle of lemon-garlic olive oil',
        'gambas y jamón | shrimp, prosciutto, garlic & onion sauteed to golden, pinto beans, pan sauce, spicy creme fraiche & cilantro, best over corn tortillas',
      )
    ),
    array(
      // Veggie Entrees
      'tid' => 3,
      'menu_items' => array(
        'rice bowl | jasmine rice, avocado, carrot, red cabbage, edemame beans, red bell pepper, jalapeno, sesame seeds, cilantro',
        'arancini | risotto, tomato sauce, peas stuffed with mozzarella, breaded & fried to perfection, an amazing one-plate meal',
        'stuffed poblano | quinoa, brown rice, onion, hominy, black bean, tomato, cotija, cilantro',
        'pot pie | cauliflower, carrots, mushroom, zucchini bundled in a parm-tarragon crust',
        'eggplant parm | breaded eggplant, marinara, parm & basil sprig',
        'cannelloni | mashed butternut squash, sage, ricotta, parm',
      )
    ),
    array(
      // Sandwiches
      'tid' => 4,
      'menu_items' => array(
        'falafel | seasoned garbanzo beans, lemon, jerusalem salad, tahini, warm pita',
        'chicken & waffle sliders | breaded tenders, maple syrup, fresh sage, waffle bun',
        'ham & cheese | prosciutto, grilled eggplant, sweet ricotta, parsley, hot pressed ciabatta',
        'caprese | beefsteak tomato, fresh mozz, fresh basil, sea salt, red wine vinaigrette, baguette',
        'cb&j | cashew butter, cinnamon banana spread, homemade strawberry-rosemary jam, grilled sourdough',
        'turkey blt | shaved honey turkey, applewood smoked bacon, sweet tomato-basil jam, arugula, pretzel bun',
        'chicken salad | poached chicken breast, sour cream, honey, onion, celery, red grapes, slivered almonds, arugula, whole wheat bread',
      )
    ),
    array(
      // Tacos
      'tid' => 5,
      'menu_items' => array(
        'veggie | grilled corn & sweet potato, black bean, jalapeno, red pepper, red onion, spicy sour cream, cilantro leaves',
        'white boy | spicy ground beef, fresh onions, chopped romaine, diced tomato, melty cheddar cheese, sour cream',
        'pork belly | brasied & sauteed pork belly, fresh jalapeno, pineapple, yellow onion, creme fraiche ',
        'pulled chicken | slow-braised chicken, stewed tomato & onion, adobo ',
        'baja | grilled shrimp, avocado, red cabbage, black bean, citrus aioli',
        'purist | guac, pico, lime',
      )
    ),
    array(
      // Pizza
      'tid' => 6,
      'menu_items' => array(
        'stefano | tomato sauce, salame piccante, manchego',
        'norma | tomato sauce, eggplant, ricotta, chopped basil',
        'jeem | garlic-infused olive oil, prosciutto, fontina, arugula',
        'katrina | olive oil, fig, caramelized onions, gorgonzola, thyme',
        'paddy | pesto, grilled zucchini & squash, sliced tomato, light parm',
        'mama mia | tomato sauce, fior di latte mozzarella, basil leaves, olive oil',
        'seppi | olive oil, potato, sausage, fresh rosemary, cracked pepper, sea salt',
      )
    ),
    array(
      // Sides
      'tid' => 7,
      'menu_items' => array(
        'brussels | pan seared, pancetta, sage, maple syrup',
        'broccoli | sauteed in olive oil and garlic until golden and crispy ',
        'cauliflower | oven-roasted with raisins, breadcrumb & pine nuts',
        'greek potatoes | boiled russets, fresh parsley, lemon, olive oil, feta',
        'polenta | slow-cooked then oven roasted with caramelized onions and bleu ',
        'beets | roasted red beets, shaved red onion, goat cheese, chives, vinaigrette',
        'slaw | red & napa cabbage, carrot, shaved onion, lime, sour cream, soy sauce',
        'guac | mashed avocado, grilled corn, black bean, kale, tomato, onion, lime, cilantro, jalapeno, chili',
        'papa potato salad | boiled russets, blanched green beans, cherry tomatoes, oregano & red wine vinaigrette',
      )
    ),
    array(
      // Vehicles
      'tid' => 8,
      'menu_items' => array(
        'cous cous',
        'risotto',
        'jasmine rice',
        'speghetti',
        'bowtie pasta',
        'fresh rolled pasta dough',
        'brown rice',
        'quinoa',
        'brown rice & quinoa mix',
        'farro',
        'corn tortillas',
        'pita',
        'naan',
        'bread bowl',
      )
    )
  );

  remove_nodes_from_type(array('menu_item'));

  foreach($items as $item){

    $tid = $item['tid'];

    foreach($item['menu_items'] as $menu_item){
      $pos = strpos($menu_item, '|');
      $title = '';
      $desc = '';

      if($pos === FALSE){
        $title = $menu_item;
      }else{
        $title = substr($menu_item, 0, $pos - 1);
        $desc = substr($menu_item, $pos + 2);
      }

      $node = new stdClass();
      $node->type = "menu_item";
      node_object_prepare($node);

      $node->title    = $title;
      $node->language = LANGUAGE_NONE;
      $node->uid = 2;

      $node->field_category['und'][0]['tid'] = $tid;
      $node->field_description['und'][0]['value'] = $desc;

      if($node = node_submit($node)) { // Prepare node for saving
        node_save($node);
        echo "Node with nid " . $node->nid . " saved!\n";
      }
    }
  }

  function remove_nodes_from_type($types) {
    $results = db_select('node', 'n')
                ->fields('n', array('nid'))
                ->condition('type', $types, 'IN')
                ->execute();
    foreach ($results as $result) {
      $nids[] = $result->nid;
    }

    if (!empty($nids)) {
      node_delete_multiple($nids);
      print "Deleted " . count($nids) . " nodes.\n";
    }
  }

?>