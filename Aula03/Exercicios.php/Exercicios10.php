<?php
// 10. Menu Interativo

for ($i = 1; $i <= 5; $i++) {
echo"\nOpções: \n 1 - Olá \n 2 - Data Atual \n 3 - Sair";
$menu = readline("Digite sua escolha: ");

switch ($menu) {
    case 1:
        echo "Olá \n";
        break;
    case 2:
        echo "11//08/2025\n";
        break;
    case 3:
        $i = 6;
        echo "Saindo\n";
        break;
    default:
        echo "Error...\n";
 }
}
?>