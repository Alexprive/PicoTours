<div id="featuredguides_container">

        @foreach($cities as $city)

<div class="card-deck">
    <div class="card">
          <img class="card-img-top" src="/storage/city_images/{{$city->city_image}}" alt="Card image cap">
          <div class="card-body"><h5 class="group card-title inner list-group-item-heading">{{ $city->name }}</h5>
          <h5 class="card-title">{{ $city->name }}</h5>
          <p class="card-text">{!! $city->description !!}</p>
          </div>
          <div style="align-self:center">
                <a class="btn btn-info" href="/pages/citytemplate/{{$city->id}}">Visit Profile <i class="fas fa-angle-double-right"></i></a>
          </div><br>
          </div>

          <div class="card">
          <img class="card-img-top" src="img/portrait2.jpeg" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Maria</h5>
          <p class="card-text">After getting my fashion degree I like to combine my passion for fashion with showing visitors around.</p>
          </div>
          <div style="align-self:center">
                <a class="btn btn-info" href="http://www.jquery2dotnet.com">Visit Profile <i class="fas fa-angle-double-right"></i></a>
          </div><br>
          </div>
          
          <div class="card">
          <img class="card-img-top" src="img/portrait3.jpeg" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Alex</h5>
          <p class="card-text">As a party animal I love to take visitors of my city out for a club crawl. Can you handle it?</p>
          </div>
          <div style="align-self:center">
                <a class="btn btn-info" href="http://www.jquery2dotnet.com">Visit Profile <i class="fas fa-angle-double-right"></i></a>
          </div><br>
          </div>
          <div class="card">
                <img class="card-img-top" src="img/portrait4.jpeg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Matthew</h5>
                <p class="card-text">Everybody loves Amsterdam, but experiencing the city as a local is an unique experience that only few have had. </p>
                </div>
                <div style="align-self:center">
                      <a class="btn btn-info" href="http://www.jquery2dotnet.com">Visit Profile <i class="fas fa-angle-double-right"></i></a>
                </div><br>
                </div>
                @endofeach
          </div>
       </div>
@endsection