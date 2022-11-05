<div class="card border-0 rounded-0 hover-shadow">
    <div class="card-img position-relative">
      <img class="card-img-top rounded-0" src="{{ asset('uploads/events/' . $item->image) }}" alt="event thumb">
      <div class="card-date"><span>18</span><br>December</div>
    </div>
    <div class="card-body">
      <!-- location -->
      <p><i class="ti-location-pin text-primary mr-2"></i>{{ $item->location }}</p>
      <a href="event-single.html"><h4 class="card-title">{{ $item->description }}</h4></a>
    </div>
  </div>
