<?php

class Production {
    public $title;
    public $language;
    public $vote;

    public function setTitle(string $_title): void  {
        $this->title = $_title;
    }

    public function setLanguage(string $_language): void {
        $this->language = $_language;
    }

    public function setVote(int $_vote): void {
        $this->vote = $_vote;
    }

    function __construct(string $_title, string $_language, int $_vote) {
        $this->setTitle($_title);
        $this->setLanguage($_language);
        $this->setVote($_vote);
    } 
}

$avatar = new Production('Avatar', 'english', 8);
$inception = new Production('Inceprion', 'italian', 7);

var_dump($avatar);
var_dump($inception);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    
    ciao

</body>
</html>