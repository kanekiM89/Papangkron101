@extends('layouts.master_backend')
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Product Tables</h6>
                            <a href="{{ route('p.from')}}" class="btn btn-outline-primary m-2"> เพิ่มข้อมูล</a>
                            <div class="table-responsive table-hover">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Category_id</th>
                                        <th>images</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($product as $p)
                                      <tr>
                                      <td>{{$product->firstItem() + $loop->index}}</td> 
                                      <td>{{$p -> name}}</td>
                                      <td>{{$p -> category->name}}</td>
                                      <td><img src="{{asset ('backend/product/resize/'. $p ->image)}}" alt=""></td>
                                      <td>{{$p -> price}}</td>
                                      <td>{{$p -> description}}</td>
                                      <td>{{$p -> created_at}}</td>
                                      <td>{{$p -> updated_at}}</td>
                                      <td>
                                        <a href="{{ url('admin/product/edit/'.$p->product_id)}}"><box-icon name='edit-alt'></box-icon></a>
                                        <a href="{{url('admin/product/delete/'.$p->product_id)}}"><box-icon name='x'></box-icon></a>
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