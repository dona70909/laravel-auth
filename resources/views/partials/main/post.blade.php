<section class="container-fluid">
    <div class="col-12">
        <img class="card-img-top img-fluid" src="{{$post->post_img}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$post->post_title}}</h5>
            <h6>{{$post->created_at}}</h6>
            <p class="card-text">
                {{$post->post_text}}
            </p>
            <a href="#" class="btn btn-primary">More info</a>
        </div>
    </div>
</section>