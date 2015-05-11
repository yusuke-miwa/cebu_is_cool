<p><?php echo $this->Html->link('Top', array('controller' => 'tops', 'action' => 'index')); ?></p>

<?php echo $this->Html->link(
    'Add favorite',
    array('controller' => 'favorites', 'action' => 'add')
); ?>

<h1><?php echo $this->Html->link('Food', array('controller' => 'favorites', 'action' => 'category_show', $foods[0]['Favorite']['category_id'])); ?></h1>
<table>
    <tr>
        <th>Title</th>
        <th>Body</th>
        <th>category</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($foods as $food): ?>
    <tr>
        <!-- <td><?php echo $food['Favorite']['id']; ?></td> -->
        <td>
            <?php echo $this->Html->link($food['Favorite']['title'],
array('controller' => 'favorites', 'action' => 'view', $food['Favorite']['id'])); ?>
        </td>
        <td><?php echo $food['Favorite']['body']; ?></td>
     	<td><?php echo $food['Category']['name']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($food); ?>
</table>


<h1><?php echo $this->Html->link('Spot', array('controller' => 'favorites', 'action' => 'category_show', $spots[0]['Favorite']['category_id'])); ?></h1>
<table>
    <tr>
        <th>Title</th>
        <th>Body</th>
        <th>category</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($spots as $spot): ?>
    <tr>
        <!-- <td><?php echo $spot['Favorite']['id']; ?></td> -->
        <td>
            <?php echo $this->Html->link($spot['Favorite']['title'],
array('controller' => 'favorites', 'action' => 'view', $spot['Favorite']['id'])); ?>
        </td>
        <td><?php echo $spot['Favorite']['body']; ?></td>
     	<td><?php echo $spot['Category']['name']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($spot); ?>
</table>


<h1><?php echo $this->Html->link('Activity', array('controller' => 'favorites', 'action' => 'category_show', $activities[0]['Favorite']['category_id'])); ?></h1>
<table>
    <tr>
        <th>Title</th>
        <th>Body</th>
        <th>category</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($activities as $activity): ?>
    <tr>
        <!-- <td><?php echo $activity['Favorite']['id']; ?></td> -->
        <td>
            <?php echo $this->Html->link($activity['Favorite']['title'],
array('controller' => 'favorites', 'action' => 'view', $activity['Favorite']['id'])); ?>
        </td>
        <td><?php echo $activity['Favorite']['body']; ?></td>
     	<td><?php echo $activity['Category']['name']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($activity); ?>
</table>
