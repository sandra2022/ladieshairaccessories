<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        
        body {
          font-family: Arial, Helvetica, sans-serif;
          margin: 0;
        }
        
        html {
          box-sizing: border-box;
        }
        
        *, *:before, *:after {
          box-sizing: inherit;
        }
        
        .column {
          float: left;
          width: 33.3%;
          margin-bottom: 16px;
          padding: 0 8px;
        }
        
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          margin: 8px;
        }
        
        .about-section {
          padding: 50px;
          text-align: center;
          background-color: #474e5d;
          color: white;
        }
        
        .container {
          padding: 0 16px;
        }
        
        .container::after, .row::after {
          content: "";
          clear: both;
          display: table;
        }
        
        .title {
          color: grey;
        }
        
        .button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
        }
        
        .button:hover {
          background-color: #555;
        }
        
        @media screen and (max-width: 650px) {
          .column {
            width: 100%;
            display: block;
          }
        }
        </style>
        </head>
        <body>
        
        <div class="about-section">
          <h1>Fashion Atelier</h1>
          <p>"High and low isn't such a novelty thing, it's how young people interpret the life we've been given. It's how we look at luxury brands, it's how we look at heritage brands."</p>
          <p>Today, hair is a multi-billion dollar industry. People spend thousands of dollars per year on hair products and treatments just to look good. They also invest a lot of time washing and styling it every day.</p>
        </div>
        
        <h2 style="text-align:center">Who We Are</h2>
        <div class="row">
          <div class="column">
            <div class="card">
              <img src="https://ak.picdn.net/shutterstock/videos/14846011/thumb/9.jpg" alt="Jane" style="width:100%">
              <div class="container">
                <h2>Our Positions</h2>
               
                <p><i>While our positions are carefully considered and deeply held, there is much room for healthy debate and differing opinions. We hope being clear about our positions is helpful.</i></p>
        
              </div>
            </div>
          </div>
        
          <div class="column">
            <div class="card">
              <img src="data:image/png;base64,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" alt="Mike" style="width:100%">
              <div class="container">
                <h2>Leadership Principles</h2>
               
                <p><i>
                    Our Leadership Principles are more than inspirational wall hangings. The 14 principles guide our discussions and decisions every day.</i></p>
                        <br>
              </div>
            </div>
          </div><br>
          
          <div class="column">
            <div class="card">
              <img src="data:image/jpeg;base64,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" alt="John" style="width:100%">
              <div class="container">
                <h2>Awards And Recognition</h2>
                <p><i>We are honored to be recognized for the work we do on behalf of our customers, employees, and communities every day.</i></p>
              </div>
            </div>
          </div>
        </div>
        <style>
            h1 {text-align: center;}
            p {text-align: center;}
            div {text-align: center;}
            </style>
            </head>
            <body>
            
            <h1>Devices & Services</h1>
            <p><i>
            Every day, we invent on behalf of our customers, partners, and communities. We combine devices and services in new ways to inform, entertain, and connect our customers—in their home or on the go. Our customers inspire us, and they’ve been at the heart of how we invent and evolve our products.</p></i>
            <h1>Atelier's Store</h1>
            <p><i>
                Teams around the world invent on behalf of our customers every day to meet their desire for lower prices, better selection, and convenient services. One way we guarantee a wide selection of products is through the 1.7 million small and medium businesses around the world selling on FAHION ATELIER and offering more options for customers.</p></i>
            <div class="row">
                
            </div>
            
            <style>
                body, html {
                  height: 100%;
                  margin: 0;
                  font-family: Arial, Helvetica, sans-serif;
                }
                
                * {
                  box-sizing: border-box;
                }
                
                .bg-image {
                  /* Full height */
                  height: 50%; 
                  
                  /* Center and scale the image nicely */
                  background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;
                }
                
                /* Images used */
                .img1 { background-image: url("https://media.gettyimages.com/photos/woman-with-creative-hairstyle-picture-id1128708833?k=6&m=1128708833&s=612x612&w=0&h=f34IiixqxMwvZn_ynKLq_T8b-P5JxCswTj5aDMFcQDg="); }
                .img2 { background-image: url("https://media.gettyimages.com/photos/beautiful-woman-on-light-background-picture-id576892388?k=6&m=576892388&s=612x612&w=0&h=x7NKZ5aFpYRBN2gt6GfYv9Odx6hsXxfYBSREUrQFqSs="); }
                .img3 { background-image: url("https://media.gettyimages.com/photos/leonie-hanne-is-seen-wearing-chanel-hair-clip-outside-the-max-mara-picture-id1175774366?k=6&m=1175774366&s=612x612&w=0&h=2VV80CXpb2bdUd9NpcqOQVcyZemVcW0dhuuMOfTCxfg="); }
                .img4 { background-image: url("https://media.gettyimages.com/photos/beautiful-latin-american-teenage-girl-picture-id1195774655?k=6&m=1195774655&s=612x612&w=0&h=E2bsU-g8m_sMWQTChfR6LL6IAhRlW9has_-sUimYELQ="); }
                .img5 { background-image: url("https://media.gettyimages.com/photos/beautiful-woman-teasing-with-a-retro-camera-picture-id504283754?k=6&m=504283754&s=612x612&w=0&h=4GiColVVnNbYLZmzwvurHMXK_K6poaV1HAweEne9PfQ="); }
                .img6 { background-image: url("https://media.gettyimages.com/photos/high-angle-view-of-various-hairpins-on-pink-background-picture-id1190407461?k=6&m=1190407461&s=612x612&w=0&h=xGvKiMVCpmgw7fPos-ym9X4f3e-mtYzvxa2CisaH-6g="); }
                </style>
                </head>
                <body>
                
                <div class="bg-image img1"></div>
                <div class="bg-image img2"></div>
                <div class="bg-image img3"></div>
                <div class="bg-image img4"></div>
                <div class="bg-image img5"></div>
                <div class="bg-image img6"></div>
              
                <p style="color:blue"><b>ABOUT HAIR ACCESSORIES</b></p>
                <p style="color:red"><i><b>
                Life is too short to have boring hair! Cute hair accessories are one of our largest selections we offer at Fashion Atelier. Our assortment is open to all ages with some special attention drawn to our toddler hair accessories. They are ultimately precious with consideration of all reasons why your smallest ones should have cute hair! Playing dress up is the way memories are made for the little ones in your life and there's lots for them here. If your cutie is participating in a bridal party, a play, or other special event, we offer special little girl hair accessories for any occasion. Tween hair accessories are especially curated for super fab hair in all seasons and holidays. From color to glitter, gems to holographic, metallic to light-up, there is no stopping the sweet options we carry in girls hair accessories!</b></i></p>
                <body style="background-color:pink;">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>