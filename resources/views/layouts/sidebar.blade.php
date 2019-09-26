<div class="col-md-4">

      <h3 >Recent Post</h3>
      <div class="card">  
        <div class="card-body">
          <ul>
            @foreach ($semua as $daftarpost)
            <li>
              <a class="card-link" href="{{route('details',$daftarpost->id)}}">{{$daftarpost->title}}
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>

      <h3 class="mt-2">Categories</h3>
      <div class="card">  
        <div class="card-body">
          <ul>
            <!-- <li>Categories 1</li> -->
            <li><a class="card-link" href="#">Categories 1</a></li>
            <li><a class="card-link" href="#">Categories 2</a></li>
            <li><a class="card-link" href="#">Categories 3</a></li>
            <li><a class="card-link" href="#">Categories 4</a></li>
          </ul>
        </div>
      </div>

    </div>