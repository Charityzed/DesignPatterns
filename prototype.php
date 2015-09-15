<?php

abstract class WebsitePrototype {
    protected $title;
    protected $topic;
    abstract function __clone();
    function getTitle() {
        return $this->title;
    }
    function setTitle($titleIn) {
        $this->title = $titleIn;
    }
    function getMainPage() {
        return $this->topic;
    }

}

class cytonnWebPrototype extends WebsitePrototype {
    function __construct() {
        $this->topic = 'Cytonn Investment';
    }
    function __clone() {
    }
}

class equityWebPrototype extends WebsitePrototype {
    function __construct() {
        $this->topic = 'Equity Bank';
    }
    function __clone() {
    }
}
 
  writeln('Prototype Testing started');
  writeln('');

  $cytPro = new cytonnWebPrototype();
  $equPro = new equityWebPrototype();

  $web1 = clone $cytPro;
  $web1->setTitle('Cytonn Investment Portal');
  writeln('Web 1 Main Page: '.$web1->getMainPage());
  writeln('Web1 1 title: '.$web1->getTitle());
  writeln('');

  $web2 = clone $equPro;
  $web2->setTitle('Equity Bank online banking Portal');
  writeln('Web 2 Main Page: '.$web2->getMainPage());
  writeln('Web 2 title: '.$web2->getTitle());
  writeln('');

  $web3 = clone $cytPro;
  $web3->setTitle('Cytonn Technologies');
  writeln('Web 3 Main Page: '.$web3->getMainPage());
  writeln('Web 3 title: '.$web3->getTitle());
  writeln('');

  writeln('Sucsessfull prototype Design pattern test');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }

?>
