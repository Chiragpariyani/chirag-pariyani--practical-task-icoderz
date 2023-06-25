<script>
    $(document).ready(function() {
        $("#DataTable").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "buttons":{
              dom:{
                  button:{className: "buttons btn border-0"}
              },
              "buttons":["csv", "excel", "pdf", "print", "colvis"]
          } 
      }).buttons().container().appendTo('#DataTable_wrapper .col-md-6:eq(0)');
      
    //DELETE Company
            $(".deleteCompany").on('click', function(e){
                e.preventDefault(); 
                let id = $(this).data('id');
    
                const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success  ',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
    
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        type: "POST",
                        dataType: "json",
                        url: '{{route("delete.company")}}',
                        data: 
                        {
                            'id': id
                        },
                        success: function(data){
                            if(data.status=="success"){
                                $('.dataRow'+id).hide();
                            }
                            window.location.reload();
                        }
                    });
    
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your company is safe :)',
                    'error'
                    )
                }
                })
    
            })   
        })
    </script>
            