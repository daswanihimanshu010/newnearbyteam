@extends('admin.layout.base')

@section('title', __('admin.service.Update_Service_Type'))

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <form  action="{{route('admin.service.update', $service->id )}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH">

                <div class="field">
                    <label for="name" class="label">@lang('admin.service.Service_Name')</label>
                    <div class="control">
                        <input  class="input" type="text" value="{{ $service->name }}" name="name" required id="name" placeholder="@lang('admin.service.Service_Name')">
                    </div>
                </div>

                <div class="field">

                    <label for="image" class="label">@lang('admin.picture')</label>
                    <div class="control">
                        @if(isset($service->image))
                        <img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="{{ $service->image }}">
                        @endif
                        <input type="file" accept="image/*" name="image" class="dropify form-control-file" id="image" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="field">

                    <label for="marker" class="label">@lang('admin.service.Service_marker_Image')</label>
                    <div class="control">
                        @if(isset($service->marker))
                        <img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="{{ $service->marker }}">
                        @endif
                        <input type="file" accept="image/*" name="marker" class="dropify form-control-file" id="marker" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="field">
                    <label for="calculator" class="label">@lang('admin.service.Pricing_Logic')</label>
                    <div class="column">
                        <select class="input" id="calculator" name="calculator">
                            <option value="FIXED" @if($service->calculator =='FIXED') selected @endif>@lang('servicetypes.FIXED')</option>
                            <option value="HOUR" @if($service->calculator =='HOUR') selected @endif>@lang('servicetypes.HOUR')</option>
                            {{-- <option value="DAILY" @if($service->calculator =='DAILY') selected @endif>@lang('servicetypes.DAILY')</option>
                            <option value="WEIGHT" @if($service->calculator =='WEIGHT') selected @endif>@lang('servicetypes.WEIGHT')</option>
                            <option value="ESTIMATE" @if($service->calculator =='DISTANCEHOUR') selected @endif>@lang('servicetypes.ESTIMATE')</option>
                            <option value="PSQFT" @if($service->calculator =='PSQFT') selected @endif>@lang('servicetypes.PSQFT')</option> --}}
                        </select>
                    </div>
                    <div class="column">
                        <span class="showcal"><i><b>Price calculation: <span id="changecal"></span></b></i></span>
                    </div>
                </div>

                <div class="field">
                    <label for="fixed" class="label">@lang('admin.service.Base_Price') ({{ currency('') }})</label>
                    <div class="column">
                        <input  class="input" type="text" id="currency_fixed" data-thousands="," data-decimal="." value="{{ $service->fixed }}" name="fixed" required id="fixed" placeholder="{{ $service->fixed }}" min="0">
                    </div>
                    <div class="column">
                        <span class="showcal"><i><b>@lang('admin.request.base_price')</b></i></span>
                    </div>
                </div>

                {{-- <div class="field">
                    <label for="type_price" class="label">@lang('admin.service.Base_Distance')</label>
                    <div class="column">
                        <input  class="input" type="number" value="{{ $service->type_price }}" name="type_price" id="type_price" placeholder="{{ $service->type_price }}" min="0">
                    </div>
                    <div class="column">
                        <span class="showcal"><i><b>@lang('admin.service.Base_Distance') for Weight | Sq.ft per unit</b></i></span>
                    </div>
                </div> --}}

                <div class="field">
                    <label for="price" class="label">@lang('admin.service.unit')</label>
                    <div class="column">
                        <input  class="input" type="text" id="currency_price" data-thousands="," data-decimal="." value="{{ $service->price }}" name="price" id="price" placeholder="{{ $service->price }}" min="0">
                    </div>
                    <div class="column">
                        <span class="showcal"><i><b>@lang('admin.service.unit') Price on Calculation based</b></i></span>
                    </div>
                </div>
                <?php $desc = htmlspecialchars_decode($service->description); ?>
                <div class="field">
                    <label for="description" class="label">@lang('admin.service.description')</label>
                    <div class="column">
                        <textarea  class="input" name="description" id="description" placeholder="{{ $service->description }}"><?php echo $desc; ?></textarea>
                    </div>
                </div>

                <div class="field">
                     <label class="column label" style="color: black;font-size: 25px;">@lang('admin.service.peak_title')</label>

                     <!-- Set Peak Time -->
                     <div class="table-container">
                        <table class="table is-responsive is-fullwidth is-striped">
                            <thead>
                                <tr>
                                    <th>@lang('admin.service.peak_id')</th>
                                    <th>@lang('admin.service.peak_time')</th>
                                    <th>@lang('admin.service.peak_price')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Peakhour as $index => $w)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{ date('h:i A', strtotime($w->start_time)) }} - {{date('h:i A', strtotime($w->end_time))}}</td>
                                        <td> <input type="text" id="peak_price" name="peak_price[{{$w->id}}][id]" value="@if($w->servicetimes){{ $w->servicetimes->min_price }}@endif"  min="1">
                                        <input type="hidden" name="peak_price[{{$w->id}}][status]" value="@if($w->servicetimes)1 @else 0 @endif"> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>@lang('admin.service.peak_id')</th>
                                    <th>@lang('admin.service.peak_time')</th>
                                    <th>@lang('admin.service.peak_price')</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <br>
                <div class="field">
                    <div class="column col-sm-6 col-md-3">
                        <button type="submit" class="button is-link btn-block">@lang('admin.service.Update_Service_Type')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>

<script type="text/javascript">
    var cal='DISTANCE';
    priceInputs('{{$service->calculator}}');
    $("#calculator").on('change', function(){
        cal=$(this).val();
        priceInputs(cal);
    });

    function priceInputs(cal){
        if(cal=='FIXED'){
            $("#hourly_price,#distance,#price").attr('value','');
            $("#minute").prop('disabled', false);
            $("#minute").prop('required', true);
            $("#hourly_price,#distance,#price").prop('disabled', true);
            $("#hourly_price,#distance,#price").prop('required', false);
            $("#changecal").text('PB + (TM*PM)');
        }
        else if(cal=='HOUR'){
            $("#minute,#distance,#price").attr('value','');
            $("#hourly_price").prop('disabled', false);
            $("#hourly_price").prop('required', true);
            $("#minute,#distance,#price").prop('disabled', true);
            $("#minute,#distance,#price").prop('required', false);
            $("#changecal").text('PB + (TH*PH)');
        }
        else if(cal=='DAILY'){
            $("#minute,#hourly_price").attr('value','');
            $("#price,#distance").prop('disabled', false);
            $("#price,#distance").prop('required', true);
            $("#minute,#hourly_price").prop('disabled', true);
            $("#minute,#hourly_price").prop('required', false);
            $("#changecal").text('PB + (T{{config("constants.distance")}}-DB*P{{config("constants.distance")}})');
        }
        else if(cal=='WEIGHT'){
            $("#hourly_price").attr('value','');
            $("#price,#distance,#minute").prop('disabled', false);
            $("#price,#distance,#minute").prop('required', true);
            $("#hourly_price").prop('disabled', true);
            $("#hourly_price").prop('required', false);
            $("#changecal").text('PB + (T{{config("constants.distance")}}-DB*P{{config("constants.distance")}}) + (TM*PM)');
        }
        else if(cal=='ESTIMATE'){
            $("#minute").attr('value','');
            $("#price,#distance,#hourly_price").prop('disabled', false);
            $("#price,#distance,#hourly_price").prop('required', true);
            $("#minute").prop('disabled', true);
            $("#minute").prop('required', false);
            $("#changecal").text('PB + ((T{{config("constants.distance")}}-DB)*P{{config("constants.distance")}}) + (TH*PH)');

        }else if(cal=='PSQFT'){
            $("#minute").attr('value','');
            $("#price,#distance,#hourly_price").prop('disabled', false);
            $("#price,#distance,#hourly_price").prop('required', true);
            $("#minute").prop('disabled', true);
            $("#minute").prop('required', false);
            $("#changecal").text('PB + ((T{{config("constants.distance")}}-DB)*P{{config("constants.distance")}}) + (TH*PH)');
        }
        else{
            $("#minute,#hourly_price").attr('value','');
            $("#price,#distance").prop('disabled', false);
            $("#price,#distance").prop('required', true);
            $("#minute,#hourly_price").prop('disabled', true);
            $("#minute,#hourly_price").prop('required', false);
            $("#changecal").text('PB + (T{{config("constants.distance")}}-DB*P{{config("constants.distance")}})');
        }
    }

</script>
@endsection
