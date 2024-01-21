
<div class="card-container d-flex flex-wrap">
    @foreach($books as $book)
        <div class="Mycard">
            <div class="inner">
                <div class="front">
                    <div class="Mycard-top">
                       <img src=" {{ $book["thumb"] }} " class="card-img-top w-100 h-100" alt="">
                    </div>
                    
                    <div class="card-body">
                       <p class="card-text text-light"> {{ $book["title"] }}</p>
                    </div>
                </div>
                <div class="back">
                    <p class="card-text text-light"> {{ $book["type"] }}</p>
                    <p class="card-text text-light"> {{ $book["series"] }}</p>
                    <p class="card-text text-light"> {{ $book["description"] }}</p>
                    <p class="card-text text-light"> {{ $book["price"] }}</p>
                </div>
            </div>        
        </div>
    @endforeach
    <button class="btn btn-primary m-auto px-5 mb-5" type="submit">Load More</button>
</div>