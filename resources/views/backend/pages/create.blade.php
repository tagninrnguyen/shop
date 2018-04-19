@extends('backend.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Fields <span class="require">*</span> is required</h3>
                </div>
                <form role="form" method="post" action="{{ route('backend.page.store') }}">
                    @include('backend.pages._form', ['btnName' => __('buttons.general.crud.create')])
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(function () {
            $('#slug').slugify('#title');
        });
    </script>
@endpush