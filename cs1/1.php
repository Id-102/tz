<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <!-- <title>First Page</title> -->
    <style>
        body,html{
            background: url('/images/安全.png'); /* 背景图片URL */
            background-size: cover; /* 背景图片覆盖整个元素 */
            background-position: center; /* 背景图片居中显示 */
            background-attachment: fixed; /* 背景图片固定，不随滚动条滚动 */
            }
    </style>
    
    
    <script>
        function redirectToSecondPage() {
            setTimeout(() => {
                window.location.href = 'https://3122251458.github.io/tz/cs1/2.php';
            }, 500); // 0.5秒后跳转到第二个页面
        }
    </script>
</head>
<body onload="redirectToSecondPage()">
 <!--   <h1>Welcome to the First Page!</h1>
    <p>This page will redirect you to the second page after 2 seconds.</p> -->
</body>
</html>
