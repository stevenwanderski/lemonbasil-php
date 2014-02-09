<?php

class Meta
{

  public function __call($method, $args){
    $property = "field_" . $method;
    return $this->generate_field_value($this->fields[$property], $args);
  }

  public function generate_field_value($field, $args = NULL){
    $value = '';
    $field_array = $this->node->$field['field_name'];
    // image widget
    if(in_array($field['widget']['type'], array('image_image', 'image_miw'))){
      $value = theme_image_style(array(
        'style_name' => $args[0],
        'path' => $field_array['und'][0]['uri'],
        'width' => NULL,
        'height' => NULL
      ));
    // media widget
    }else if($field['widget']['type'] == 'media_generic'){
      if(empty($field_array['und'][0]['file'])) return '';
      $file = file_view_file($field_array['und'][0]['file']);
      // dpm($file);
      $value = theme($file['#theme'], $file);
    // all other widgets
    }else{
      $value = !empty($field_array['und'][0]['value']) ? $field_array['und'][0]['value'] : '';
    }
    return $value;
  }

}

class Model extends Meta {

  function __construct($node){
    $this->node = $node;
    $this->node_view = node_view($node);
    $this->fields = field_info_instances("node", $this->node->type);
    $this->title = $this->title();
    $this->path = $this->path();
    $this->has_images = $this->has_images();
    $this->prev = $this->prev();
    $this->next = $this->next();

    foreach($this->fields as $field){
      $type = $field['widget']['type'];
      $name = str_replace("field_", "", $field['field_name']);
      if($type != 'image_image'){
        $this->$name = $this->generate_field_value($field);
      }
    }

  }

  function title(){
    return $this->node->title;
  }

  function path($absolute = FALSE){
    if($absolute){
      global $base_url;
      return $base_url . '/' . drupal_get_path_alias('node/' . $this->node->nid);
    }else{
      return '/' . drupal_get_path_alias('node/' . $this->node->nid);
    }
  }

  function images($image_style){
    $images = array();
    foreach ($this->node->field_project_images['und'] as $image) {
      $image_markup_array = array(
        'style_name' => $image_style,
        'path' => $image['uri'],
        'width' => NULL,
        'height' => NULL
      );
      $images[] = theme_image_style($image_markup_array);
    }
    return $images;
  }

  function has_images(){
    return !empty($this->node->field_project_images['und'][0]);
  }

  function next(){
    return !empty($this->node->next) ? $this->node->next : FALSE;
  }

  function prev(){
    return !empty($this->node->prev) ? $this->node->prev : FALSE;
  }

}

?>