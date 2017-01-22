@section('js')
    <script src="{{ asset('components/ckeditor/ckeditor.js') }}"></script>
@endsection

@include('core::admin._buttons-form')

{!! BootForm::hidden('id') !!}

@include('core::admin._image-fieldset', ['field' => 'image'])

@include('core::form._title-and-slug')
{!! TranslatableBootForm::hidden('status')->value(0) !!}
{!! TranslatableBootForm::checkbox(__('Published'), 'status') !!}

<div class="row">
    <div class="col-sm-6">
        {!! BootForm::text(__('Start date'), 'start_date')->value(old('start_date') ? : $model->present()->datetimeOrNow('start_date'))->addClass('datetimepicker') !!}
    </div>
    <div class="col-sm-6">
        {!! BootForm::text(__('End date'), 'end_date')->value(old('end_date') ? : $model->present()->datetimeOrNow('end_date'))->addClass('datetimepicker') !!}
    </div>
</div>

{!! TranslatableBootForm::text(__('Venue'), 'venue') !!}
{!! TranslatableBootForm::textarea(__('Address'), 'address')->rows(4) !!}
{!! TranslatableBootForm::textarea(__('Summary'), 'summary')->rows(4) !!}
{!! TranslatableBootForm::textarea(__('Body'), 'body')->addClass('ckeditor') !!}
