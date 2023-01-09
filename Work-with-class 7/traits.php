<?php
// Когда мы используем trait и добовляем его с помощью use в класс, то у класса пояляются все методы и свойства которые имеет trait

trait X
{
    public $name = "Times";
    public $surname = "USA";
    public function getAge()
    {

    }
}

class News
{
    use X;
}

class Article
{
    use X;
}

$news = new News();
$aritcle = new Article();
echo $news -> name;
echo $aritcle -> surname;
