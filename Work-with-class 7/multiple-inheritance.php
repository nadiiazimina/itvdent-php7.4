<?php

//Множественное наследование - это когда один тип данных наследует несколько таких же типов данных
//В php нет множественного наследования классов, можно относледовать только несколько интерфейсов

interface Interval
{}
interface Calculator
{}
interface Calculator2
{}
interface Calculator3
{}


// class A implements Interval, Calculator, Calculator2, Calculator3
// {

// }

interface Q extends Interval 
{}
interface QQ extends Interval, Calculator, Calculator2, Calculator3
{}