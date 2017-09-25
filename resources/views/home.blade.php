@extends('layouts.insprme')
@section('title', $title)
@section('content')
<!---- Section Start ----->
<div class="banner-main"><img src="{{ asset('images/banner-main.jpg') }}"/></div>
<section>
	<div class="container">
        <h1>Welcome to <span>Inspr me</span>.</h1>
        <div class="welcome-content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                </div>
    </div>
</section>

<section class="ourservie-bg">
	<div class="container">
    	<h1>how does it <span>work</span></h1>
        <div class="our-service-box">
        	<ul>
            	<li>
                	<div class="service-icon"><img src="images/service-icon1.png"/></div>
                    <h3>Get an invite</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>                    
                </li>
                <li>
                	<div class="service-icon"><img src="images/service-icon2.png"/></div>
                    <h3>Create a profile</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </li>
                <li>
                	<div class="service-icon"><img src="images/service-icon3.png"/></div>
                    <h3>Get in touch</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </li>
                <li>
                	<div class="service-icon"><img src="images/service-icon4.png"/></div>
                    <h3>Share a coffee</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </li>
                <li>
                	<div class="service-icon"><img src="images/service-icon5.png"/></div>
                    <h3>Get inspired</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!---- Section End ----->
@endsection
