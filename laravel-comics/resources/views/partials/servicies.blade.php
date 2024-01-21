<div id="blueone">
    <div class="container-serv mx-auto d-flex align-items-center justify-content-around">
        @foreach($icons as $icon)
           <div class="single-card d-flex align-items-center">
              <div class="icnImg">
                 <img src=" {{ $icon["icn"] }} " class="w-50">
              </div>
            <span class="text-light fs-5"> {{ $icon["description"] }} </span>
           </div>
        @endforeach   
    </div>
</div>