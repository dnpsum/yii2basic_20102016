<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<table class="table table-bordered table-hover table-responsive">
    <thead>
        <tr class="success">
            <th>ลำดับ</th>
            <th>รหัส</th>
            <th>ประเภทคอม</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($data as $key => $values) {
                echo '<tr>';
                echo '<td>'.($key+1).'</td>';
                echo '<td>'.$values['com_type_id'].'</td>';
                echo '<td>'.$values['com_type_name'].'</td>';
                echo '<td>'.Html::a('<span class="glyphicon glyphicon-list"></span>', 
                        ['/reportcomdetail','id'=>$values['com_type_id']]).'</td>';
                echo '</tr>';
                //echo ($key+1).' => '.$values->brand.' / '.$values->asset_code.' / '.$values->price.'<br>';
            }
        ?>
    </tbody>
</table>