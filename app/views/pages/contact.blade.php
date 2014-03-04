<div class="readable-content row-fluid page">
                                
                                
                                <!-- .hentry -->
                                <article class="page type-page hentry">
                                  
                                  
                                  <!-- .entry-header -->	
                                  <header class="entry-header">
                                    <h1>kontak kami</h1>
                                  </header>
                                  <!-- .entry-header -->
                                  
                                  
                                  
                                  <!-- .entry-content -->
                                  <div class="entry-content">
                                      
                                      
                                      <img src="images/site/profile2.jpg" alt="profile-image">
                                      
                                        
                                      <p class="contact-form-info">Please feel free to contact me about anything.</p>
                                      
                                      <!-- .contact-form -->
                                      <div class="contact-form contact-page">
                                        
                                        {{ Form::open(array('action' => 'Pages@test','method'=>'post')) }}
                                        
                                            
                                            <!-- enter your e-mail adress -->
                                            
                                            <p>
                                              {{ Form::label('name', 'Nama Kamu') }}
                                              {{ Form::text('username','',array('id'=>'name','class'=>'required')) }}
                                            </p>
                                            
                                            <p>
                                              {{ Form::label('email', 'Email Kamu') }}
                                              {{ Form::text('email','',array('id'=>'email','class'=>'required email')) }}
                                            </p>
                                            
                                            <p>
                                              {{ Form::label('subject', 'Judul') }}
                                              {{ Form::text('subject','',array('id'=>'subject','class'=>'required')) }}
                                            </p>
                                            
                                            <p>
                                              {{ Form::label('message', 'Pesan') }}
                                              {{ Form::textarea('message','',array('id'=>'message','class'=>'required')) }}
                                            </p>
                                           
                                            <p>
                                              {{ Form::submit('Kirim') }}
                                              <img class="ajax-loader" src="images/bckg/loader_light.gif" alt="Sending ...">
                                            </p>
                                            
                                          {{ Form::close() }}
                                          
                                      </div>
                                      <!-- .contact-form -->
                                      
                                      
                                  </div>
                                  <!-- .entry-content -->
                                  
                                  
                                </article>
                                <!-- .hentry -->
                                
                                
                                
                                
                              </div>