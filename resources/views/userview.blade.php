{{View:: make('title')}}
{{View:: make('menu')}}
@if(!empty($users))
    <!--<div>
        <label>Full Name</label>
        {{ $users->name }}
    </div>
    <div>
        <label>Email Address</label>
        {{ $users->email }}
    </div>
    <div>
        <label>Password</label>
        {{ $users->password }}
    </div>
    <button type="button" onclick="window.location='/userlist'">Cancel</button>
    <button type="button" onclick="window.location='/useredit?rid={{ $users->id }}'">Edit</button>
</form>-->

<form>
    <br><br><h1 class="h3 mb-3 fw-normal">Users Information</h1>
<div>
    <label>Full Name</label><br>
    {{ $users->name }}
</div>
<br>
<div>
    <label>Email Address</label><br>
    {{ $users->email }}
</div>
<br>
<div>
    <label>Password</label><br>
    {{ $users->password }}
</div>
<br>
<div class="d-flex justify-content-center">
    <button class="w-40 btn btn-sm btn-primary" type="button" onclick="window.location='/useredit?rid={{ $users->id }}'">Edit</button>
    </div>
    <br>
<div class="d-flex justify-content-center">
    <button class="w-30 btn btn-sm btn-secondary" type="button" onclick="javascript:history.back()">Cancel</button>
    </div>
    <!--<button type="button" onclick="javascript:history.back()">Cancel</button>-->
  </form>
</main>

@else
no record Found
@endif
{{View:: make('footer')}}