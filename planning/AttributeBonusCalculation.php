// Berechnungsbeispiel:
$baseValue = 10;
$bonusMultiplierValue = 2; // Ab wann gibt es einen Bonus (+ / -)
$bonusAdditon = 1;

// Generell für die Berechnung
$currentValue = 24; // Erwartet = 7 (Durch Berechnung bestätigt)
$currentValue2 = 13; // Erwartet = 1 (Durch Berechnung = 1,5 (Round down Programmierung erforderlich))
$currentLowerValue = 7; // Erwartet = -1 (Durch Berechnung bestätigt)
$currentLowerValue2 = 4; // Erwartet = -3 (Durch Berechnung bestätigt)

$result = round(
    ($currentLowerValue2 - $baseValue) * ($bonusAdditon / $bonusMultiplierValue),
    0,
    PHP_ROUND_HALF_DOWN
);

echo $result;