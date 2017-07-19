@extends('gem.layouts.admin')
@section('content')
<div class="moments">
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <h1>PAGE</h1>
                <table class="table">
                    <tr>
                        <td style="color:#000;">Id</td>
                        <td style="color:#000;">Title</td>
                        <td style="color:#000;">Sub Category Id</td>
                        <td style="color:#000;">Content</td>
                        <td style="color:#000;">Action</td>
                    </tr>
                    @foreach($page as $page)
                    <tr>
                        <td style="color:#000;">{{ $page->id }}</td>
                        <td style="color:#000;">{{ $page->title }}</td>
                        <td style="color:#000;">{{ $page->sub_category_id }}</td>
                        <td style="color:#000;">{{ $page->content }}</td>
                        <td><a href="{{ url('show-page/'.$page->id) }}">Edit</a> | <a href="{{ url('page-destroy/'.$page->id) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@stop