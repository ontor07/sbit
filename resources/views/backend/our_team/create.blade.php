@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('team.create_title')
        @endslot

        @if(Auth::user()->can('team index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        team.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        @lang('team.view')
        @endslot

        @endif

        @endcomponent
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('our_team.store')}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="team_name_en">@lang('team.team_name_en')</label><span class="text-danger">*</span>
                                    <input type="text" name="team_name_en" class="form-control  mt-1 @error('team_name_en') is-invalid @enderror" id="team_name_en" value="{{old('team_name_en')}}">
                                    @error('team_name_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="team_name_bn">@lang('team.team_name_bn')</label>
                                    <input type="text" name="team_name_bn" class="form-control  mt-1  @error('team_name_bn') is-invalid @enderror" id="team_name_bn" value="{{old('team_name_bn')}}">
                                    @error('team_name_bn')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="team_name_en">@lang('team.team_name_en')</label><span class="text-danger">*</span>
                                    <input type="text" name="team_name_en" class="form-control  mt-1 @error('team_name_en') is-invalid @enderror" id="team_name_en" value="{{old('team_name_en')}}">
                                    @error('team_name_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="team_name_bn">@lang('team.team_name_bn')</label>
                                    <input type="text" name="team_name_bn" class="form-control  mt-1  @error('team_name_bn') is-invalid @enderror" id="team_name_bn" value="{{old('team_name_bn')}}">
                                    @error('team_name_bn')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="team_name_en">@lang('team.team_name_en')</label><span class="text-danger">*</span>
                                    <input type="text" name="team_name_en" class="form-control  mt-1 @error('team_name_en') is-invalid @enderror" id="team_name_en" value="{{old('team_name_en')}}">
                                    @error('team_name_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="team_name_bn">@lang('team.team_name_bn')</label>
                                    <input type="text" name="team_name_bn" class="form-control  mt-1  @error('team_name_bn') is-invalid @enderror" id="team_name_bn" value="{{old('team_name_bn')}}">
                                    @error('team_name_bn')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="team_name_en">@lang('team.team_name_en')</label><span class="text-danger">*</span>
                                    <input type="text" name="team_name_en" class="form-control  mt-1 @error('team_name_en') is-invalid @enderror" id="team_name_en" value="{{old('team_name_en')}}">
                                    @error('team_name_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="linkedin">@lang('team.linkedin')</label>
                                    <input type="text" name="linkedin" class="form-control  mt-1  @error('linkedin') is-invalid @enderror" id="linkedin" value="{{old('linkedin')}}">
                                    @error('linkedin')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="image">@lang('common.image')</label>
                                    <input type="file" name="image" class="form-control  mt-1  @error('image') is-invalid @enderror" id="image" value="{{old('image')}}">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-2">
                                    <label for="status">@lang('common.status')</label><span class="text-danger">*</span>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="radio" value="1" name="status" checked>
                                            <span class="form-check-label">
                                                @lang('common.active')
                                            </span>
                                        </label>
                                        <label class="form-check">
                                            <input class="form-check-input" type="radio" value="0" name="status">
                                            <span class="form-check-label">
                                                @lang('common.inactive')
                                            </span>
                                        </label>

                                    </div>
                                </div>
                                <div class="col-12 mt-4" style="text-align: right">
                                    <button type="submit" id="submit" class="btn  btn-success"> <i class="fa fa-save"></i> @lang('common.save_now')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

{{-- @push('footer_script')
<script>

    $('#formData').submit(function(e){
        e.preventDefault();
        let formData = $('#formData').serialize();
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },
            url : '{{route('menu_label.store')}}',
            type : 'POST',
            data : formData,
            success : function(response)
            {

            },
            error: function (xhr) {
            $.each(xhr.responseJSON.errors, function(key,value) {
                $('#error_'+key).html(value);
                $('input#'+key).addClass('is-invalid');
            });
            },
        });
    });

</script>
@endpush --}}

@endsection
