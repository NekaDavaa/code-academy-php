<?php
include 'cms.php';
$reflectionClass = new ReflectionClass('Config');

echo "Class: " . $reflectionClass->getName() . "<br><br>";

echo "Properties:<br>";
foreach ($reflectionClass->getProperties() as $property) {
    echo "- " . $property->getName() . "<br>";
}

echo "<br>Methods:<br>";
foreach ($reflectionClass->getMethods() as $method) {
    echo "- Method: " . $method->getName() . "<br>";
    echo "  Visibility: " . implode(' ', Reflection::getModifierNames($method->getModifiers())) . "<br>";
    echo "  Parameters:<br>";
    foreach ($method->getParameters() as $parameter) {
        echo "    - " . $parameter->getName();
        if ($parameter->isOptional()) {
            echo " (optional)";
        }
        echo "<br>";
    }
    echo "<br>";
}