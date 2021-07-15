<h1> <strong>Em Cartaz</strong></h1>

<table>
    <tr>
        <th>Id</th>
        <th>Filme</th>
        <th>Alterar</th>
        <th>Data de Lançamento</th>
    </tr>

 <!-- Aqui percorremos nossa matriz $posts, imprimindo as informações dos posts -->
    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td><?php echo $this->Html->link($post['Post']['title'], array('action' =>'view', $post['Post']['id']));?></td>
        
        <td>
            <?php echo $this->Form->postLink('Delete',array('action' => 'delete', $post['Post']['id']),array('confirm' => 'Are you sure?'))?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
        </td>

        <td><?php echo $post['Post']['created']; ?></td>

    </tr>
    <?php endforeach; ?>
</table>

<?php echo $this->Html->link("Adicionar Post", array('action' => 'add')); ?></p>