<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Include jQuery (required for DataTables) -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>


<!-- Include DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Add these scripts before your custom script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/toastr.min.js"></script>
</body>

</html>
<script>
  $(document).ready(function() {
    $('#user-datatables').dataTable({
      "lengthMenu": [5, 10, 25, 50, 75, 100]
    });
  });
</script>
<script>
  $(document).ready(function() {
    // Initialize DataTable for Module 1
    $('#user-datatables-module1').DataTable({
      "lengthMenu": [5, 10, 25, 50, 75, 100]
    });

    // Initialize DataTable for Module 2
    $('#user-datatables-module2').DataTable({
      "lengthMenu": [5, 10, 25, 50, 75, 100]
    });

    // Initialize DataTable for Module 3
    $('#user-datatables-module3').DataTable({
      "lengthMenu": [5, 10, 25, 50, 75, 100]
    });
    // Initialize DataTable for Module 4
    $('#user-datatables-module4').DataTable({
      "lengthMenu": [5, 10, 25, 50, 75, 100]
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#ledger-table').DataTable({
      paging: true,
      searching: true,
      ordering: true,
      order: [
        [0, 'desc']
      ],
      lengthMenu: [5, 10, 25, 50],
      language: {
        paginate: {
          next: '<i class="fa fa-angle-right"></i>',
          previous: '<i class="fa fa-angle-left"></i>'
        }
      }
    });
  });
</script>