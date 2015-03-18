<?php

class Page extends AppModel {
    public $name = 'Page';
    
    public $validate = array(
        
    );
    
    public $brwConfig = array(
            'names' => array(
                    'plural' => 'Páginas',
                    'singular' => 'Página',
                    'gender' => 2,
            ),/*
            'paginate' => array(
                    'fields' => array('id', 'title', 'publication_date', 'enabled', 'highlighted'),
                    'images' => array('main'),
            ),*/
            'images' => array(
                    'main' => array(
                            'name_category' => 'Imagen de listado',
                            'sizes' => array('100x100', '1024_1024'),
                            'index' => true,
                            'description' => false
                    ),
                    'gallery' => array(
                            'name_category' => 'Imágenes en galería',
                            'sizes' => array('120_120', '1024_1024'),
                    ),
            ),
            'files' => array(
                    'list' => array(
                            'name_category' => 'Archivos adjuntos',
                            'index' => false,
                            'description' => true
                    ),
            ),
            /*'parent' => 'NewsCategory',
            'custom_actions' => array(
                    'view_online' => array(
                            'url' => array('controller' => 'news', 'action' => 'view_redirect'),
                            'options' => array('target' => '_blank'),
                    ),
            ),*/
            'fields' => array(
                    //'no_sanitize_html' => array('title'),
                    //'hide' => array('news_category_id'),
                    //'no_add' => array('news_category_id'),
                    //'no_edit' => array('news_category_id'),
                    'names' => array(
                            'title' => 'Título',
                            'description' => 'Descripción',                            
                            'created' => 'Creada',
                            'modified' => 'Modificada',
                    ),
                    'filter' => array(
                            'title'
                    ),
            ),
    );
    
    public function getAll(){
        return $this->find("all", array('contain' => array('BrwFile')));
    }
    
    function get($id) {
        $page = $this->find('first', array(
                'conditions' => array('Page.id' => $id),
                'contain' => array('BrwImage', 'BrwFile'),
        ));
        return $page;
    }

}

?>