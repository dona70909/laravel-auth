<section class="container-fluid">
    <div class="row d-flex justify-content-center wrapper-posts">
        @foreach ($posts as $post)
            <div class="card col-3 py-3">
                <img class="card-img-top img-fluid" src="{{$post->post_img}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$post->post_title}}</h5>
                    <p class="card-text">
                        {{$post->post_text}}
                    </p>
                    <a href="{{route('posts.show',$post)}}" class="btn btn-primary">More info</a>
                </div>
            </div>
        @endforeach
    </div>
</section>