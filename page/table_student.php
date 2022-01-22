<?php
$table_student = array(
    array(
        'Username',
        'user@email.com',
        '7305477760',
        '1234567305477760',
        '08-Dec, 2021'
    ),
    array(
        'Username',
        'karthi@email.com',
        '7305477760',
        '1234567305477760',
        '08-Dec, 2021'
    ),
    array(
        'Username',
        'karthi@email.com',
        '7305477760',
        '1234567305477760',
        '08-Dec, 2021'
    ),
    array(
        'Username',
        'karthi@email.com',
        '7305477760',
        '1234567305477760',
        '08-Dec, 2021'
    ),
    array(
        'Username',
        'karthi@email.com',
        '7305477760',
        '1234567305477760',
        '08-Dec, 2021'
    ),
    array(
        'Username',
        'karthi@email.com',
        '7305477760',
        '1234567305477760',
        '08-Dec, 2021'
    )
);
?>
 <table class="table mt-2 table-hover overflow-sm-auto">
     <thead style="border-top: 1px solid #E5E5E5">
        <tr style="color: #ACACAC;" class="fw-bold text-center">
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col" class="text-nowrap">Enroll Number</th>
            <th scope="col" class="text-nowrap">Date of admission</th>
            <th scope="col" style="display: none;">pour accissibilite</th>
            <th scope="col" style="display: none;">pour accissibilite</th>
        </tr>
    </thead>
    <tbody class="border-top-0">
        <?php
            foreach($table_student as $key => $val){
                echo"
                    <tr class=\"bg-white text-center\">
                    <td>
                        <img src=\"img/profile.png\" alt=\"\">
                    </td>
                    <td> $val[0] </td>
                    <td> $val[1] </td>
                    <td> $val[2] </td>
                    <td> $val[3] </td>
                    <td> $val[4] </td>
                    <td  style=\"cursor: pointer;\"> <i class=\"fa fa-pen text-info\"></i> </td>
                    <td  style=\"cursor: pointer;\"> <i class=\"fa fa-trash text-info\"></i> </td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>