@extends('layouts.master_backend')
@section('content')
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Category Create</h6>
                            <form method="POST" action="{{ url('admin/category/insert')}}">
                                    @csrf
                                <div class="mb-3">
                                
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกประเภทสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                </div>
                                <div class="mt-3">
                                    @error('name')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <input type="submit" value="บันทึก" class="btn btn-success">
                                    <a href="{{ route('c.index')}}" class="btn btn-danger mx-2">ย้อนกลับ</a>
                          
                            </form>
                        </div>
                    </div>
</div>
</div>

@endsection
