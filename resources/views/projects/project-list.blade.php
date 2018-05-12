  <div class="available-jobs mb-3" style="background-color: white;">
    <div class="jobs-head mb-3" style="padding: 20px">
      <select class="" name="">
        <option value="">Newest First</option>
        <option value="">Lowest Budget First</option>
        <option value="">Highest Budget First</option>
        <option value="">Lowest bid/entries</option>
        <option value="">Highest bid/entries</option>
      </select>
    </div>
    <div id="load" style="position: relative;">
      @foreach ($jobs as $job)
        <div class="jobs-body">
          <a class="body-link" href="{{route('view.project',['slug' => $job->slug])}}" style="display: block">
            <div class="row">
              <div class="col-md-10">
                <div class="row">
                  <h4>{{$job->name}}</h4>
                  <h6>
                    @php
                      $now = date_create(date("d-m-Y"));
                      $end = date_create(date_format(date_create($job->deadline), "d-m-Y"));
                      $diff=date_diff($now, $end);
                      echo $diff->format('%d day/s left');
                    @endphp
                  </h6>
                </div>
                <div class="row">
                  <div class="job-desc">
                    <p>
                      {{substr(strip_tags($job->description), 0, 300)}}
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="job-tags">
                    <a href="#">php </a>
                    <a href="#">photoshop </a>
                    <a href="#">laravel </a>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="row">
                  <div class="job-price">
                    <h4>
                      ${{number_format($job->price_min,2)}}
                      -
                      ${{number_format($job->price_max,2  )}}
                    </h4>
                    <small>(avg bid)</small>
                    <p>{{$job->no_of_bids}} bids</p>
                  </div>
                </div>
                <div class="row">
                  <a href="#" class="btn bid-btn" type="button" name="button">bid now</a>
                </div>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>


    </div>
    {{$jobs->links('vendor.pagination.bootstrap-4')}}
