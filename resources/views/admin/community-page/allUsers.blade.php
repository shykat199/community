@extends('admin.layouts.master')


@section('admin.content')

    <div class="content-page">
        <div class="content">
            <h4 class="page-title">All Users</h4>
            <div class="">
                <div class="card mt-2">

                    <div class="card-body">

                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success">
                                {{\Illuminate\Support\Facades\Session::get('success')}}
                            </div>
                        @endif

                        @if(\Illuminate\Support\Facades\Session::has('error'))
                            <div class="alert alert-success">
                                {{\Illuminate\Support\Facades\Session::get('error')}}
                            </div>
                        @endif

                            @php
                                $idx=1;
                            @endphp


                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Image</th>
                                <th>User Date Of Birth</th>
                                <th>User Gender</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
{{--                            @dd($allUserDetails)--}}
                            @foreach($allUserDetails as $user)
                                <tr>
                                    <td>{{$idx++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>Image</td>
                                    <td>{{$user->dob}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>
                                        <a href="{{route('community.user.show',$user->uId)}}" class="btn btn-warning">
                                            <i class="fa-solid fa-eye"></i></a>

                                        <a href="{{route('community.user.ban',$user->uId)}}" data-uId="{{$user->uId}}" class="btn btn-danger banUser">
                                            <i class="fa-solid fa-ban"></i></a>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).on('click', '.banUser', function (event) {
        event.preventDefault();
        let uId = $(this).attr("data-uId");
        {{--console.log({{route('community.user.post.delete')}}+postId);--}}
        // return false;
        Swal.fire({
            title: 'Do you want to ban this user?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            denyButtonColor: '#8CD4F5',
            confirmButtonText: `Ban User`,
            denyButtonText: `Don't Ban`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                let url = '{{ route("community.user.ban", ":slug") }}';
                url = url.replace(':slug', uId);
                window.location.href = url
                Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    });
</script>
