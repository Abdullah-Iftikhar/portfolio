@extends('panel.layout.main')

@section('title' , __('messages.id_1'))
@section('page_title', __('messages.id_1'))

@section('body')
    <div class="section-wrapper">
        <a href="{{route('id1.create')}}">
            <button class="btn btn-primary btn-block col-md-2 ml-auto mg-b-10">{{ __('messages.add_product') }}</button>
        </a>
        <div class="table-responsive">
            <table class="table table-striped mg-b-0">
                <thead>
                <tr>
                    <th>ID#</th>
                    <th>{{__('messages.title')}}</th>
                    <th># {{__('messages.of_prices')}}</th>
                    <th>{{__('messages.action')}}</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td><a href="{{route('id1.prices',$product->id)}}">{{$product->title}}</a></td>
                        <td>{{$product->prices->count()}}</td>
                        <td>
                            <a href="{{route('id1.prices',$product->id)}}" title="View detail" class="mr-1">
                                <i class="fa fa-eye text-info"></i>
                            </a>
                            <a href="{{route('id1.edit',$product->id)}}" title="Edit product" class="mr-1">
                                <i class="fa fa-pencil text-success"></i>
                            </a>
                            <a onclick="return confirm('Are you sure? All related prices will be deleted as well.')" href="{{route('id1.delete',$product->id)}}" title="Delete product" class="mr-1">
                                <i class="fa fa-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center bg-gray">No Data Found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <section class="mt-3 ">
                {{$products->links()}}
            </section>
        </div><!-- bd -->
    </div>
@endsection
