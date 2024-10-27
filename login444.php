<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literacy Times</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");

        * {
            font-family: 'Open Sans', sans-serif;
            box-sizing: border-box;
            color: #333;
            border-color: rgb(234, 134, 234);
            font-size: 100%;
            line-height: 1.5;
        }

        body {
            background-image: url(home.png);
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
        }

        nav {
            --duration: 0.5s;
            --easing: ease-in-out;
            position: relative;
            width: 300px;
            margin: 5px;
            border-color: rgb(234, 134, 234);
            transition: opacity var(--duration) var(--easing), transform var(--duration) var(--easing);
            opacity: 0;
            transform: scaleX(0);
            transform-origin: top left;
            pointer-events: none;
        }

        ol {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            margin: -4px 0 0 0;
        }

        a {
            display: block;
            text-decoration: none;
            background: #fff;
            border-color: rgb(234, 134, 234);
            transform-origin: 0 0;
            transition: transform var(--duration) var(--easing), color var(--duration) var(--easing);
            transition-delay: var(--delay-out);
            border-radius: 4px;
            padding: 1em 1.52em;
            &:hover {
                background: #efefef;
            }
        }

        .sub-menu a {
            font-size: 0.9em;
            color: #666666;
            border-left: 2em solid white;
            padding: 0.75em;
            border-color: rgb(252, 223, 171);
            background: linear-gradient(
                to right,
                #ddd 2px,
                #fff 2px
            );
            &:hover {
                background: linear-gradient(
                    to right,
                    #ddd 2px,
                    #efefef 2px
                );
            }
        }

        header {
            font-weight: 600;
            display: block;
            background: rgb(242, 186, 82);
            transform-origin: 0 0;
            transition: transform var(--duration) var(--easing), color var(--duration) var(--easing);
            transition-delay: var(--delay-out);
            border-radius: 4px;
            padding: 1em 1.52em;
            span {
                border: none;
                background: transparent;
                border-color: rgb(234, 134, 234);
                font-size: 1.5em;
                padding: 0;
                cursor: pointer;
                line-height: 1;
                float: right;
            }
        }

        footer button {
            position: absolute;
            top: 0;
            left: 0;
            border: none;
            border-color: rgb(234, 134, 234);
            padding: calc(1em - 2px);
            width: 100%;
            transform-origin: 0 0;
            transition: transform var(--duration) var(--easing), opacity var(--duration) var(--easing);
            transition-delay: calc(var(--duration) + (.1s * (var(--count) / 2)));
            cursor: pointer;
            outline: none;
            background: #cdcdcd;
            opacity: 0;
        }
        .menu-button {
            font-size: 2ch; /* Increased size */

            position: absolute;
            top: 0;
            left: 1;
            border: 10;
            border-color: rgb(234, 134, 234);
            border-radius: 10%;
            padding: calc(1em - 2px);
            width: 100%;
            transform-origin: 0 0;
            transition: transform var(--duration) var(--easing), opacity var(--duration) var(--easing);
            transition-delay: calc(var(--duration) + (.1s * (var(--count) / 2)));
            cursor: pointer;
            opacity: 1;
            cursor: pointer;
            padding: 1em 1.52em;
        }

        .menu-icon span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: #333;
            border-color: rgb(234, 134, 234);
            margin-bottom: 5px;
            transition: transform var(--duration) var(--easing);
        }
        nav.menu {
    /* ... (existing styles) */
    background-color: rgb(242, 186, 82); /* Background color with some opacity */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Add padding for content spacing */
}


        .opened {
            opacity: 1;
    border-color: rgb(234, 134, 234);
    transform: scaleX(1);
    pointer-events: auto;
    background-color: rgba(255, 255, 255, 0.9);
        }

  
    </style>
</head>
<body>
   <CENTER> <header>IMPACT OF EDUCATION ON ECONOMIC GROWTH</header></CENTER>
    <div class="menu-button" onclick="toggleMenu()">☰</div>
    <nav class="menu closed">
            
                <br>
                <br>
        </span>
        <ol>
            <li class="menu-item"><a href="login444.php">Home</a></li>
            <li class="menu-item"><a href="new2.php">INFORMATION</a></li>
            <li class="menu-item">
                <a href="page11.php">BASIC STATE INFO</a>
                <ol class="sub-menu">
                    <li class="menu-item"><a href="literacyrate.php">LITERACY RATE COMPARISION</a></li>
                    <li class="menu-item"><a href="page1demo1.php">GDP COMPARISION </a></li>
                </ol>
            </li>
            <li class="menu-item">
                <a href="jobs.php">JOB VACANCIES</a>
                <ol class="sub-menu">
                    <li class="menu-item"><a href="index4.php">COMPARISIONS</a></li>
                </ol>
            </li>
            <li class="menu-item"><a href="#0">Contact</a></li>
        </ol>
    
    </nav> 
<br><br><br><br><br>
<h1 style="padding-bottom: 400px;">.</h1>


<script>
    function toggleMenu() {
        var nav = document.querySelector('.menu');
        var isOpen = nav.classList.contains('opened');

        nav.classList.toggle('opened');

        if (isOpen) {
            setTimeout(() => {
                nav.style.opacity = '0';
            }, parseFloat(getComputedStyle(nav).getPropertyValue('--duration')) * 1000);
        } else {
            nav.style.opacity = '1';
        }
    }
</script>
</body>
</html>