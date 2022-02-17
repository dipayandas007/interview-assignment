<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.galleries.management') }}
                <small class="text-muted">{{ (isset($gallery)) ? __('labels.backend.access.galleries.edit') : __('labels.backend.access.galleries.create') }}</small>
            </h4>
        </div>
        <!--col-->
    </div>
    <!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('title', trans('validation.attributes.backend.access.galleries.name'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.galleries.name'), 'required' => 'required']) }}
                </div>
                <!--col-->
            </div>
            <!--form-group-->

            <div class="form-group row">
                {{ Form::label('description', trans('validation.attributes.backend.access.galleries.description'), ['class' => 'col-md-2 from-control-label']) }}

                <div class="col-md-10">
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.galleries.description')]) }}
                </div>
                <!--col-->
            </div>
            <!--form-group-->

            <div class="form-group row">
                {{ Form::label('images_upload', trans('validation.attributes.backend.access.galleries.images_upload'), ['class' => 'col-md-2 from-control-label required']) }}

                @if(!empty($gallery->images))
                <div class="col-lg-1">
                    @foreach($gallery->images as $image)
                        <img src="{{ asset('storage/img/gallery/'.$image->name) }}" height="80" width="80">
                    @endforeach
                </div>
                <div class="col-lg-5">
                    {{ Form::file('images[]', ['id' => 'images', 'multiple', 'accept' => '.jpeg,.jpg,.png']) }}
                </div>
                @else
                <div class="col-lg-5">
                    {{ Form::file('images[]', ['id' => 'images', 'multiple', 'accept' => '.jpeg,.jpg,.png']) }}
                </div>
                @endif

            </div>
            <!--form-group-->

            <div class="form-group row">
                {{ Form::label('status', trans('validation.attributes.backend.access.galleries.status'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    <div class="checkbox d-flex align-items-center">
                        @php
                        $status = isset($gallery) ? '' : 'checked';
                        @endphp
                        <label class="switch switch-label switch-pill switch-primary mr-2" for="role-1"><input class="switch-input" type="checkbox" name="status" id="role-1" value="1" {{ (isset($gallery->status) && $gallery->status === 1) ? "checked" : $status }}><span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
                    </div>
                </div>
                <!--col-->
            </div>
            <!--form-group-->
        </div>
        <!--col-->
    </div>
    <!--row-->
</div>
<!--card-body-->

@section('pagescript')
<script type="text/javascript">
    FTX.Utils.documentReady(function() {
        FTX.Galleries.edit.init("{{ config('locale.languages.' . app()->getLocale())[1] }}");
    });
</script>
@stop