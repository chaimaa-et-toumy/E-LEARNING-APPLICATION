<?php
  $payment = array(
	array(
		'name'=>'karthi',
		'Payment Schedule' => 'First',
		'Bill Number' => '0001223',
		'Amount Paid' => 'DHS 100.000',
		'Balance amount'=> 'DHS 500.000',
		'Date' =>'05-Jan,2022',
    ),
	array(    
        'name'=>'karthi',
		'Payment Schedule' => 'First',
		'Bill Number' => '0001223',
		'Amount Paid' => 'DHS 100.000',
		'Balance amount'=> 'DHS 500.000',
		'Date' =>'05-Jan,2022',
	),
	array(    
        'name'=>'karthi',
		'Payment Schedule' => 'First',
		'Bill Number' => '0001223',
		'Amount Paid' => 'DHS 100.000',
		'Balance amount'=> 'DHS 500.000',
		'Date' =>'05-Jan,2022',
    ),
    array(    
        'name'=>'karthi',
		'Payment Schedule' => 'First',
		'Bill Number' => '0001223',
		'Amount Paid' => 'DHS 100.000',
		'Balance amount'=> 'DHS 500.000',
		'Date' =>'05-Jan,2022',
	)
);
    
?>
    <table class="table table-hover table-striped">
        <thead>
            <tr class="text-center">
                <th class="text-secondary">Name</th>
                <th class="text-secondary text-nowrap">Payment Schedule</th>
                <th class="text-secondary text-nowrap">Bill Number</th>
                <th class="text-secondary text-nowrap">Amount Paid</th>
                <th class="text-secondary text-nowrap">Balance amount</th>
                <th class="text-secondary ">Date</th>
            </tr>
        </thead>
        <tbody class="border-top-0">
            <?php
                foreach($payment as $val):
            ?>
                    <tr class="text-center">
                    <td> <?php echo $val['name'] ?></td>
                    <td> <?php echo $val['Payment Schedule'] ?> </td>
                    <td> <?php echo $val['Bill Number'] ?> </td>
                    <td> <?php echo $val['Amount Paid'] ?></td>
                    <td> <?php echo $val['Balance amount'] ?> </td>
                    <td class = "text-nowrap"> <?php echo $val['Date'] ?> </td>
                    <td> <i class="fa fa-pen text-info"></i> </td>
                    <td> <i class="fa fa-trash text-info"></i> </td>
                    </tr>

            <?php endforeach;
            ?>

        </tbody>  
    </table>
