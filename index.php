<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
	
    
  
    <meta property="og:title" content="tittle one " />
    <meta property="og:type" content="website" />
    <link
      rel="icon"
      type="image/x-icon"
      href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2048px-User_icon_2.svg.png"
    />
    <!--هنا الصوره اللي جنب العنوان -->
    <meta
      property="og:description"
      content="test for description"
    />
    <style>
      body {
         background-image: url(https://a.top4top.io/p_2151lruie1.png);  /*صوره الخلفيه وشيل النجمه والسيلاش  */
        /* background-color: rgba(255, 68, 0, 0.747); */ /*  لون الخلفيه وشيل النجمه والسيلاش   */
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      section {
        margin-left: auto;
        margin-right: auto;
        max-width: 1440px;
        text-align: center;
        margin-top: 50px;
      }
      .container {
        box-shadow: 2px 2px 20px 0px rgb(48 47 47);
        padding: 50px;
        padding-bottom: 100px;
        margin-left: auto;
        margin-right: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.877);
        border-radius: 10px;
        width: 70%;
      }
      .img {
        width: 100px;
        height: 100px;
      }
      .img img {
        max-width: 100%;
        vertical-align: middle;
        width: 90px;
        height: 90px;

        border-radius: 50%;
      }
      .btn {
        text-align: center;
        width: 90%;
      }
      a {
        display: block;
        text-decoration: none;
        background-color: #2b6878;
        border-radius: 20px;
        padding: 15px;
        margin: 10px;
        color: white;
        font-weight: 700;
        font-size: 20px;
        letter-spacing: 2px;
      }
      a:hover {
        /* padding: 20px; */
        border: 3px solid #08d8e4;
        letter-spacing: 3px;
        font-size: 22px;
        margin: 10px;
      }
      #clock {
        display: inline-block;
        padding: 20px;
        color: rgb(189, 5, 5);
        text-align: center;
        width: fit-content;
        font-size: 18px;
        font-weight: 600;
        padding-left: 0;
      }
      .disc {
        color: lightslategray;
        line-height: 1.3;
      }
      @media only screen and (min-width: 700px) {
        .btn {
          width: 60%;
        }
        .disc {
          width: 70%;
        }
      }
      @media only screen and (min-width: 900px) {
        .btn {
          width: 40%;
        }
        .disc {
          width: 60%;
        }
      }
    </style>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="img">
          <img src="https://a.top4top.io/p_2151lruie1.png" alt="" />
          <!-- هنا هتحط لينك الصورة المدوره -->
        </div>
        <div class="disc">
          <!-- هنا هتحط الديسكيبشن اللى فوق -->
          <h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi
            aperiam nostrum fuga obcaecati voluptatibus vitae dolorum ratione
            corporis delectus aut. <br />

            time is : <span id="clock"></span> <br />
            <!-- هنا هتحط الديسكيبشن اللى تحت -->
            Subscribe now to 4 offers to get it.
          </h3>
        </div>
        <!-- هنا الزراير ولينكاتها  -->

        <div class="btn">
          <a href="goole.com"> test 1 </a>
          <a href="goole.com"> test 1 </a>
          <a href="goole.com"> test 1 </a>
		  
		
         
        </div>
      </div>
    </section>
    <script>
      let element = document.getElementById("clock");
      setInterval(function () {
        let date = new Date();
        element.innerHTML = date.toLocaleTimeString();
      }, 1000);
    </script>
  </body>
</html>
