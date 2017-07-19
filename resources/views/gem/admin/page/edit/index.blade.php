@extends('gem.layouts.admin')

@section('content')
<div class="moments">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <h1>UPDATE PAGE</h1>
                <div class="panel panel-default">
                    <form method="POST" action="{{ url('/page-update') }}" style="padding:20px">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$page->id }}">
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text"  name="title" class="form-control" value="{{$page->title }}">
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select Sub-Category:</label>
                            <select class="form-control" name="sub_category_id" required>
                                <option selected="true" disabled="disabled" >Select Sub-Category</option>
                                @if($sub_category !=null)
                                @foreach($sub_category as $cat)
                                <option value="{{ $cat->id }}"  {{ $cat->id==$page->sub_category_id ? " selected " : "" }}>{{ $cat->name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="comment">Content:</label>
                            <textarea name="content" class="form-control my-editor">{{$page->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-default" name="UPDATE" value="">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@stop