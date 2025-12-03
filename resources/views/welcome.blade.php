<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
		 <title>{{ config('app.name', 'Free Book') }}</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta name="keywords" content="free books, free ebooks, download books, online library, free PDF books, read books online, book downloads, free novel PDF, digital library, free book templates">
		<meta name="description" content="Download free books and ebooks in PDF format. Explore a vast online library of novels, educational resources, and more. 100% free, no signup required!">


		<!-- Favicon -->
		<link href="img/favicon.ico" rel="icon">

		<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

		<!-- Libraries Stylesheet -->
		<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

		<!-- Customized Bootstrap Stylesheet -->
		<link href="css/style.css" rel="stylesheet">

      
    </head>
    <body>
			@include('page-components.topbar')
			@include('page-components.navbar')
			@include('page-components.newlaunched')
			@include('page-components.product')
			@include('page-components.offer')
			@include('page-components.categories')
			@include('page-components.vendors')
			@include('page-components.subscribe') 
			@include('page-components.feature')
			@include('page-components.footer')
       <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    
    <!-- Template Javascript -->
    <script src="js/main.js"></script> 
	<script>
    $(document).ready(function () {
        const placeholders = [
            "Search for free books...",
            "Find your next favorite author...",
            "Explore genres: fiction, romance, more...",
            "Search by title, author or ISBN...",
            "Discover new arrivals and classics...",
            "Browse trending books today..."
        ];

        let currentIndex = 0;
        let charIndex = 0;
        let typingSpeed = 100; // typing speed in ms
        let delayAfterTyping = 2000; // delay before next text

        function typeWriter() {
            let currentText = placeholders[currentIndex];
            let typedText = currentText.substring(0, charIndex + 1);
            $('#searchBox').attr('placeholder', typedText);
            charIndex++;

            if (charIndex < currentText.length) {
                setTimeout(typeWriter, typingSpeed);
            } else {
                setTimeout(() => {
                    currentIndex = (currentIndex + 1) % placeholders.length;
                    charIndex = 0;
                    typeWriter();
                }, delayAfterTyping);
            }
        }

        typeWriter();
    });
</script>

    </body>
</html>
