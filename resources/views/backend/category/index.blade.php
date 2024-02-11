@extends('layouts.master_backend')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Category Tables</h6>
                            <a href="{{ route('c.from')}}" class="btn btn-outline-primary m-2"> เพิ่มข้อมูล</a>
                            <div class="table-responsive table-hover">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($c as $cat)
                                    <tr>
                                    <td>{{ $c ->firstItem() + $loop->index }}</td>
                                    <td>{{ $cat ->name }}</td>
                                    <td>{{ $cat ->created_at}}</td>
                                    <td>{{ $cat ->updated_at }}</td>
                                    <td>
                                    <a href="{{ url('admin/category/edit/'.$cat->category_id)}}"><box-icon name='edit-alt'></box-icon></a>
                                    <a href="{{url('admin/category/delete/'.$cat->category_id)}}"><box-icon name='x'></box-icon></a>
                                  </td>
                                  </tr>
                                  @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection