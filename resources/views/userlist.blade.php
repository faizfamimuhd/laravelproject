{{View:: make('title')}}
{{View:: make('menu')}}

<div class="table-responsive">
    <table class="table table-striped table-sm">
    @if(count($listofuser))
    <thead>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Create Date</th>
            <th>Updated Date</th>

        </tr>
    </thead>
    <tbody>
        @foreach($listofuser as $user)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><a href="/userview?rid={{ $user->id }}">{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->created_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A'}}</td>
            <td>{{$user->updated_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A'}}</td>
            <td>
                <a  href="/useredit?rid={{ $user->id }}" span class="material-symbols-sharp">add_box</span></a>
                <a href="/deleteuser?rid={{ $user->id }}" span class="material-symbols-sharp">delete</span></a>
            </td>
        </tr>
        @endforeach
        <style>
.h-5 {
height: 1em;
} .flex {
text-align: center;
width: 100%;
} .leading-5 {
padding: 0.8em;
}

.material-symbols-sharp {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}

</style>

<tr><td colspan="7">
    {{ $listofuser->appends(['q' => Request::get('q')])->links() }}
</td></tr>
    </tbody>
    @else
    <td>No Record Found</td>
    @endif
</table>
</div>
<br>
<div class="d-flex justify-content-center">
<button class="w-30 btn btn-sm btn-secondary" type="button" onclick="javascript:history.back()">Cancel</button>
</div>
{{View:: make('footer')}}