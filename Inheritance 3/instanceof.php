<?php

class DefaultField
{
    public function render()
    {
        return "it's a number";
    }
}

class DataField extends DefaultField
{}
class NumberField extends DefaultField
{}
class TextField extends DefaultField
{}
class ImageField extends DefaultField
{}

class TableRenderer
{
    public function renderColumn($column)
    {
        $column -> render();
    }
}

$field1 = 'asdasd';
$field2 = new DataField();
$field3 = new DataField();

$className = "DataField";

var_dump(
    [
        $field1 instanceof DefaultField, //false
        $field2 instanceof DefaultField, //true
        $field2 instanceof DataField, //true
        $field2 instanceof ImageField, //false
        $field2 instanceof $className, //false
        $field2 instanceof $field3,//false

    ]
    );