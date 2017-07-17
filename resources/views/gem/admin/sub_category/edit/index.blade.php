@extends('gem.layouts.admin')

@section('content')
<div class="moments">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>ADD SUB CATEGORY</h1>
                <div class="panel panel-default">
                    <form method="POST" action="{{ url('/sub-category-update') }}" style="padding:20px">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$sub_category->id }}">
                        <div class="form-group">
                            <label for="category_id">Select Category:</label>
                            <select class="form-control" name="category_id" required>
                                <option selected="true" disabled="disabled">Select Category</option>
                                @if($category !=null)
                                @foreach($category as $cat)
                                <option  value="{{ $cat->id }}" {{ $sub_category->category_id==$cat->id ? " selected " : "" }}  >{{ $cat->name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Sub Category Name:</label>
                            <input type="text"  name="name" class="form-control" value="{{ $sub_category->name }}">
                        </div>
                        <button type="submit" class="btn btn-default" name="UPDATE" value="">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop