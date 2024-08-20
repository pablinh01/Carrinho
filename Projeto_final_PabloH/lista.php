<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'Cart.php';

$cart = new Cart();
$items = $cart->getItems();
$total = 0;

// Remover item do carrinho
if (isset($_GET['remove_id'])) {
    $remove_id = intval($_GET['remove_id']);
    if (isset($_SESSION['cart'][$remove_id])) {
        unset($_SESSION['cart'][$remove_id]);
        // Atualiza a sessão do carrinho
        $_SESSION['cart'] = array_filter($_SESSION['cart']); // Remove índices vazios
        header('Location: lista.php');
        exit();
    } else {
        echo "Item não encontrado.";
    }
}
?>
    
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrinho de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            height: 180px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Carrinho de Compras</h1>
        <a href="index.php" class="btn btn-primary mb-3">Voltar à Página Inicial</a>
        <?php if (!empty($items)): ?>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $id => $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td>R$ <?php echo number_format($item['price'] * $item['quantity'], 2, ',', '.'); ?></td>
                            <td>
                                <a href="lista.php?remove_id=<?php echo $id; ?>" class="btn btn-danger btn-sm">Remover</a>
                            </td>
                        </tr>
                        <?php $total += $item['price'] * $item['quantity']; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-end"><strong>Total</strong></td>
                        <td>R$ <?php echo number_format($total, 2, ',', '.'); ?></td>
                    </tr>
                </tfoot>
            </table>
        <?php else: ?>
            <p>Seu carrinho está vazio.</p>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
