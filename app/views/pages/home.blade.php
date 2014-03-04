                         
                        <!-- BLOG MASONRY -->
                        <div class="blog-masonry">
                            
                            
                            
                            @foreach($posts as $row)
                            <!-- .post -->										
                            <article class="post type-post hentry">
                                
                                <!-- .entry-header -->
                                <header class="entry-header">
                                    <h1 class="entry-title">
                                        <a href="blog-single.html" title="Permalink to Performance Optimization for Websites" rel="bookmark">{{ $row['title'] }}</a>
                                    </h1>
                                </header>
                                <!-- .entry-header -->
                                 
                                 
                                <!-- .entry-meta --> 
                                <footer class="entry-meta">
                                    posted in 
                                    <a href="#" title="View all posts in Web Design">Web Design</a>
                                    on <a href="#" title="11:15 pm" rel="bookmark"><time class="entry-date" datetime="2012-11-09T23:15:57+00:00">November 9, 2012</time></a>
                                    <span class="by-author"> by <span class="author vcard">
                                    <a class="url fn n" href="#" title="View all posts by ahmetsali" rel="author">Albert Einstein</a></span></span>			
                                </footer>
                                <!-- .entry-meta -->  
                                
                                <!-- .featured-image --> 
                                <div class="featured-image">
                                    <img src="{{ asset('images/posts/'.$row['image']); }}" alt="blog-image" />
                                </div>
                                <!-- .featured-image --> 
                                    
                                
                                <!-- .entry-content -->     
                                <div class="entry-content">
                                    <p>{{ strip_tags(Str::words($row['description'], $words = 20, $end = '...') ) }}
                                    <a href="blog-single.html" class="more-link">Continue reading <span class="meta-nav">→</span></a></p>
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