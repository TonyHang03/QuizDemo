<?php abstract class Question {

    public function __construct(private string $questionType) {
        echo "Question constructor!<br>";
    }

}?>