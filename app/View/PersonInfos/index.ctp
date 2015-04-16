<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profile</h1>
        </div>
    </div>

    <!-- Address -->
    <div class="chat-panel panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-heading">
            <i class="fa fa-comments fa-fw"></i>
            Information about <?php echo $numberpersons; ?> people.
        </div>

        <div class="panel-body">
            <ul class="chat">

                <?php foreach($personinfos as $person): ?>
                    <li class="left clearfix">
                    <span class="chat-img pull-left">
                        <img src="img/icon-user-default.png" width="96" height="96" style="margin-right: 16px;" alt="User Avatar" class="img-circle" />
                    </span>

                        <div class="chat-body clearfix">
                            <div class = "header">
                                <strong class="primary-font"><?php echo $person['PersonInfo']['firstname']; ?></strong>
                            </div>
                            <table border="0">
                                <tbody>
                                <tr><td><i>Address</i></td></tr>
                                <tr>
                                    <td><b>Name:</b></td>
                                    <td><?php echo $person['PersonInfo']['firstname']; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Location:</b></td>
                                    <td><?php echo $person['PersonInfo']['city'].", ".$person['PersonInfo']['country']; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Telephone:</b></td>
                                    <td><?php echo $person['PersonInfo']['telephone']; ?></td>
                                </tr>
                                <tr>
                                    <td><b>E-mail</b></td>
                                    <td><?php echo $person['PersonInfo']['email']; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="panel-footer">
            <i class="fa fa-child fa-fw"></i>
            Credit card owner information
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>