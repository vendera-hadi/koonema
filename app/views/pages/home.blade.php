                         
                        <!-- BLOG MASONRY -->
                        <div class="blog-masonry">
                            
                            
                            
                            @foreach($posts as $row)
                            <!-- .post -->										
                            <article class="post type-post hentry">
                                
                                <!-- .entry-header -->
                                <header class="entry-header">
                                    <h1 class="entry-title">
                                        <a href="{{ url('view/'.$row['slugtitle']) }}" title="{{ $row['title'] }}" rel="bookmark">{{ $row['title'] }}</a>
                                    </h1>
                                </header>
                                <!-- .entry-header -->
                                 
                                 
                                <!-- .entry-meta --> 
                                  
                                
                                <!-- .featured-image --> 
                                <div class="featured-image">
                                    <img src="{{ asset('images/posts/'.$row['image']); }}" alt="koonema {{ $row['title'] }}" title="koonema {{ $row['title'] }}"/>
                                </div>
                                <!-- .featured-image --> 
                                    
                                
                                <!-- .entry-content -->     
                                <div class="entry-content">
                                    <p>{{ strip_tags(Str::words($row['description'], $words = 20, $end = '...') ) }}
                                    <a href="{{ url('view/'.$row['slugtitle']) }}" title="{{ $row['title'] }}" class="more-link">Continue reading <span class="meta-nav">→</span></a></p>
                                </div>
                                <!-- .entry-content -->
                                
                                
                            </article>
                            <!-- .post -->	
                            @endforeach
                            
                            
                            
                                                             
                          
                          
                        </div>
                        <!-- BLOG MASONRY -->
                        @if(isset($next_offset))

                        @if($current_offset < $posts->getLastPage())
                        <!-- post nav -->
                        <nav class="navigation" role="navigation">
                            <div class="nav-previous"><a href="{{ '?page='.$next_offset }}"><span class="meta-nav">←</span> Older posts</a></div>
                        </nav>
                        <!-- post nav -->
                        @endif

                        @else
                            {{ $posts->appends(array('s'=>Input::get('s')))->links() }}
                        @endif