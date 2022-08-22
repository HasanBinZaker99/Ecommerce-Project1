@extends('CRM.layouts_successLeeds.app')
@section('content')
<div class="content-wrapper">
    <section class="py-5 px-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Add Cart</div>
                        <div class="card-body">
                            <h4 class="text-success">{{ Session::get('message') }}</h4>
                            <form action="{{route('create-cart',['id'=>$leed->id])}}" method="POST">
                                @csrf
                                <create-cart></create-cart>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

@endsection
{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
{{--                <script>--}}
{{--                    $(document).ready(function () {--}}
{{--                        $('#houseType').change(function(){--}}
{{--                            let htId = $(this).val();--}}
{{--                            $.ajax({--}}
{{--                                url:"{{url('get-data')}}",--}}
{{--                                type: 'post',--}}
{{--                                data: {htId: htId,--}}
{{--                                    _token: '{{csrf_token()}}'--}}
{{--                                }--}}
{{--                                    ,--}}
{{--                                success:function (result) {--}}
{{--                                        jQuery('#description').html(result)--}}
{{--                                }--}}
{{--                            });--}}
{{--                        });--}}
{{--                    });--}}

{{--                    $(document).ready(function () {--}}
{{--            $('#houseType').on('change', function () {--}}
{{--                var houseAreaTypeId = this.value;--}}
{{--                $('#description').html('');--}}
{{--                $.ajax({--}}
{{--                    url: '{{ route('getDescriptions') }}?houseAreaTypeId='+houseAreaTypeId,--}}
{{--                    type: 'get',--}}
{{--                    success: function (res) {--}}
{{--                        $('#description').html('<option value="">Select description</option>');--}}
{{--                        $.each(res, function (key, value) {--}}
{{--                            $('#description').append('<option value="' + value--}}
{{--                                .id + '">' + value.name + '</option>');--}}
{{--                        });--}}
{{--                        $('#unit').html('<option value="">Select Unit</option>');--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--            $('#description').on('change', function () {--}}
{{--                var houseAreaTypeId = this.value;--}}
{{--                $('#unit').html('');--}}
{{--                $.ajax({--}}
{{--                    url: '{{ route('getUnits') }}?houseAreaTypeId='+houseAreaTypeId,--}}
{{--                    type: 'get',--}}
{{--                    success: function (res) {--}}
{{--                        $('#unit').html('<option value="">Select Unit</option>');--}}
{{--                        $.each(res, function (key, value) {--}}
{{--                            $('#unit').append('<option value="' + value--}}
{{--                                .id + '">' + value.unit + '</option>');--}}
{{--                        });--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--            $('#unit').on('change', function () {--}}
{{--                var houseAreaTypeId = this.value;--}}
{{--                $('#rate').html('');--}}
{{--                $.ajax({--}}
{{--                    url: '{{ route('getRates') }}?houseAreaTypeId='+houseAreaTypeId,--}}
{{--                    type: 'get',--}}
{{--                    success: function (res) {--}}
{{--                        $('#rate').html('<option value="">Select Rate</option>');--}}
{{--                        $.each(res, function (key, value) {--}}
{{--                            $('#rate').append('<option value="' + value--}}
{{--                                .id + '">' + value.rate + '</option>');--}}
{{--                        });--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--                </script>--}}
<script>
    import CreateCart from "../../../js/components/CreateCart";
    export default {
        components: {CreateCart}
    }
</script>
