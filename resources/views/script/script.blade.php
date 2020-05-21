@section('script')
    <script type="text/javascript">
    $('#draft-btn').click(function (e) {
    e.preventDefault();
    $('#datetimepicker').val("");
    $('#post-form').submit();
    });

    // $(function () {
    // $('#published_at').datetimepicker({
    // format: 'YY-MM-DD HH:mm:ss',
    // showClear: true
    // });
    // });

    CKEDITOR.replace('editor');

    function sweetAlert() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }

    </script>
    @stop
