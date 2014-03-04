<!-- .site-header -->
      <header class="site-header wrapper" role="banner"> 
        
        <!-- .row -->
        <div class="row"> 
		
              <!-- .site-title -->
              <hgroup>
                <h1 class="site-title"> <a href="{{ url('/') }}" rel="home"><img src="{{ asset('images/logo.png') }}" alt="koonema logo"></a> </h1>
                <h2 class="site-description">rumahnya fans drama asia ;)</h2>
              </hgroup>
              <!-- .site-title --> 
            
         
          
          	 <!-- social icons -->
             <!--<ul class="social">
                <li><a class="facebook" href="#">&#88;</a></li>
                <li><a class="twitter" href="#">&#95;</a></li>
                <li><a class="linkedin" href="#">&#118;</a></li>
                <li><a class="google" href="#">&#107;</a></li>
                <li><a class="vimeo" href="#">&#33;</a></li>
                <li><a class="pinterest" href="#"></a></li>
                <li><a class="flickr" href="#">&#98;</a></li>
                <!--<li><a class="dribble" href="#">&#83;</a></li>
                <li><a class="lastfm" href="#">&#117;</a></li>
                <li><a class="rss" href="#">&#42;</a></li>
                <li><a class="forrst" href="#">&#100;</a></li>
                <li><a class="skype" href="#">&#58;</a></li>
                <li><a class="picassa" href="#">&#56;</a></li>
                <li><a class="youtube" href="#">&#39;</a></li>
                <li><a class="behance" href="#">&#71;</a></li>
                <li><a class="tumblr" href="#">&#92;</a></li>
                <li><a class="blogger" href="#">&#74;</a></li>
                <li><a class="delicious" href="#">&#76;</a></li>
                <li><a class="digg" href="#">&#81;</a></li>
                <li><a class="friendfeed" href="#">&#102;</a></li>
                <li><a class="github" href="#">&#106;</a></li>
                <li><a class="wordpress" href="#">$</a></li>
                <li><a class="instagram" href="#"></a></li>-->
            <!--</ul>
            <!-- social icons -->
			
          
              <!-- #site-navigation -->
              <nav id="site-navigation" class="main-navigation clearfix" role="navigation">
                <ul>
                  <li class="current-menu-item"><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ url('dramas'); }}">Drama Lists</a></li>
                  <li><a href="{{ url('joinus'); }}">Join Us</a></li>
                  <li><a href="{{ url('contact'); }}">Contact</a></li>
                </ul>
                
                <a id="header-search-link" title="Search"></a>
                
              </nav>
              <!-- #site-navigation -->
				
                
                <div class="header-search">
                	
                    <form role="search" method="get" id="search-form" action="{{ url('search') }}" />
                      <input type="text" value="" name="s" id="search" placeholder="Cari Judul" />
                      <input type="submit" id="search-submit" title="Search" value="→" />
                    </form>
                    
                </div>
         
          	
        
          
        </div>
        <!-- .row -->
        
      </header>
      <!-- .site-header -->