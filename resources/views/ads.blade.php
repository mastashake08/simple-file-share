<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Redirect</title>
    <!-- Google AdSense Script -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-7023023584987784", // Replace with your AdSense publisher ID
            enable_page_level_ads: true
        });
    </script>
</head>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Redirecting to your file...</h1>
        <p>We appreciate your patience while we show you some ads for 10 seconds.</p>

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
        // Automatically redirect after a delay (e.g., 5 seconds)
        setTimeout(() => {
            window.location.href = "{{ $shortLink->url }}";
        }, 10000);
    </script>
</body>
</html>