<?php

class Pawn extends Figure
{
    public function __toString() {
        return $this->isBlack ? '♟' : '♙';
    }

    public function checkMove($form, $to, $destination = null, $figures=null) {

        $startPosition = $this->isBlack ? 7 : 2;
        $difference = abs($form['y'] - $to['y']);

        if (
            $difference == 1 &&
            (incrementLetter($form['x']) == $to['x'] || decrementLetter($form['x']) == $to['x']) &&
            $destination != null
        ) {
            return;
        }

        if ($destination == null) {
            if (
                $form['y'] == $startPosition && $difference == 2 && $form['x'] == $to['x'] &&
                $figures[$form['x']][$this->isBlack ? $to['y']+1 : $to['y']-1] == null
            ) {
                return;
            } elseif ($difference == 1 && $form['x'] == $to['x']) {
                return;
            } else {
                throw new \Exception("Incorrect move");
            }
        } else {
            throw new \Exception("Incorrect move");
        }
    }
}
