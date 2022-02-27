<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('backend/assets/plugins/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('backend/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/app-style-switcher.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('backend/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('backend/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('backend/js/custom.js')}}"></script>
<!--This page JavaScript -->
<!--flot chart-->

<script src="{{asset('backend/assets/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('backend/assets/plugins/perfect-scrollbar/perfect-scrollbar.common.js')}}"></script>
<script src="{{asset('backend/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('backend/js/pages/dashboards/dashboard1.js')}}"></script>





{{--data table--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">--}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



<script>
    // bootstraptable script
$(document).ready(function() {
$('#datatable').DataTable();
} );
// news status ajax
    $(function(){
    $('.toggle-class-4').change(function(){
        var status = $(this).prop('checked')==true ? 1:0;
        var row_id = $(this).data('id');
        $.ajax({
            type:'GET',
            datatype:"jason",
            url:'/newschangeStatus',
            data:{'status':status,'row_id':row_id},
            success : function(data){
                console.log(data.success)
            }

        });
    });

});

    // role status ajax
    $(function(){
        $('.toggle-class-r1').change(function(){
            var status = $(this).prop('checked')==true ? 1:0;
            var row_id = $(this).data('id');
            $.ajax({
                type:'GET',
                datatype:"jason",
                url:'/rolechangestatus',
                data:{'status':status,'row_id':row_id},
                success : function(data){
                    console.log(data.success)
                }

            });
        });

    });

    // permission status ajax
    $(function(){
        $('.toggle-class-p1').change(function(){
            var status = $(this).prop('checked')==true ? 1:0;
            var row_id = $(this).data('id');
            $.ajax({
                type:'GET',
                datatype:"jason",
                url:'/permissionchangestatus',
                data:{'status':status,'row_id':row_id},
                success : function(data){
                    console.log(data.success)
                }

            });
        });

    });



    // addvertisement status ajax
$(function(){
    $('.toggle-class-8').change(function(){
        var status = $(this).prop('checked')==true ? 1:0;
        var row_id = $(this).data('id');
        $.ajax({
            type:'GET',
            datatype:"jason",
            url:'/addschangeStatus',
            data:{'status':status,'row_id':row_id},
            success : function(data){
                console.log(data.success)
            }

        });
    });

});

// News feature key ajax

    $(function(){
        $('.toggle-class-1').change(function(){
            var feature_key = $(this).prop('checked')==true ? 1:0;
            var row_id = $(this).data('id');
            $.ajax({
                type:'GET',
                datatype:"jason",
                url:'/newschangefeaturekey',
                data:{'feature_key':feature_key,'row_id':row_id},
                success : function(data){
                    console.log(data.success)
                }

            });
        });

    });

    // news slider ajax
    $(function(){
        $('.toggle-class-2').change(function(){
            var slider_key = $(this).prop('checked')==true ? 1:0;
            var row_id = $(this).data('id');
            $.ajax({
                type:'GET',
                datatype:"jason",
                url:'/newschangesliderkey',
                data:{'slider_key':slider_key,'row_id':row_id},
                success : function(data){
                    console.log(data.success)
                }

            });
        });

    });
    // breakingKey ajax
    $(function(){
        $('.toggle-class-3').change(function(){
            var breaking_key = $(this).prop('checked')==true ? 1:0;
            var row_id = $(this).data('id');
            $.ajax({
                type:'GET',
                datatype:"jason",
                url:'/newschangebreakingkey',
                data:{'breaking_key':breaking_key,'row_id':row_id},
                success : function(data){
                    console.log(data.success)
                }

            });
        });

    });


    // category status ajax
    $(function(){
        $('.toggle-class-c1').change(function(){
            var status = $(this).prop('checked')==true ? 1:0;
            var row_id = $(this).data('id');
            $.ajax({
                type:'GET',
                datatype:"jason",
                url:'/categorychangestatus',
                data:{'status':status,'row_id':row_id},
                success : function(data){
                    console.log(data.success)
                }

            });
        });

    });

    // page status ajax
    $(function(){
        $('.toggle-class-p1').change(function(){
            var status = $(this).prop('checked')==true ? 1:0;
            var row_id = $(this).data('id');
            $.ajax({
                type:'GET',
                datatype:"jason",
                url:'/pagechangestatus',
                data:{'status':status,'row_id':row_id},
                success : function(data){
                    console.log(data.success)
                }

            });
        });

    });



    // permission status ajax
    $(function(){
        $('.toggle-class-m1').change(function(){
            var status = $(this).prop('checked')==true ? 1:0;
            var row_id = $(this).data('id');
            $.ajax({
                type:'GET',
                datatype:"jason",
                url:'/modulechangestatus',
                data:{'status':status,'row_id':row_id},
                success : function(data){
                    console.log(data.success)
                }

            });
        });

    });


    // Add placement ajax
    $(function(){
        $('.toggle-class-pl1').change(function(){
            var status = $(this).prop('checked')==true ? 1:0;
            var row_id = $(this).data('id');
            $.ajax({
                type:'GET',
                datatype:"jason",
                url:'/placementchangestatus',
                data:{'status':status,'row_id':row_id},
                success : function(data){
                    console.log(data.success)
                }

            });
        });

    });



    @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('success') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif
    // CKEDITOR.replace( 'description' );
</script>
