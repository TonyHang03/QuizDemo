<?php 

include 'Question.php';

class QuestionSingleChoice extends Question {

public function __construct($questionType = "Single Choice") {
    parent::__construct($questionType);
    echo "QuestionSingleChoice constructor!<br>";
    echo "Type: $questionType<br>";
}

}?>