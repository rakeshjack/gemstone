@extends('gem.layouts.admin')

@section('content')
<div class="moments">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>ADD CATEGORY</h1>
                <div class="panel panel-default">
                    <form method="POST" action="{{ url('/store') }}" style="padding:20px">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="category_name">Category Name:</label>
                            <input type="text" name="name" class="form-control" value="">
                        </div>
                        <button type="submit" class="btn btn-default" name="ADD" value="">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop