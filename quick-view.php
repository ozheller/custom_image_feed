$view = new view();
$view->name = 'quick_info';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Quick Info';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Quick Info';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'role';
$handler->display->display_options['access']['role'] = array(
  11 => '11',
  2 => '2',
);
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '100';
$handler->display->display_options['style_plugin'] = 'table';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Field: Content: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
/* Field: Content: Project images */
$handler->display->display_options['fields']['field_project_images']['id'] = 'field_project_images';
$handler->display->display_options['fields']['field_project_images']['table'] = 'field_data_field_project_images';
$handler->display->display_options['fields']['field_project_images']['field'] = 'field_project_images';
$handler->display->display_options['fields']['field_project_images']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['field_project_images']['alter']['text'] = '[field_project_images-fid]';
$handler->display->display_options['fields']['field_project_images']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_project_images']['settings'] = array(
  'image_style' => '',
  'image_link' => '',
);
$handler->display->display_options['fields']['field_project_images']['delta_offset'] = '0';
$handler->display->display_options['fields']['field_project_images']['multi_type'] = 'ol';
/* Field: Content: Project images */
$handler->display->display_options['fields']['field_project_images_1']['id'] = 'field_project_images_1';
$handler->display->display_options['fields']['field_project_images_1']['table'] = 'field_data_field_project_images';
$handler->display->display_options['fields']['field_project_images_1']['field'] = 'field_project_images';
$handler->display->display_options['fields']['field_project_images_1']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_project_images_1']['settings'] = array(
  'image_style' => 'medium',
  'image_link' => '',
);
$handler->display->display_options['fields']['field_project_images_1']['delta_offset'] = '0';
$handler->display->display_options['fields']['field_project_images_1']['multi_type'] = 'ol';
/* Field: Content: Project Image Carousel */
$handler->display->display_options['fields']['field_project_image_carousel']['id'] = 'field_project_image_carousel';
$handler->display->display_options['fields']['field_project_image_carousel']['table'] = 'field_data_field_project_image_carousel';
$handler->display->display_options['fields']['field_project_image_carousel']['field'] = 'field_project_image_carousel';
$handler->display->display_options['fields']['field_project_image_carousel']['settings'] = array(
  'view_mode' => 'full',
);
$handler->display->display_options['fields']['field_project_image_carousel']['delta_offset'] = '0';
$handler->display->display_options['fields']['field_project_image_carousel']['multi_type'] = 'ol';
/* Sort criterion: Content: Nid */
$handler->display->display_options['sorts']['nid']['id'] = 'nid';
$handler->display->display_options['sorts']['nid']['table'] = 'node';
$handler->display->display_options['sorts']['nid']['field'] = 'nid';
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'project' => 'project',
);
$handler->display->display_options['filters']['type']['group'] = 1;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Field: Content: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
/* Field: Content: Project images */
$handler->display->display_options['fields']['field_project_images_1']['id'] = 'field_project_images_1';
$handler->display->display_options['fields']['field_project_images_1']['table'] = 'field_data_field_project_images';
$handler->display->display_options['fields']['field_project_images_1']['field'] = 'field_project_images';
$handler->display->display_options['fields']['field_project_images_1']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_project_images_1']['settings'] = array(
  'image_style' => 'medium',
  'image_link' => '',
);
$handler->display->display_options['fields']['field_project_images_1']['delta_offset'] = '0';
$handler->display->display_options['fields']['field_project_images_1']['multi_type'] = 'ol';
/* Field: Content: Project Image Carousel */
$handler->display->display_options['fields']['field_project_image_carousel']['id'] = 'field_project_image_carousel';
$handler->display->display_options['fields']['field_project_image_carousel']['table'] = 'field_data_field_project_image_carousel';
$handler->display->display_options['fields']['field_project_image_carousel']['field'] = 'field_project_image_carousel';
$handler->display->display_options['fields']['field_project_image_carousel']['settings'] = array(
  'view_mode' => 'full',
);
$handler->display->display_options['fields']['field_project_image_carousel']['delta_offset'] = '0';
$handler->display->display_options['fields']['field_project_image_carousel']['multi_type'] = 'ol';
$handler->display->display_options['path'] = 'quick-info';

/* Display: Data export */
$handler = $view->new_display('views_data_export', 'Data export', 'views_data_export_1');
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'views_data_export_csv';
$handler->display->display_options['style_options']['provide_file'] = 0;
$handler->display->display_options['style_options']['parent_sort'] = 0;
$handler->display->display_options['style_options']['quote'] = 0;
$handler->display->display_options['style_options']['trim'] = 0;
$handler->display->display_options['style_options']['replace_newlines'] = 0;
$handler->display->display_options['style_options']['newline_token'] = '1';
$handler->display->display_options['style_options']['header'] = 1;
$handler->display->display_options['style_options']['keep_html'] = 0;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
/* Field: Content: Project images */
$handler->display->display_options['fields']['field_project_images']['id'] = 'field_project_images';
$handler->display->display_options['fields']['field_project_images']['table'] = 'field_data_field_project_images';
$handler->display->display_options['fields']['field_project_images']['field'] = 'field_project_images';
$handler->display->display_options['fields']['field_project_images']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['field_project_images']['alter']['text'] = '[field_project_images-fid]';
$handler->display->display_options['fields']['field_project_images']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_project_images']['settings'] = array(
  'image_style' => '',
  'image_link' => '',
);
$handler->display->display_options['fields']['field_project_images']['group_rows'] = FALSE;
$handler->display->display_options['fields']['field_project_images']['delta_offset'] = '0';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'project' => 'project',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: Content: Project images (field_project_images:fid) */
$handler->display->display_options['filters']['field_project_images_fid']['id'] = 'field_project_images_fid';
$handler->display->display_options['filters']['field_project_images_fid']['table'] = 'field_data_field_project_images';
$handler->display->display_options['filters']['field_project_images_fid']['field'] = 'field_project_images_fid';
$handler->display->display_options['filters']['field_project_images_fid']['operator'] = 'not empty';
$handler->display->display_options['filters']['field_project_images_fid']['group'] = 1;
$handler->display->display_options['path'] = 'data-export';
