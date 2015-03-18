<?php

class ArticleCategory extends AppModel {
    public $name = 'ArticleCategory';
    var $hasMany = array('Article');
    
    public $validate = array(
        
    );
    
    public $brwConfig = array(
            'names' => array(
                    'plural' => 'Categorías de Artículos',
                    'singular' => 'Categoría de Artículos',
                    'gender' => 2,
            ),/*
            'paginate' => array(
                    'fields' => array('id', 'title', 'publication_date', 'enabled', 'highlighted'),
                    'images' => array('main'),
            ),*/
            
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
                            'created' => 'Creado',
                            'modified' => 'Modificado',
                    ),
                    'filter' => array(
                            //'title'
                    ),
            ),
    );
    
    public function getAll(){
        return $this->find("all", array('contain' => array('BrwFile')));
    }
    
    function get($id) {
        $article = $this->find('first', array(
                'conditions' => array('Article.id' => $id),
                'contain' => array('BrwImage', 'BrwFile'),
        ));
        return $article;
    }

}

?>