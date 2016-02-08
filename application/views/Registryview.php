<?php

?><!DOCTYPE html>
<html>
<head>
<title>MAKADARA LAW COURT</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/datatables/css/jquery.dataTables.css"); ?>">
</head>

<body>
    <div class="container">
        <h1>Registry Datatable</h1>
        <h3>You can search for your case here:</h3>

          <div class="datatable">

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>tdate</th>
                            <th>crdate</th>
                            <th>code</th>
                            <th>cnumber</th>
                            <th>cyear</th>
                            <th>ctype</th>
                            <th>jofficer</th>
                            <th>ccfor</th>
                            <th>outcome</th>
                            <th>adjreason</th>
                            <th>nadate</th>
                            
                        </tr>
                    </thead>
                     <tbody>
                        

                    </tbody>
                </table>
                </div>
</div>
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="<?php echo base_url("assets/datatables/js/jquery.js"); ?>"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="<?php echo base_url("assets/datatables/js/jquery.dataTables.js"); ?>"></script>

<script>
$(document).ready( function () {
    $('#table_id').DataTable({
        "bprocessing": true,
        "bserverSide": true,
        "sAjaxSource": "../application/models/server_side_scripting.php"
    });

} );
</script>
</body>
</html>
