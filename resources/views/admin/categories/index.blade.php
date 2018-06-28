@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') Category list @endslot
            @slot('parent') Home @endslot
            @slot('active') / Categories @endslot
        @endcomponent
    </div>
    <div class="container">
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square"> </i> Create a Category</a><br><br>
        <table class="table table-striped">
            <thead>
                <th >Name</th>
                <th>Public</th>
                <th class="text-right">Action</th>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->published }}</td>
                        <td><a href="{{ route('admin.category.edit', ['id' => $category->id]) }}"><i class="fa fa-edit"></i></a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center"><h2>Empty data</h2></td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{ $categories->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection