
<div class="card-container d-flex flex-wrap">
    @foreach($books as $book)
        <div class="Mycard">
            <div class="Mycard-top">
               <img src=" {{ $book["thumb"] }} " class="card-img-top w-100 h-100" alt="">
            </div>
            
            <div class="card-body">
               <p class="card-text text-light"> {{ $book["title"] }}</p>
            </div>
        </div>
    @endforeach
    <button class="btn btn-primary m-auto px-5 mb-5" type="submit">Load More</button>
</div>

<style scoped>
   .Mycard{
    width: calc((100% / 6) - 2rem);
    margin: 1rem;
   }
   .card-container{
    width: 70%;
    margin: auto;
   }
   .Mycard-top{
    height: 200px;
   }
   
</style>