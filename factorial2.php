<?php
echo "Introduce un número: ";
$numero = trim(fgets(STDIN));  
if (is_numeric($numero) && $numero >= 0) {
    $numero = (int)$numero;
    function calcularFactorial($numero) {
        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
    echo "El factorial de $numero es: " . calcularFactorial($numero) . "\n";
} else {
    echo "Ingrese un número válido.\n";
}
?>
