<?php
function aut_preprocess_page(&$vars) {
  // Add page template suggestions based on the aliased path. For instance, if the current page has an alias of about/history/early, we'll have templates of:
  // page-about-history-early.tpl.php, page-about-history.tpl.php, page-about.tpl.php
  // Whichever is found first is the one that will be used.
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '-' . $path_part;
        $vars['template_files'][] = $template_filename;
      }
    }
  }
  // Get the entire main menu tree
  $main_menu_tree = menu_tree_all_data('main-menu');

  // Add the rendered output to the $main_menu_expanded variables
  //$vars['main_menu_expanded'] = menu_tree_output($main_menu_tree);
  $vars['main_menu_expanded'] = aut_return_menu_markup('main-menu');
  
  // Search Toggle
  $vars['search'] = FALSE;
  if(theme_get_setting('toggle_search') && module_exists('search'))
  $vars['search'] = drupal_get_form('aut_search_form');
}

function aut_preprocess_block(&$vars) {
  // Count number of blocks in a given theme region
$vars['block_count'] = count(block_list($vars['block']->region));
}

/**
* Determines if the region has at least one block for this user
*
* @param $region
* A string containing the region name
*
* @return
* TRUE if the region has at least one block. FALSE if it doesn't.
*/

function aut_region_has_block($region) {
  $number_of_blocks = count(block_list($region));
  if ($number_of_blocks > 0) {
    return TRUE;
  }
  else {
    return FALSE;
  }
}

/* Status Messages (Error, Status, Alert) */
function aut_status_messages($display = NULL) {
  $output = '';
  foreach (drupal_get_messages($display) as $type => $messages) {
if ($type == "error") {$alert = 'alert alert-error';}
   elseif ($type == "status") {$alert = 'alert alert-success';}
    else {$alert = 'alert';}
    $output .= "<div class=\"messages $type " . $alert . " \">\n";
    if (count($messages) > 1) {
      $output .= " <ul>\n";
      foreach ($messages as $message) {
        $output .= ' <li>'. $message ."</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= $messages[0];
    }
    $output .= "</div>\n";
  }
  return $output;
}

/* Search Form */
function aut_search_form($form, &$form_state) {
  // Get custom search form
  $form = search_form($form, $form_state);

  // Cleanup
  $form['#attributes']['class'][] = 'pull-right';
  $form['basic']['keys']['#title'] = '';
  $form['basic']['keys']['#attributes']['class'][] = 'input-medium search-query';
  $form['basic']['keys']['#attributes']['placeholder'] = t('Search this site...');
  unset($form['basic']['submit']);
  unset($form['basic']['#type']);
  unset($form['basic']['#attributes']);
  $form += $form['basic'];
  unset($form['basic']);

  return $form;
}

function aut_return_menu_markup($menu_name, $attributes)
{
    $items = array();
    $menu_tree = menu_tree_all_data($menu_name);
    $menu_tree_output = menu_tree_output($menu_tree);

    foreach($menu_tree_output as $item_id => $item_data)
    {
        if(is_numeric($item_id) && is_array($item_data))
        {
            $items[] = l('<span>' . $item_data['#title'] . '</span>', $item_data['#href'], array(
                    'attributes'    => $item_data['#attributes'],
                    'html'      => TRUE,
                )
            );
        }
    }
    return theme('item_list', array('items' => $items, 'type' => 'ul'));
}

/**
 * Return the top level Management Menu
 * @param $menu_name
 *   The name of the menu structure you would like to return
 * @return
 *   An array of top-level menu links that belong to the passed in $menu_name
 */
function aut_get_menu($menu_name) {
  if ($menu_name) {
    return db_query('SELECT link_title, link_path, has_children, weight, mlid FROM {menu_links} WHERE menu_name = :name AND depth = 2 ORDER BY weight', array(':name' => $menu_name))->fetchAll();
  }
  return NULL;
}

/**
 * Builds a navbar for any passed in menu
 * @param $menu_name
 *   The name of the menu you would like to build a navbar from
 * @return
 *   The dom structure for a navbar from the passed in menu name
 **/
function aut_build_navbar($menu_name) {
  if ($menu_name) {
    global $user;
    global $base_url;
  
    $items = BaseBuildingBlocks_get_menu($menu_name);
    
    $output = '';
    foreach ($items as $item) {
      if ($item->link_title == 'Help' || $item->link_title == 'Tasks' || $item->link_title == 'Dashboard') {}
      elseif ($item->has_children == 1) {
        $output .= '<li class="dropdown"><a href="#content-dropdown" class="dropdown-toggle" data-toggle="dropdown"><i class="' . BaseBuildingBlocks_link_to_icon($item->link_title) . '"></i>' . $item->link_title . '<b class="caret"></b></a><ul class="content-dropdown dropdown-menu">';
        foreach (BaseBuildingBlocks_get_children($item->mlid) as $child) {
          $output .= '<li><a href="'.$base_url.'/' . $child->link_path . '"><i class="' . BaseBuildingBlocks_link_to_icon($child->link_title) . '"></i> ' . $child->link_title . '</a></li>';
        }
        $output .= '</ul></li>';
        } 
        else {
          $output .= '<li><a href="'.$base_url.'/' . $item->link_path . '"><i class="' . BaseBuildingBlocks_link_to_icon($item->link_title) . '"></i> ' . $item->link_title . '</a></li>';
      }
    }
  }
  else {
    $output = NULL;
  }
  return $output;
}
