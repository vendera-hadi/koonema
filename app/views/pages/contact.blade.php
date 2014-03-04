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

                                      @if ($message = Session::get('success'))
                                      <div class="alert success">
                                        <strong>Pesan anda telah dikirim ke admin</strong>
                                      </div>
                                      @endif
                                      
                                      <!-- .contact-form -->
                                      <div class="contact-form contact-page">
                                        
                                        {{ Form::open(array('url'=>'contact','method'=>'post')) }}
                                        
                                            
                                            <!-- enter your e-mail adress -->
                                            
                                            <p>
                                              
                                              {{ Form::label('name', 'Nama Kamu') }}
                                              {{ Form::text('username',Input::old('username'),array('id'=>'name','class'=>'required')) }}
                                              {{ $errors->first('username','<br><small><strong><font color="red">* :message</font></strong></small>') }}
                                            </p>

                                            
                                            <p>
                                              {{ Form::label('email', 'Email Kamu') }}
                                              {{ Form::text('email',Input::old('email'),array('id'=>'email','class'=>'required email')) }}
                                              {{ $errors->first('email','<br><small><strong><font color="red">* :message</font></strong></small>') }}
                                            </p>
                                            
                                            
                                            <p>
                                              {{ Form::label('subject', 'Judul') }}
                                              {{ Form::text('subject',Input::old('subject'),array('id'=>'subject','class'=>'required')) }}
                                              {{ $errors->first('subject','<br><small><strong><font color="red">* :message</font></strong></small>') }}
                                            </p>
                                            
                                            
                                            <p>
                                              {{ Form::label('message', 'Pesan') }}
                                              {{ Form::textarea('message',Input::old('message'),array('id'=>'message','class'=>'required')) }}
                                              {{ $errors->first('message','<br><small><strong><font color="red">* :message</font></strong></small>') }}
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