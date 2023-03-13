<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('/vendor/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('/dist/js/adminlte.js') }}"></script>

<script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000
        });

        @if (Session::has('success'))
        Toast.fire({
            icon: "success",
            title: "{{ session('success') }}"
        });
        @endif
        @if (Session::has('error'))
        Toast.fire({
            icon: 'error',
            title: "{{ session('error') }}"
        });
        @endif
    })
</script>

<script>
    $(function() {
        $(".select2").select2();
    })
</script>

<script>
    $("#button-filter").on('click', function() {
        if($("#table-filter").is(":hidden")){
            $("#table-filter").show()
        } else {
            $("#table-filter").hide()
        }
    });
</script>

<script>
    $('body').on('click', "[data-toggle='modal']", function (event) {
        event.preventDefault();
        $("#modalCenter .modal-dialog").html('');
        $("#modalCenter .modal-dialog").load($(this).attr('href'));
    })
</script>

@stack('javascripts')
