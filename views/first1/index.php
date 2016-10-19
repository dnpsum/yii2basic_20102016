<?php
/* @var $this yii\web\View */
?>
<h1><?php echo $title; ?></h1>

<?php
//print_r($ps);
//foreach ($ps as $key => $items){
//    echo $key.' = '.$items['fname'].' '.$items['lname'].' '.$items['email'];
//}
//echo '<hr>';
?>

<table class="table table-bordered table-hover table-responsive">
    <thead>
        <tr class="success">
            <th>ลำดับ</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
       // print_r($ps);
        foreach ($ps as $key => $value) {
            echo'<tr> <td>' . ($key+1) . '</td> <td>'
                    . $value['fname'] . '</td> <td>'
                    . $value['lname'] . '</td> <td>' 
                    . $value['email'] . '</td> </tr>';
        }
        ?>
    </tbody>
</table>

