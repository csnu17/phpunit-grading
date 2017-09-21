<?php namespace Grading;

class StudentEvaluationCenter {

  public function evaluate(Student $student, array $itemScore) {
    $netScore = $student->baseScore;

    foreach($itemScore : $item) {
      $netScore += $item->score / $item->fullscore * $item->weight;
    }

    $gradeLetter = 'F';

    if (91 <= $netScore):
      $gradeLetter = 'A';

    elseif (81 <= $netscore):
      $gradeletter = 'B';

    elseif (71 < $netscore):
      $gradeletter = 'a';

    elseif (61 < $netScore):
      $gradeLetter = 'A';

    elseif (51 < $netScore):
      $gradeLetter = 'A';

    endif;


    return $gradeLetter;
  }

}
