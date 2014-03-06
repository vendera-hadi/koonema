                         
                        <!-- BLOG MASONRY -->
                        <header class="entry-header">
                                    <h1 >dramas list</h1>
                                    {{ Form::open(array('url' => 'dramas', 'method' => 'GET')) }}
                                  {{ Form::text('k', Input::get('k'), array('id' => 'search','placeholder'=>'cari drama')) }}
                                  {{ Form::close() }}
                                  </header>

                                  
                        <br><br>
                        <div class="blog-masonry">
                            
                            
                            
                            @foreach($dramas as $row)
                            <!-- .post -->										
                            <article class="post type-post hentry">
                                
                                <!-- .entry-header -->
                                <header class="entry-header">
                                    <h1 class="entry-title">
                                        <a href="{{ url('drama/'.$row['slugtitle']) }}" title="{{ $row['title'] }}" rel="bookmark">{{ $row['title'] }}</a>
                                    </h1>
                                </header>
                                <!-- .entry-header -->
                                 
                                 
                                <!-- .entry-meta --> 
                                
                                
                                <!-- .featured-image --> 
                                <div class="featured-image">
                                    <img src="{{ asset('images/drama/'.$row['image']); }}" alt="koonema {{ $row['title'] }}" title="koonema {{ $row['title'] }}" />
                                </div>
                                <!-- .featured-image --> 
                                    
                                
                                <!-- .entry-content -->     
                                <div class="entry-content">
                                    <p>{{ strip_tags(Str::words($row['description'], $words = 20, $end = '...') ) }}
                                    <a href="{{ url('drama/'.$row['slugtitle']) }}" title="{{ $row['title'] }}" class="more-link">Continue reading <span class="meta-nav">→</span></a></p>
                                </div>
                                <!-- .entry-content -->
                                
                                
                            </article>
                            <!-- .post -->	
                            @endforeach
                            
                            
                            
                                                             
                          
                          
                        </div>
                        <!-- BLOG MASONRY -->
                        
                        @if(Input::get('k'))
                        {{ $dramas->appends(array('k'=>Input::get('k')))->links() }}
                        @else
                        {{ $dramas->links() }}
                        @endif
                        