
Animesh Sarkar <sarkaranimesh05@gmail.com>
4:28 PM (3 hours ago)
to me

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - BCCL</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #333;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        h1 {
            font-size: 3em;
            color: #333;
            position: relative;
            display: inline-block;
            margin: 0;
            animation: hoverEffect 1s infinite alternate;
        }

        h1:hover {
            color: #007BFF;
        }

        header p {
            font-size: 1.2em;
            color: #666;
            margin-top: 10px;
        }

        main {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .content-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .content-section.reverse {
            flex-direction: row-reverse;
        }

        .responsive-image {
            width: 45%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: slideIn 1s ease-in-out;
        }

        .text {
            width: 50%;
            animation: fadeInUp 1s ease-in-out;
        }

        h2 {
            font-size: 2em;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 1em;
            color: #666;
            line-height: 1.6;
        }
        .highlight {
            font-weight: bold;
            color: #007BFF;
            background-color: #f0f8ff;
            padding: 5px;
            border-radius: 5px;
        }

        .divider {
            border-top: 1px solid #ddd;
            margin: 10px 0;
        }

        @media screen and (max-width: 768px) {
            .content-section {
                flex-direction: column;
            }

            .content-section.reverse {
                flex-direction: column;
            }

            .responsive-image,
            .text {
                width: 100%;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes hoverEffect {
            from { transform: translateY(0); }
            to { transform: translateY(-5px); }
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
        <p>Welcome to Bharat Coking Coal Limited (BCCL) - a subsidiary of Coal India Limited</p>
    </header>
    <main>
        <section class="content-section">
            <img src="https://d2uuuneafwcujf.cloudfront.net/images/2020/12/Coal_Mine-scaled.jpg" alt="Our Legacy" class="responsive-image left">
            <div class="text">
                <h2>Our Legacy</h2>
                <p>Founded in January 1972, Bharat Coking Coal Limited (BCCL) is a crucial subsidiary of Coal India Limited, one of the world's largest coal producers. With a rich history spanning over five decades, BCCL has been instrumental in India's coal mining sector, particularly in the production of prime coking coal.</p>
            </div>
        </section>
        <section class="content-section reverse">
            <img src="https://th-thumbnailer.cdn-si-edu.com/aHgrS0w7iL1WrfClNFIwGov8q8w=/fit-in/1072x0/https://tf-cmsv2-photocontest-smithsonianmag-prod-approved.s3.amazonaws.com/c9c8423a-07f2-4234-9e4d-c57730438f98.jpg" alt="Our Mission" class="responsive-image right">
            <div class="text">
                <h2>Our Mission</h2>
                <p>At BCCL, our mission is to excel in coal production through innovative, safe, and sustainable practices. We aim to meet the growing energy needs of the nation while ensuring minimal environmental impact and contributing to the socio-economic development of our mining communities.</p>
            </div>
        </section>
        <section class="content-section">
            <img src="https://news.mongabay.com/wp-content/uploads/sites/20/2017/03/GP01KLH-1200x798.jpeg" alt="Our Core Values" class="responsive-image left">
            <div class="text">
                <h2>Our Core Values</h2>
                <p>Safety: Prioritizing the health and safety of our workforce and communities in all operations.<br>
                   Sustainability: Committing to responsible mining practices that protect the environment.<br>
                   Excellence: Striving for the highest standards in coal mining and operations.<br>
                   Innovation: Embracing advanced technologies to enhance efficiency and reduce environmental impact.<br>
                   Integrity: Upholding transparency, accountability, and ethical practices in all our endeavors.</p>
            </div>
        </section>
        <section class="content-section reverse">
            <img src="https://static.pib.gov.in/WriteReadData/userfiles/image/image001G62L.jpg" alt="Our Contribution" class="responsive-image right">
            <div class="text">
                <h2>Our Contribution to India's Growth</h2>
                <p>As a leading coal producer, BCCL plays a vital role in supporting India's energy requirements and industrial growth. Our high-quality coking coal is essential for steel manufacturing, contributing to the nation's infrastructure and economic development. We are dedicated to powering progress and enhancing the quality of life in our mining regions through community development initiatives.</p>
            </div>
        </section>
        <section class="content-section">
            <img src="https://images.news18.com/ibnlive/uploads/2021/05/1620053311_coal-miner.jpg" alt="Our Vision" class="responsive-image left">
            <div class="text">
                <h2>Our Vision for the Future</h2>
                <p>Looking ahead, BCCL is focused on innovation and sustainability. We are adopting clean technologies, expanding capacity, and promoting renewable energy solutions to support India's transition to a cleaner energy future. We aim to balance economic growth with environmental stewardship for a sustainable tomorrow.</p>
            </div>
        </section>
        <div class="divider"></div>
        <section class="content-section">
            <div class="text">
                <h2>Contact Us</h2>
                <p>We value your input and are here to address your inquiries, suggestions, and concerns. Visit our Contact Us page to get in touch with us.</p>
            </div>
        </section>
        <div class="divider"></div>
        <section class="content-section">
            <div class="text">
                <h2>Join Us on Our Journey</h2>
                <p>BCCL remains dedicated to responsibly harnessing coal resources, driving economic growth, and fostering sustainable development. Thank you for being part of our journey.</p>
                <p class="highlight">For more information, visit our official website or connect with us on social media.</p>
            </div>
        </section>
        <div class="divider"></div>
    </main>
</body>
</html>

