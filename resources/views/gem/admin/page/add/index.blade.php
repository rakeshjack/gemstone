@extends('gem.layouts.admin')

@section('content')
<div class="moments">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <h1>ADD PAGE</h1>
                <div class="panel panel-default">
                    <form method="POST" action="{{ url('/sub-category-insert') }}" style="padding:20px">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text"  name="title" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select Sub-Category:</label>
                            <select class="form-control" name="sub_category_id" required>
                                <option selected="true" disabled="disabled">Select Sub-Category</option>
                                @foreach($sub_category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="comment">Content:</label>
                            <textarea name="content" class="form-control" rows="5" id="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default" name="ADD" value="">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({selector: '#content'});</script>
@stop