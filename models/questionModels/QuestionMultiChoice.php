<?php 

include 'Question.php';

class QuestionMultiChoice extends Question {

    public function __construct($questionType = "Multi Choice") {
        parent::__construct($questionType);
        echo "QuestionMultiChoice constructor!<br>";
        echo "Type: $questionType<br>";
    }

}?>