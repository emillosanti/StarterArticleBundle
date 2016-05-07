<?php

namespace Starter\ArticleBundle\Tests\Entity;

class ArticleTest extends \PHPUnit_Framework_TestCase
{
    public function testEntity()
    {
        $articleClass = '\\Starter\\ArticleBundle\\Entity\\Article';
        $this->assertTrue(class_exists($articleClass), 'Class "' . $articleClass . '" does not exist.');
    }

    public function testArticleEntity()
    {
        $article = $this->getArticleEntity();

        //check expected methods exist
        $this->assertTrue(method_exists($article, 'getId'),
            'article entity has no getId method'
        );

        $this->assertTrue(method_exists($article, 'setTitle'),
            'article entity has no setTitle method'
        );

        $this->assertTrue(method_exists($article, 'getTitle'),
            'article entity has no getTitle method'
        );

        $this->assertTrue(method_exists($article, 'setContent'),
            'article entity has no setContent method'
        );

        $this->assertTrue(method_exists($article, 'getContent'),
            'article entity has no getContent method'
        );

         //check methods work as expected
         $title = 'This is an article title.';

         $article->setTitle($title);
         $this->assertEquals($title, $article->getTitle(),
             'article content set through setTitle is not the same as title retrieved through getTitle'
         );

         $content = 'This is an article content.';

         $article->setContent($content);
         $this->assertEquals($content, $article->getContent(),
             'article content set through setContent is not the same as content retrieved through getContent'
         );
     }

     public function getArticleEntity()
     {
         return new \Starter\ArticleBundle\Entity\Article();
     }
}
