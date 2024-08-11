<?php
// Bueno mayor a 70
// Muy bueno mayor a 80
// Excelente mayor a 90

$nota = 85;
if ($nota > 70 && $nota <= 80) {
    echo "Bueno";
} else if ($nota > 80 && $nota <= 90) {
    echo "Muy Bueno";
} else if ($nota > 90) {
    echo "Excelente";
}