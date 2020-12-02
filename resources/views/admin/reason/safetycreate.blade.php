@extends('admin.layout.base')

@section('title', 'Add New Tip')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">

            <h5 style="margin-bottom: 2em;">Add New Tip</h5>

            <form action="{{ url('/').'/admin/servicesafetystore' }}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}

                <div class="field">
                    <label for="reason" class="label">Title</label>
                    <div class="control">
                        <textarea  class="input" type="text" name="title" id="title" ></textarea>
                    </div>
                </div>

                <input type="hidden" name="service_id" id="service_id" value="<?php echo $service_id; ?>">

                <div class="field">
                    <label for="reason" class="label">Desc</label>
                    <div class="control">
                        <textarea  class="input" type="text" name="desc" id="desc" ></textarea>
                    </div>
                </div>

                <div class="field">
                    <label for="max_amount" class="label">@lang('admin.reason.status')</label>
                    <div class="select">
                        <select class="control" name="status" id="status">
                            <option value="">Select</option>
                            <option value="1">@lang('admin.active')</option>
                            <option value="0">@lang('admin.inactive')</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="zipcode" class="label"></label>
                    <div class="control">
                        <button type="submit" class="button is-link">Add Tip</button>
                        <a href="{{route('admin.reason.index')}}" class="button is-default">@lang('admin.cancel')</a>
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
    CKEDITOR.replace( 'title' );
    CKEDITOR.replace( 'desc' );
</script>
@endsection