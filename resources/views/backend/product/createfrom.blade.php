@extends('layouts.master_backend')
@section('content')
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Product Create</h6>
                            <form action="{{ url('admin/product/insert')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                            <div class="form-floating mb-3">
                            <input
                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="mt-2">
                                        @error('image')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                            <div class="form-floating mb-3">
                            <input
                                      type="text"
                                      name="price"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                <label for="floatingPassword">Price</label>
                            </div>
                            <div class="mt-2">
                                        @error('image')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                            <div class="form-floating mb-3">
                            <input
                                      type="text"
                                      name="description"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                <label for="floatingPassword">Description</label>
                            </div>
                            <div class="mt-2">
                                        @error('image')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                            <div class="form-floating mb-3">
                            <select class="form-select" name="category_id" id="exampleFormControlSelect1" aria-label="Default select example">
                                    <option selected>เลือกประเภทสินค้า</option>
                                    @foreach($category as $cat)

                                      <option value="{{ $cat -> category_id}}">
                                        {{$cat -> name}}
                                      </option>
                                      @endforeach
                                </select>
                                <div class="mt-2">
                                        @error('image')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                            
                                <label for="floatingSelect">กรุณาเลือกประเภทสินค้า</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control bg-dark" id="inputGroupFile02" />
                            </div>
                            <div class="mt-2">
                                        @error('image')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                            
                                      <input type="submit" value="บันทึก" class="btn btn-success mt-3">
                                    <a href="{{ route('p.index')}}" class="btn btn-primary mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                  </form>
                        </div>
                    </div>
                </div>
</div>

@endsection