@extends('gem.layouts.admin')

@section('content')
<div class="moments">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <h1>ADD PAGE</h1>
                <div class="panel panel-default">
                    <form method="POST" action="{{ url('/add-page-insert') }}" style="padding:20px" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text"  name="title" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select Category:</label>
                            <select class="form-control main_category" name="category_id" required>
                                <option selected="true" disabled="disabled">Select Category</option>
                                @foreach($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>                                
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select Sub-Category:</label>
                            <select class="form-control" name="sub_category_id" id="sub_category_id" required>
                                <option selected="true" disabled="disabled">Select Sub-Category</option>
                            </select>
                        </div>
                        <div class="form-group" id="content_status">
                            <label for="comment">Content:</label>
                            <textarea name="content" class="form-control my-editor"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Title">Images:</label>
                            <input type="file"  name="image" class="form-control" value="" required>
                        </div>
                        <button type="submit" class="btn btn-default" name="ADD" value="">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
var editor_config = {
    path_absolute: "/",
    selector: "textarea.my-editor",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback: function (field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
            file: cmsURL,
            title: 'Filemanager',
            width: x * 0.8,
            height: y * 0.8,
            resizable: "yes",
            close_previous: "no"
        });
    }
};

tinymce.init(editor_config);
</script>
<script>
    $(document).ready(function () {
        $(".main_category").change(function () {
            var category_id = $(this).val();
            if (category_id ==1) {
                $('#content_status').hide();
            } else {
                $('#content_status').show();
            }
            $.ajax({
                type: "get",
                url: "fetch-sub-categorys",
                data: {'category_id': category_id},
                success: function (data) {
                    var htmlString = "";
                    htmlString += "<option selected='true' disabled='disabled'>Select Sub-Category</option>";
                    for (var i=0;i<data.length;i++) {
                        htmlString += '<option value="'+ data[i].id+'">' + data[i].name + '</option>';
                    }
                    $("#sub_category_id").html(htmlString);
                }
            });
        });
    });
</script>
@stop