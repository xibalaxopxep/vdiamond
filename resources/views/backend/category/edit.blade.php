
@extends('backend.layouts.master')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Cập nhật</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="{!!route('admin.category.update', ['type' => $type, 'id' => $record->id])!!}" class="form-validate-jquery" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                        <input type="hidden" name="type" value="{{$type}}"/>
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Danh mục cha</label>
                                <div class="col-md-9">
                                    <select class="form-control select-search" data-placeholder="Chọn danh mục cha" data-fouc name="parent_id">
                                        {!!$parent_html!!}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Tiêu đề <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" value="{!!$record->title!!}" required="">
                                    {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-right">Url <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="alias" value="{!!old('alias')?:$record->alias!!}">
                                    {!! $errors->first('alias', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 required control-label text-right text-semibold" for="image">Hình ảnh:</label>
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
                                                    <input type="file" id="image" class="upload-image" data-fouc="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="image" class="image_data" value="{{$record->image}}">
                                    <span class="help-block">Chỉ cho phép các file ảnh có đuôi <code>jpg</code>, <code>gif</code> và <code>png</code>. File có dung lượng tối đa 20M.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 text-right">Thứ tự </label>
                                <div class="col-md-2">
                                    <input type="text" name="ordering" class="form-control touchspin text-center" value="{{$record->ordering}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-check col-md-3 form-check-right">
                                    <label class="form-check-label float-right">
                                        Hiển thị
                                        <input type="checkbox" class="form-check-input-styled" @if($record->status)checked @endif name="status" data-fouc>
                                    </label>
                                </div>
                                <div class="form-check col-md-3 form-check-right">
                                    <label class="form-check-label float-right">
                                        Hiển thị trang chủ
                                        <input type="checkbox" class="form-check-input-styled" @if($record->is_home)checked @endif name="is_home"  data-fouc>
                                    </label>
                                </div>
                            </div>

                        </fieldset>
                        <div class="text-right">
                            <a type="button" href="{{route('admin.category.index', ['type' => $type])}}" class="btn btn-secondary legitRipple">Hủy</a>
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
<script src="{!! asset('assets/global_assets/js/plugins/forms/selects/select2.min.js') !!}"></script>

<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switchery.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switch.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/validation/validate.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/inputs/touchspin.min.js') !!}"></script>

<script src="{!! asset('assets/backend/js/custom.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js') !!}"></script>

@stop
