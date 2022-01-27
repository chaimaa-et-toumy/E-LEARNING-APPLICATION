<?php
$table_student = array(
    array(
        'Name' => 'Username',
        'Email' => 'user@email.com',
        'Phone' => '7305477760',
        'Enroll Number' => '1234567305477760',
        'Date of admission'=> '08-Dec, 2021'
    ),
    array(
        'Name' => 'Username',
        'Email' => 'khathi@email.com',
        'Phone' => '7305477760',
        'Enroll Number' => '1234567305477760',
        'Date of admission'=> '08-Dec, 2021'
    ),
    array(
        'Name' => 'Username',
        'Email' => 'khathi@email.com',
        'Phone' => '7305477760',
        'Enroll Number' => '1234567305477760',
        'Date of admission'=> '08-Dec, 2021'
    ),
    array(
        'Name' => 'Username',
        'Email' => 'khathi@email.com',
        'Phone' => '7305477760',
        'Enroll Number' => '1234567305477760',
        'Date of admission'=> '08-Dec, 2021'
    ),
    array(
        'Name' => 'Username',
        'Email' => 'khathi@email.com',
        'Phone' => '7305477760',
        'Enroll Number' => '1234567305477760',
        'Date of admission'=> '08-Dec, 2021'
    ),
    array(
        'Name' => 'Username',
        'Email' => 'khathi@email.com',
        'Phone' => '7305477760',
        'Enroll Number' => '1234567305477760',
        'Date of admission'=> '08-Dec, 2021'
    )
);
?>
<div class="table-responsive" tabindex="0">

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
                foreach($table_student as $key):
            ?>
            <tr class="bg-white text-center">
                <td>
                    <img src="img/profile.png" alt="profile">
                </td>
                <td class="align-middle">
                    <?php echo $key['Name']; ?>
                </td>
                <td class="align-middle">
                    <?php echo $key['Email']; ?>
                </td>
                <td class="align-middle">
                    <?php echo $key['Phone']; ?>
                </td>
                <td class="align-middle">
                    <?php echo $key['Enroll Number']; ?>
                </td>
                <td class="align-middle">
                    <?php echo $key['Date of admission'] ;?>
                </td>
                <td style="cursor: pointer;" class="align-middle"> <i class="fa fa-pen text-info"></i> </td>
                <td style="cursor: pointer;" class="align-middle"> <i class="fa fa-trash text-info"></i> </td>
            </tr>
            <?php endforeach;
            ?>

        </tbody>
    </table>
</div>