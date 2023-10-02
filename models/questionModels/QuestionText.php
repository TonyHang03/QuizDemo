<?php 

include 'Question.php';

class QuestionText extends Question {

public function __construct($questionType = "Text") {
    parent::__construct($questionType);
    echo "QuestionText constructor!<br>";
    echo "Type: $questionType<br>";
}

}?>