
@extends('backend.layouts.master')
@section('content')
<div class="content">  
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Cấu hình website</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            @if (Session::has('success'))
            <div class="alert bg-success alert-styled-left">
                <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                <span class="text-semibold">{{ Session::get('success') }}</span>
            </div>
            @endif
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="{!!route('admin.config.update', 1)!!}" class="form-validate-jquery" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                        <fieldset>
                            <legend class="text-semibold"><i class="icon-reading position-left"></i> Cài đặt website</legend>
                            <div class="form-group row" data-field="image">
                                <label class="col-md-3 col-form-label text-right">Logo website:</label>
                                <div class="col-lg-9 div-image">
                                    <div class="file-input file-input-ajax-new">
                                        <div class="file-preview ">
                                            <div class=" file-drop-zone">
                                            </div>
                                        </div>
                                        <div class="input-group file-caption-main">
                                            <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                            </div>
                                            <div class="input-group-btn input-group-append">
                                                <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-folder-open"></i>&nbsp; <span class="hidden-xs">Chọn</span>
                                                    <input type="file" id="image" class="upload-image" name="file_upload" data-fouc="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="image" class="image_data" value="{!!old('image')?:$config->image!!}">
                                   
                                </div>
                                
                            </div>
                            <div class="form-group row" data-field="favicon">
                                <label class="col-md-3 col-form-label text-right">Favicon:</label>
                                <div class="col-lg-9 div-image">
                                    <div class="file-input file-input-ajax-new">
                                        <div class="file-preview ">
                                            <div class=" file-drop-zone">
                                            </div>
                                        </div>
                                        <div class="input-group file-caption-main">
                                            <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                            </div>
                                            <div class="input-group-btn input-group-append">
                                                <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-folder-open"></i>&nbsp; <span class="hidden-xs">Chọn</span>
                                                    <input type="file" id="image" class="upload-image" name="file_upload" data-fouc="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="favicon" class="image_data" value="{!!old('favicon')?:$config->favicon!!}">
                                    
                                </div>
                 
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Tên trang web:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" value="{!!$config->title!!}" required="">
                                    {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Tên công ty:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="company_name" value="{!!old('company_name')?:$config->company_name!!}">
                                    {!! $errors->first('company_name', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Địa chỉ:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="address" value="{!!$config->address!!}">
                                    {!! $errors->first('address', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Hotline:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="hotline" value="{!!$config->hotline!!}">
                                    {!! $errors->first('hotline', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Điện thoại:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="phone" value="{!!$config->phone!!}">
                                    {!! $errors->first('phone', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Email:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email" value="{!!$config->email!!}">
                                    {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Facebook:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="facebook" value="{!!$config->facebook!!}">
                                    {!! $errors->first('facebook', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Twitter:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="twitter" value="{!!$config->twitter!!}">
                                    {!! $errors->first('twitter', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Kênh Youtube:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="youtube_channel" value="{!!$config->youtube_channel!!}">
                                    {!! $errors->first('youtube_channel', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Thời gian làm việc:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="working_hours" value="{!!$config->working_hours!!}">
                                    {!! $errors->first('working_hours', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Thẻ mô tả (SEO):</label>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" name="description">{!!$config->description!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Thẻ từ khóa (SEO):</label>
                                <div class="col-md-9">
                                    <textarea type="text" class="form-control" name="keywords">{!!$config->keywords!!}</textarea>
                                </div>
                            </div>

                        </fieldset>
                        <div class="text-right">
                            <a type="button" href="{{route('admin.config.index')}}" class="btn btn-secondary legitRipple">Hủy</a>
                            <button type="submit" class="btn btn-primary legitRipple">Lưu lại <i class="icon-arrow-right14 position-right"></i></button>
                        </div>


                    </form>
                </div>  
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
@parent

<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js') !!}"></script>
@stop