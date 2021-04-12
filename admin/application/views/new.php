<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<div>

                                             <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo site_url()?>/exports/createxls"><i class="fa fa-file-excel-o"></i> Export Data</a>
                                         
</div>
                                                   
<table>

    <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone-No</th>
                                               
                                                <th>City</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone-No</th>
                                               
                                                <th>City</th>
                                                <th>Amount</th>

                                                
                                                <th>Date</th>

                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                foreach ($query as $key) {
                                                ?>

                                            <tr>
                                                
                                                <td><?= $key->name;?></td>
                                                <td><?= $key->email;?></td>
                                                <td><?= $key->phone_no;?></td>
                                             
                                                <td><?= $key->city;?></td>
                                                <td><?= $key->amount;?></td>
                                                <td><?= $key->dateandtime;?></td>
                                       
                                            </tr>

</tbody>
</table>

<?php
                                            }
                                            ?>
                                           

</body>
</html>