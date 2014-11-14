@extends('layouts.master')
 

@section('title')
 
@section('content')

<body background="http://www.sonicavenger.com/uploaded_images/ClearBlueSky-741012.jpg">


<div  style="border:5px solid #ff7400;width:60%;height:600px;;float:left;margin-left:50px;">
<div  style="backround-color:#cff;">
<h2>E-botics Kenya</h2>
<p>
    <h4> Hello <i class="fa fa-user"></i>  {{ Auth::user()->profile->firstname }}<br> Welcome to E-bortics Learning centre   </h4>
</p>
<p>
<!---<img src="{{Auth::user()->gravatar()}}" alt="" />-->

</p>
 <a href="/posts" class=" btn btn-primary">READ SOMETHING EXCITING</a>


<p><a href="{{action('AuthController@logout')}}">Logout</a></p>
</div>
</div>
<div class="module-search module">
    <h2 class="module-header"></h2>
    <div class="module-content">
        <form id="search-blog" method="get"
          action="http://www.robotbooks.com/search">
            <input type="search" name="filter.q" results="5" value="" />
            <input type="submit" value="Search" />
        </form>
    </div>
</div>
<div  style="backround:#fff;border:5px solid #ff7400;width:30%;float:left;margin-left:20px;">
<h6>Who Else Uses E-botics</h6>
<table>
    <thead>
      <th>Photo</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
        <tr>
           <td><i class="fa fa-user"></i> </td>
            <td>{{ $profile->firstname }}</td>
            <td>{{ $profile->lastname }}</td>
            <td>{{ $profile->phone }}</td>
            <td>
                @if(Auth::user()->id == $profile->user_id)
                    <a href="{{route('profile.edit', [$profile->id])}}">
                        Update
                    </a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

</body>


@stop