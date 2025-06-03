<?php
function calcularDesconto($valorCompra, $categoriaCliente) {
    if ($valorCompra <= 0) {
        return "Valor inválido";
    }

    if ($categoriaCliente === 'premium') {
        $desconto = 0.20;
    } elseif ($categoriaCliente === 'regular') {
        $desconto = 0.10;
    } elseif ($categoriaCliente === 'novo') {
        $desconto = 0.05;
    } else {
        $desconto = 0;
    }

    return $valorCompra - ($valorCompra * $desconto);
}
?>
