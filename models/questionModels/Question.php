<?php abstract class Question {

    private int $QuestionNr;

    public function __construct(private string $questionType) {
        echo "Question constructor!<br>";
    }

}?>