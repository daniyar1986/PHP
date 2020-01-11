<?php


class DestructableClass
{
  public function __construct()
  {
      print "Constructor";
      $this->name =  "DestructableClass";
  }

  public function __destruct()
  {
      print "\nDestruct " . $this->name;
  }
}

$obj = new DestructableClass();