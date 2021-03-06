<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/support/css/style.css" type="text/css" />
    <script src="/support/js/main.js" type="text/javascript"></script>
</head>
<body>
    <!-- main container -->
    <div class='main_container'>
        <!-- header -->
        <div class='header'>Header</div>
    
        <!-- mid container - includes main content area and right sidebar -->
        <div class='mid_container'>
    
            <!-- main content area -->
            <div class='main_content_area'>
                // This code will create the module positions for our main content area
<jdoc:include type="modules" name="position-3" style="xhtml" />
<jdoc:include type="message" />
<jdoc:include type="component" />
<jdoc:include type="modules" name="position-2" style="none" />
            </div>
    
            <!-- right sidebar -->
            <div class='right_sidebar'>
// This code will create the module position for our right sidebar
<jdoc:include type="modules" name="position-7" style="well" />
            </div>
            
            <div style='clear:both;'></div>
    
        </div>
    
        <!-- footer -->
        <div class='footer'>
            Footer
        </div>
        
    </div>
</body>
</html>