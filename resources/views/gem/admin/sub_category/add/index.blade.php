@extends('gem.layouts.admin')

@section('content')
<div class="moments">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>ADD SUB CATEGORY</h1>
                <div class="panel panel-default">
                    <form method="POST" action="{{ url('/sub-category-insert') }}" style="padding:20px">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="category_id">Select Category:</label>
                            <select class="form-control" name="category_id" required>
                                <option selected="true" disabled="disabled">Select Category</option>
                                @foreach($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>                                
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Sub Category Name:</label>
                            <input type="text"  name="name" class="form-control" value="">
                        </div>
                        <button type="submit" class="btn btn-default" name="ADD" value="">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop