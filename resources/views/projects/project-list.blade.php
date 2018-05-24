  <div id="load" style="position: relative;" class="animated fadeIn">
    <div class="available-jobs mb-3" style="background-color: white;">

    @foreach ($jobs as $job)
      <div class="jobs-body">
        <a class="body-link" href="{{route('view.project',['slug' => $job->slug])}}" style="display: block">
          <div class="row">
            <div class="col-sm-9 col-md-9">
              <div class="row">
                <h4>{{substr(strip_tags($job->name), 0, 55)}}</h4>
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
                    {{substr(strip_tags($job->description), 0, 270)}}...
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="job-tags">
                  @foreach ($job->harusbisaskill as $skill)
                    <a href="#">{{$skill->skills['name']}}</a>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3">
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
                <a href="{{route('view.project',['slug' => $job->slug])}}" class="btn bid-btn" type="button" name="button">bid now</a>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
  {{$jobs->links('vendor.pagination.bootstrap-4')}}

</div>
