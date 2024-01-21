<div id="blueone">
    <div id="container-serv">
        @foreach($icons as $icon)
           <div id="single-card">
              <div class="icn-img">
                 <img src=" {{ $icon["icn"] }} " class="w-100">
              </div>
            <span class="text-light"> {{ $icon["description"] }} </span>
           </div>
        @endforeach   
    </div>
</div>

<style scoped>
#blueone{
    background-color: rgb(2, 130, 249);
}
#container-serv{
    width: 80vw;
    height: 15vh;
    margin-right: auto;
    margin-left: auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
#single-card{
    display: flex;
    align-items: center;
    margin: 0 1rem;
}
.inc-img{
    width: 30px;
}
span{
    font-size: 16px;
}
</style>