<!doctype html>
<html><!-- InstanceBegin template="/Templates/page-full-width.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
@include('includes.head')
</head>


<body>

    <!-- #PAGE -->
    <div id="page" class="hfeed site"> 
      @include('includes.header')
      
      
      
      <!-- #main -->
      <section id="main" class="middle wrapper">
        <div class="row row-fluid">
        
        
        
                
                
                <!-- #primary -->
                <div id="primary" class="site-content">
                    
                    <!-- #content -->
                    <div id="content" role="main">
                        
                        {{ $content }}
                        
                    </div>
                    <!-- #content -->
                    
                </div>
                <!-- #primary -->
                    
                
          
         
         
         </div>
      </section>
      <!-- #main --> 
      
      
      
      
      
      @include('includes.footer')
      
    </div>
    <!-- #PAGE -->
    
    
    
    
    @include('includes.scripts')
    

</body>
<!-- InstanceEnd --></html>
