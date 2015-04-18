<?php

//$xmlObject = simplexml_load_file("files/transactions.xml");


//debug(Set::countDim($xmlObject));
//debug($xmlObject);
if(Set::countDim($xmlObject) == 5){
    $transactions = $xmlObject['response']['transactions']['transaction'];
}else{
    $transactions = $xmlObject['response']['transactions'];
}
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Credit Card Information</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Transaction No.</th>
                            <th>User ID</th>
                            <th>Date</th>
                            <th>Seller No.</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Credit Card No.</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if($transactions != null)
                        foreach ($transactions AS $transaction) {
                            ?>
                            <tr>
                                <td><?php echo $transaction['transno']; ?></td>
                                <td><?php echo $transaction['uid']; ?></td>
                                <td><?php echo $transaction['date']; ?></td>
                                <td><?php echo $transaction['sellerno']; ?></td>
                                <td><?php echo $transaction['product']; ?></td>
                                <td><?php echo $transaction['price']; ?></td>
                                <td><?php echo $transaction['number']; ?></td>
                            </tr>
                        <?php }else{ ?>
                            <td> <?php echo "Empty transactions" ?> </td>
                            <td> <?php echo "Empty transactions" ?> </td>
                            <td> <?php echo "Empty transactions" ?> </td>
                            <td> <?php echo "Empty transactions" ?> </td>
                            <td> <?php echo "Empty transactions" ?> </td>
                            <td> <?php echo "Empty transactions" ?> </td>
                            <td> <?php echo "Empty transactions" ?> </td>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

<!--                <div class="col-lg-6">-->
<!--                    --><?php
//                    echo $this->Paginator->prev(
//                        ('Previous'),
//                        array('class' => 'btn btn-default', 'style'),
//                        null,
//                        array('class' => 'btn btn-default disabled')
//                    ); ?>
<!--                    --><?php
//                    echo $this->Paginator->numbers(array('first' => 2, 'last' => 2, 'modulus' => 4));
//                    ?>
<!--                    --><?php
//                    echo $this->Paginator->next(__('Next'), array('class' => 'btn btn-default'), null, array('class' => 'btn btn-default disabled'));
//                    ?>
<!--                </div>-->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>