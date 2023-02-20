
<h3 class="mb-4">(0) Comments</h3>
            @foreach (range(1,10) as $item )
            <div class="mb-3">
                <div class="d-flex align-items-start border-bottom mb-3">
                    <img src="https://www.gravatar.com/avatar/0bc83cb571cd1c50ba6f3e8a78ef1346?d=monsterid" alt="user_comments" class="img-fluid rounded-circle me-3" width="40">
                    <div>
                        <div>
                            <span>Luhur Sutekno</span>
                            <span>12 Juni 2023</span>
                        </div>
                        <div class="text-secondary mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium asperiores, id ab maxime veniam veritatis deleniti perferendis dolor ratione vitae, itaque laudantium dolorem cum praesentium cupiditate quidem assumenda deserunt?
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-primary"><i class="bi bi-send-fill"></i> Balas</button>
                            <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-fill"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i> Delete</button>
                            <button class="btn btn-sm btn-danger"><i class="bi bi-suit-heart-fill"></i> (2)</button>

                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-start border-bottom mb-3 ms-5">
                    <img src="https://www.gravatar.com/avatar/0bc83cb571cd1c50ba6f3e8a78ef1346?d=monsterid" alt="user_comments" class="img-fluid rounded-circle me-3" width="40">
                    <div>
                        <div>
                            <span>Joko</span>
                            <span>12 Juni 2023</span>
                        </div>
                        <div class="text-secondary mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium asperiores, id ab maxime veniam veritatis deleniti perferendis dolor ratione vitae, itaque laudantium dolorem cum praesentium cupiditate quidem assumenda deserunt?
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-primary"><i class="bi bi-send-fill"></i> Balas</button>
                            <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-fill"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i> Delete</button>
                            <button class="btn btn-sm btn-danger"><i class="bi bi-suit-heart-fill"></i> (2)</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <h3>Comments Form</h3>
            <div class="card my-4">
                <h5 class="card-header">Leave a comments:</h5>
                <div class="card-body">
                    <form action="/dashboard/" method="post">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group mb-2">
                            <p>Name :</p>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <p>Comment :</p>
                            <input type="text" class="form-control" name="comment" id="comment">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-send"></i> Send</button>
                    </form>
                </div>
            </div>
        </div>
