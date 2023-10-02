<?php

    require_once "./models/questionModels/QuestionMultiChoice.php";

    $q1 = new QuestionMultiChoice();

    $q1->setQuestionNr(20);


    echo "QuestionNr: " . $q1->getQuestionNr();
?>