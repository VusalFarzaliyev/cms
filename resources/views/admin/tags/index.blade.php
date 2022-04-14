@extends("admin.layouts.layout1")
@section('content')
    <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{"/dashboard"}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                <span class="breadcrumb-item active">Tags</span>
            </div>
            <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
        </div>
    </div>
    </div>
    <!-- /page header -->
    <div class="content">
        @if (session('danger'))
            <div class="alert alert-danger text-center col-md-6 mx-auto">
                {{ session('danger') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success text-center col-md-6 mx-auto">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-xl-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-left">
                                <a href="{{route('tag.create')}}" class="btn btn-warning ml-3"><i class="icon-add"></i> Add New</a>
                            </div>
                            <div class="float-right mr-5">
                                <span >{{$tags->links()}}</span>
                            </div>
                            <div class="table-responsive ">
                                @if(count($tags)>0)
                                <table class="table">
                                    <thead class="text-center">
                                    <tr class="table-border-solid">
                                        <th>Name</th>
                                        <th>Operation</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($tags as $tag)
                                        <tr >
                                            <td>{{$tag->name}}</td>
                                            <td>
                                                <a href="{{route('tag.edit',$tag->id)}}" class="list-icons-item text-primary"><i style="font-size: 25px" class="icon-pencil7"></i></a>
                                                <a href="{{route('tag.delete',$tag->id)}}" class="list-icons-item ml-2 text-danger" onclick="return confirm('Are you sure want to delete this user?')"><i style="font-size: 25px" class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <div class="alert alert-danger text-center mt-2" role="alert">
                                        Empty
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
