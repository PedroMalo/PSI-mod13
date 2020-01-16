<!-- File: templates/Fornecedor/index.php (delete links added) -->

<h1>Tabela Fornecedores</h1>
<p><?= $this->Html->link('Adicionar Fornecedor', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id_fornecedor</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>CodPostal</th>
		<th>Ações</th>
    </tr>

<!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($fornecedor as $fornecedor): ?>
    <tr>
        <td><?= $fornecedor->Id_fornecedor?></td>
		<td><?= $this->Html->link($fornecedor->Nome, ['action' => 'view', $fornecedor->Id_fornecedor]) ?></td>
		<td><?= $fornecedor->Telefone?></td>
		<td><?= $fornecedor->CodPostal?></td>
		<td><?= $this->Form->postLink(
            'Delete',
            ['action' => 'delete', $fornecedor->Id_fornecedor],
            ['confirm' => 'Are you sure?'])?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $fornecedor->Id_fornecedor]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="http://localhost/CakeComposer/projeto_mod13/cliente">Cliente</a> | 
<a href="http://localhost/CakeComposer/projeto_mod13/empregado">Empregado</a> | 
<a href="http://localhost/CakeComposer/projeto_mod13/produto">Produto</a>