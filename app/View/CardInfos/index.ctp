<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Card Infos</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-table fa-fw"></i>
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr >
                            <th>Name</th>
                            <th>Number</th>
                            <th>Issuer</th>
                            <th>Expiration</th>
                            <th>Limit</th>
                            <th>Currency</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($cardinfos as $card): ?>
                            <tr>
                                <td><?php echo $card['CardInfo']['name']; ?></td>
                                <td><?php echo $card['CardInfo']['number']; ?></td>
                                <td><?php echo $card['CardInfo']['issuer']; ?></td>
                                <td><?php echo $card['CardInfo']['exp']; ?></td>
                                <td><?php echo $card['CardInfo']['limit']; ?></td>
                                <td><?php echo $card['CardInfo']['currency']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
