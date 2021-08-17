<?php

function calculate($sys, $dia)
{
    if ($sys > 180 || $dia > 110) {
        return "HIGH (Seek Emergency Care)";
    } else if ($sys >= 160 || $dia >= 100) {
        return "HIGH (Stage 2)";
    } else if ($sys >= 140 || $dia >= 90) {
        return "HIGH (Stage 1)";
    } else if ($sys >= 120 && $dia >= 80) {
        return "ELEVATED";
    } else if ($sys >= 90 || $dia >= 60) {
        return "NORMAL";
    } elseif ($sys < 90 || $dia < 60) {
        return "LOW";
    } else {
        return "ERROR";
    }
}
