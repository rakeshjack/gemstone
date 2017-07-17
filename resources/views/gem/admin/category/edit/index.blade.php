@extends('gem.layouts.admin')
@section('content')
<div class="moments">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>EDIT CATEGORY</h1>
                <div class="panel panel-default">
                    <form method="POST" action="{{ url('/category-update/') }}" style="padding:20px">
                        <input type="hidden" name="name" value="{{$Category->id }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="category_name">Category Name:</label>
                            <input type="text" name="name" class="form-control" value="{{$Category->name }}">
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Parent Id:</label>
                            <input type="text"  name="parent_id" class="form-control" value="{{$Category->parent_id}}">
                        </div>
                        <button type="submit" class="btn btn-default" name="submit" value="">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop