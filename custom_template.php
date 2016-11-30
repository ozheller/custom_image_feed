

function custom_preprocess_taxonomy_term(&$variables) {
    $isTaxonomyPage = menu_get_object('taxonomy_term', 2);
    
    // We needed this view to display all results when no results were found.
    // We didn't have much luck getting contextual filters to return all results when no results were found.
    // Our solution is to load the view with the argument and check if there are results.
    // If not, load the view without the argument to get all results.
    $view_term = views_get_view('career_path_people');
    $view_term->set_display('default');
    $view_term->set_arguments(array($isTaxonomyPage->tid));
    $view_term_output = $view_term->preview();
    
    if ($view_term->result) {
        $variables['view_term_output'] = $view_term_output;
    } else {
        $variables['view_term_output'] = views_embed_view('career_path_people', 'default');
    }
    
}



/**
 * Implements template_preprocess_search_result
 * @param type $vars
 */
// Written for Drupal default search & commented out as we're now using solr
function custom_preprocess_search_result(&$variables) {
    $node = $variables['result']['node'];
  //  dpm($variables['result']);
    $nodetype = $node->bundle;
    if ($nodetype == "article") {
      $articleNode = node_load($node->entity_id);
        if ($articleNode->type == 'article') {
          $variables['teaser'] = node_view($articleNode, $view_mode = 'teaser');
          $variables['node'] = $articleNode;
          $img_url = $articleNode->field_image['und'][0]['uri'];
          $variables['marquee'] = image_style_url('article_thumbnail', $img_url);
        }
    }
  }
