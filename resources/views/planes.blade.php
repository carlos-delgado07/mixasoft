@extends('layouts.app')

@section('content')

<main class="main">

<!-- Pricing Section -->
<section id="pricing" class="pricing section">

  <div class="container">

    <div class="row gy-4">

      <!-- Basic Plan -->
      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-item">
          <h3>Basic Plan</h3>
          <p class="description">Perfect for small businesses or startups taking their first step into digitalization.</p>
          <h4><sup>$</sup>0<span> / month</span></h4>
          <a href="#" class="cta-btn" style="background-color: #000; color: #fff;">Start Free Trial</a>
          <p class="text-center small">No credit card required</p>
          <ul>
            <li><i class="bi bi-check"></i> <span>Access to dashboard</span></li>
            <li><i class="bi bi-check"></i> <span>Basic user management</span></li>
            <li><i class="bi bi-check"></i> <span>Email support</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Third-party integrations</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Custom reports</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Developer API access</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Priority support</span></li>
          </ul>
        </div>
      </div>

      <!-- Professional Plan -->
      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="pricing-item featured">
          <p class="popular">Most Popular</p>
          <h3>Professional Plan</h3>
          <p class="description">Best for growing companies that need automation and dedicated features.</p>
          <h4><sup>$</sup>29<span> / month</span></h4>
          <a href="#" class="cta-btn" style="background-color: #000; color: #fff;">Start Free Trial</a>
          <p class="text-center small">No credit card required</p>
          <ul>
            <li><i class="bi bi-check"></i> <span>All features from Basic Plan</span></li>
            <li><i class="bi bi-check"></i> <span>Workflow automation</span></li>
            <li><i class="bi bi-check"></i> <span>App integrations</span></li>
            <li><i class="bi bi-check"></i> <span>Advanced reports</span></li>
            <li><i class="bi bi-check"></i> <span>Live chat support</span></li>
            <li><i class="bi bi-check"></i> <span>Multi-user dashboard</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Dedicated technical support</span></li>
          </ul>
        </div>
      </div>

      <!-- Enterprise Plan -->
      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="pricing-item">
          <h3>Enterprise Plan</h3>
          <p class="description">Tailored for large-scale businesses that require complete control and customization.</p>
          <h4><sup>$</sup>49<span> / month</span></h4>
          <a href="#" class="cta-btn" style="background-color: #000; color: #fff;">Start Free Trial</a>
          <p class="text-center small">No credit card required</p>
          <ul>
            <li><i class="bi bi-check"></i> <span>All features from Professional Plan</span></li>
            <li><i class="bi bi-check"></i> <span>Full API access</span></li>
            <li><i class="bi bi-check"></i> <span>Custom implementation</span></li>
            <li><i class="bi bi-check"></i> <span>Dedicated technical support</span></li>
            <li><i class="bi bi-check"></i> <span>Strategic consulting</span></li>
            <li><i class="bi bi-check"></i> <span>Automatic backups and security</span></li>
            <li><i class="bi bi-check"></i> <span>Unlimited scalability</span></li>
          </ul>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Pricing Section -->

</main>
@endsection
