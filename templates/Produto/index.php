<!-- File: templates/Produto/index.php (delete links added) -->

<h1>Tabela Produtos</h1>
<p><?= $this->Html->link('Adicionar Produto', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Código de Produto</th>
        <th>Designação</th>
        <th>Preço</th>
        <th>Prazo de Validade</th>
		<th>Ações</th>
    </tr>

<!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($produto as $produto): ?>
    <tr>
        <td><?= $produto->CodProduto?></td>
		<td><?= $this->Html->link($produto->Designação, ['action' => 'view', $produto->CodProduto]) ?></td>
		<td><?= $produto->Preco?></td>
		<td><?= $produto->Prazo_Validade?></td>
		<td><?= $this->Form->postLink(
            'Delete',
            ['action' => 'delete', $produto->CodProduto],
            ['confirm' => 'Are you sure?'])?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $produto->CodProduto]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="http://localhost/CakeComposer/projeto_mod13/cliente">Cliente</a> | 
<a href="http://localhost/CakeComposer/projeto_mod13/empregado">Empregado</a> | 
<a href="http://localhost/CakeComposer/projeto_mod13/fornecedor">Fornecedor</a>