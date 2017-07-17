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
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Categories as $cat)
                        <tr>
                            <td style="color:#000;">{{ $cat->id }}</td>
                            <td style="color:#000;">{{ $cat->name }}</td>
                            <td><a href="{{ url('edit_page/'.$cat->id) }}">Edit</a> | <a href="{{ url('category-destroy/'.$cat->id) }}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop