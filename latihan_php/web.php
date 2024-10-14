<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <style>
*{
  font-family:"Poppins", sans-serif ;
  text-decoration: none;
  list-style: none;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
::selection{
  background: #4070f4;
  color: #fff;
}
body{
  background: #111;
  overflow-x: hidden;
}
.header{
  position: fixed;
  top: 0;
  left: 0;
  width: 350px;
  height: 100%;
  background: #1a1a1a;
  padding: 5% 30px;
  text-align: center;
}
.profile img{
  width: 120px;
  height: 120px;
  border-radius: 50%;
  object-fit: cover;
  border: 5px solid #4070f4;
}
.profile h2{
  font-size: 30px;
  color: #fff;
}
.profile p{
  font-size: 18px;
  color: #eee;
}
.header .nav{
  width: 100%;
  margin-top: 30px;
}
.nav ul li a{
  display: block;
  padding: 10px;
  margin: 15px 0;
  background: #333;
  border-radius: 50px;
  color: #fff;
  font-size: 18px;
  transition: 0.5s;
}
.nav ul li a:hover{
  background: #4070f4;
}
.main{
  position: relative;
  height: 100vh;
  width: calc(100%-350px);
  left: 350px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: #fff;
  padding: 10%;
}
.main h3{
  font-size: 25px;
  font-weight: 500;
  color: #eee;
}
.main h1{
  font-size: 50px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.main h1 span{
  color:#4070f4 ;
}
.main p{
  width: 100%;
  max-width: 600px;
}
.main .btn{
  margin-top: 20px;
  width: 150px;
  height: 50px;
  background: #4070f4;
  color: #fff;
  border: none;
  border-radius: 50px;
  font-size: 18px;
  font-weight: 500;
  cursor: pointer;
  transition: 0.5s;
}
.main .btn:hover{
background:#2a55ca ;
}
    </style>
</head>
<body>
 <header class="header open">
    <div class="profile">
<h2>hilmyy</h2>
<p>Junior fullstack developer</p>
    </div>
    <nav class="nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
          <li><a href="#">Education</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
    </nav>
 </header>   
 <section class="main">
      <h3>Hi there!</h3>
      <h1>I'm <span>hilmy</span></h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe,
        voluptates nostrum atque quibusdam suscipit sunt dignissimos rem. Quas,
        dicta eum nobis vel officia voluptatem cumque illum necessitatibus
        doloribus amet fugit? Fugit atque necessitatibus iure nam consectetur
        assumenda amet aperiam nihil. Harum fuga ducimus illum recusandae eos
        libero dolore aut modi.
      </p>
      <button class="btn">Read More</button>
    </section>
  </body>
</body>
</html>