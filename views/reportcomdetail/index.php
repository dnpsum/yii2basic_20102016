<?php
/* @var $this yii\web\View */
$this->params['breadcrumbs'][] = ['label' => 'ประเภทคอม', 'url' => ['/reportcomtype/index']];
?>

<table class="table table-bordered table-hover table-responsive">
    <thead>
        <tr class="success">
            <th>ลำดับ</th>
            <th>ยี่ห้อ</th>
            <th>เลขครุภัณฑ์</th>
            <th>ราคา</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($data as $key => $values) {
                echo '<tr>';
                echo '<td>'.($key+1).'</td>';
                echo '<td>'.$values['brand'].'</td>';
                echo '<td>'.$values['asset_code'].'</td>';
                echo '<td>'.$values['price'].'</td>';
                echo '</tr>';
                //echo ($key+1).' => '.$values->brand.' / '.$values->asset_code.' / '.$values->price.'<br>';
            }
        ?>
    </tbody>
</table>
