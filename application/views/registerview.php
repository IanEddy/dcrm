<?php

?><!DOCTYPE html>
<html>
<head>
<title>MAKADARA LAW COURT</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/datatables/css/jquery.dataTables.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/datatables/css/style.css"); ?>">
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="<?php echo base_url("assets/datatables/js/jquery.js"); ?>"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="<?php echo base_url("assets/datatables/js/dataTables.jqueryui.min.js"); ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url("assets/datatables/js/jquery.dataTables.js"); ?>"></script>
</head>

<body>
<div class="wrapper">
<h1>Subscriber management</h1>
<?php echo $this->table->generate(); ?>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var oTable = $('#big_table').dataTable({
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": '<?php echo base_url(); ?>index.php/registerc/datatable',
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "iDisplayStart ": 20,
            "oLanguage": {
                "sProcessing": "<img src='<?php echo base_url(); ?>assets/images/ajax-loader_dark.gif'>"
            },
            "fnInitComplete": function () {
                //oTable.fnAdjustColumnSizing();
            },
            'fnServerData': function (sSource, aoData, fnCallback) {
                $.ajax
                ({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            }
        });
    });
</script>
</body>
</html>