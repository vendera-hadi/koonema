<div class="blog-single readable-content">
                            
                            
                            <!-- .hentry -->
                            <article class="post type-post format-standard hentry">
                            
                            
                              <!-- .entry-header -->
                              <header class="entry-header">
                                <h1 class="entry-title">{{ $post['title'] }}</h1>
                              </header>
                              <!-- .entry-header -->
                              
                              <!-- .entry-meta -->
                              <div class="entry-meta">
                                    posted
                                    on <a href="#" title="{{ date('H:i a',strtotime($post['created_at'])) }}" rel="bookmark"><time class="entry-date" datetime="{{ $post['created_at'] }}">{{ date('l, d F Y',strtotime($post['created_at'])) }}</time></a>
                                    <span class="by-author"> by <span class="author vcard">
                                    <a class="url fn n" href="#" title="View all posts by ahmetsali" rel="author">admin</a></span></span>
                                    <!--<span class="edit-link"><a class="post-edit-link" href="#" title="Edit Post">Edit</a></span>-->	
                                    
                                    <!-- .share-links -->
                                    <div class="share-links">
                                    	<a>SHARE</a>
                                        
                                        <!-- .share-wrap -->
                                        <div class="share-wrap" style="display: none;">
                                        	
                                            <!-- .facebook-wrap -->
                                            <div class="facebook-wrap">
                                            	
                                                <div id="fb-root"></div>
												<script>(function(d, s, id) {
                                                  var js, fjs = d.getElementsByTagName(s)[0];
                                                  if (d.getElementById(id)) return;
                                                  js = d.createElement(s); js.id = id;
                                                  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                                  fjs.parentNode.insertBefore(js, fjs);
                                                }(document, 'script', 'facebook-jssdk'));</script>
                                                <div class="fb-like" data-send="false" data-layout="button_count" data-width="400" data-show-faces="false" data-colorscheme="light" data-action="like"></div>

                                            </div>
                                            <!-- .facebook-wrap -->
                                            
                                            <!-- .twitter-wrap -->
                                            <div class="twitter-wrap">
                                            	<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                            </div>
                                            <!-- .twitter-wrap -->
                                            
											<!-- .google-wrap -->
                                            <div class="google-wrap">
                                            	<!-- Place this tag where you want the +1 button to render. -->
                                                <div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1394019412081" name="I0_1394019412081" src="https://apis.google.com/u/0/_/+1/fastbutton?usegapi=1&amp;bsv=o&amp;size=medium&amp;origin=file%3A%2F%2F&amp;url=file%3A%2F%2F%2FD%3A%2FWork%2Fkoonema%2Fbloggy%2Fblog-single.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.id.fU77RhHj6Js.O%2Fm%3D__features__%2Fam%3DIQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAItRSTNpcctClpk5NbaoO_Mco5IKwpi4jQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1394019412081&amp;parent=file%3A%2F%2F&amp;pfname=&amp;rpctoken=38438014" data-gapiattached="true"></iframe></div><div class="g-plusone" data-size="medium" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>
                                                
                                                <!-- Place this tag after the last +1 button tag. -->
                                                <script type="text/javascript">
                                                  (function() {
                                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                                    po.src = 'https://apis.google.com/js/plusone.js';
                                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                                  })();
                                                </script>
                                            </div>
                                            <!-- .google-wrap -->
                                            
                                            <!-- .pinterest-wrap -->
                                            <div class="pinterest-wrap">
                                            	<a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemes.pixelwars.org%2Fread%2Fblog-single.html&amp;media=http%3A%2F%2Fthemes.pixelwars.org%2Fread%2Fimages%2Fblog%2Fblog-01.jpg&amp;description=Adaptive%20Vs.%20Responsive%20Layouts%20And%20Optimal%20Form%20Field%20Labels" class="pin-it-button" count-layout="horizontal"><img src="//assets.pinterest.com/images/PinExt.png" alt="Pin It" title="Pin It"></a>
                                            	<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
                                            </div>
                                            <!-- .pinterest-wrap -->
                                            
                                        </div>
                                        <!-- .share-wrap -->
                                        
                                        
                                    </div>	
                                    <!-- .share-links -->
                                    
                                    	
                              </div>
                              <!-- .entry-meta -->
                              
                              <!-- .featured-image -->  
                              <div class="featured-image">
                              	<img src="{{ asset('images/posts/'.$post['image']); }}" alt="{{ $post['image'] }}" title="{{ $post['title'] }}">
                              </div>
                              <!-- .featured-image --> 
                              
                              
                              <!-- .entry-content --> 
                              <div class="entry-content">
 
                                    {{ $post['description'] }}
                                    
                                    <!--<div class="tagline">
                                        <h5> Mostly of our links are with ads to fund our subbing team. We cannot do this kind of stuff without your help so please disable your adblock when visiting our site and we promise you alot of shows coming in your way!</h5>
                                    </div>-->
                                    <hr>
                                     <div class="tagline">
                                        <h5> Sebagian besar link kami mengandung iklan utk membiayai tim sub kami. Kami tidak bisa melakukannya tanpa bantuan kamu, jadi tolong matikan adblock agar dapat terus menikmati tontonan menarik</h5>
                                    </div>
                                    
          
                                    <!-- .project-action -->
                                    <div class="project-action row-fluid">
                                        @if($sub != NULL)
                                        <a href="{{ $sub['url'] }}" class="button big navy d3 button-icon"><i class="icon-download"></i>DOWNLOAD SUB</a>
                                        @endif
                                        @if($vid != NULL)
                                        <a href="{{ $vid['url'] }}" class="button big yellow d3 button-icon"><i class="icon-eye-open"></i>STREAMING</a>
                                        @endif
                                    </div>
                                    <!-- .project-action -->
                                    
                                    
                                    <!-- .related-posts -->
                                    @if($related_posts->count() > 0)
                                    <div class="related-posts">
                                        <h3>RELATED POSTS</h3>
                                        <ol>
                                            @foreach($related_posts as $related)
                                            <li><a href="{{ url('view/'.$related['slugtitle']) }}" title="{{ $related['title'] }}" rel="bookmark">{{ $related['title'] }}</a></li>
                                            @endforeach
                                        </ol>
                                    </div>
                                    @endif
                                    <!-- .related-posts -->
                                
                                
                                
                              </div>
                              <!-- .entry-content -->
                              
                              
                              
                              <!-- .entry-meta -->
                              <footer class="entry-meta">
                                @foreach($keywords as $tag)
                                <a href="#" rel="tag" title="{{ $tag }}">{{ $tag }}</a>
                                @endforeach
                              </footer>
                              <!-- .entry-meta -->
                              
                              
                               
                            </article>
                            <!-- .hentry -->
                            
                            
                            <!-- #comments -->
                            <div id="comments" class="comments-area">
                                <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'koonemacom'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
                            </div>
                            <!-- #comments --> 
                            
                            
                            
                          </div>