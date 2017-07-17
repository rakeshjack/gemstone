@extends('gem.layouts.admin')
@section('content')
<div class="moments">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>View Categories</h1>          
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Sub Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sub_category as $cat)
                        <tr>
                            <td style="color:#000;">{{ $cat->id }}</td>
                            <td style="color:#000;">{{ $cat->category_id }}</td>
                            <td style="color:#000;">{{ $cat->name }}</td>
                            <td><a href="{{ url('subcategory/'.$cat->id.'/edit') }}">Edit</a> | <a href="{{ url('category-destroy/'.$cat->id) }}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop