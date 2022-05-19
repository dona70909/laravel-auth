<section class="container-fluid">
    <div class="row justify-content-center p-5">
        <div class="col-8">
            <form action="{{route('posts.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title" >Title</label>
                    <input type="text" class="form-control" id="title" name="post_title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  rows="3" type="text" class="form-control" id="post_description" name="description" placeholder="description"></textarea>
                </div>

                <div class="form-group">
                    <label for="img"> Upload image </label>
                    <input type="text" class="form-control" id="thumb" name="post_img" placeholder="img">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>