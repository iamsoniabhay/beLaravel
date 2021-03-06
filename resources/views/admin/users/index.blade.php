@extends('layouts.admin')

@section('content')
    @if(Session::has('deleted_user'))
        <p class="bg-danger text-center">{{session('deleted_user')}}</p>
    @endif

    <h1>Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><img height="46" width="46" src="{{$user->photo->path or '/images/300px-No_image_available.svg.png'}}" alt=""><img src="" alt=""></td>
                        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name or 'User has no role'}}</td>
                        <td>{{$user->is_active === 1 ? 'Active':'Inactive'}}</td>
                        <td>
                            {{$user->created_at}}<br>
                            <small>({{$user->created_at->diffForHumans()}})</small>
                        </td>
                        <td>
                            {{$user->updated_at}}<br>
                            <small>({{$user->updated_at->diffForHumans()}})</small>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@stop