<head>
    <script type="text/javascript">
        $(document).ready(function () {
            var max = <?php echo $cardcounts; ?>;
            var isAdmin = <?php echo $is_admin; ?>;


            $("#insert").on("click", function () {

                isInsert = true;
                $('#id').val(parseInt(max) + 1);
                setCardStateReadOnly(false);

                if (!isAdmin) {
                    $('#userid').prop('readonly', true);
                    $('#cardno').prop('readonly', true);
                }
                $('#edit').prop('disabled', true);
            });


            $("#edit").on("click", function () {
                isInsert = false;
                $('#save').prop('disabled', false);
                $('#edit').prop('disabled', true);
                $('#sellerno').prop("readonly", false);
                $('#product').prop("readonly", false);
                $('#price').prop("readonly", false);

            });

            $("#save").on("click", function () {
//                        var data = $(this).serialize();
                if (isInsert) {
                    $.ajax({
                        type: "POST",
                        async: true,
                        url: "/assignment2/cardstatements/save",
                        data: {
                            'sellerno': $('#sellerno').val(),
                            'product': $('#product').val(),
                            'price': $('#price').val(),
                            'id': $('#id').val(),
                            'number': $('#cardno').val(),
                            'userid': $('#userid').val(),
                            'date': $('#date').val()
                        },

                        success: function (return_value) {
                            $('#debug').html(return_value);
                            setCardStateReadOnly(true);
                            max = (parseInt(max) + 1);
                        }
                    });
                } else {
                    $.ajax({
                        type: "POST",
                        async: true,
                        url: "/assignment2/cardstatements/save",
                        data: {
                            'sellerno': $('#sellerno').val(),
                            'product': $('#product').val(),
                            'price': $('#price').val(),
                            'id': $('#id').val()
                        },
                        success: function (return_value) {
                            $('#debug').html(return_value);
//                                    alert(return_value);
                            setCardStateReadOnly(true);
                        }
                    });
                }
            });
        });

        //         set attribute of the element in card_statement.php
        function setCardStateReadOnly(isReadOnly) {
            var isAdmin = <?php echo $isadmin; ?>;

            $('#save').prop('disabled', isReadOnly);
            $('#userid').prop("readonly", isReadOnly);
            $('#cardno').prop("readonly", isReadOnly);
            $('#date').prop("readonly", isReadOnly);
            $('#sellerno').prop("readonly", isReadOnly);
            $('#product').prop("readonly", isReadOnly);
            $('#price').prop("readonly", isReadOnly);
            $('#edit').prop("disabled", !isReadOnly);
            $('#insert').prop("disabled", !isReadOnly);

            if (!isReadOnly) {
                if (isAdmin) {
                    $('#userid').val("");
                    $('#cardno').val("");
                }
                $('#date').val("");
                $('#sellerno').val("");
                $('#product').val("");
                $('#price').val("");
            }
        }
    </script>
</head>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Card Statement</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="panel panel-default">
        <div class="panel-body">
            <form name="card">
                <div class="form-group">
                    <?php if( $cardstatements != null){ ?>
                    <label>Transaction No</label>

                    <input class="form-control" id="id" name="id" type="number"
                           value="<?php echo $cardstatements['0']['CardStatement']['id']; ?>" min="0"
                           maxlength="255" readonly>
                </div>

                <div class="form-group">
                    <label>User ID</label>
                    <input class="form-control" id="userid" name="userid" type="number" maxlength="255"
                           value="<?php echo $cardstatements['0']['CardStatement']['uid']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Card No.</label>
                    <input class="form-control" id="cardno" name="cardno"
                           value="<?php echo $cardstatements['0']['CardStatement']['number']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Date</label>
                    <input class="form-control" id="date" name="date" type="date"
                           value="<?php echo $cardstatements['0']['CardStatement']['date']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Seller No</label>
                    <input class="form-control" id="sellerno" name="sellerno" type="text"
                           value="<?php echo $cardstatements['0']['CardStatement']['sellerno']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Product</label>
                    <input class="form-control" id="product" name="product" type="text"
                           value="<?php echo $cardstatements['0']['CardStatement']['product']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" id="price" name="price" type="text" type="number"
                           value="<?php echo $cardstatements['0']['CardStatement']['price']; ?>" readonly>
                </div>

                <div class="col-lg-8">
                    <?php
                    echo $this->Paginator->prev(
                        ('Previous'),
                        array('class' => 'btn btn-default', 'style'),
                        null,
                        array('class' => 'btn btn-default disabled')
                    ); ?>
                    <?php
                    echo $this->Paginator->numbers(array('first' => 2, 'last' => 2, 'modulus' => 4));
                    ?>
                    <?php
                    echo $this->Paginator->next(__('Next'), array('class' => 'btn btn-default'), null, array('class' => 'btn btn-default disabled'));
                    ?>

                    <input class="btn btn-default" id="edit" type="button" name="Edit" value="Edit">
                    <input id="save" type="button" class="btn btn-default" name="save" value="Save" disabled>
                    <input class="btn btn-default" id="insert" type="button" name="Insert" value="Insert">
                </div>
                <?php }else echo "Empty statement"; ?>


                <div id="debug"></div>

            </form>
        </div>
    </div>
</div>
