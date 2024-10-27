<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(255, 150, 200, 0.8);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .about-container {
            background: linear-gradient(135deg, #ffafbd, #ffc3a0);
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            max-width: 750px;
            width: 100%;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .about-container:hover {
            transform: scale(1.02);
        }

        .author-info {
            background: #fff;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .author-info:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        .author-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid #ffc3a0;
            transition: border-color 0.3s;
        }

        .author-info:hover .author-photo {
            border-color: #ffafbd;
        }

        .author-name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            transition: color 0.3s;
        }

        .author-info:hover .author-name {
            color: #ff6f61;
        }

        .author-email {
            color: #555;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 10px;
            position: relative;
            transition: color 0.3s;
        }

        .author-email::after {
            content: "";
            display: block;
            width: 0;
            height: 2px;
            background: #ff6f61;
            transition: width 0.3s;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .author-email:hover {
            color: #ff6f61;
        }

        .author-email:hover::after {
            width: 100%;
        }

        .author-bio {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            padding: 0 10px;
            transition: color 0.3s;
        }

        .author-info:hover .author-bio {
            color: #444;
        }
    </style>
</head>
<body>
    <div class="about-container">
        <div class="author-info">
            <div class="author-name">Chaitanya</div>
            <a href="chaitanya7025@gmail.com" class="author-email">chaitanya7025@gmail.com</a>
            <p class="author-bio">
                Chaitanya is a passionate web developer with a love for creating interactive and user-friendly applications. With over 5 years of experience, Chaitanya specializes in front-end and back-end development.
            </p>
        </div>

        <div class="author-info">
            <div class="author-name">Guru Praneeth Reddy</div>
            <a href="reddygurupraneethreddy@gmail.com" class="author-email">reddygurupraneethreddy@gmail.com</a>
            <p class="author-bio">
                Guru Praneeth Reddy is a software engineer and a seasoned developer with expertise in cloud computing and DevOps, always eager to explore new technologies that enhance application scalability and resilience.
            </p>
        </div>

        <div class="author-info">
            <div class="author-name">Hemanth Kumar</div>
            <a href="hemanthkumar@gmail.com" class="author-email">hemanthkumar@gmail.com</a>
            <p class="author-bio">
                Hemanth Kumar is a seasoned developer with a background in machine learning and data science, dedicated to building innovative tools that help people work smarter and more efficiently.
            </p>
        </div>

        <div class="author-info">
            <div class="author-name">Sampath Kumar</div>
            <a href="sampathkumar@gmail.com" class="author-email">sampathkumar@gmail.com</a>
            <p class="author-bio">
                Sampath Kumar is a data scientist with a strong focus on predictive analytics and data visualization, constantly striving to uncover insights that drive informed decision-making.
            </p>
        </div>
    </div>
</body>
</html>
