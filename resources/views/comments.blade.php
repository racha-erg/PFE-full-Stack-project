@extends('layouts.master')

@section('Comments')

    <div class="container Commentarire_style">
        
        @auth
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
        
            <div class="form-group">
                <label for="comment">Ajouter un commentaire:</label>
                <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
            </div>
        
            <button type="submit" class="btn btn-primary">Envoyer</button>  <br>
        </form>
        @else
        <div class="alert info">
            <label class="close" title="close" for="alert3">
              <i class="icon-remove"></i>
            </label>
            <p class="inner">
                Please <a href="{{ route('login') }}">login</a> to post a comment.
            </p>
          </div>
        @endauth
    </div>
    {{-- code --}}
    <div class="container contained">
    @foreach ($comments as $comment)
        <div class="col-sm-12">
            <div class="panel panel-white post">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" width="50px" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b>{{ $comment->user->name }}</b></a>
                        </div>
                        <h6 class="text-muted time">{{ $comment->created_at->diffForHumans() }}</h6>
                    </div>
                </div> 
                <div class="post-description"> 
                    <p>{{ $comment->comment }}.</p>
                    <div class="stats">
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-thumbs-up icon"></i>20
                        </a>
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-share icon"></i>12
                        </a>
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <a href="#" class="btn btn-danger stat-item">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                
            
            </div>
        </div>
    @endforeach
</div>


    {{-- endcode --}}
   
@endsection
