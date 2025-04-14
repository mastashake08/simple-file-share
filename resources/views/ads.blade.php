<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J Computer Solutions File Share</title>
    
    <!-- Social Media Share Meta Tags -->
    <meta property="og:title" content="Simple File Share by J Computer Solutions" />
    <meta property="og:description" content="Easily share files with Simple File Share, a fast and secure file-sharing platform." />
    <meta property="og:image" content="https://jcompsolu.com/logo.png" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Simple File Share by J Computer Solutions" />
    <meta name="twitter:description" content="Easily share files with Simple File Share, a fast and secure file-sharing platform." />
    <meta name="twitter:image" content="https://jcompsolu.com/logo.png" />

    <!-- Google AdSense Script -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-7023023584987784", // Replace with your AdSense publisher ID
            enable_page_level_ads: true
        });
    </script>
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "J Computer Solutions LLC",
        "url": "https://jcompsolu.com",
        "logo": "https://jcompsolu.com/logo.png",
        "sameAs": [
            "https://www.facebook.com/jcompsolu",
            "https://www.instagram.com/jcompsolu",
            "https://jcompsolu.com"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-859-402-4863",
            "contactType": "Customer Service"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Jyrone Parker",
        "alternateName": "mastashake08",
        "url": "https://jyroneparker.com",
        "sameAs": [
            "https://github.com/mastashake08",
            "https://x.com/mastashake08",
            "https://www.linkedin.com/in/jyroneparker",
            "https://instagram.com/mastashake08",
            "https://youtube.com/c/jyroneparker"
        ],
        "worksFor": {
            "@type": "Organization",
            "name": "J Computer Solutions LLC"
        }
    }
    </script>
</head>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Redirecting to your file...</h1>
        <p>We appreciate your patience while we show you some ads for 10 seconds.</p>

        <div style="margin: 20px 0; text-align: left;">
            <h2>About Simple File Share</h2>
            <p>
                Simple File Share is a fast and secure platform designed to make file sharing easy for everyone. 
                Whether you need to send large files to a colleague, share documents with a client, or distribute 
                media files to friends, Simple File Share provides a seamless experience.
            </p>
            <h3>How It Works</h3>
            <ul>
                <li>Upload your file using our simple drag-and-drop interface.</li>
                <li>Receive a unique link to share with others.</li>
                <li>Recipients can download the file directly from the link.</li>
            </ul>
            <p>
                Files are stored securely on our servers for up to one week, after which they are automatically deleted 
                to ensure your privacy and security.
            </p>
            <h3>Why Choose Simple File Share?</h3>
            <ul>
                <li>Fast and reliable file uploads and downloads.</li>
                <li>Secure storage with automatic file deletion after one week.</li>
                <li>Completely free to use with no hidden fees.</li>
            </ul>
            <p>
                Simple File Share is proudly developed by <a href="https://jcompsolu.com" target="_blank">J Computer Solutions LLC</a>, 
                a trusted name in software development, and programmed by <a href="https://jyroneparker.com" target="_blank">Jyrone Parker</a>.
            </p>
        </div>

        <!-- Google Ad Section 1 -->
        <div style="margin: 20px 0;">
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-7023023584987784" 
                data-ad-slot="6954511888"               
                data-ad-format="auto"
                data-full-width-responsive="true">
            </ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <!-- Google Ad Section 2 -->
        <div style="margin: 20px 0;">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7023023584987784"
                crossorigin="anonymous"></script>
            <!-- Simple File Share 2 -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-7023023584987784"
                data-ad-slot="8786468306"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <!-- Google Ad Section 3 -->
        <div style="margin: 20px 0;">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7023023584987784"
                crossorigin="anonymous"></script>
            <!-- Simple File Share 3 -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-7023023584987784"
                data-ad-slot="6160304962"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <p>If you are not redirected automatically, click the link below:</p>
        <a href="{{ $shortLink->url }}" style="color: blue; text-decoration: underline;">{{ $shortLink->url }}</a>
    </div>

    <script>
        // Automatically redirect after a delay (e.g., 10 seconds)
        setTimeout(() => {
            window.location.href = "{{ $shortLink->url }}";
        }, 10000);
    </script>
</body>
</html>