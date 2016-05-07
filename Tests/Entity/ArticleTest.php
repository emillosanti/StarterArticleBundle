<?php

namespace Starter\ArticleBundle\Tests\Entity;

class ArticleTest extends \PHPUnit_Framework_TestCase
{
    public function testEntity()
    {
        $articleClass = '\\Starter\\ArticleBundle\\Entity\\Article';
        $this->assertTrue(class_exists($articleClass), 'Class "' . $articleClass . '" does not exist.');
    }
}
