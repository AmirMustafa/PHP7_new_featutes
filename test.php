<?php
$str = array(
            array(
                'amount' => 1.87,
                'user' => 'hello',
            ),
            array(
                'amount' => 0.9,
                'user' => 'test' ,
            ),
            array(
                'amount' => 9,
                'user' => 'hello',
            ),
            array(
                'amount' => 1.4,
                'user' => 'test',
            )
);
?>
<table>
    <thead>
            <tr>
                <th>Amount</th>
                <th>User</th>
            </tr>
    </thead>
    <tbody>
                <?php foreach($str as $new_str) {
                    if($new_str['user'] == "test"){
                        echo '<tr>';
                        echo '<td>'.$new_str['amount'].'</td>';
                        echo '<td>'.$new_str['user'].'</td>';
                        echo '</tr>';
                    }
                } ?>

    </tbody>
</table>
