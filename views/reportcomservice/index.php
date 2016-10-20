<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<table class="table table-bordered table-hover table-responsive">
    <thead>
        <tr class="success">
            <th>ลำดับ</th>
            <th>ยี่ห้อ</th>
            <th>ปัญหา</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($data as $key => $values) {
                echo '<tr>';
                echo '<td>'.($key+1).'</td>';
                echo '<td>'.$values['brand'].'</td>';
                echo '<td>'.$values['problem'].'</td>';
                echo '<td>'.Html::a('<span class="glyphicon glyphicon-list"></span>', 
                        ['/reportcomservice','id'=>$values['com_service_id']]).'</td>';
                echo '</tr>';
                //echo ($key+1).' => '.$values->brand.' / '.$values->asset_code.' / '.$values->price.'<br>';
            }
        ?>
    </tbody>
</table>
