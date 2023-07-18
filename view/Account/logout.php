<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: content-box
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #FFDFBA;
        }

        img {
            vertical-align: middle;
            border-radius: 10px;
        }

        /* ขนาดของกรอบที่แสดงรูปภาพ */
        .slideshow-container {
            position: relative;
            margin: auto;
            max-width: 750px;
            border-radius: 10px;
            overflow: visible;
        }

        /* เซ็ตขนาดปุ่มให้เหมาะสม */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 48%;
            width: auto;
            display: block;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 28px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            margin-left: auto;
            margin-right: auto;
        }

        /* เนื่องจากปุ่มnextอยู่ขวามือจึงต้องเซ็ตให้ไปติดขอบของcontainer*/
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* สีตอนชี้ปุ่มลูกศร */
        .prev:hover,
        .next:hover {
            background-color: rgba(255, 190, 50, 0.842);
        }

        /* ปุ่ม dot ข้างล่าง */
        .dot {
            cursor: pointer;
            height: 12px;
            width: 12px;
            margin: 0 2px;
            top: inherit;
            background-color: rgb(160, 160, 160);
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.7s ease;
        }

        .dot:not(:last-child) {
            margin-top: 20px;
            margin-right: 16px;
        }

        .active,
        .dot:hover {
            background-color: #ec9f0e;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 2s;
        }

        @keyframes fade {
            from {
                opacity: .1
            }

            to {
                opacity: 1
            }
        }
    </style>
</head>

<body>

    <div class="slideshow-container">

        <div class="slides fade">
            <img src="dekDintern1.jpg" style="width:100%">
        </div>

        <div class="slides fade">
            <img src="dekDintern2.jpg" style="width:100%">
        </div>

        <div class="slides fade">
            <img src="dekDintern3.jpg" style="width:100%">
        </div>
        <div class="slides fade">
            <img src="dekDintern4.jpg" style="width:100%">
        </div>

        <a class="prev " onclick="actionSlides(-1)">
            < </a>

                <a class="next" onclick="actionSlides(1)"> > </a>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

    </div>


    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        //ลูกศรบวกลบ
        function actionSlides(n) {
            showSlides(slideIndex += n);
        }
        //กดปุ่มข้างล่าง
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        //ฟังก์ชั้นไว้ปรับslides
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("slides");
            let dots = document.getElementsByClassName("dot");
            //ลูกศรกดเกินตัวสุดท้าย ให้แสดงตัวแรก
            if (n > slides.length) {
                slideIndex = 1
            }
            //ลูกศรกดน้อยกว่าตัวแรก ให้แสดงตัวสุดท้าย
            if (n < 1) {
                slideIndex = slides.length
            }
            //ลูปเพื่อที่จะไม่แสดงสักรูป ถ้าเป็นblockรูปจะเพิ่มเรื่อยๆ ถ้าเป็น activeจะแสดงทุกรูป
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            //รีเซ็ตสีของปุ่มจุดข้างล่างภาพเป็นสีเทาทั้งหมด
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            //แสดงภาพที่เลือกมาเป็นแบบบล็อก
            slides[slideIndex - 1].style.display = "block";
            //แสดงปุ่มที่สไลด์อยู่เป็นสีส้ม
            dots[slideIndex - 1].className += " active";
        }
    </script>

</body>

</html>



