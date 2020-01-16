<!-- File: templates/Empregado/index.php (delete links added) -->

<h1>Tabela Empregados</h1>
<p><?= $this->Html->link('Adicionar Empregado', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id_Empregado</th>
        <th>Nome</th>
		<th>Idade</th>
        <th>Telefone</th>
        <th>CodPostal</th>
		<th>Ações</th>
    </tr>

<!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($empregado as $empregado): ?>
    <tr>
        <td><?= $empregado->Id_empregado?></td>
		<td><?= $this->Html->link($empregado->Nome, ['action' => 'view', $empregado->Id_empregado]) ?></td>
		<td><?= $empregado->Idade?></td>
		<td><?= $empregado->Telefone?></td>
		<td><?= $empregado->CodPostal?></td>
		<td><?= $this->Form->postLink(
            'Delete',
            ['action' => 'delete', $empregado->Id_empregado],
            ['confirm' => 'Are you sure?'])?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $empregado->Id_empregado]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="http://localhost/CakeComposer/projeto_mod13/cliente">Cliente</a> | 
<a href="http://localhost/CakeComposer/projeto_mod13/fornecedor">Fornecedor</a> | 
<a href="http://localhost/CakeComposer/projeto_mod13/produto">Produto</a>