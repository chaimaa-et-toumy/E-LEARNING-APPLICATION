<?php
  $payment = array(
	array(
		'karthi',
		'First',
		 '0001223',
		'DHS 100.000',
		'DHS 500.000',
		'05-Jan,2022',
        '<i class=\"fa fa-pen text-info\"></i>'
    ),
	array(    
		'karthi',
		'First',
        '0001223',
		'DHS 100.000',
		'DHS 500.000',
		'05-Jan,2022',
	),
	array(    
		'karthi',
		'First',
        '0001223',
		'DHS 100.000',
		'DHS 500.000',
		'05-Jan,2022',
    ),
    array(    
		'karthi',
		'First',
        '0001223',
		'DHS 100.000',
		'DHS 500.000',
		'05-Jan,2022',
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
                foreach($payment as $key => $val) {
                    echo
                    "<tr class=\"text-center\">
                    <td> $val[0] </td>
                    <td> $val[1] </td>
                    <td> $val[2] </td>
                    <td> $val[3] </td>
                    <td> $val[4] </td>
                    <td class = \"text-nowrap\"> $val[5] </td>
                    <td> <i class=\"fa fa-pen text-info\"></i> </td>
                    <td> <i class=\"fa fa-trash text-info\"></i> </td>
                    </tr>";
                }
            ?>
        </tbody>  
    </table>