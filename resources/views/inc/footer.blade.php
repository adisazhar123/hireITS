<footer>
  <div class="footer-content">
    <div class="container container2">
      <div class="row">
        <div class="col-md-4">
          <div class="info-section">
            <a href="{{route('faq')}}"><li class="fa fa-globe"></li> Help & Support</a>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Freelancer</h4>
          <ul>
            <li>
              <a href="#">Projects</a>
            </li>
            <li>
              <a href="#">Top Freelancers</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>About</h4>
          <ul>
            <li>
              <a href="{{route('faq')}}" target="_blank">How it Works</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-4">
          <h5>@php
            use App\User;
            echo User::count();
          @endphp registered users</h5>
        </div>
        <div class="col-md-4">
          <h5>@php
            use App\Job;
            echo Job::count();
          @endphp jobs posted</h5>
        </div>
        <div class="col-md-4">
          <h5>hireITS ® is a registered Trademark of Adis, Ghisa and Modis</h5>
        </div>
      </div>
      <a href="{{URL::to('https://www.paypal.com')}}">Payment powered by <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/PayPal_logo.svg" alt="paypal_logo" width="100px"></a>
    </div>
  </div>
</footer>
