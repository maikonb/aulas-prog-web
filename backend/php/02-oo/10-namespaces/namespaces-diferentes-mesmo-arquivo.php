<?php 

namespace NameSpaceX {
  class ClasseTeste1 {
    public function __toString()
    {
      return "<h1>Sou a ClasseTeste do NameSpaceX</h1>";
    }
  }
}

namespace NameSpaceY {
  class ClasseTeste1 {
    public function __toString()
    {
      return "<h1>Sou a ClasseTeste do NameSpaceY</h1>";
    }
  }
}

// namespace Global
namespace {
  use NameSpaceY\ClasseTeste1;
  $c = new ClasseTeste1();
  echo $c;
}