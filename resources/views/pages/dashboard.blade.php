
    @extends('layout/app')
    @section('content') 
     {{-- <div class="container"> --}}
        {{-- <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
                 <div class="panel-heading">Dashboard</div>
             <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">create post</a>
                

                <h3>
                 your blog post
                </h3>
             
            </div>
             </div>
         </div>
         </div> 
     </div> --}}
<div class="container  dashbord-container ">
     <div class="card dashboard-card mt-5" style="width: 28rem;" style="text-align: center">
        <div class="card-body ">
          <h5 class="card-title mb-5" style="border-style: inset ; text-transform:uppercase ">
            Dashboard</h5>
          <a href="/posts/create" class="btn btn-primary">create post</a>

        <b> <i> <h3 class="m-3 "> 
            your blog posts: 
           </h3> </i></b>

           @if(count($posts) > 0)

           <table class="table table-striped">
            <tr>
              <th>
                Title

              </th>
              <th>
              </th>
              <th>
                
              </th>
            </tr> 
            @foreach($posts as $post)
            <tr>
              <td class="p-2">{{$post->title}}</td>
              <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary mt-3">Edit</a></td>
              <td>
{!! Form::open(['action' => ['App\Http\Controllers\postsController@destroy' , $post->id], 
'method' => 'POST' , 'class' => 'pull-right ']) !!}
{{Form::hidden('_method' , 'DELETE')}}
{{Form::submit('delete' , ['class' => 'btn btn-danger mt-3'])}}

{!!Form::close()!!}
              </td>
            </tr>
            @endforeach
           </table>
           
           @else
           <p>no post found</p>
           @endif
        </div>
      </div>
    </div>
     @endsection
 