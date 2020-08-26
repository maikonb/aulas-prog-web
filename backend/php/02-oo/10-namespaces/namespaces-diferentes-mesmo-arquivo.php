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

/////////////////////////////////////////////

namespace Classes\NameSpaceX {
  class ClasseTeste2 {
    public function __toString()
    {
      return "<h1>Sou a ClasseTeste2 do Classes\NameSpaceX</h1>" . 
        "<p>" . __NAMESPACE__ . "</p>";
    }
  }
}

namespace Classes\NameSpaceY {
  class ClasseTeste2 {
    public function __toString()
    {
      return "<h1>Sou a ClasseTeste2 do Classes\NameSpaceY</h1>" . 
        "<p>" . __NAMESPACE__ . "</p>";
    }
  }
}

namespace {
  use Classes\NameSpaceY\ClasseTeste2;
  $c1 = new ClasseTeste2();
  echo $c1;
}