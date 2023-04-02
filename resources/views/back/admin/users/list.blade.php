@extends('panel.layout.main')

@push('style-section')
@endpush

@section('title')
    Users List
@endsection

@section('page_title')
    Users List
@endsection

@section('body')

    {{--Start Content--}}
    <div class="section-wrapper">
{{--        <div class="row justify-content-end">--}}
{{--            <div class="col-md-2 col-lg-2 col-sm-12">--}}
{{--                <a href="{{route('admin.user.add')}}" class="btn btn-primary active btn-block mg-b-10">Add User</a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="table-responsive">
            @if(count($users) > 0)
                <table class="table table-striped">
                    <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($users as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>

                            <td>
                                <a onclick="return confirm('Are you sure?')" href="{{--{{route('admin.user.delete', encrypt($row->id))}}--}}" title="Delete record"
                                   class="mr-1">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                No Record found.
            @endif
        </div>
        @include('panel.include.pagination',['paginator' => $users])
    </div>
    {{--End Content--}}
@endsection

@push('script-section')
    <script>

    </script>
@endpush
