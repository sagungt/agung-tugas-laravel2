@extends('product.template')

@section('title', 'List Product')

@section('content')
  <h1 class="text-center text-4xl font-sans my-10 font-bold">List Products</h1>
  <div class="w-full flex">
    <a href="{{ route('product.store') }}" class="h-10 px-6 font-semibold rounded-full bg-violet-600 text-white my-2 flex items-center" type="button">
      Add Product
    </a>
  </div>
  <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-4 px-2 md:mx-0 lg:px-0">
    @foreach ($products as $product)
      @includeIf('product.product', ['product' => $product])
    @endforeach
  </div>
@endsection