<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <!-- Basic Page Needs
   ================================================== -->
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="language" content="en" />
 
   <title> Tutorial Laravel 4 Framework </title>
   <meta name="keywords" content="your, awesome, keywords, here" />
   <meta name="author" content="Jon Doe" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Lorem ipsum dolor sit amet" />
 
   <!-- Mobile Specific Metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <!-- CSS Bootstrap core CSS
   ================================================== -->
   <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/jquery-ui-bootstrap.css" />
   <script type="text/javascript" src="../assets/bootstrap/js/jquery.js"></script>
   <script type="text/javascript" src="../assets/bootstrap/js/jquery-ui.min.js"></script>
   <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- นำเข้าไฟล์ header.blade.php -->
    @include("layouts.header")
    <div class="container">
        @yield("content")
    </div>
    <!-- นำเข้าไฟล์ footer.blade.php -->
    @include("layouts.footer")
</body>
</html>