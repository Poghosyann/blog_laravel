@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') Create a category @endslot
            @slot('parent') Home  @endslot
            @slot('active')  / Categories @endslot
        @endcomponent

        <hr>

            <form class="form-horizontal" action="{{ route('admin.category.store') }}" method="post">
                {{ csrf_field() }}

                <!-- form include -->
                @include('admin.categories.partials.form')
            </form>

    </div>
@endsection