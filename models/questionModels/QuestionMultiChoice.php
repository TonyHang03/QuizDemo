<?php 

include 'Question.php';

class QuestionMultiChoice extends Question {

    private int $questionNr;

    public function __construct(protected $questionType = "Multi Choice") {
        parent::__construct($questionType);
        echo "QuestionMultiChoice constructor!<br>";
        echo "Type: $questionType<br>";
    }

    public function getQuestionNr() {
        return $this->questionNr;
    }

    public function setQuestionNr($num) {
        $this->questionNr = $num;
        return $this;
    }

    public function getQuestionType() {
        return $this->questionNr;
    }

    public function setQuestionType($type) {
        $this->questionType = $type;
        return $this;
    }
}?>